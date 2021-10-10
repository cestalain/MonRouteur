<?php

namespace App\Controllers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;


class PetanqueController extends Controller
{
    public function index()
    {
        //echo "je suis le controller petanque";
        $loader = new FilesystemLoader('..\templates');
        $twig = new Environment($loader, [
            'cache' => false,
        ]);
        echo $twig->render('petanque.twig', []);
    }
}
