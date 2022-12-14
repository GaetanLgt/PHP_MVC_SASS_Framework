<?php


namespace App\Core\Db;


use App\Core\Application;

class Database
{
    public \PDO $pdo;

    /**
     * Database constructor
     * @param array $config
     */
    public function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';
        $this->pdo = new \PDO($dsn, $user, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function applyMigrations()
    {
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrantions();

        $newMigrations = [];
        $files = scandir(Application::$ROOT_DIR.'/migrations');
        $toApplyMigrations = array_diff($files, $appliedMigrations);

        foreach ($toApplyMigrations as $migration){
            if($migration === '.' || $migration === '..') {
                continue;
            }

            require_once Application::$ROOT_DIR.'/migrations/'.$migration;
            $className = pathinfo($migration, PATHINFO_FILENAME);
            $instance = new $className();
            $this->log("Applying migration $migration ...");
            $instance->up();
            $this->log("Applied migration $migration ! ");
            $newMigrations[] = $migration;
        }

        if(!empty($newMigrations)){
            $this->saveMigrations($newMigrations);
        } else {
            $this->log("All migrations are applied ! ");
        }
    }

    public function createMigrationsTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        )   ENGINE=INNODB;");
    }

    private function getAppliedMigrantions()
    {
        $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN);


    }

    private function saveMigrations(array $migrations)
    {

        $str = implode(",",array_map(fn($m) => "('$m')",$migrations));

        $statement =  $this->pdo->prepare("INSERT INTO migrations (migration) VALUE
            $str
            ");
        $statement->execute();
    }

    protected function log($message)
    {
        echo '['.date('d-m-Y H:i:s').'] =-> '. $message . PHP_EOL ;
    }

    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }
}
