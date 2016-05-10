<?php

/* SantorMainBundle:Default:mediScoop.html.twig */
class __TwigTemplate_248dd4a88ae5e72621e1d6a356c538e0ee5cc4dc99019ed33b67ed21e38d5e07 extends Twig_Template
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
        echo "Santor Edition - mediScoop";
    }

    // line 5
    public function block_mainTitle($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"container\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/fond4.jpg"), "html", null, true);
        echo "\" alt=\"le fond 1\">
                    <div class=\"carousel-caption\">
                        <h3>Sous texte du fond 1</h3>
                        <p>Paragraphe du fond 1</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/fond5.jpg"), "html", null, true);
        echo "\" alt=\"le fond 2\">
                    <div class=\"carousel-caption\">
                        <h3>Sous texte du fond 2</h3>
                        <p>Paragraphe du fond 2</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/fond6.jpg"), "html", null, true);
        echo "\" alt=\"le fond 3\">
                    <div class=\"carousel-caption\">
                        <h3>Sous texte du fond 3</h3>
                        <p>Paragraphe du fond 3</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SantorMainBundle:Default:mediScoop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  69 => 28,  59 => 21,  44 => 8,  41 => 7,  36 => 5,  30 => 3,);
    }
}
