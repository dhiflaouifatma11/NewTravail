<?php

/* PagesBundle:Administration:pages/layout/new.html.twig */
class __TwigTemplate_e5b930496805b8140a729aa3dcd3a60dfa77e2157d4ca4de5e13c967a3c94d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layoutAdmin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Pages creation</h2>
<div class=\"span9\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
<div class=\"span12\">
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\" class=\"btn btn-info btn-xs\">
                Retour
            </a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Administration:pages/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
