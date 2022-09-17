# PHP SASS RELOAD MODULES
## First step : download

- download folder & extract
- in the folder:

```` 
npm i
````

## Second step : run server

- first terminal
````
npm run start
````
- second terminal
````
npm run watch
````
- third terminal
````
php -S localhost:7000
````

Your project run @:
-
http://localhost:7000



In your page you just must have :

````
<script src="http://localhost:8080/bundle.js"></script>
```` 

reload @save 
-----

Folder Structure
==


    |- /assets
    |   |- /img
    |   |- /js
    |   |- /sass
    |   |- bundle.js
    |   |- index.js
    |
    |- /node_modules
    |
    |- index.php/html
    |
    |- webpack.config.js
    |- package.json


Enjoy your development with hot-reload and sass-complier :) 
