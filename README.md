<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="left">
<a href="https://github.com/sergiomonts/Sprint4_Equip2_Projecte-Global.git">Aquest projecte està emmagatzemat en aquest repositori</a>
</p>

## INICIA EL PROJECTE PER PRIMERA VEGADA.

<p align="left">
#1 Duplicar el fitxer .env.example i cambiar el nom a .env
#2 Configurar credencials base de dades
#3 Fer Composer Install (Nunca composer update)
#4 Fer npm Install
#5 Per ficar en funcionament el projecte docker-compose up -d
#6 Fer la comanda npm run dev


</p>

## Sobre la instal·lació

<p align="left">
<a href="https://www.youtube.com/watch?v=i0LOihS_RDk">Per instal·lar laravel Sail amb docker s'ha utilitzat aquesta guía.</a>
</p>

## Generar LARAVEL KEY en fitxer .env

<p align="left">
Generar LARAVEL KEY PROJECT
<br>
<a href="https://stillat.com/blog/2016/12/07/laravel-artisan-key-command-the-keygenerate-command">Web amb explicació.</a>
<br>
<p>comanda: php artisan key:generate</p>
</p>

## Solució Problemes Composer Install

<p align="left">
Versió desactualitzada de composer.
<br>
<a href="https://www.codifica.me/actualizar-composer-a-composer-2-ubuntu/">Actualitzar composer a composer 2 en UBUNTU.</a>
<br>
Curl is missing from your system
<br>
<a href="https://websolutionstuff.com/post/require-ext-curl-is-missing-from-your-system-ubuntu">Afegir php-curl</a>
<br>
Curl is missing from your system
<br>
<a href="https://websolutionstuff.com/post/require-ext-curl-is-missing-from-your-system-ubuntu">Invalid Group id sail</a>
</p>

## Solució Problemes Docker Compose Up

<h1>## ERROR INVALID WWWGROUP ID</h1>
<p align="left">
Afegir aquestes linies al fitxer .env
<br>
WWWGROUP=1000
WWWUSER=1000
<br>
<a href="https://stackoverflow.com/questions/67224488/laravel-sail-wont-build-on-ubuntu-20-04-groupadd-invalid-group-id-sail">Invalid Group id sail</a>
</p>

## Solució Problemes socket 

<h1>## Could not create Unix socket lock file</h1>
<p align="left">
Error response from daemon: driver failed programming external connectivity on endpoint failed: port is already allocated<br>
<br>
<a href="https://dejuniorasenior.com/problema-con-conexion-a-base-de-datos-en-laravel-sail/">Solve problen Unix socket lock file</a>
</p>


## Solució errors migracions o connection refused en la web

<h1>## ERROR MIGRACIÓ</h1>
<p align="left">
Modificar aquesta linia del fitxer .env
<br>
DB_HOST=127.0.0.1
<br>
</p>

<h1>## ERROR CONNECTION REFUSED</h1>
<p align="left">
Modificar aquesta linia del fitxer .env
<br>
DB_HOST=mysql
<br>
</p>

<h1>## SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo for mysql failed: Temporary failure in name resolution (SQL: SHOW FULL TABLES WHERE table_type = 'BASE TABLE')</h1>

<p align="left">
UBUNTU
docker-compose down -v (borrar la carpeta /volumes)<br>

docker-compose up -d (arrancar docker)<br>

php artisan config:cache (borra cache)<br>

php artisan migrate:fresh --seed (fer la migració)<br>

npm install (tornar a instalar npm)<br>

composer install (tornar a instalar composer)
<br>
DB_HOST=127.0.0.1
<br>
</p>


