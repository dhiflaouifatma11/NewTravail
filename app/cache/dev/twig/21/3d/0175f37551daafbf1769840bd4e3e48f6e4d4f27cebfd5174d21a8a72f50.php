<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_213d0175f37551daafbf1769840bd4e3e48f6e4d4f27cebfd5174d21a8a72f50 extends Twig_Template
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
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  23 => 2,  26 => 3,  24 => 4,  19 => 1,  127 => 44,  123 => 42,  116 => 38,  111 => 35,  102 => 31,  96 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  75 => 23,  71 => 21,  67 => 20,  64 => 19,  62 => 18,  57 => 15,  54 => 14,  48 => 12,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
