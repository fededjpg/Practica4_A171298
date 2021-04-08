<?php
$cliente = new SoapClient(null, array(
    'location'=>'http://soap2.test/servicio-soap/server.php',
    'uri'=>'http://soap2.test/servicio-soap/server.php',
    'trace'=>1
));

try {
    $respuesta=$cliente->__soapCall("getAllUsers", ["users"]);
      if($respuesta != 1){
       echo "los usuarios registrados son los siguientes ". $respuesta;
      }else{
          echo "algo salio mal :(";
      }
} catch (SoapFault $ex) {
    echo $ex->getMessage().PHP_EOL;
}
?>
