(function(window, document){

    libreria.getID('vistaPrincipal').enrutar()
            .ruta('/', 'vistas/inicio.html', null, null)
            .ruta('/registrar-usuario', 'vistas/registro.php', null, null)
            .ruta('/listar-usuarios', 'vistas/listar.php', null, null)
            .ruta('/actualizar-usuario', 'vistas/actualizar.php', null, null)
            .ruta('/editar-usuario', 'vistas/editar.php', null, null);
})(window, document);

if (window.history.replaceState) { 
    window.history.replaceState(null, null, window.location.href);
}




