<?php

namespace App\Controller;

use App\Form\SearchDiscType;
use App\Repository\DiscRepository;
use App\Repository\ArtistRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    

    #[Route('/search', name: 'app_home_search')]
    public function search(DiscRepository $discRepository, Request $request): Response
    {
        $discs = $discRepository->findAll();

        $formSearch = $this->CreateForm(SearchDiscType::class);

        $search = $formSearch->handleRequest($request);

        if($formSearch->isSubmitted() && $formSearch->isValid()){
            //On recherche les annonces correspondants aux mots clés
            $discs = $discRepository->search(
                $search->get('mots')->getData()
            );
        }

        return $this->render('home/search.html.twig', [
            'discs' => $discs,  
            'formSearch' => $formSearch->CreateView()
        ]);
    }
}
