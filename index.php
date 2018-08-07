<?php
#El index php incluira las peticiones al controlador
#requerimos una sola vez el controlador
require_once 'controllers/controller.php';
#requerimos la clase del modelo por si se necesita de nuevo
require_once 'models/model.php';


#creamos la instancia de la clase
$mvc = new MvcController();
$mvc -> showTemplate();


?>