<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class AuvergneController
{
    public function index()
    {
        //echo "je suis le controller auvergne";
        $loader = new FilesystemLoader('..\templates');
        $twig = new Environment($loader, [
            'cache' => false,
        ]);
        echo $twig->render('auvergne.twig', []);
    }
}
