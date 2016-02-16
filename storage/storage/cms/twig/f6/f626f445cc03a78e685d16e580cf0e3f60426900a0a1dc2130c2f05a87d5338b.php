<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/partials/slider.htm */
class __TwigTemplate_79b117a3566e6dc405f33939a7bc6c71806962c0f51540043216d91cca057093 extends Twig_Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section><!--/#main-slider-->";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="main-slider" class="no-margin">*/
/*     {% component 'Slider' %}*/
/*     <a class="prev hidden-xs" href="#main-slider" data-slide="prev">*/
/*         <i class="fa fa-chevron-left"></i>*/
/*     </a>*/
/*     <a class="next hidden-xs" href="#main-slider" data-slide="next">*/
/*         <i class="fa fa-chevron-right"></i>*/
/*     </a>*/
/* </section><!--/#main-slider-->*/
