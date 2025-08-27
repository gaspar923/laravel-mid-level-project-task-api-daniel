# LARAVEL-MID-LEVEL-PROJECT-TASK-API-DANIEL

### Requisitos del sistema

-   **[Laravel](https://laravel.com/docs/12.x)**
-   **[Composer](https://getcomposer.org/download/)**
-   **[Laragon](https://laragon.org/download)**

## Instalación paso a paso (Laravel, Composer, .env, migraciones)

1. Descargar y ejecutar el instalador de Composer.

2. Ejecutar como administrador el siguiente comando en Windows: "Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))"

3. Descargar y ejecutar el instalador de Laragon. Despues ejecutar el apache y mysql.

4. Ejecutar en una terminal al nivel de la carpeta laragon/www el siguiente comando:
   "git clone https://github.com/gaspar923/laravel-mid-level-project-task-api-daniel.git"

5. Ejecutar en la terminal del projecto laragon/www/laravel-mid-level-project-task-api-daniel el siguiente comando: composer install

6. Ejecutar en la misma terminal php artisan migrate

7. Crear una base de datos en el phpMyAdmin de laragon con el nombre de laravel_mid_level_project_task_api_daniel

8. crear archivo .env | modificar DB_DATABASE=laravel_mid_level_project_task_api_daniel
