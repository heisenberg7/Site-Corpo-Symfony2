<?php

/* SantorMainBundle:Default:presentation.html.twig */
class __TwigTemplate_87f5b6f5b74aa80ede56913c5113a06aaddf6c706f34935e4a5a271394841a34 extends Twig_Template
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
        echo "Santor Edition - Présentation";
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
    <div role=\"tabpanel\">

        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#historique\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Historique</a></li>
            <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Leadership</a></li>
            <li role=\"presentation\"><a href=\"#equipe\" aria-controls=\"equipe\" role=\"tab\" data-toggle=\"tab\">L'équipe</a></li>
        </ul>

        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"historique\">
                <p>
                    2001: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed egestas lacus, ac volutpat est. Phasellus consectetur, ipsum in laoreet congue, nunc orci ultrices neque, a pulvinar erat lectus id mi. Vestibulum aliquet commodo turpis, non accumsan ipsum interdum a. Integer pretium sit amet augue ut vehicula. In hac habitasse platea dictumst. In mollis in tellus ut mollis. Nulla leo dolor, imperdiet at facilisis sed, placerat id libero. Pellentesque aliquet iaculis fringilla. Morbi nec volutpat eros. In hac habitasse platea dictumst.
                </p>
                <p>
                    2005: Mauris feugiat lorem vel nisl vehicula suscipit. Nam tempus suscipit sem ut vestibulum. Quisque convallis gravida leo, non cursus massa iaculis at. Ut tincidunt suscipit lacinia. Mauris urna est, pharetra id nisi et, maximus porttitor erat. Proin semper a tortor quis venenatis. Aliquam erat volutpat. Nullam ut tincidunt mauris. Donec sit amet rhoncus turpis. Sed pharetra elit sit amet nibh pellentesque, in venenatis nunc pellentesque. Fusce ex dolor, egestas a convallis non, facilisis eu ante. Nulla facilisi.
                </p>
                <p>
                    2010: Curabitur eu aliquet risus, ac dapibus est. Morbi at felis vitae neque congue blandit. Cras metus sem, facilisis in purus sit amet, sollicitudin fringilla velit. Ut feugiat leo nec metus molestie semper. Morbi porta condimentum posuere. Maecenas quis nunc fringilla lectus mattis euismod. Cras egestas vitae mauris eu fringilla.
                </p>
                <p>
                    2012: Sed laoreet lobortis ornare. Aenean diam sem, elementum id felis in, consectetur tempor lectus. Aliquam molestie tellus nisi, pharetra placerat turpis viverra vestibulum. Nulla elementum mollis tortor ut tincidunt. Duis vehicula, nibh a laoreet rhoncus, ligula orci condimentum dolor, non scelerisque justo tellus a massa. Sed a nisl malesuada, eleifend risus vel, posuere quam. Duis dignissim ipsum id nisi consequat commodo. Morbi et laoreet diam. Donec in velit lorem. Fusce ullamcorper dolor id molestie venenatis. Suspendisse potenti.
                </p>
                <p>
                    2014: Vestibulum pulvinar felis id augue lobortis luctus. Morbi varius et leo at consectetur. In posuere lacus non lacus faucibus, quis lacinia velit aliquam. Fusce id nulla sed ligula sodales eleifend sit amet vitae velit. Vestibulum id risus sem. Nullam aliquam, leo nec sodales varius, ex leo sollicitudin sem, vel mollis nulla metus sodales ex. Aenean in arcu urna. Pellentesque pellentesque leo sed mollis euismod. Integer euismod, enim vehicula euismod pellentesque, augue mi semper eros, luctus bibendum dui diam nec massa.
                </p>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">
                <div class=\"media\">
                    <a class=\"media-left media-middle\" href=\"#\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/portrait3.jpg"), "html", null, true);
        echo "\" alt=\"Le portrait 3\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Bobby</h4>
                        <p>
                            \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"
                        </p>
                    </div>
                </div>
                <div class=\"media\">
                    <a class=\"media-left media-middle\" href=\"#\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/portrait4.jpg"), "html", null, true);
        echo "\" alt=\"Le portrait 4\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Alfred</h4>
                        <p>
                            \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"
                        </p>
                    </div>
                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane\" id=\"equipe\">
                <div class=\"media\">
                    <a class=\"media-left media-middle\" href=\"#\">
                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/portrait1.jpg"), "html", null, true);
        echo "\" alt=\"Le portrait 1\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Gertrude</h4>
                        <p>
                            \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"
                        </p>
                    </div>
                </div>
                <div class=\"media\">
                    <a class=\"media-left media-middle\" href=\"#\">
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/santor/assets/img/portrait2.jpg"), "html", null, true);
        echo "\" alt=\"Le portrait 2\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Marie Françoise</h4>
                        <p>
                            \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SantorMainBundle:Default:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 73,  106 => 62,  90 => 49,  76 => 38,  44 => 8,  41 => 7,  36 => 5,  30 => 3,);
    }
}
