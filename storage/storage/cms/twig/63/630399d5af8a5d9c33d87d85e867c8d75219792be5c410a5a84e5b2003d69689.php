<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/partials/menu/menu-bottom-items.htm */
class __TwigTemplate_b97740894d9eaefbcfd1cb851190fb3357c334fd9bbe14492fbd49a777ab299f extends Twig_Template
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
            // line 2
            echo "    <div class=\"col-md-2 col-sm-2\">
    \t<div class=\"widget\">
    \t\t<h3>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h3>
    \t\t<ul>
    \t\t\t";
            // line 6
            if ($this->getAttribute($context["item"], "items", array())) {
                // line 7
                echo "\t    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 8
                    echo "\t    \t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "title", array()), "html", null, true);
                    echo "</a></li>
\t    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "    \t\t\t";
            }
            // line 11
            echo "    \t\t</ul>
    \t</div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/partials/menu/menu-bottom-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 10,  39 => 8,  34 => 7,  32 => 6,  27 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for item in items %}*/
/*     <div class="col-md-2 col-sm-2">*/
/*     	<div class="widget">*/
/*     		<h3>{{ item.title }}</h3>*/
/*     		<ul>*/
/*     			{% if item.items %}*/
/* 	    			{% for child in item.items %}*/
/* 	    				<li><a href="{{child.url}}">{{child.title}}</a></li>*/
/* 	    			{% endfor %}*/
/*     			{% endif %}*/
/*     		</ul>*/
/*     	</div>*/
/*     </div>*/
/* {% endfor %}*/
