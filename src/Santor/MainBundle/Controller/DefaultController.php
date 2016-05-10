<?php

namespace Santor\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;


use Santor\MainBundle\Entity\Comment;
use Symfony\Component\Validator\Constraints\Null;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SantorMainBundle:Default:index.html.twig', array("class_body" => "home"));
    }

    public function mediScoopAction()
    {
        return $this->render('SantorMainBundle:Default:mediScoop.html.twig', array("class_body" => "mediscoop"));
    }

    public function presentationAction()
    {
        return $this->render('SantorMainBundle:Default:presentation.html.twig', array("class_body" => "presentation"));
    }

    /**
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */

    public function contactAction(Request $request)
    {
        $comment = new Comment;

        $form = $this->createFormBuilder($comment)
            ->add('name', 'text', array(
                'attr' => array(
                    'class' => 'form-control',
                    'required' => true,
                )
            ))

            ->add('firstname', 'text', array(
                'attr' => array(
                    'class' => 'form-control',
                    'required' => true,
                )
            ))

            ->add('age', 'text', array(
                'attr' => array(
                    'class' => 'form-control',
                    'required' => true,
                )
            ))

            ->add('mail', 'text', array(
                'attr' => array(
                    'class' => 'form-control',
                    'required' => true,
                )
            ))

            ->add('message', 'textarea', array(
                'attr' => array(
                    'class' => 'form-control',
                    'required' => true,
                )
            ))

            ->add('valider', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-default',
                )
            ))

            ->add('Effacer', 'reset', array(
                'attr' => array(
                    'class' => 'btn btn-default',
                )
            ))
            ->getForm();

        $form->handleRequest($request);


        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('comment_success'));
        }

        //Params of the render method
        $vars = array(
            "class_body" => "contact",
            'form' => $form->createView()
        );

        //Render a specific template with param $vars
        return $this->render('SantorMainBundle:Default:contact.html.twig', $vars);
    }

    public function formSuccessAction()
    {
        return $this->render('SantorMainBundle:Default:success.html.twig', array(
            "class_body" => "success"
        ));
    }
}

