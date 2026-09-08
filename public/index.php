<?php

declare(strict_types=1);

require_once __DIR__ . '/initialize.php';

// 表示
echo $twig->render('index.twig', [
    'input' => $input,
    'errord' => $errord,
]);
