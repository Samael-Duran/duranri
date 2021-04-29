(function(){
    $(document).ready(function(){
        $('#Enviar').click(function(){
            var usuario=$('#correo').val();
            var pass=$('#Passw').val();
            console.log(usuario,pass)
            if(usuario == 'Correo' && pass == '123')
            {
                
            }
            else{
                alert('Usuario o contraseña incorrectos, ingresalos nuevamente');
                return(false);
            }
        });
        });
}());