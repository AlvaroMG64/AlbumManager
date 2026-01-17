# CRUD de Álbumes de Música en PHP usando MVC

Este proyecto consiste en una aplicación web desarrollada en PHP que implementa un CRUD (Create, Read, Update, Delete) siguiendo el patrón de arquitectura MVC (Modelo–Vista–Controlador). La aplicación permite gestionar álbumes de música almacenados en una base de datos MySQL. Para la conexión con la base de datos se utiliza PDO y para el diseño de la interfaz se emplea Bootstrap 5, garantizando una correcta visualización en distintos dispositivos.

El proyecto se ha desarrollado como práctica académica y está preparado para poder integrarse posteriormente con un sistema de autenticación de usuarios.

---

## Funcionalidades

La aplicación permite realizar las siguientes operaciones:

- Crear nuevos álbumes de música
- Consultar el listado completo de álbumes
- Editar la información de un álbum existente
- Eliminar álbumes de la base de datos
- Validar los formularios en el lado cliente
- Sanitizar los datos recibidos en el lado servidor
- Mostrar visualmente si un álbum contiene contenido explícito
- Mostrar una interfaz responsive mediante Bootstrap

---

## Tecnologías utilizadas

- PHP
- MySQL
- PDO
- phpMyAdmin
- HTML5
- CSS3
- Bootstrap 5
- JavaScript

---

## Estructura del proyecto

El proyecto está organizado siguiendo el patrón MVC y se distribuye en las siguientes carpetas y archivos:

- config  
  Contiene el archivo Database.php, encargado de establecer la conexión con la base de datos mediante PDO.

- controllers  
  Contiene el archivo AlbumController.php, que gestiona las peticiones del usuario y coordina la comunicación entre el modelo y las vistas.

- models  
  Contiene el archivo Album.php, que representa la tabla albumes y encapsula toda la lógica de acceso a datos.

- views  
  Contiene las vistas de la aplicación:
  - listar.php, que muestra el listado de álbumes
  - crear.php, que contiene el formulario para añadir un nuevo álbum
  - editar.php, que permite modificar un álbum existente

- sql  
  Contiene el archivo albumes.sql, con la estructura de la tabla y datos de ejemplo.

- index.php  
  Archivo principal que actúa como enrutador de la aplicación.

- README.md  
  Documento de descripción del proyecto.

---

## Base de datos

La aplicación utiliza la base de datos llamada login-php. Dentro de esta base de datos se encuentra la tabla usuarios, con la información de los usuarios, y la tabla albumes, que almacena la información de cada álbum musical.

La tabla usuarios incluye los siguientes campos:

- **coduser** → Clave primaria autoincremental  
- **idusuario** → Nombre de usuario único  
- **password** → Contraseña almacenada mediante hash seguro  
- **nombre** → Nombre del usuario  
- **apellidos** → Apellidos del usuario  
- **admitido** → Campo booleano (TINYINT) que indica si el usuario está admitido  

En este proyecto, el campo **admitido** siempre vale `1`, aunque se mantiene para futuras prácticas donde se requerirá control de acceso adicional.

La tabla albumes incluye los siguientes campos:

- idAlbum: identificador del álbum, clave primaria y autoincremental
- titulo: título del álbum
- artista: nombre del artista o grupo
- genero: género musical
- fecha_lanzamiento: fecha de lanzamiento del álbum
- num_canciones: número total de canciones
- es_explicit: indica si el contenido es explícito (valor booleano)

---

## Importación de la base de datos con phpMyAdmin

Para importar la base de datos se deben seguir los siguientes pasos:

1. Acceder a phpMyAdmin desde el navegador.
2. Seleccionar la base de datos login-php.
3. Pulsar sobre la opción Importar.
4. Seleccionar el archivo albumes.sql ubicado en la carpeta sql del proyecto.
5. Ejecutar la importación.

Tras este proceso, la tabla albumes quedará creada con varios registros de ejemplo.

---

## Configuración de la conexión

La conexión a la base de datos se configura en el archivo Database.php. Por defecto, los parámetros utilizados son localhost como servidor, login-php como nombre de la base de datos, root como usuario y una contraseña vacía. En algunos entornos como MAMP, la contraseña puede ser root.

La conexión se realiza mediante PDO y se controla la posibilidad de fallo devolviendo un objeto PDO o null.

---

## Ejecución del proyecto

Para ejecutar la aplicación se debe copiar la carpeta del proyecto dentro del directorio htdocs del servidor local. Una vez iniciado Apache y MySQL, se puede acceder a la aplicación desde el navegador introduciendo la ruta correspondiente al archivo index.php.

---

## Arquitectura MVC

El modelo se encarga de gestionar el acceso a la base de datos y contiene los métodos necesarios para realizar las operaciones CRUD. El controlador recibe las peticiones del usuario, decide qué acción ejecutar y qué vista mostrar. Las vistas se encargan de la presentación de la información y del diseño de la interfaz, utilizando Bootstrap para asegurar la responsividad.

---

## Seguridad aplicada

La aplicación utiliza consultas preparadas con PDO para evitar inyecciones SQL. Los datos recibidos desde los formularios se validan y sanitizan en el servidor. Además, se solicita confirmación antes de eliminar un registro y se controla el error en la conexión a la base de datos.

---

## Diseño responsive

El diseño de la aplicación se ha realizado con Bootstrap 5, lo que permite que la interfaz se adapte correctamente a distintos tamaños de pantalla, incluyendo dispositivos móviles y tablets. El estado del contenido explícito se representa de forma visual mediante colores para mejorar la experiencia de usuario.

---

## Estado del proyecto

El proyecto implementa un CRUD completamente funcional siguiendo el patrón MVC en PHP y queda preparado para su futura integración con un sistema de autenticación de usuarios.

---

## Autor

Álvaro Mozo Gaspar