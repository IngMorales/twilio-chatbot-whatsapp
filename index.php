
<?php
/*
$sid = ""; // Aquí va el SID de la cuenta de usuario, buscar en www.twilio.com/console
$token = ""; // Aquí va el token que se genera para el agente, buscar en www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '8881231234', // Este es el numero del agente
  array(
    'from' => '+573103199146', // Número valido a donde enviamos el mensaje a whatsapp
    'body' => 'Hola desde Twilio!'
  )
);

print $message->sid;
*/

require_once 'vendor/autoload.php'; 

use Twilio\Rest\Client; 

$sid    = ""; 
$token  = ""; 
$twilio = new Client($sid, $token); 

$message = $twilio->messages 
	->create("whatsapp:+573103199146",
	  	array( 
	  		"from" => "whatsapp:+14155238886",       
	  		"body" => "¿Eres candidato en estas elecciones?, adquiera SIGE, el sistema de información para la gestión electoral. Más información en www.tusigeweb.com" 
	  	) 
	); 
print($message->sid);
echo '<br>';
$message = $twilio->messages 
	->create("whatsapp:+573115515479",
	  	array( 
	  		"from" => "whatsapp:+14155238886",       
	  		"body" => "este es un mensaje de prueba" 
	  	) 
	); 
print($message->sid);
echo '<br>';
// envio de mensaje Twilio
$client = new Twilio\Rest\Client($sid, $token);

$message = $client->messages->create(
  '+573103199146', // Text this number
  array(
    'from' => '+17744625584', // From a valid Twilio number
    'body' => 'Hello from Twilio!'
  )
);

print $message->sid;
echo '<br>';
/*
$twilio_number = "+17744625584";

// Where to make a voice call (your cell phone?)
$to_number = "+573103199146";

$client = new Client($sid, $token);
$client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "https://demo.twilio.com/welcome/voice/"
    )
);
*/
?>