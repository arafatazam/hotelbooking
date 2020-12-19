<?php

namespace App\Controller;

use App\DTO\SignUpRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Model;

class AuthController extends AbstractController
{
    /**
     * @SWG\Response(
     *     response=200,
     *     @Model(type=SignUpRequest::class)
     * )
     * @Route("/signup", name="auth.signup", methods={"POST"})
     */
    public function signUp(SignUpRequest $req): Response
    {
        return $this->json("yes");
    }
}
