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
        var resultado = document.getElementById('lista_productos');

        calcular.addEventListener('click', calcularMontos);

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debes elegir un regalo");
                regalo.focus();
            }
            else{
                var boletosDia = pase_dia.value,
                    boletos2dias = pase_dos_dias.value,
                    boletosCompletos = pase_completo.value;

                var totalPagar = (boletosDia*30)+(boletos2dias*45)+(boletosCompletos*50);
            }        
        }

    });  //DOM CONTENT LOADED
})();
