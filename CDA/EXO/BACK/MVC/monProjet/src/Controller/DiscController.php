<?php

namespace App\Controller;

use DateTime;
use App\Entity\Disc;
use App\Form\Disc1Type;
use App\Entity\Comments;
use App\Form\CommentsType;
use App\Service\FileUploader;
use App\Repository\DiscRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/disc')]
class DiscController extends AbstractController
{
    #[Route('/', name: 'app_disc_index', methods: ['GET'])]
    public function index(DiscRepository $discRepository): Response
    {
        return $this->render('disc/index.html.twig', [
            'discs' => $discRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_disc_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DiscRepository $discRepository, FileUploader $fileUploader): Response
    {
        $disc = new Disc();
        $form = $this->createForm(Disc1Type::class, $disc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            

            $pictureFile = $form->get('picture')->getData();

            // Cette condition est nécessaire car le champ 'picture'  n'est pas obligatoire
            // donc le l'image doit être traité uniquement lorsqu'un fichier est téléchargé
            if ($pictureFile) {
                $pictureFilename = $fileUploader->upload($pictureFile);
                $disc->setPicture($pictureFilename);
            } 

            $discRepository->add($disc, true);

            return $this->redirectToRoute('app_disc_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('disc/new.html.twig', [
            'disc' => $disc,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_disc_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Disc $disc, EntityManagerInterface $entityManager): Response
    {

        // Partie Commentaires
        // On crée le commentaire "vierge"
        $comment = new Comments();

        // On génère le formulaire
        $form = $this->createForm(CommentsType::class, $comment);

        $form->handleRequest($request);
        // dd($form);
        
        // Traitement du formulaire
        if ($form->isSubmitted() && $form->isValid()){
            //dd($comment); 
            $comment->setCreatedAt(new DateTime());
            $comment->setDisc($disc);

            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('app_disc_index');
            // dump($comment);
        }

        return $this->render('disc/show.html.twig', [
            'disc' => $disc,
            'commentForm' => $form->createView()
        ]);
    }

    #[Route('/{id}/edit', name: 'app_disc_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Disc $disc, DiscRepository $discRepository, FileUploader $fileUploader): Response
    {
        $form = $this->createForm(Disc1Type::class, $disc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pictureFile = $form->get('picture_file')->getData();
            // On récupére le picture_file dissocié de l'entité
            // Qu'on met dans une variable
    
            // Cette condition est nécessaire car le champ 'picture'  n'est pas obligatoire
            // donc le l'image doit être traité uniquement lorsqu'un fichier est téléchargé
            if ($pictureFile) {
                $pictureFilename = $fileUploader->upload($pictureFile);
                $disc->setPicture($pictureFilename);
                // On set le picture_file disscoié dans le champs de l'entité picture
            } 
            

            $discRepository->add($disc, true);

            return $this->redirectToRoute('app_disc_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('disc/edit.html.twig', [
            'disc' => $disc,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_disc_delete', methods: ['POST', 'GET'])]
    public function delete(Request $request, Disc $disc, DiscRepository $discRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$disc->getId(), $request->request->get('_token'))) {
            $discRepository->remove($disc, true);
        }

        return $this->redirectToRoute('app_disc_index', [], Response::HTTP_SEE_OTHER);
    }
}