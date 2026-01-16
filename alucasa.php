<?php  

$nombre = $_POST["nombre"]; //trata a variável nome
$direccion = $_POST["direccion"]; //trata a variável endereco
$email = $_POST["email"]; //trata a variável e-mail
$telefono = $_POST["telefono"]; //trata a variável telefone
$mensaje = $_POST["mensaje"]; //trata a variável mensagem

                $MailRecipiente = "contacto@alucasa.info";
                $MailAssunto    = 'Formulario Alucasa - '.$nombre.''; 
                $headers .= "From: contacto@alucasa.info\n"; 
                 
                 $msg = 'Nombre: '.$nombre.'
Email: '.$email.'
Telefono: '.$telefono.'
Direccion: '.$direccion.'
Mensaje: '.$mensaje.'
'; 
             
                  mail($MailRecipiente,$MailAssunto,$msg,$headers); 
 
		
echo "<script> 
window.location.href='http://www.alucasa.info/rescontacto.html'
</script>\n\n";
?> 