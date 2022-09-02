<?php

namespace App\Controller;

use App\Controller\DiscController;
use App\Form\SearchDiscType;
use App\Repository\DiscRepository;
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
    

    #[Route('/searchBar', name: 'app_home_searchBar')]
    public function searchBar(DiscRepository $discRepository, Request $request): Response
    {

        $formSearch = $this->CreateForm(SearchDiscType::class);

        return $this->render('home/search.html.twig', [
            'formSearch' => $formSearch->CreateView()
        ]);
    }

    #[Route('/Search', name: 'app_home_search')]
    public function search(Request $request, DiscRepository $discRepository)
    {
        $formSearch = $this->CreateForm(SearchDiscType::class);

        $search = $formSearch->handleRequest($request);

        if($formSearch->isSubmitted() && $formSearch->isValid()){
            // On recherche les annonces correspondants aux mots clés
            $discs = $discRepository->search(
                $search->get('mots')->getData()
            );

            // dd("discs");

            return $this->render(
                'disc/index.html.twig', [
                    'discs' => $discs
                ]
                );
        }
        
        return $this->redirectToRoute('app_home');

    }
}
