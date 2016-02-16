<?php

/* /home/stikesbm/webserver/web/themes/modern/partials/menu/menu-default.htm */
class __TwigTemplate_b873b88c210599e15c4d2f11a8ac9ba7a535078a845e16a20f686bd6a6776e3e extends Twig_Template
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
        if ($this->getAttribute((isset($context["staticMenu"]) ? $context["staticMenu"] : null), "menuItems", array())) {
            // line 2
            echo "    <ul class='nav navbar-nav'>
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = $this->getAttribute((isset($context["staticMenu"]) ? $context["staticMenu"] : null), "menuItems", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction("menu/menu-items"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/web/themes/modern/partials/menu/menu-default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if staticMenu.menuItems %}*/
/*     <ul class='nav navbar-nav'>*/
/*         {% partial 'menu/menu-items' items=staticMenu.menuItems %}*/
/*     </ul>*/
/* {% endif %}*/
