<?php

namespace App\Controller;

use App\Repository\DiscRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(): Response
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    public function searchBar()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('query', TextType::class, [
                'label' => false,
                'row_attr' => [
                    'class' => 'me-ms-2 col-8',
                    'placeholder' => 'Search'
                ]
            ])
            ->add('Search', SubmitType::class, [
                'row_attr' => [
                    'class' => 'col-4'
                ],
                'attr' => [
                    'class' => 'btn-secondary my-2 my-sm-0 '
                ]
            ])
            ->getForm();
        return $this->render('search/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route("/handleSearch", name: "handleSearch")]
    public function handleSearch(Request $request, DiscRepository $repo)
    {
        $query = $request->request->get('form')['query'];
        if($query) {
            $discs = $repo->findDiscByName($query);
        }
        return $this->render('search/index.html.twig', [
            'discs' => $discs
        ]);
    }

}
