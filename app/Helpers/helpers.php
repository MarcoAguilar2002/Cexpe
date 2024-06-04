<?php
if (!function_exists('setActivo')) {
    function setActivo($ruta){
        return request()->is($ruta) || request()->is("$ruta/*") ? 'activo' : '';
    }
}
?>
