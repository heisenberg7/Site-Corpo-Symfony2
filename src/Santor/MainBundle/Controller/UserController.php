<?php

namespace Santor\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

class UserController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/login_check", name="securite.login_check")
     * @Template()
     */
    public function securityCheckAction()
    {
        return array('name' => "toto");
    }

    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return array(
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            "class_body" => "login",
            'error'         => $error,
        );

    }

    /**
     * @Route("/logout", name="securite.logout")
     * @Template()
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/home", name="securite.home")
     * @Template()
     */
    public function adminAction()
    {
        return array();
    }
}
