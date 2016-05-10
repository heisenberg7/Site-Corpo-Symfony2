<?php

/* SantorMainBundle:User:securityCheck.html.twig */
class __TwigTemplate_8f238cb837c43d653ea9fee068141cacc6f3684943be7cad60ec4d2743382715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SantorMainBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainTitle' => array($this, 'block_mainTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SantorMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Santor Edition - Partie admin";
    }

    // line 5
    public function block_mainTitle($context, array $blocks = array())
    {
        echo "<h1>Partie admin</h1>";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"container\">
        Bienvenue
    </div>

";
    }

    public function getTemplateName()
    {
        return "SantorMainBundle:User:securityCheck.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
