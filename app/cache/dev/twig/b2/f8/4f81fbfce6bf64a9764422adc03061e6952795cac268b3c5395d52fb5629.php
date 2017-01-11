<?php

/* EcommerceBundle:Administration:Produits/layout/new.html.twig */
class __TwigTemplate_b2f84f81fbfce6bf64a9764422adc03061e6952795cac268b3c5395d52fb5629 extends Twig_Template
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
        echo "    <h1> Ajout Produit </h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("adminProduits_create");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </form>
    
        <ul class=\"record_actions\">

        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\" ></a>



                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\" class=\"btn btn-info btn-xs\" > Retour

                </a>

</ul>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  49 => 12,  41 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
