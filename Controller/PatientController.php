<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{
    #[Route('/patient', name: 'app_patient')]
    public function index(): Response
    {

        $user = [
            'name' => 'Pau',
            'fullName' => 'Pau Diaz',
            'email' => 'paudiaz@gmail.com',
            'profileImageUrl' => 'https://img2.rtve.es/p/31151/logo2/?w=100',
        
        ];
        $comment = ['publishedAt' => new \DateTime()];
        $title = "Hola Esto es el titulo de Pau";
        $ga_tracking = 'UA-xxxxx-x';
        $articles = [
            ['title' => 'Articulo 1', 'slug' => 'articulo-1'],
            ['title' => 'Articulo 2', 'slug' => 'articulo-2'],
            ['title' => 'Articulo 3', 'slug' => 'articulo-3'],
        ];
        $name = 'Pau Diaz';
        $product = [
            'title' => 'Producto 1',
            'name' => 'Producto 1',
            'price' => 20,
        ];
        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
            'title' => $title,
            'user' => $user,
            'comment' => $comment,
            'ga_tracking' => $ga_tracking,
            'articles' => $articles,
            'name' => $name,
            'product' => $product,
            
        ]);
    }
}
