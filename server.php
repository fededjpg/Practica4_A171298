<?php

class Users
{

 public function getAllUsers($getAllUser)
    {
        if($getAllUser == 'users'){
        return join(',', array(
            'fededjpg',
            'luislpz',
            'juanprz',
            'lucasdiaz89'
        ));
    }else{
        return 1;
    }
      
    } 
}
try {
    $server = new SoapServer(
        null,
        [
            'uri' => 'http://soap2.test/servicio-soap/server.php'
        ]
    );
    $server->setClass('Users');
    $server->handle();
} catch (SoapFault $e) {
    print $e->faultstring;
}

