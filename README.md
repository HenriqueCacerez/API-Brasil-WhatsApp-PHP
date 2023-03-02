<h1 align="center">API Brasil - WhatsApp FREE - PHP</h1>
<p>Uma maneira simples de utilizar a API do WhatsApp usando a plataforma da <a href="https://apibrasil.com.br">APIBrasil</a>.</p>

<p>Antes de começar, acesse a plataforma em <a href="https://plataforma.apibrasil.com.br">https://plataforma.apibrasil.com.br</a>, crie uma conta, selecione um plano adequado às suas necessidades e obtenha as credenciais de acesso.</p>

<p>Com essas credenciais, você poderá integrar facilmente a API em sua aplicação desenvolvida em PHP.</p>

***
### Iniciando
```php
<?php

    require_once __DIR__ . '/ApiBrasil/WhatsApp.php';

        // https://plataforma.apibrasil.com.br/plataforma/myaccount/apicontrol
        $credentials = [ 
            'SecretKey:     YOUR_SECRET_KEY',
            'PublicToken:   YOUR_PUBLIC_TOKEN',
            'DeviceToken:   YOUR_DEVICE_TOKEN',
            'Authorization: Bearer YOUR_BEARER_TOKEN'
        ];

        $whatsApp = new \ApiBrasil\WhatsApp($credentials);
?>
```
---------
#### MENSAGEM DE TEXTO 💬

![Mensagem de Texto](https://i.ibb.co/X22PzPP/Whats-App-Image-2023-02-16-at-15-24-54.jpg)
 
```php
<?php

        /**
         * NÚMERO DE WHATSAPP QUE SERÁ ENVIADO A MENSAGEM.
         * obrigatório conter o código do país e o DDD.
         */
        $phoneNumber = "5518999999999";

        // MENSAGEM QUE SERÁ ENVIADA
        $message = "Testando API! 😃";

        // ENVIA A MENSAGEM DE TEXTO
        $whatsApp->sendTextMessage($phoneNumber, $message);
?>
```
---------
#### ENVIO DE IMAGEM 🖼️

![Mensagem de Imagem](https://i.ibb.co/ykzxCk8/Whats-App-Image-2023-02-16-at-15-32-32.jpg)

```php
<?php
        // NÚMERO DE WHATSAPP QUE SERÁ ENVIADO A MENSAGEM.
        $phoneNumber = "5518999999999";

        // CAMINHO DA IMAGEM
        $image = 'cat.jpg';

        // LEGENDA DA IMAGEM (opcional)
        $caption = "Legenda da imagem";

        // ENVIA A IMAGEM
        $whatsApp->sendImage($phoneNumber, $image, $caption);
?>
```
---------
#### ENVIO DE PDF 📁
 
![Envio de PDF](https://i.ibb.co/98gnNGG/Whats-App-Image-2023-02-16-at-17-53-23.jpg)

```php
<?php
        // NÚMERO DE WHATSAPP QUE SERÁ ENVIADO A MENSAGEM.
        $phoneNumber = "5518999999999";

        // CAMINHO DO PDF
        $pdf = "application.pdf";
            
        // TITULO DO ARQUIVO (opcional)
        $title = "Aplicação";
    
        // ENVIA O PDF
        $whatsApp->sendPDF($phoneNumber, $pdf, $title);
?>
```
---------
#### MENSAGEM COM BOTÕES 🅱️
 
![Mensagem com botões](https://i.ibb.co/72yN4ww/Whats-App-Image-2023-02-16-at-18-12-47.jpg)

```php
<?php
        // NÚMERO DE WHATSAPP QUE SERÁ ENVIADO A MENSAGEM.
        $phoneNumber = "5518999999999";

        // BOTÕES
        $buttons = [
            [
                'id'   => 'resposta_01',
                'text' => 'Botão 1️⃣'
            ], 
            [
                'id'   => 'resposta_02',
                'text' => 'Botão 2️⃣'
            ],
            [
                'id'   => 'resposta_03',
                'text' => 'Botão 3️⃣'
            ]
        ];

      // ENVIA A MENSAGEM
      $whatsApp->sendButtonMessage($phoneNumber, [
          'title'  => "Titulo da mensagem",
          'text'   => "Imagine um texto bem legal aqui.\n\n👋😁",
          'footer' => "Aqui vai o texto do rodapé da mensagem"
      ], $buttons);
?>
```
#### MENSAGEM COM BOTÕES 🅱️ (COMPACTO)
```php
<?php
    // NÚMERO DE WHATSAPP QUE SERÁ ENVIADO A MENSAGEM.
    $phoneNumber = "5518999999999";

    // CRIA O BOTÃO (ID, TEXTO)
    $WhatsApp->createButton('resposta_01', "Botão 1️⃣");
    $WhatsApp->createButton('resposta_02', "Botão 2️⃣");
    $WhatsApp->createButton('resposta_03', "Botão 3️⃣");

    // ENVIA A MENSAGEM
    $whatsApp->sendButtonMessage($phoneNumber, [
        'title'  => "Titulo da mensagem",
        'text'   => "Imagine um texto bem legal aqui.\n\n👋😁",
        'footer' => "Aqui vai o texto do rodapé da mensagem"
    ]);
?>
```

---------
