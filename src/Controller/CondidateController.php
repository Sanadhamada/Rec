<?php

namespace App\Controller;

use App\Repository\CondidateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CondidateController extends AbstractController
{
    #[Route('/condidate', name: 'condidate')]
    public function index(CondidateRepository $repository): Response
    {
       
        return $this->render('pages/condidate/index.html.twig', [
          'condidates'=>$repository->findAll() 
        ]);
    }
}
