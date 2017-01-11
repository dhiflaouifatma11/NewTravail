<?php

/* EcommerceBundle:Administration:Categories/layout/show.html.twig */
class __TwigTemplate_2e49d147c23b9417e3413d58a7e4322283f5a0994320ea77d79688ab14267ba2 extends Twig_Template
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
        echo "<h1>Categories</h1>

<div class=\"table-responsive\">
    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <div>


        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("adminCategories");
        echo "\" class=\"btn btn-info btn-xs\" > Retour

        </a>


        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminCategories_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-xs\">
            Modifier
        </a>

        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(        $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form')), "html", null, true);
        echo "\" class=\"btn btn-danger btn-xs\">
            Supprimer
        </a>

        ";
        // line 37
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Categories/layout/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  73 => 32,  66 => 28,  58 => 23,  47 => 15,  40 => 11,  31 => 4,  28 => 3,);
    }
}
