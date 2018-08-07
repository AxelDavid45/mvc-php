<?php

#creamos la clase que muestra el template
class MvcController
{

    #Clase para mandar a llamar el template
    public function showTemplate()
    {
        include 'views/template.php';
    }

    #creamos otra clase para los enlaces
    public function enlacesNavController()
    {
        if (isset($_GET["action"])) {
            #guardamos la peticion en una variable
            $peticion = $_GET["action"];
        } else {
            #pasamos por defecto la pagina de inicio cuando no se mande con un parametro
            $peticion = "index";
        }
        #la peticion la pasamos a la funcion de la clase modelo
        $respuesta = EnlacesPaginasModel::enlacesNavModel($peticion);
        #incluimos la respuesta que viene desde el modelo
        include $respuesta;

    }
}




?>