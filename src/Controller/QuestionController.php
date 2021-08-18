<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
     * @Route("/questions/{loquesea}")
     */
    public function show($loquesea)
    {
    return new Response(sprintf(
            'Futura pagina para mostrar una pregunta "%s" !',
            ucwords(str_replace("-", " ", $loquesea))
    ));
    }
}