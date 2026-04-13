{ **Estudiants — CRUD de Gestión de Alumnos** }

Proyecto desarrollado como práctica de desarrollo web por un estudiante de **19 años** del ciclo de **Desarrollo de Aplicaciones Web (DAW)**. Se trata de una aplicación web funcional construida con **Laravel** que permite gestionar alumnos a través de un panel administrativo completo.

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

{ **¿Qué hace esta aplicación?** }

Es un **CRUD** (Create, Read, Update, Delete) para administrar alumnos. A través de una interfaz sencilla con Bootstrap, el usuario puede:

- Ver el **listado completo** de alumnos registrados en la base de datos
- **Añadir** nuevos alumnos rellenando un formulario validado
- **Ver el detalle** de un alumno individual
- **Editar** los datos de un alumno existente
- **Eliminar** alumnos del sistema

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

{ **Estructura del proyecto** }

El proyecto sigue la arquitectura **MVC (Modelo - Vista - Controlador)** que ofrece Laravel:


{ **Modelo — `Student.php` }
Define la entidad `Student` y su conexión con la tabla `students` de la base de datos. Utiliza el trait `HasFactory` para poder generar datos de prueba con factories.


{ **Controlador — `StudentController.php`** }
Contiene toda la lógica de negocio. Cada método del controlador corresponde a una acción del CRUD:

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

| Método | Acción |
|--------|--------|
| `index()` | Lista todos los alumnos |
| `create()` | Muestra el formulario de nuevo alumno |
| `store()` | Valida y guarda el nuevo alumno en la BD |
| `show()` | Muestra el detalle de un alumno por ID |
| `edit()` | Muestra el formulario de edición |
| `update()` | Valida y actualiza los datos del alumno |
| `destroy()` | Elimina un alumno de la BD |

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------


{ **Vistas — `resources/views/students/`** }

Las vistas están hechas con **Blade** (el motor de plantillas de Laravel) y usan **Bootstrap 5** con iconos de Bootstrap Icons para darle un aspecto limpio y profesional.

- `index.blade.php` — tabla con todos los alumnos y botones de acción (ver, editar, eliminar)
- `create.blade.php` — formulario para dar de alta un alumno
- `show.blade.php` — vista detalle de un alumno
- `edit.blade.php` — formulario pre-rellenado para editar



{ **Rutas — `routes/web.php`** }

Las rutas están definidas manualmente y cubren todos los endpoints necesarios para el CRUD, usando los métodos HTTP correctos (`GET`, `POST`, `PUT`, `DELETE`).



{ **Migración — `student_migration.php`** }
Crea la tabla `students` en la base de datos con los campos:

- `id` — clave primaria autoincremental
- `name` — nombre del alumno
- `email` — correo electrónico
- `address` — dirección postal
- `timestamps` — fechas de creación y actualización automáticas



{ **Seeder y Factory** }
Se incluye un `StudentSeeder` junto a un `StudentFactory` para poblar la base de datos con datos de prueba de forma rápida durante el desarrollo.



{ **Validaciones** }

El formulario de alta y edición valida los datos antes de guardarlos:

- `name` — obligatorio, máximo 10 caracteres
- `email` — obligatorio, formato de email válido
- `address` — obligatorio, entre 10 y 100 caracteres


{ **Internacionalización** }

El proyecto incluye archivos de idioma tanto en **inglés** (`lang/en/`) como en **español** (`lang/es/`) para los mensajes de validación.

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

{ **Tecnologías utilizadas** }

- **PHP 8+**
- **Laravel 11**
- **MySQL** (vía XAMPP / Laragon)
- **Bootstrap 5** + Bootstrap Icons
- **Blade** (motor de plantillas de Laravel)

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

{ **Instalación local** }

```
# 1. Clonar el repositorio
git clone https://github.com/tu-usuario/estudiants.git
cd estudiants

# 2. Instalar dependencias PHP
composer install

# 3. Instalar dependencias JS
npm install

# 4. Configurar el entorno
cp .env.example .env
php artisan key:generate

# 5. Configurar la base de datos en .env y migrar
php artisan migrate

# 6. (Opcional) Poblar con datos de prueba
php artisan db:seed

# 7. Lanzar el servidor
php artisan serve
```

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

{ **Autor** }
Proyecto realizado por un estudiante de 19 años del ciclo formativo de Desarrollo de Aplicaciones Web como práctica de desarrollo en Laravel y el patrón MVC.
