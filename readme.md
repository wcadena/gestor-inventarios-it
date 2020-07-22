[![BCH compliance](https://bettercodehub.com/edge/badge/wcadena/gestor-inventarios-it?branch=master)](https://bettercodehub.com/)
[![StyleCI](https://github.styleci.io/repos/98135155/shield?branch=master)](https://github.styleci.io/repos/98135155)
[![Build Status](https://travis-ci.org/wcadena/gestor-inventarios-it.svg?branch=master)](https://travis-ci.org/wcadena/gestor-inventarios-it)
# Sistema de Gestión de Inventarios de Activos Fijos con Laravel 5.8

Sistema de gestión de inventarios de Activos Fijos con Laravel 5.8 , proyectado para RestFull, uso de Progressive web application PWA y JAVA
Te invito a que veas la parte del wiki que aumenté:
[Instalación](https://github.com/wcadena/gestor-inventarios-it/wiki/Instalaci%C3%B3n)

En linux puedes usar(Recomiendo Homestead):
  * cp .env.travis .env
  * cp .env.travis .env.testing
  ** aqui pones los datos de tu base de datos, correo y otros
  * sleep 15
  * mysql -e 'create database inventarios_2;'
  * composer self-update
  * composer install --no-interaction
  * php artisan migrate
  * php artisan db:seed

## Modulos existentes

### Usuarios
Administre los usuarios del sistema, con cuatro perfiles:
#### -Registrado
Usuario que entra por primera vez, no tiene acceso a nada
#### -Usuario
Solo puede ver su perfil y los custodios y sus reportes
#### -Administrador
Administra la aplicacion
#### -SYSTEM
Administra valores de la aplicacion de sistema


### Equipos
Administra los activos , CRUD de activos

### Modelos
Administra los modelos

### Movimiento
Administra Movimiento de Activos.

