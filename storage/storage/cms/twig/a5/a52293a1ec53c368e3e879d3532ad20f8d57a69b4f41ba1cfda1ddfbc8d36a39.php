<?php

/* /home/stikesbm/webserver/siakad-cms/plugins/ardani/stikes/components/gallery/default.htm */
class __TwigTemplate_a33f1ecc960f36ab130e7cf125212d48bdd2a1abd161e50e8e3c18e427ddfc43 extends Twig_Template
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
        $context["galleries"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "galleries", array());
        // line 2
        echo "<div class=\"row\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 4
            echo "    <div class=\"col-xs-12 col-sm-4 col-md-3\">
        <div class=\"recent-work-wrap\">
            <img class=\"img-responsive\" src=\"";
            // line 6
            echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute($context["gallery"], "image_path", array()));
            echo "\" alt=\"\">
            <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                    <h3><a href=\"#\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "judul", array()), "html", null, true);
            echo "</a> </h3>
                    <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "deskripsi", array()), "html", null, true);
            echo "</p>
                    <a class=\"preview\" href=\"";
            // line 11
            echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute($context["gallery"], "image_path", array()));
            echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/plugins/ardani/stikes/components/gallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  46 => 11,  42 => 10,  38 => 9,  32 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set galleries = __SELF__.galleries %}*/
/* <div class="row">*/
/*     {% for gallery in galleries %}*/
/*     <div class="col-xs-12 col-sm-4 col-md-3">*/
/*         <div class="recent-work-wrap">*/
/*             <img class="img-responsive" src="{{gallery.image_path | media}}" alt="">*/
/*             <div class="overlay">*/
/*                 <div class="recent-work-inner">*/
/*                     <h3><a href="#">{{ gallery.judul}}</a> </h3>*/
/*                     <p>{{gallery.deskripsi}}</p>*/
/*                     <a class="preview" href="{{gallery.image_path|media}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/* </div>*/
