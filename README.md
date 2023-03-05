<img width="75px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/767px-WhatsApp.svg.png" align="right" />
<img width="180px" src="https://plataforma.apibrasil.com.br/frontend/img/logo.png" align="right" />

# API Brasil - WhatsApp Grátis - PHP
> Uma maneira simples de utilizar a API do WhatsApp usando a plataforma da <a href="https://apibrasil.com.br">APIBrasil</a>.


***
<!-- CONFIGURAÇÃO - API Brasil -->
<details>
  <summary><h2>⚙️ Configuração - API Brasil</h2></summary>
  <ol><br>
    <li>
      <b>Criando uma conta.</b>
      <p>Acesse <a href="https://plataforma.apibrasil.com.br/auth/register">https://plataforma.apibrasil.com.br/auth/register</a> para criar uma conta na plataforma.</p>
      <ul>
        <p align="center">
          <img src="https://i.ibb.co/XCjRs8p/Screenshot-2023-03-05-at-08-15-23-Criar-minha-conta-APIBrasil-Sites-e-Softwares-LTDA.png">
        </p>
      </ul>
    </li>
    <li>
      <b>Preenchendo os dados da conta.</b>
      <p>Após ter criado a conta, vá até a página <b color="#6a73ff">"Meu plano"</b> e selecione um plano que melhor atende as suas necessidades.</b></p>
        <p align="center">
          <img src="https://i.ibb.co/v107cG6/meu-plano.png">
          <img width="200px" src="https://i.ibb.co/Wt9mygv/cadastro-incompleto.png">
        </p>
        <p>Provavelmente você encontrará um aviso para completar o seu cadastro. Clique sobre o aviso e informe todos os dados necessários</p>
        <p align="center">
          <img src="https://i.ibb.co/VqJwR4M/cadastro-incompleto2.png">
          <!-- https://i.ibb.co/Wt9mygv/cadastro-incompleto.png -->
        </p>
      </ul>
    </li>
    <li>
      <b>Credenciais da API WhatsApp</b>
      <p>Após ter preenchido os dados da sua conta e ter selecionado o plano desejado. Vá até a página <b>"Minhas API's"</b>.</p>
        <p align="center">
          <img src="https://i.ibb.co/PQ9bRWF/minhas-apis.png">
        </p>
        <p>Procure por <b>"API WhatsApp"</b> e clique na chavinha "🔑" para visualizar as suas credenciais.</p>
        <p align="center">
          <img src="https://i.ibb.co/s638zxB/api-whatsapp-1.png">
        </p>
        <p>Nesta página, você encontrará o seu <b>BEARER TOKEN</b> e a sua <b>SECRET KEY</b>.</p>
        <p align="center">
          <img src="https://i.ibb.co/9gk95XT/credenciais-1.png">
        </p>
    </li>
    <li>
      <b>Configurando o dispositivo.</b>
      <p>Clique em <b>"( 0 ) Dispositivos"</b> e clique no botão <b>"+ Adicionar"</b>.</p>
        <p align="center">
          <img src="https://i.ibb.co/0KJfHh8/dispositivos-1.png">
        </p>
        <p>Nesta seção, você encontrará o seu <b>DEVICE TOKEN</b>. Informe todos os dados necessários e clique em <b>"Salvar"</b>.</p>
        <p align="center">
          <img src="https://i.ibb.co/XLtsBbS/device-token.png">
        </p>
        <p><b>Observação:</b> em <b>"IP PERMITIDO"</b>, você deve informar o IP do seu servidor no qual rodará a sua aplicação. Você também pode informar o IP de sua máquina para rodar em ambiente local, <b>Xampp</b> ou <b>WampServer</b>, por exemplo.</p>
    </li>
    <li>
      <b>Public Token & Conectando o seu número de WhatsApp.</b>
      <p>Após ter configurado o dispositivo, você pode encontra-lo na tabela da página <b>"Dispositivos"</b>.</p>
      <p>Você encontrará também o seu <b>"PUBLIC TOKEN"</b>.<br>Para vincular o seu WhatsApp, clique no icone de <b>"QR Code"</b>.</p>
        <p align="center">
          <img src="https://i.ibb.co/3YXmr09/public-token.png">
        </p>
        <p>Aguarde a resposta da API. (isso pode levar alguns segundos ou até minutos).</p>
        <p>Assim que o carregamento for concluído, um QR Code, ficará disponível para você, escaneie o código para conectar ao WhatsApp.</p>
        <p align="center">
          <img src="https://i.ibb.co/DpLttRd/qrcode.png">
        </p>
    </li>
     <li>
      <b>Conectado! ✅🚀</b>
      <p>Se tudo ocorrer bem, um aviso "connected" será mostrado em "status".</p>
        <p align="center">
          <img src="https://i.ibb.co/VVhYQ92/connected.png">
        </p>
      <p>Agora é só pegar todas as credenciais que você anotou durante todo o processo de configuração <br><br>(<b>SecretKey</b>, <b>PublicToken</b>, <b>DeviceToken</b> e <b>Bearer Token</b>)<br><br> e começar a integração.</p>
    </li>
  </ol>
</details>

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
