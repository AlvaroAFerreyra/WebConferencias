(function() {
    "use strict"

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){
        
        var map = L.map('mapa').setView([-32.947786, -60.630198], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-32.947786, -60.630198]).addTo(map)
            .bindPopup('Conferencia<br>GDLWEBCAMP')
            .openPopup()
            .bindTooltip('Localización')
            .openTooltip();

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
        var suma = document.getElementById('suma_total');

        //EXTRAS

        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento');

        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dos_dias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarEmail);

        function validarCampos(){
            if(this.value == ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = '*Este campo es obligatorio';
                this.style.border = '2px solid red';
            }
            else{
                errorDiv.style.display = "none";
                this.style.border = "1px solid #cccccc";
            }
        }

        function validarEmail(){
            if(this.value.indexOf("@") > -1){
                errorDiv.style.display = "none";
                this.style.border = "1px solid #cccccc";
            }
            else{
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = '*E-mail inválido';
                this.style.border = '2px solid red'
            }
        }

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
                
                listaProductos.style.display = "block";
                listaProductos.innerHTML = '';

                for(var i=0; i<listadoProductos.length; i++){
                    listaProductos.innerHTML += listadoProductos[i] + '<br/>';
                }
                suma.innerHTML = "$ "+totalPagar.toFixed(2); 
            }        
        }

        function mostrarDias(){
            var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                boletos2dias = parseInt(pase_dos_dias.value, 10)|| 0,
                boletosCompletos = parseInt(pase_completo.value, 10)|| 0;
            
            var diasElegidos = [];
            
            if(boletosDia > 0){
                diasElegidos.push('viernes');
            }
            if(boletos2dias > 0){
                diasElegidos.push('viernes', 'sabado');
            }
            if(boletosCompletos > 0){
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for(var i=0; i < diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display = "block";
            }
        }

    });  //DOM CONTENT LOADED
})();
