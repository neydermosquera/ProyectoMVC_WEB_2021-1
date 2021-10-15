(function(window, document){

    'use strict';
    var inicio = function(){
        var elemento = null, 
            marco = null, 
            rutas = {},
            controladores = {},
            controlador, 

            libreria = {
                
                getID: function(id){
                    elemento = document.getElementById(id);
                    return this; 
                }, 

                enrutar: function(){
                    marco = elemento;
                    return this;
                }, 
                ruta: function(ruta, plantilla, controlador, carga) {
                    rutas[ruta] = {
                        'plantilla': plantilla, 
                        'controlador': controlador,
                        'carga': carga
                    }
                    return this;
                },

                manejadorRutas: function(){

                }
        };
        return libreria;
    }
    if(typeof window.libreria === 'undefined'){
        window.libreria = inicio();
        window.addEventListener('load', libreria.manejadorRutas, false);
        window.addEventListener('hashchange', libreria.manejadorRutas, false);
    }else{
        console.log("see esta llamnando la libreria nuevamente")
    }
})(window, document);
