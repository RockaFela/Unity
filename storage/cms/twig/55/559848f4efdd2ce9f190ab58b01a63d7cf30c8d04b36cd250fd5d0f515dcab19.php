<?php

/* C:\wamp\www\web/themes/offa/pages/404.htm */
class __TwigTemplate_edbd66f1e330c9a350266308a51864d0109880b12f959ba286001511eb02f28a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"error\" class=\"container text-center\">
        <h1>404,This Page Cannot Be Found</h1>
        <p>The page you are requested for doesn't exist or an error occurred.</p>
        <a class=\"btn btn-primary\" href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\web/themes/offa/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"error\" class=\"container text-center\">
        <h1>404,This Page Cannot Be Found</h1>
        <p>The page you are requested for doesn't exist or an error occurred.</p>
        <a class=\"btn btn-primary\" href=\"{{ 'home'|page }}\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }
}
