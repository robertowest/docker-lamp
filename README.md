# Creación de contenedores DOCKER asociados

La idea es crear un contenedor LAMP (Linux, Apache, MySQL, Php), pero con imagenes separadas para poder utilizarlas en otros contenedores si es necesario.

En este proyecto, descargaré las imágenes _alpine_ y las uniré para poder utilizarlas como un único contenedor.


## Comenzando 🚀

Doy por hecho que saben utilizar github y docker, por lo que no documentaré los procesos para la puesta en funcionamiento.

Solo es necesario obtener el repositorio y ejecutar el comando `docker-compose up`


### Pre-requisitos 📋

Tener instalado
* git
* docker


### Instalación 🔧

```
git clone https://github.com/robertowest/docker-lamp.git
docker-compose up
```

Solo prestar atención al volumen que utilizo para las bases de datos de **MariaBD**, como es un contenedor que ya tengo creado, utilizo el volumen local que ya tengo definido. 

`$HOME/Docker/mariadb/data:/var/lib/mysql`


## Ejecutando las pruebas ⚙️

Una vez terminado el proceso de contrucción, desde nuestro navegador llamamos a la página `http://localhost:8080/`

O ejecutamos el comando `curl localhost:8080` desde la línea de comando, lo cual debería devolver este resultado:

```text
Hola colega!
Intentando conexión MySQL desde php...
Conectado a MySQL con éxito!
```
