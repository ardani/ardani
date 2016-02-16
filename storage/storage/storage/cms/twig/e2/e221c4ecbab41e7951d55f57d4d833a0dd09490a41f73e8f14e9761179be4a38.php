<?php

/* /home/stikesbm/webserver/web/themes/modern/partials/menu/menu-items.htm */
class __TwigTemplate_4a9b201f1ad0a95540d2056319cb176a799e798b479adbdfcbb23662df2464b6 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !$this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "isHidden", array())) {
                // line 2
                echo "    <li class=\"";
                echo (($this->getAttribute($context["item"], "isActive", array())) ? ("active") : (""));
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
                echo "\">
        <a ";
                // line 3
                echo (($this->getAttribute($context["item"], "items", array())) ? ("class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"") : (""));
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" ";
                echo (($this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "isExternal", array())) ? ("target=\"_blank\"") : (""));
                echo ">
            ";
                // line 4
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo " ";
                echo (($this->getAttribute($context["item"], "items", array())) ? ("<span class=\"caret\"></span>") : (""));
                echo "
        </a>

        ";
                // line 7
                if ($this->getAttribute($context["item"], "items", array())) {
                    // line 8
                    echo "            <ul class=\"dropdown-menu\">";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = $this->getAttribute($context["item"], "items", array())                    ;
                    echo $this->env->getExtension('CMS')->partialFunction("menu/menu-items"                    , $context['__cms_partial_params']                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
        ";
                }
                // line 10
                echo "    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/web/themes/modern/partials/menu/menu-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  49 => 8,  47 => 7,  39 => 4,  31 => 3,  24 => 2,  19 => 1,);
    }
}
/* {% for item in items if not item.viewBag.isHidden %}*/
/*     <li class="{{ item.isActive ? 'active' : '' }} {{item.viewBag.cssClass}}">*/
/*         <a {{ item.items ? 'class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"' : '' }} href="{{ item.url }}" {{ item.viewBag.isExternal ? 'target="_blank"' }}>*/
/*             {{ item.title }} {{ item.items ? '<span class="caret"></span>' : '' }}*/
/*         </a>*/
/* */
/*         {% if item.items %}*/
/*             <ul class="dropdown-menu">{% partial 'menu/menu-items' items=item.items %}</ul>*/
/*         {% endif %}*/
/*     </li>*/
/* {% endfor %}*/
