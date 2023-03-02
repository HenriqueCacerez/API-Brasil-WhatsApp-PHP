<?php

    require_once __DIR__ . '/ApiBrasil/WhatsApp.php';
     
    use ApiBrasil\WhatsApp;
 
        // "https://plataforma.apibrasil.com.br/plataforma/myaccount/apicontrol"
        $credentials = [ 
            'SecretKey:     YOUR_SECRET_KEY',
            'PublicToken:   YOUR_PUBLIC_TOKEN',
            'DeviceToken:   YOUR_DEVICE_TOKEN',
            'Authorization: Bearer YOUR_BEARER_TOKEN'
        ];

        $whatsApp = new WhatsApp($credentials);

        /**
         * NÚMERO DE WHATSAPP QUE SERÁ ENVIADO A MENSAGEM.
         * obrigatório conter o código do país e o DDD.
         */
        $phoneNumber = "5518999999999";

        // MENSAGEM QUE SERÁ ENVIADA
        $message = "Testando API! 😃";

        // ENVIA A MENSAGEM DE TEXTO
        $whatsApp->sendTextMessage($phoneNumber, $message);
