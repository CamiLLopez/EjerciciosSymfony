<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    //esto es un annotation, se configura dentro de comentarios php
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello word!');
    }

    //creando una segunda ruta con una respuesta diferente
    /**
     * @Route("/questions/how-to-tie-my-shoes-with-magic")
     */
    // una manera de hacer mas inteligente la respuesta con un comodin
    /**
     * @Route("/question/{loquesea}")
     */
    public function show($loquesea)
    {
        $respuestas = ['Hay que comprar cafe con leche',
            'Los unicornios son animales increibles',
            'Quizas deberias atarte los cordones!'];
        return $this->render('question/show.html.twig',[
            'question' => ucwords(str_replace("-", " ", $loquesea)),
            'respuestas' => $respuestas
        ]);

    /*return new Response(sprintf(
            'Futura pagina para mostrar una pregunta "%s" !',
            ucwords(str_replace("-", " ", $loquesea))
    ));*/
    }
}