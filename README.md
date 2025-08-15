
# API_de_Tareas
Prueba Técnica: Programador PHP con Laravel 
- API para gestión de tareas, implementado en Laravel con autenticación Sanctum.

## Requisitos
- PHP 8+
- Composer
- MySQL
- Laravel 8 o superior
- Postman (para pruebas)

## Instalación
1. Clonar el repositorio:
  ```
 git clone https://github.com/TU_USUARIO/API_de_Tareas.git
```
2. Entrar a la carpeta del proyecto
```
cd tareas-api
```
3. Instalar dependencias de PHP:
```
composer install
```
4. Copiar el archivo ```.env.example```  a ```.env```:
```
cp .env.example .env
```
(Editar ```.env``` con tus credenciales de MySQL)

5. Generar la clave de la aplicación:
```
php artisan key:generate
```
6. Ejecutar migraciones:
```
php artisan migrate --seed
```
7. Levantar el servidor:
```
php artisan serve
```

## Autenticación con Sanctum
1. Registrar usuario:
- POST  ```/api/auth/register```

2. Iniciar sesión:
- POST  ```/api/auth/login```

3. Cerrar sesión:
- POST  ```/api/auth/logout```

  (Utilizar token Bearer en rutas protegidas)

## Endpoints principales

- GET  ```/api/tareas``` → Listar tareas

- POST  ```/api/tareas``` → Crear tarea 

- GET  ```/api/tareas/{id}``` → Ver detalle

- PUT  ```/api/tareas/{id}``` → Actualizar 

- DELETE  ```/api/tareas/{id}``` → Eliminar 
