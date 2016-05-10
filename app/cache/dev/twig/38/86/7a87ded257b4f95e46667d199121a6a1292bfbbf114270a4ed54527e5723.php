<?php

/* SantorMainBundle:Default:contact.html.twig */
class __TwigTemplate_38867a87ded257b4f95e46667d199121a6a1292bfbbf114270a4ed54527e5723 extends Twig_Template
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
        echo "Santor Edition - Contact";
    }

    // line 5
    public function block_mainTitle($context, array $blocks = array())
    {
        // line 6
        echo "        <h1 class=\"title-";
        echo twig_escape_filter($this->env, (isset($context["class_body"]) ? $context["class_body"] : $this->getContext($context, "class_body")), "html", null, true);
        echo "\">Formulaire de contact</h1>
    ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"container\">
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "form-group")));
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "SantorMainBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
