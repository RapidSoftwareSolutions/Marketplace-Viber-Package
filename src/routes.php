<?php
$routes = [
    'metadata',
    'setWebhook',
    'deleteAllWebhooks',
    'sendTextMessage',
    'sendPicture',
    'sendVideo',
    'sendFile',
    'sendContact',
    'sendLocation',
    'sendUrl',
    'sendSticker',
    'sendCarouselContentMessage',
    'sendBroadcastMessage',
    'getAccountInfo',
    'getUserDetails',
    'getOnlineStatus',
    'webhookEvent'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

