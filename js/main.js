(function() {
    "use strict"

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){
        
        //CAMPOS DATOS USUARIOS
        
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //CAMPOS PASES 

        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dos_dias = document.getElementById('pase_dos_dias');

        //BOTONES Y DIVS

        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('RegBtnistro');
        var listaProductos = document.getElementById('lista_productos');

        //EXTRAS

        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento');

        calcular.addEventListener('click', calcularMontos);

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debes elegir un regalo");
                regalo.focus();
            }
            else{
                var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                    boletos2dias = parseInt(pase_dos_dias.value, 10)|| 0,
                    boletosCompletos = parseInt(pase_completo.value, 10)|| 0,
                    cantCamisas = parseInt(camisas.value, 10)|| 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10)|| 0;

                var totalPagar = (boletosDia*30)+(boletos2dias*45)+(boletosCompletos*50)+(cantCamisas*10*0.93)+(cantEtiquetas*2);
                
                var listadoProductos = [];

                if(boletosDia>=1){
                    listadoProductos.push(boletosDia+' Pases por día');
                }
                if(boletos2dias>=1){    
                    listadoProductos.push(boletos2dias+' Pases por 2 días');
                }
                if(boletosCompletos>=1){    
                    listadoProductos.push(boletosCompletos+' Pases completos');
                }
                if(cantCamisas>=1){    
                    listadoProductos.push(cantCamisas+' Camisas');
                }
                if(cantEtiquetas>=1){    
                    listadoProductos.push(cantEtiquetas+' Etiquetas');
                }
                
                listaProductos.innerHTML = '';

                for(var i=0; i<listadoProductos.length; i++){
                    listaProductos.innerHTML += listadoProductos[i] + '<br/>';
                }
            }        
        }

    });  //DOM CONTENT LOADED
})();
