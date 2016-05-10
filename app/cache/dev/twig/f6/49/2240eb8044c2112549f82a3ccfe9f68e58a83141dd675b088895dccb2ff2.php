<?php

/* SantorMainBundle::layout.html.twig */
class __TwigTemplate_f6492240eb8044c2112549f82a3ccfe9f68e58a83141dd675b088895dccb2ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'mainTitle' => array($this, 'block_mainTitle'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        if (array_key_exists("class_body", $context)) {
            // line 8
            echo "            ";
            if (((isset($context["class_body"]) ? $context["class_body"] : $this->getContext($context, "class_body")) == "success")) {
                // line 9
                echo "                <meta http-equiv=\"refresh\" content=\"3;url='/\">
            ";
            }
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"";
        // line 22
        if (array_key_exists("class_body", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class_body"]) ? $context["class_body"] : $this->getContext($context, "class_body")), "html", null, true);
            echo " ";
        }
        echo "\">
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('mainTitle', $context, $blocks);
        // line 78
        echo "

        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "

        ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "

        ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/css/global.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "            <header>
                <div class=\"logo-santor\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/logo-santor.jpg"), "html", null, true);
        echo "\" alt=\"Logo Santor\">
                </div>

                ";
        // line 29
        $this->displayBlock('menu', $context, $blocks);
        // line 71
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Partie ADMIN</a>
            </header>
        ";
    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        // line 30
        echo "                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                        <div class=\"container-fluid\">

                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                                <a class=\"navbar-brand\">Santor Editions</a>
                            </div>

                            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("santor_main_homepage");
        echo "\">Accueil</a></li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Nos activités <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("santor_activites_mediScoop");
        echo "\">mediScoop</a></li>
                                            <li><a href=\"#\">iMedia</a></li>
                                            <li><a href=\"#\">mediPoster</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\">Les inscriptions</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\">Les dosettes de café</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">La société<span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("santor_societe_presentation");
        echo "\">Présentation</a></li>
                                            <li><a href=\"#\">Recrutement</a></li>
                                            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("santor_societe_contact");
        echo "\">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                ";
    }

    // line 75
    public function block_mainTitle($context, array $blocks = array())
    {
        // line 76
        echo "
        ";
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        // line 81
        echo "            ";
        // line 82
        echo "        ";
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "            <footer>

            </footer>
        ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/js/libs/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/js/src/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "SantorMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 94,  232 => 93,  229 => 92,  222 => 86,  219 => 85,  215 => 82,  213 => 81,  210 => 80,  205 => 76,  202 => 75,  190 => 63,  185 => 61,  170 => 49,  163 => 45,  146 => 30,  143 => 29,  135 => 71,  133 => 29,  127 => 26,  123 => 24,  120 => 23,  113 => 18,  110 => 17,  104 => 5,  98 => 96,  96 => 92,  92 => 90,  90 => 85,  86 => 83,  84 => 80,  80 => 78,  78 => 75,  75 => 74,  73 => 23,  65 => 22,  59 => 20,  57 => 17,  50 => 12,  47 => 11,  43 => 9,  40 => 8,  38 => 7,  33 => 5,  27 => 1,);
    }
}
