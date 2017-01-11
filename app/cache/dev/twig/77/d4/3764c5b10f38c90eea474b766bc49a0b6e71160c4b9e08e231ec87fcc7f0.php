<?php

/* UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig */
class __TwigTemplate_77d43764c5b10f38c90eea474b766bc49a0b6e71160c4b9e08e231ec87fcc7f0 extends Twig_Template
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
        echo "<h1>Utilisateurs liste</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "username"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses")) != 0)) {
                // line 19
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminAdressesUtilisateurs", array("id" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id"))), "html", null, true);
                echo "\" title=\"Consulter les adresses\"><i class=\"icon-eye-open\"></i></a>
                    ";
            }
            // line 21
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "commandes")) != 0)) {
                // line 22
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminFacturesUtilisateurs", array("id" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id"))), "html", null, true);
                echo "\" title=\"Consulter les factures\"><i class=\"icon-eye-open\"></i></a>
                    ";
            }
            // line 24
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  72 => 24,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,);
    }
}
