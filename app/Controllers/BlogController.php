<?php

namespace App\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BlogController extends Controller
{

    public function welcome()
    {
        $loader = new FilesystemLoader('..\templates');
        $twig = new Environment($loader, [
            'cache' => false,
        ]);
        echo $twig->render('welcom.twig', []);
    }

    public function index()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();

        return $this->view('blog.index', compact('posts'));
    }

    public function show(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);

        return $this->view('blog.show', compact('post'));
    }

    public function tag(int $id)
    {
        $tag = (new Tag($this->getDB()))->findById($id);

        return $this->view('blog.tag', compact('tag'));
    }
}
