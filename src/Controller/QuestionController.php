<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    //esto es un annotation, se configura dentro de comentarios php
    /**
     * @Route("/" , name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
        /*Esto ultimo es lo mismo que usar la shortform render para obtener la respuesta
        $html = $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);

        return new Response('Hello word!');*/
        return $this->render('question/homepage.html.twig');
    }

    //creando una segunda ruta con una respuesta diferente
    /**
     * @Route("/questions/how-to-tie-my-shoes-with-magic")
     */
    // una manera de hacer mas inteligente la respuesta con un comodin
    /**
     * @Route("/question/{loquesea}", name="app_question_show")
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
        /*es similar a var_dump y sirve para debugguear */
        var_dump($loquesea);
        dump($this);
        dd($loquesea, $this);


    /*return new Response(sprintf(
            'Futura pagina para mostrar una pregunta "%s" !',
            ucwords(str_replace("-", " ", $loquesea))
    ));*/
    }
}