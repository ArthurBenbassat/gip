<?php

require '../vendor/autoload.php';
use \Mailjet\Resources;
require_once '../settings/settings.php';
$key = new Settings();
// Use your saved credentials, specify that you are using Send API v3.1

$mj = new \Mailjet\Client($key->getMailUsername(), $key->getMailPassword(),true,['version' => 'v3.1']);

// Define your request body

$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "arthur@benbassat.art",
                'Name' => "Me"
            ],
            'To' => [
                [
                    'Email' => "arthur.benbassat@gmail.com",
                    'Name' => "You"
                ]
            ],
            'Subject' => "My first Mailjet Email!",
            'TextPart' => "Greetings from Mailjet!",
            'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href=\"https://www.mailjet.com/\">Mailjet</a>!</h3>
            <br />May the delivery force be with you!"
        ]
    ]
];

// All resources are located in the Resources class

$response = $mj->post(Resources::$Email, ['body' => $body]);

// Read the response

$response->success() && var_dump($response->getData());
?>