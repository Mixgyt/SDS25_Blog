# SDS25 Blog - Blog para la Semana de Sistemas 2025

## Descripción del Proyecto

Este proyecto es un blog dedicado a documentar y compartir las experiencias vividas durante la Semana de Sistemas 2025, un evento emblemático organizado por la carrera de Ingeniería de Sistemas Informáticos de la Facultad Multidisciplinaria de Oriente de la Universidad de El Salvador (FMOUES).

Este sistema esta realizado como actividad de la materia **TECNICAS DE PROGRAMACION PARA INTERNET**

Esta proyecto permite ver entradas sobre las actividades realizadas durante el evento, que se llevó a cabo del 13 al 17 de octubre de 2025, incluyendo ponencias especializadas, talleres prácticos, competencias deportivas, eventos culturales y momentos de convivencia.

## Arquitectura del Proyecto

El proyecto está desarrollado utilizando el patrón de diseño MVC (Model-View-Controller) en PHP, con la siguiente estructura:

### Estructura de Directorios
```
sds25_blog/
├── mvc_clase/
│   ├── app/
│   │   ├── controllers/
│   │   │   ├── Controller.php
│   │   │   ├── InicioController.php
│   │   │   └── PostController.php
│   │   ├── models/
│   │   │   └── UsuariosModel.php
│   │   └── views/
│   │       ├── components/
│   │       ├── Body.php
│   │       ├── DiaCincoView.php
│   │       ├── DiaCuatroView.php
│   │       ├── DiaDosView.php
│   │       ├── DiaTresView.php
│   │       ├── DiaUnoView.php
│   │       ├── InformacionView.php
│   │       ├── InicioView.php
│   │       └── RegistroView.php
│   ├── lib/
│   │   ├── Database.php
│   │   └── Route.php
│   ├── public/
│   │   ├── css/
│   │   ├── images/
│   │   ├── js/
│   │   ├── .htaccess
│   │   └── index.php
│   ├── routes/
│   │   └── web.php
│   ├── autoloader.php
│   ├── .gitignore
│   ├── docker-compose.yml
│   ├── dockerfile
│   └── init.sql
```

## Tecnologías Utilizadas

- PHP 7.4+
- MySQL/MariaDB
- Docker y Docker Compose
- HTML5, CSS3, JavaScript
- Patrón MVC personalizado

## Requisitos Previos

- Docker instalado en el sistema
- Docker Compose instalado
- Puerto 8081 disponible para el servidor web
- Puerto 3306 disponible para la base de datos

## Instalación y Configuración

### 1. Clonar el repositorio
```bash
git clone <url-del-repositorio>
cd sds25_blog
```

### 2. Configurar las variables de entorno

El proyecto utiliza Docker con la siguiente configuración predeterminada:
- Puerto web: 8081
- Puerto base de datos: 3306
- Base de datos: definida en init.sql

### 3. Iniciar el proyecto con Docker
```bash
docker-compose up -d
```

Este comando iniciará los contenedores necesarios:
- Contenedor de aplicación PHP
- Contenedor de base de datos MySQL/MariaDB

### 4. Verificar que los contenedores estén corriendo
```bash
docker-compose ps
```

### 5. Acceder a la aplicación

Abrir el navegador y acceder a:
```
http://localhost:8081
```

## Comandos Útiles de Docker

### Detener los contenedores
```bash
docker-compose down
```

### Ver logs de los contenedores
```bash
docker-compose logs -f
```

### Reconstruir los contenedores
```bash
docker-compose up -d --build
```

### Acceder al contenedor de la aplicación
```bash
docker-compose exec app bash
```

### Acceder al contenedor de la base de datos
```bash
docker-compose exec db mysql -u root -p
```

## Características del Sistema

### Secciones del Blog

- Inicio: Vista principal con información sobre la Semana de Sistemas 2025
- Blog: Listado de todas las entradas del blog organizadas por días
- Día 1: Inauguración y ponencias sobre Bitcoin y trabajo del programador
- Día 2: Actividades virtuales debido a condiciones climáticas
- Día 3: Torneo de fútbol (evento cancelado por lluvia)
- Día 4: Proyectos, talleres y comida de pupusas
- Día 5: Clausura del evento con premiaciones y fiesta nocturna
- Mi Información: Sección de información del usuario
- Registro: Sistema de registro de usuarios

### Funcionalidades

- Gestión de publicaciones del blog
- Visualización de entradas por días
- Sistema de registro de usuarios
- Navegación intuitiva entre secciones
- Diseño responsivo

## Estructura de Base de Datos

La base de datos se inicializa automáticamente con el archivo `init.sql` al levantar los contenedores por primera vez.

## Desarrollo

### Añadir nuevas rutas

Las rutas se definen en `routes/web.php`

### Crear nuevos controladores

Los controladores se ubican en `app/controllers/` y deben extender de `Controller.php`

### Crear nuevos modelos

Los modelos se ubican en `app/models/` y utilizan la clase `Database.php` para conexiones

### Crear nuevas vistas

Las vistas se ubican en `app/views/` y pueden utilizar componentes de `app/views/components/`

## Extra

Este proyecto fue desarrollado como parte de las actividades académicas de la Facultad Multidisciplinaria de Oriente, Universidad de El Salvador.