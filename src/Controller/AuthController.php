<?php

namespace App\Controller;

use App\DTO\SignUpRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    /**
     * @Route("/signup", name="auth.signup", methods={"POST"})
     */
    public function signUp(SignUpRequest $req): Response
    {
        return $this->json("yes");
    }
}
