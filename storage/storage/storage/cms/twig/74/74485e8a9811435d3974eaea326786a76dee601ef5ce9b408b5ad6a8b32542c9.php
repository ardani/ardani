<?php

/* /home/stikesbm/webserver/web/plugins/ardani/stikes/components/slider/default.htm */
class __TwigTemplate_4b6d6313027a99f702482f3acc0b1ec9231b5a2a777ddfc8546d1f8eb4565ba1 extends Twig_Template
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
        $context["sliders"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "sliders", array());
        // line 2
        echo "<div class=\"carousel slide\" data-interval=\"4000\">
    <ol class=\"carousel-indicators\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 5
            echo "            <li data-target=\"#main-slider\" data-slide-to=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
            echo "\" class=\"";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\"></li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ol>
    <div class=\"carousel-inner\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 10
            echo "        <div class=\"item ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slider"], "picture", array()), "path", array()), "html", null, true);
            echo "')\">
            <div class=\"container\">
                <div class=\"row slide-margin\">
                    <div class=\"col-sm-6\">
                        <div class=\"carousel-content\">
                            <h1 class=\"animation animated-item-1\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "judul", array()), "html", null, true);
            echo "</h1>
                            <h2 class=\"animation animated-item-2\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "deskripsi", array()), "html", null, true);
            echo "</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div><!--/.carousel-inner-->
</div><!--/.carousel-->
<span class=\"shadow center-block\"></span>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/web/plugins/ardani/stikes/components/slider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 23,  97 => 16,  93 => 15,  82 => 10,  65 => 9,  61 => 7,  42 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set sliders = __SELF__.sliders %}*/
/* <div class="carousel slide" data-interval="4000">*/
/*     <ol class="carousel-indicators">*/
/*         {% for slider in sliders %}*/
/*             <li data-target="#main-slider" data-slide-to="{{loop.index-1}}" class="{{ loop.first ? 'active' : '' }}"></li>*/
/*         {% endfor %}*/
/*     </ol>*/
/*     <div class="carousel-inner">*/
/*         {% for slider in sliders %}*/
/*         <div class="item {{ loop.first ? 'active' : '' }}" style="background-image: url('{{ slider.picture.path }}')">*/
/*             <div class="container">*/
/*                 <div class="row slide-margin">*/
/*                     <div class="col-sm-6">*/
/*                         <div class="carousel-content">*/
/*                             <h1 class="animation animated-item-1">{{slider.judul}}</h1>*/
/*                             <h2 class="animation animated-item-2">{{slider.deskripsi}}</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!--/.item-->*/
/*         {% endfor %}*/
/*     </div><!--/.carousel-inner-->*/
/* </div><!--/.carousel-->*/
/* <span class="shadow center-block"></span>*/
