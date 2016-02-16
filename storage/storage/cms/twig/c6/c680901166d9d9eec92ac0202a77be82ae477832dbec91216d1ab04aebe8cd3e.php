<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/partials/header.htm */
class __TwigTemplate_741a37ff2ab3c7b247543e867a23eb34e0efdd71afbee5e58a7f61d805967b3b extends Twig_Template
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
        echo "<header id=\"header\">
    <div class=\"top-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-xs-4\">
                    <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["no_telp"]) ? $context["no_telp"] : null), "html", null, true);
        echo "</p></div>
                </div>
                <div class=\"col-sm-6 col-xs-8\">
                    <div class=\"social\">
                        <ul class=\"social-share\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        </ul>
                        <div class=\"search\">
                        \t<form role=\"form\" method=\"get\" action=\"";
        // line 14
        echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "resultPage", array()));
        echo "\">
\t\t\t\t\t\t\t    <input type=\"text\" name=\"search\" class=\"search-form\" autocomplete=\"off\" placeholder=\"pencarian\">
\t\t\t\t\t\t\t    <i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class=\"navbar navbar-inverse\" role=\"banner\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"></a>
            </div>

            <div class=\"collapse navbar-collapse navbar-right\">
                ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("menu/menu-default"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  64 => 38,  37 => 14,  26 => 6,  19 => 1,);
    }
}
/* <header id="header">*/
/*     <div class="top-bar">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 col-xs-4">*/
/*                     <div class="top-number"><p><i class="fa fa-phone-square"></i>  {{ no_telp }}</p></div>*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-xs-8">*/
/*                     <div class="social">*/
/*                         <ul class="social-share">*/
/*                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                         </ul>*/
/*                         <div class="search">*/
/*                         	<form role="form" method="get" action="{{ searchForm.resultPage|page }}">*/
/* 							    <input type="text" name="search" class="search-form" autocomplete="off" placeholder="pencarian">*/
/* 							    <i class="fa fa-search"></i>*/
/* 							</form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!--/.container-->*/
/*     </div><!--/.top-bar-->*/
/* */
/*     <nav class="navbar navbar-inverse" role="banner">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#"></a>*/
/*             </div>*/
/* */
/*             <div class="collapse navbar-collapse navbar-right">*/
/*                 {% partial 'menu/menu-default'%}*/
/*             </div>*/
/*         </div><!--/.container-->*/
/*     </nav><!--/nav-->*/
/* </header><!--/header-->*/
