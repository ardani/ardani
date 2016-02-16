<?php

/* /home/stikesbm/webserver/web/themes/modern/partials/fasilitas-kampus.htm */
class __TwigTemplate_632ba7f360f58c7d8b6cdadfc5e453daed375ca235724644ce4385355ed11515 extends Twig_Template
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
        echo "<div class=\"container\">
        <div class=\"center wow fadeInDown animated\" style=\"visibility: visible; animation-name: fadeInDown;\">
            <h2>Fasilitas Kampus</h2>
            <p class=\"lead\">Fasilitas kampus yang kami miliki untuk menunjang aktifitas Akademik </p>
        </div>
    ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Gallery"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/web/themes/modern/partials/fasilitas-kampus.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="container">*/
/*         <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">*/
/*             <h2>Fasilitas Kampus</h2>*/
/*             <p class="lead">Fasilitas kampus yang kami miliki untuk menunjang aktifitas Akademik </p>*/
/*         </div>*/
/*     {% component 'Gallery' %}*/
/*     </div>*/
