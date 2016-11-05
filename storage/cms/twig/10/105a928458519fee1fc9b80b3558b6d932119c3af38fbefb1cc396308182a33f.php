<?php

/* C:\wamp\www\web/themes/offa/layouts/fallback.htm */
class __TwigTemplate_8b89199da9e4aa04366cd7ab7fbbe0a38d6763ae528a846809d50e5676f5cd08 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\web/themes/offa/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% page %}";
    }
}
