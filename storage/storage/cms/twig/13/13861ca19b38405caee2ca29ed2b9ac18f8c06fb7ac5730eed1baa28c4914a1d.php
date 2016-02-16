<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/partials/fasilitas-kampus.htm */
class __TwigTemplate_8a4d8c6de2db297e278b1489543857001d5b07a78b139c828c13ef14d2ec0109 extends Twig_Template
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
            <p class=\"lead\">Fasilitas kampus yang kami miliki untuk menunjang aktivitas Akademik </p>
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
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/partials/fasilitas-kampus.htm";
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
/*             <p class="lead">Fasilitas kampus yang kami miliki untuk menunjang aktivitas Akademik </p>*/
/*         </div>*/
/*     {% component 'Gallery' %}*/
/*     </div>*/
