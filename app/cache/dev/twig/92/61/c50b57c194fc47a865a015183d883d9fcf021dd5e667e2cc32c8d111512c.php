<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_9261c50b57c194fc47a865a015183d883d9fcf021dd5e667e2cc32c8d111512c extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche"), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,  179 => 64,  174 => 31,  169 => 12,  164 => 7,  159 => 6,  153 => 5,  148 => 65,  146 => 64,  142 => 63,  138 => 62,  130 => 57,  121 => 51,  117 => 50,  109 => 45,  102 => 40,  100 => 39,  91 => 32,  89 => 31,  83 => 27,  81 => 26,  76 => 24,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  25 => 1,  77 => 14,  74 => 13,  69 => 15,  67 => 13,  64 => 12,  58 => 11,  49 => 8,  44 => 7,  35 => 6,  32 => 4,  29 => 4,  93 => 40,  86 => 36,  80 => 33,  75 => 31,  71 => 30,  66 => 28,  62 => 27,  53 => 21,  39 => 7,  33 => 7,  31 => 5,  28 => 5,);
    }
}
