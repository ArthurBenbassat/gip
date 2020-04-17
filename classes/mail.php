<?php

require __DIR__ . '/../vendor/autoload.php';
use \Mailjet\Resources;
require_once __DIR__ . '/../settings/settings.php';
// Use your saved credentials, specify that you are using Send API v3.1

// Define your request body
class mail {
    public function sendMailWithAttachment($email, $text, $subject, $name, $file) {
        
        $key = new Settings();
        $pdfBase64 = base64_encode(file_get_contents($file));
        
        $mj = new \Mailjet\Client($key->getMailUsername(), $key->getMailPassword(),true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "arthur@benbassat.art",
                        'Name' => "Benbassat"
                    ],
                    'To' => [
                        [
                            'Email' => $email,
                            'Name' => $name
                        ]
                    ],
                    'Subject' => "$subject",
                    'HTMLPart' => $text,
                    'Attachments' => [
                        [
                          'ContentType' => "application/pdf",
                          'Filename' => "invoice.pdf",
                          'Base64Content' =>  $pdfBase64
                        ]
                    ]
                ]
            ]
        ];

        // All resources are located in the Resources class

        $response = $mj->post(Resources::$Email, ['body' => $body]);

        // Read the response

        $response->success() && var_dump($response->getData());
    }

    public function sendMail($email, $text, $subject, $name) {
        $key = new Settings();
        
        
        $mj = new \Mailjet\Client($key->getMailUsername(), $key->getMailPassword(),true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "arthur@benbassat.art",
                        'Name' => "Benbassat"
                    ],
                    'To' => [
                        [
                            'Email' => $email,
                            'Name' => $name
                        ]
                    ],
                    'Subject' => "$subject",
                    'HTMLPart' => $text,
                ]
            ]
        ];

        // All resources are located in the Resources class

        $response = $mj->post(Resources::$Email, ['body' => $body]);

        // Read the response

        $response->success() && var_dump($response->getData());
    }
    
}



?>