requisitos composer,

ejecutar comando composer install

Crear la base de datos Nombre cic_database, en mysql
el usuario por defecto es root, de lo contrario modificar el archivo .env y registrar el usuario y contraseña propios.

correr el comando php artisan migrate --seed automaticamente crea la tabla en la base de datos y con datos random

luego ejecutar php artisan serve

y luego ya podemos ir a la url generada para ver como lista los datos.
