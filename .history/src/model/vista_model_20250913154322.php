<?php

class vistaM
{
    //metodo que obtiene la vista que se le asigna en $pagina
    protected static function obtenerVista($pagina) //recive una variable pagina
    {
        //lista de paginas del proyecto
        //
        $paginas_existentes = ["404", "inicio-sesion", "inicio", "registro-empresa", "dashboard-admin", "dashboard-empleado-admin", "dashboard-empleado-vendedor", "añadir-empleado"]; //lista de paginas del proyecto

        if (!in_array($pagina, $paginas_existentes)) { //si no esta en el array entonces...
            return "404-view.php"; //pagina de 404
            exit();
        }

        return $pagina . "-view.php"; //retorna $pagina-view para ser abierta por el controlador si esa pagina existe en la lista
    }
}
