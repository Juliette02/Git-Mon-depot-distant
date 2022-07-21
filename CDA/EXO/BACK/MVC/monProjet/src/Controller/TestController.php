<?php

namespace App\Controller;

use App\Entity\DiscsFixtures;
use App\Form\DiscType;
use App\Repository\DiscRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    //Attention ne pas oublier de rajouter au Controller une fonction pour le formulaire !!!!!

    #[Route('/form', name: 'app_test_form', methods: ['GET', 'POST'])]
    public function new(Request $request, ArtistRepository $artistRepository): Response
    {
        $artist = new Disc();
        $form = $this->createForm(DiscType::class, $disc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $artistRepo->add($artist, true);

            return $this->redirectToRoute('app_test', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('test/form.html.twig', [
            'disc' => $disc,
            'form' => $form,
        ]);
    }
}
