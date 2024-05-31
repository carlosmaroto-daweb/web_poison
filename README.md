# Poison

¡Bienvenido a Poison, donde la creatividad y la originalidad se combinan para ofrecerte una experiencia única en la web!

## Demostración

Explora nuestra plataforma ahora mismo y descubre el encanto de Poison. Visita nuestra demostración en vivo [aquí](https://www.carlosmaroto-daweb.com/poison/).

## Acceso al Admin Área

Para acceder al admin área de WordPress, dirígete a: [phpMyAdmin](https://www.carlosmaroto-daweb.com/poison/wp-admin/).

- **Usuario Admin**: admin
- **Contraseña**: admin

## Acceso a la Base de Datos

Para acceder a la base de datos a través de phpMyAdmin, dirígete a: [phpMyAdmin](https://www.carlosmaroto-daweb.com/poison/phpmyadmin/).

- **Usuario Admin**: admin
- **Contraseña**: admin

### Tecnologías Utilizadas

- WordPress
- Creación Tema WordPress
- Uso de plugin Advanced Custom Fields
- HTML
- CSS
- JavaScript
- AJAX
- MySQL
- phpMyAdmin
- Docker para contenerización
- Docker Compose
- Implementación continua y entrega continua (CI/CD) con GitHub Actions
- Proxy inverso Nginx
- Uso de EC2 de AWS para alojamiento

## Descripción

Poison es un ejemplo de cómo desarrollar un tema web desde cero utilizando únicamente HTML, CSS y JavaScript. Posteriormente, este tema ha sido adaptado para WordPress, permitiendo una gestión más fácil y flexible del contenido.

Se han creado entradas para la sección de tarjetas en la página principal, ofreciendo una experiencia visualmente atractiva y funcional para los usuarios.

El uso del plugin Advanced Custom Fields ha facilitado la personalización del contenido del tema, permitiendo modificar los valores predeterminados desde el área de administración de WordPress.

## Características Principales

- **Diseño Original**: El tema de Poison ha sido diseñado desde cero, priorizando la originalidad y la creatividad en cada detalle.
- **Compatibilidad con WordPress**: Aunque inicialmente desarrollado como un tema independiente, Poison se ha adaptado para ser compatible con WordPress, permitiendo una gestión más eficiente del contenido.
- **Ajuste Masonry**: Se ha implementado un ajuste tipo masonry en las tarjetas de los post, proporcionando una disposición dinámica y atractiva del contenido. Además, se utilizan llamadas AJAX para cargar más entradas sin necesidad de recargar la página.

## Estructura de Archivos

- **dump/**: Carpeta que contiene archivos SQL como copia de seguridad de los datos de la base de datos.
- **wordpress_files/**: Directorio principal que contiene todos los archivos y carpetas necesarios para el correcto uso de WordPress.
  - **wp-content/themes/poison**: Carpeta que contiene el tema propio Poison.
- **.github/workflows/**: Directorio que contiene los flujos de trabajo de GitHub Actions.
- **docker-compose.yml**: Archivo YAML que define la configuración para desplegar el contenedor en local.
- **Dockerfile_db**: Archivo que define la configuración para crear la imagen de MySQL con los archivos de copia de seguridad.
- **Dockerfile_wordpress**: Archivo que define la configuración para crear la imagen de Wordpress incluyendo los archivos de la carpeta wordpress_files.

## Autor

- Desarrollador: [Carlos Maroto](https://github.com/carlosmaroto-daweb)

## Mi web

¿Quieres ver más proyectos? Visita mi página web [aquí](https://www.carlosmaroto-daweb.com).
