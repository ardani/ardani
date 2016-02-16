<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/partials/bottom.htm */
class __TwigTemplate_627414e97be690fb289d81e9669a6a82ce64b534f20a796681aebaf9c6f8643f extends Twig_Template
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
        echo "<section id=\"bottom\">
    <div class=\"container\">
        <div class=\"row\">
        \t";
        // line 4
        if ($this->getAttribute((isset($context["staticMenuBottom"]) ? $context["staticMenuBottom"] : null), "menuItems", array())) {
            // line 5
            echo "        \t\t\t";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = $this->getAttribute((isset($context["staticMenuBottom"]) ? $context["staticMenuBottom"] : null), "menuItems", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction("menu/menu-bottom-items"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "\t\t\t";
        }
        // line 7
        echo "            
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"widget\">
                    <h3>Kontak Kami</h3>
                    <address>
                        <strong>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nama_instansi"]) ? $context["nama_instansi"] : null), "html", null, true);
        echo "</strong> <br>
                        Alamat :  ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["alamat"]) ? $context["alamat"] : null), "html", null, true);
        echo " <br> No Telp : ";
        echo twig_escape_filter($this->env, (isset($context["no_telp"]) ? $context["no_telp"] : null), "html", null, true);
        echo " <br> No Fax : ";
        echo twig_escape_filter($this->env, (isset($context["no_fax"]) ? $context["no_fax"] : null), "html", null, true);
        echo "<br>
                        <em>Email : ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo " </em>
                    </address>
                </div>
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  46 => 13,  42 => 12,  35 => 7,  32 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <section id="bottom">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*         	{% if staticMenuBottom.menuItems %}*/
/*         			{% partial 'menu/menu-bottom-items' items=staticMenuBottom.menuItems %}*/
/* 			{% endif %}*/
/*             */
/*             <div class="col-md-4 col-sm-4">*/
/*                 <div class="widget">*/
/*                     <h3>Kontak Kami</h3>*/
/*                     <address>*/
/*                         <strong>{{ nama_instansi }}</strong> <br>*/
/*                         Alamat :  {{ alamat }} <br> No Telp : {{ no_telp }} <br> No Fax : {{ no_fax }}<br>*/
/*                         <em>Email : {{ email }} </em>*/
/*                     </address>*/
/*                 </div>*/
/*             </div><!--/.col-md-3-->*/
/*         </div>*/
/*     </div>*/
/* </section><!--/#bottom-->*/
