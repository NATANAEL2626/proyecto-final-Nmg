$(document).ready(function(){
   $('$loginUsuario').on('click',function(){
    loginUsario();

   });

   $('$loginRegistro').on('click',function(){
    loginRegistro();

   });
})
//funcion usuario
function loginUsario(){
var login = $('#usuario').val();
var password = $('#password').val();

$.ajax({
    url:'./include/loginUsuario.php',
    method: 'POST',
    data: {
        login:login,
        password:password
    },
    success:function(data){
        $('#menssageUsuario').html(data);
        if(data.indexOf('Redirecting')>=0){
            window.location = 'admin/';
        }
    }
})

}

//funcion Registro

function loginRegistro(){
    var nombre = $('#nombre').val();
    var login = $('#usuario').val();
    var password = $('#password').val();


    $.ajax({
        url:'./include/loginRegistro.php',
        method: 'POST',
        data: {
            nombre:nombre,
            login:login,
            password:password
        },
        success:function(data){
            $('#menssageRegistro').html(data);
            if(data.indexOf('Redirecting')>=0){
                window.location = 'Registro/';
            }
        }
    })
    
}