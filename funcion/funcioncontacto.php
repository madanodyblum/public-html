<?php

if (isset($_POST['addCont'])) {

    try {

        $destinatario = "ventas@bizcomperu.com";

        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        
        $elmensaje = wordwrap(str_replace("\n.", "\n..", $mensaje), 70);


        $fecha = date('Y-m-d');


        //version MIME
        $cabeceras = "MIME-Version: 1.0\r\n";

        //Tipo de info
        $cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //direccion del remitente
        $cabeceras .= "From: " . $email . " <" . $email . ">";


        $cuerpomsg = "<html><head><title>Tienes un mensaje</title></head><body>
            
<table>
<tr>
<td>Email :</td>
<td>" . $email . "</td>
</tr>
<tr>
<td>Nombre :</td>
<td>" . $nombre . "</td>
</tr>
<tr>
<td>Telefono :</td>
<td>" . $telefono . "</td>
</tr>
<tr>
<td>Asunto :</td>
<td>" . $asunto . "</td>
</tr>
<tr>
<td>Mensaje :</td>
<td>" . $elmensaje . "</td>
</tr>
<tr>
<td>Fecha :</td>
<td>" . $fecha . "</td>
</tr>
</table>
</body><html>";


        mail($destinatario, "Contacto de pagina web", $cuerpomsg, $cabeceras);


        echo "Mensaje enviado correctamente...<br>";
    } catch (FailedExceptionNoIdentificado $exc) {
        echo "Sucedio un problema<br>";
    } catch (FailedExceptionQuery $exc) {
        echo "Sucedio un problema<br>";
    } catch (FailedExceptionBD $exc) {
        echo "Sucedio un problema<br>";
    }
}
?>