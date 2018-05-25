<?php

/* home.twig */
class __TwigTemplate_bd12a595cd9bdfa407619ae6d69977a7e50f7a7cf00a51da8c3d2b06bbe2a310 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>This page was rendered in <strong>Twig</strong></h1>

Twig was included as a view mangement engine inside slim's container
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "C:\\xampp\\htdocs\\project\\templates\\home.twig");
    }
}
