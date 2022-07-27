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

        botonRegistro.disabled = true;

        if(document.getElementById('calcular')){
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
                
                botonRegistro.disabled = false;

                document.getElementById('total_pedido').value = totalPagar;
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
        }

    });  //DOM CONTENT LOADED
})();

$(function(){

    //LETTERING

    $('.nombre_sitio').lettering();

    //AGREGAR CLASE A MENU

    $('.conferencia .navegacion_principal a:contains("Conferencia")').addClass('activo');
    $('.calendario .navegacion_principal a:contains("Calendario")').addClass('activo');
    $('.invitados .navegacion_principal a:contains("Invitados")').addClass('activo');

    //FIJAR MENÚ

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        }    
        else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }    
    });

    //MENÚ RESPONSIVE

    $('.menu_movil').on('click', function(){
        $('.navegacion_principal').slideToggle();
    });

    //PROGRAMA DE CONFERENCIAS

    $('.programa_evento .info_curso:first').show();
    $('.menu_programa a:first').addClass('activo');
    $('.menu_programa a').on('click', function(){

        $('.menu_programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;
    });

    //ANIMACIONES PARA LOS NÚMEROS

    var resumenLista = $('.resumen_evento');
    if(resumenLista.length > 0) {
        $('.resumen_evento').waypoint(function(){
            $('.resumen_evento li:nth-child(1) p').animateNumber({number:6}, 1200);
            $('.resumen_evento li:nth-child(2) p').animateNumber({number:15}, 1200);
            $('.resumen_evento li:nth-child(3) p').animateNumber({number:3}, 2000);
            $('.resumen_evento li:nth-child(4) p').animateNumber({number:9}, 1500);
        }, {
            offset: '60%'
        });    
    }

    //CUENTA REGRESIVA

    $('.cuenta_regresiva').countdown('2022/12/10 09:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    })

    //COLORBOX

<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
<<<<<<< HEAD
    $('.invitado_info').colorbox({inline: true, width:"50%"});
=======
    $('.invitado_info').colorbox({inline: true, width:"50%", height:"50%"});
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5

});