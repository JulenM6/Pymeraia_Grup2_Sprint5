<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="left">
<a href="https://github.com/sergiomonts/Sprint4_Equip2_Projecte-Global.git">Aquest projecte està emmagatzemat en aquest repositori</a>
</p>

## INICIA EL PROJECTE PER PRIMERA VEGADA UBUNTU.

<p align="left">
#1 Duplicar el fitxer .env.example i cambiar el nom a .env
<br>
#2 Configurar credencials base de dades
<br>
#3 Fer Composer Install (Nunca composer update)
<br>
#4 Fer npm Install
<br>
#5 Per ficar en funcionament el projecte docker-compose up -d
<br>
#6 Fer la comanda npm run dev
</p>

## INICIA EL PROJECTE PER PRIMERA VEGADA WINDOWS.
<p align="left">
#1 Duplicar el fitxer .env.example i cambiar el nom a .env
<br>
#2 Configurar credencials base de dades
<br>
#3 Fer Composer Install (Nunca composer update)
<br>
#4 Fer npm Install
<br>
#5 Instalar WSL 2 en docker y ubuntu 20.04 en microsoft store
<br>
#6 Per ficar en funcionament el projecte executar en la terminal de ubuntu dins del projecte sail up -d
<br>
#7 Fer la comanda npm run dev
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
