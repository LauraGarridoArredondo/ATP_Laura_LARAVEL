# Proyecto ATP

Este es un proyecto desarrollado con Laravel que proporciona una plataforma para gestionar tenistas y torneos de ATP.

## Estado del Proyecto

- Este proyecto está actualmente en desarrollo activo.

## Colaboradores del proyecto
- Laura Garrido Arredondo

## Requisitos

- PHP >= 7.4
- Composer
- Laravel >= 8.x
- Docker

## Instalación

1. Clona este repositorio en tu máquina local:

```bash
git clone https://github.com/Alonso2002-jpg/Project-ATP-Laravel.git
```
2. Instala las dependencias del proyecto usando Composer:

```bash
cd laravel-ATP
composer install
```
3. Copia el archivo de configuración .env.example y renómbralo a .env:

```bash
cp .env.example .env
```
4.Configura tu base de datos en el archivo .env y ejecuta las migraciones:

```bash
php artisan migrate
```
5.Inicia el servidor local:

```bash
php artisan serve
```
6.Visita http://localhost:8000 en tu navegador para ver la aplicación en funcionamiento o abre el puerto dentro de Docker, mostrándose como el puerto '80:80'.

## Uso

- Regístrate como usuario para acceder a todas las funcionalidades.
- Inicia sesión en tu cuenta para comenzar a gestionar los tenistas y torneos.
- Agrega nuevos tenistas y torneos, edita la información existente y elimina registros no deseados.

## Estructura de Directorios

- **app/**: Contiene la lógica de la aplicación.
- **bootstrap/**: Archivos de inicio de la aplicación.
- **config/**: Archivos de configuración.
- **database/**: Migraciones y semillas de la base de datos.
- **public/**: Archivos públicos accesibles desde el navegador.
- **resources/**: Vistas, archivos de idioma y recursos adicionales.
- **routes/**: Rutas de la aplicación.
- **storage/**: Archivos generados por la aplicación.
- **tests/**: Pruebas automatizadas para la web y endpoints del sistema de ATP.

## Tabla de Funciones Básicas del Sistema de ATP

### Tenistas

| Ruta                                      | Controlador          | Método     | Descripción                                                                   | Middleware           |
|-------------------------------------------|----------------------|------------|-------------------------------------------------------------------------------|----------------------|
| /tenistas                                 | TenistasController   | GET        | Muestra una lista de todos los tenistas.                                      | auth, admin          |
| /tenistas/create                          | TenistasController   | GET        | Muestra el formulario para crear un nuevo tenista.                            | auth, admin          |
| /tenistas                                 | TenistasController   | POST       | Guarda un nuevo tenista en la base de datos.                                  | auth, admin          |
| /tenistas/{tenista}                       | TenistasController   | GET        | Muestra los detalles de un tenista específico.                                |                      |
| /tenistas/{tenista}/edit                  | TenistasController   | GET        | Muestra el formulario para editar un tenista existente.                       | auth, admin          |
| /tenistas/{tenista}                       | TenistasController   | PUT/PATCH  | Actualiza la información de un tenista en la base de datos.                   | auth, admin          |
| /tenistas/{tenista}                       | TenistasController   | DELETE     | Elimina un tenista de la base de datos.                                       | auth, admin          |
| /tenistas/{tenista}/edit-image            | TenistasController   | GET        | Muestra el formulario para editar la imagen de un tenista.                    | auth, admin          |
| /tenistas/{tenista}/edit-image            | TenistasController   | PATCH      | Actualiza la imagen de un tenista en la base de datos.                        | auth, admin          |

### Torneos

| Ruta                                      | Controlador          | Método     | Descripción                                                                   | Middleware           |
|-------------------------------------------|----------------------|------------|-------------------------------------------------------------------------------|----------------------|
| /torneos                                  | TorneosController    | GET        | Muestra una lista de todos los torneos.                                       | auth, admin          |
| /torneos/create                           | TorneosController    | GET        | Muestra el formulario para crear un nuevo torneo.                             | auth, admin          |
| /torneos                                  | TorneosController    | POST       | Guarda un nuevo torneo en la base de datos.                                   | auth, admin          |
| /torneos/{torneo}                         | TorneosController    | GET        | Muestra los detalles de un torneo específico.                                 |                      |
| /torneos/{torneo}/edit                    | TorneosController    | GET        | Muestra el formulario para editar un torneo existente.                        | auth, admin          |
| /torneos/{torneo}                         | TorneosController    | PUT/PATCH  | Actualiza la información de un torneo en la base de datos.                    | auth, admin          |
| /torneos/{torneo}                         | TorneosController    | DELETE     | Elimina un torneo de la base de datos.                                        | auth, admin          |
| /torneos/{torneo}/edit-image              | TorneosController    | GET        | Muestra el formulario para editar la imagen de un torneo.                     | auth, admin          |
| /torneos/{torneo}/edit-image              | TorneosController    | PATCH      | Actualiza la imagen de un torneo en la base de datos.                         | auth, admin          |

## ¿Qué hace nuestro Sistema de ATP?

### Tenistas

Una de las principales funcionalidades de nuestro sistema de gestión de tenistas es proporcionar una vista completa y detallada de cada jugador. Desde su nombre y biografía hasta su ranking y estadísticas, el sistema ofrece información clara y concisa para ayudar a los administradores y fanáticos a tomar decisiones informadas.

Además de la visualización de detalles, el sistema permite a los administradores realizar acciones como editar, actualizar o eliminar un tenista según sea necesario. Con funciones de edición de fácil acceso, los administradores pueden mantener la información de los tenistas actualizada y precisa.

La gestión eficiente de la información de los tenistas garantiza la integridad y precisión de los datos almacenados, facilitando la actualización y mantenimiento de la base de datos de jugadores.

### Torneos

La gestión de torneos es otra funcionalidad clave de nuestro sistema. Los administradores pueden crear, editar y eliminar torneos, así como ver detalles específicos de cada evento.

El sistema proporciona una lista organizada de todos los torneos, permitiendo a los usuarios explorar y descubrir fácilmente diferentes eventos.

Con formularios intuitivos y opciones de edición accesibles, los administradores pueden personalizar y mantener la información de los torneos de manera eficiente y sin complicaciones.

Los detalles completos y descriptivos de cada torneo, incluyendo su nombre, ubicación y fechas, ayudan a los usuarios a comprender mejor cada evento y tomar decisiones informadas sobre su participación.

## Licencia

- Este proyecto está bajo la Licencia Creative Commons de Laura Garrido Arredondo.

## Contacto

- Para preguntas, comentarios o sugerencias, por favor contáctanos en nuestro repositorio de GitHub: [Proyecto ATP](https://github.com/Alonso2002-jpg/Project-ATP-Laravel)

