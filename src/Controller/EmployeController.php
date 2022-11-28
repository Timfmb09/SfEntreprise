<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Form\EmployeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeController extends AbstractController
{
    /**
     * @Route("/employe", name="app_employe")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        // récupérer toutes les entreprises de la BDD
        //SELECT * FROM employe WHERE ville = "Strasbourg" ORDER BY nom ASC
        $employes = $doctrine->getRepository(Employe::class)->findBy([], ["nom" => "ASC"]);
        return $this->render('employe/index.html.twig', [
           'employes' =>$employes
        ]);
    }


    /**
     * @Route("/employe/add", name="add_employe")
     * @Route("/employe/{id}/edit", name="edit_employe")
     * @Route("/employe/{id}/delete", name="delete_employe")
     */

    public function add(ManagerRegistry $doctrine, Employe $employe = null, Request $request): Response {
        
        if(!$employe) {
            $employe = new Employe();
        }

        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isvalid()) {

            $employe = $form->getData();
            $entityManager = $doctrine->getManager();
            //prepare
            $entityManager->persist($employe);
            // insert into (execute)
            $entityManager->flush();

            return $this->redirectToRoute('app_employe');
    }

        //Vue pour afficher mon formulaire d'ajout
        return $this->render('employe/add.html.twig', [
            'formAddEmploye' => $form->createView()
        ]);

    }
     /**
     * @Route("/employe/{id}", name="show_employe")
     */
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' =>$employe
         ]);
    }
}
