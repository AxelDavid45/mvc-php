<?php

#aqui crearemos el modelo de respuestas para la navegacion
class EnlacesPaginasModel
{
#creamos el metodo que recibe la peticion y la procesa mediante comparacion
    public function enlacesNavModel($peticion)
    {
        if ($peticion == "inicio" ||
            $peticion == "nosotros" ||
            $peticion == "equipo" ||
            $peticion == "contacto") {
            $module = "views/modules/" . $peticion . ".php";
        } else if ($peticion == "index") {
            $module = "views/modules/inicio.php";
        } else {
            #creamos una lista blanca para que ninguna persona pueda modificar el url de las peticiones
            $module = "views/modules/inicio.php";
        }

        return $module;

    }

}

?>