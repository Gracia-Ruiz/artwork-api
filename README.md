# API realizada en Laravel 8 para pintar y editar obras de arte

## Motivos para usar Laravel a la hora de realizar la API

**Laravel** es actualmente uno de los frameworks más usados escritos en **PHP**. Su patrón de diseño **MVC** y su sintaxis elegante gracias al motor de plantillas **BLADE**, lo hacen un framework sencillo de usar.
Además de que su sencilla conexión y comunicación con un **DBMS**, y su facilidad para integrarse con la parte front-end, lo hacen excelente. Es un framework **progresivo**, por tanto, es ideal para desarrolladores que están empezando como para desarrolladores senior.
Si quieres profundizar sobre Laravel, ve a su [documentation](https://laravel.com/docs) y también puedes ver sus vídeo-tutoriales en [Laracasts](https://laracasts.com).


## Requisitos para usar esta API

- Tener instalado la versión **PHP 8.0.2** o superior.
- Tener instalado el gestor de paquetes **Composer**.
- Si usas windows, deberás habilitar una serie de extensiones en tu archivo **php.ini**. Para empezar, seguro que vas a necesitar habilitar(quitando el " ; "):
1. PDO PHP Extension
2. Fileinfo PHP Extension
3. JSON PHP Extension
**Si hay alguna extensión no mencionada, laravel arrojará un error y te dirá que extensión necesitas habilitar**.
- Tener instalado **mysql** para la persistencia de los datos.
- Para ejecutar el proyecto, usamos el web server local que trae por defecto PHP, usando el puerto 8000. Para abrir este puerto con laravel, simplemente usamos el comando **php artisan serve**.
- Para probarla, puedes usar **POSTMAN**, abriendo el servidor local (cphp artisan serve) y en postman indicando las rutas que se encuentran en routes/api.php, dentro del proyecto.
- Hay un archivo llamado **response.json** que contiene el dato de dos obras.


## Como se ha creado este proyecto.

1. Se ha usado el modelo (Artwork) para comunicarnos con el DB.
2. La validation, se ha realizado en el controller ArtworkController.
3. Se ha usado postman para verificar y hacer test de la CRUD.
4. Para guardar los datos, se ha usado el método save(). 

### Nota aclaratoria:
* Podríamos haber usado el método mass asigment, las resource route o la request validation para obtener un código más limpio, compacto y eficiente, pero de esta forma, el código es más fácil de entender.