<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactRequest;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mail;
use Session;

class ContactController extends Controller
{
    public function contact()
    {
        return view('front.contact.index');
    }

    public function postContact(ContactRequest $request) 
    {
        /*
        //CREAMOS EL ARRAY PARA ENVIAR LOS DATOS AL CORREO DEL ENCARGADO DE REVISAR EL BUZON DE QUEJAS Y SUGERENCIAS
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMensaje' => $request->message,
        );
        
        Mail::send('emails.send-form-contact', $data, function($message) use ($data){
            $message->from('webmaster@utsalamanca.edu.mx'); //Correo que funciona como servidor smtp para el envio de correos
            $message->to('jrazo@utsalamanca.edu.mx'); //Destinatario al que le llegaran los correos enviados por los usuarios de la web
/*####################### PRODUCCION ################
            $mensaje->to('prensaydifusion@utsalamanca.edu.mx'); //Destinatario al que le llegaran los correos enviados por los usuarios de la web
#####################################################
            $message->subject($data['name'].' - Formulario de Contacto COPTIGTO.A.C');
        });

        $notification = array(
            'message' => '¡Mensaje enviado con éxito! Espere nuestra respuesta.',
            'alert-type' => 'success'
        );

        return redirect()->route('contact')->with($notification);
        */
        
        // Valores enviados desde el formulario
        if ( !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["subject"]) || !isset($_POST["message"]) ) {
            die ("Es necesario completar todos los datos del formulario");
        }

        $nombre = $_POST["name"];

        $email = $_POST["email"];

        $asunto = $_POST["subject"];

        $mensaje = $_POST["message"];


        $destinatario = "contacto@coptigto.org";


        // Datos de la cuenta de correo utilizada para enviar v�a SMTP
        $smtpHost = "coptigto.org";  // Dominio alternativo brindado en el email de alta 
        $smtpUsuario = "contacto@coptigto.org";  // Mi cuenta de correo
        $smtpClave = "#obfcnb1[4Ug";  // Mi contrase�a

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 587; 
        $mail->IsHTML(true); 
        $mail->CharSet = "utf-8";

        // VALORES A MODIFICAR //
        $mail->Host = $smtpHost; 
        $mail->Username = $smtpUsuario; 
        $mail->Password = $smtpClave;


        $mail->From = $email; // Email desde donde envio el correo.
        $mail->FromName = $nombre;
        $mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

        $mail->Subject = "Formulario de Contacto COPTIGTO.A.C"; // Este es el titulo del email.
        $mensajeHtml = nl2br($mensaje);
        $mail->Body = "
        <html> 

        <body> 
        <div style='background-color: #f8f9fa !important; padding: 2rem;'>

        <div style='color: #fff !important; background-color: #0092ea !important; border-color: #580b1c !important; padding: 0.1rem; text-align: center;'>
            <h1>Contacto COPTIGTO.A.C</h1>
        </div>

        <p>Mensaje enviado desde el formulario de contacto de http://coptigto.org/</p>

        <p><strong>Nombre:</strong> {$nombre}</p>

        <p><strong>Email:</strong> {$email}</p>

        <p><strong>Asunto:</strong> {$asunto}</p>

        <p><strong>Mensaje:</strong> {$mensaje}</p>

        <a href='http://coptigto.org/' target='_blank'>
        <img src='http://coptigto.org/images/logo-coptigto-164x101.png' alt='COPTIGTO.A.C' style='width: 250px; margin-top: 2rem; margin-left: auto !important; margin-right: auto !important; display: block !important;'>
        </a>
        </div>
        </body> 

        </html>

        <br />"; // Texto del email en formato HTML
        $mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
        // FIN - VALORES A MODIFICAR //

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $notification = array(
            'message' => '¡Mensaje enviado con éxito! Espere nuestra respuesta.',
            'alert-type' => 'success'
        );

        $error = array(
            'message' => '¡Error al enviar el mensaje!',
            'alert-type' => 'error'
        );

        $estadoEnvio = $mail->Send(); 
        if($estadoEnvio){
            return redirect()->route('contact')->with($notification);

        } else {
            return redirect()->route('contact')->with($error);
        }
       

    }
}