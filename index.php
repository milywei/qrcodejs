<?php
/**
 * QR code generator
 * @version 0.1
 */
require __DIR__ . '/../header.php';

$data = [
    'page' => [
        'id' => 'qrcodejs',
        'title' => 'QR code 產生器'
    ]
];

$loader = new Twig_Loader_Filesystem([VIEWS, __DIR__]);
$twig = new Twig_Environment($loader, ['strict_variables' => true]);
echo $twig->render('template.html.twig', $data);
