<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class AquarelleController extends Controller
{
    public function theme()
    {
        $params = explode('/', $_GET['url']);
        //session_start();
        $_SESSION['theme'] = $params[1];
        require "New.php";
        //require "NewAquarelles.php";

        // $x = ""; 
        // require "Aquarelles.php";
        // liste_repertoire('../public/Images/aquarelles/marine/');
	    // affichage();


    }

    public function index()
    {
        $loader = new FilesystemLoader('..\templates');
        $twig = new Environment($loader, [
            'cache' => false, 'debug' => true,
        ]);
        $twig->addExtension(new DebugExtension);
        echo $twig->render('aquarelle.twig', []);
    }
    public function load_twig()
    {
    }
}
