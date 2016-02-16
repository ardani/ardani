<?php

/* /home/stikesbm/webserver/web/themes/modern/layouts/main.htm */
class __TwigTemplate_255b35a608b2daf4732473002854149925ebd718f4890a2fb496877f8dd15ca1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "description", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Nest Project\">
    <title>STMIK BHAKTI MULIA | ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " </title>
    <link href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/prettyPhoto.css", 4 => "assets/css/main.css", 5 => "assets/css/responsive.css"));
        // line 17
        echo "\" rel=\"stylesheet\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-57x57.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-60x60.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-72x72.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-76x76.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-114x114.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-120x120.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-144x144.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-152x152.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-180x180.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/android-icon-192x192.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/favicon-96x96.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/manifest.json");
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/ms-icon-144x144.png");
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!--[if lt IE 9]>
    <script src=\"";
        // line 36
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/html5shiv.js"));
        echo "\"></script>
    <script src=\"";
        // line 37
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/respond.min.js"));
        echo "\"></script>
    <![endif]-->
</head>

<body class=\"homepage\">
    ";
        // line 42
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['no_telp'] = (isset($context["no_telp"]) ? $context["no_telp"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "<section id=\"last-article\" class=\"\">
    ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("informasi-terakhir"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "</section>

<section id=\"recent-works\">
   ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("fasilitas-kampus"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "</section>

<section id=\"services\">
    ";
        // line 53
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("layanan"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 54
        echo "</section>

<section id=\"partner\">
    ";
        // line 57
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("partner"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 58
        echo "</section>

";
        // line 60
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['no_telp'] = (isset($context["no_telp"]) ? $context["no_telp"] : null)        ;
        $context['__cms_partial_params']['nama_instansi'] = (isset($context["nama_instansi"]) ? $context["nama_instansi"] : null)        ;
        $context['__cms_partial_params']['no_fax'] = (isset($context["no_fax"]) ? $context["no_fax"] : null)        ;
        $context['__cms_partial_params']['alamat'] = (isset($context["alamat"]) ? $context["alamat"] : null)        ;
        $context['__cms_partial_params']['email'] = (isset($context["email"]) ? $context["email"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "<footer id=\"footer\" class=\"midnight-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                &copy; 2013 ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a target=\"_blank\" href=\"#\" >STIKES BHAKTI MULIA</a>. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 70
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/jquery.prettyPhoto.js", 3 => "assets/js/main.js", 4 => "assets/js/wow.min.js", 5 => "assets/js/login.js"));
        // line 77
        echo "\"></script>
";
        // line 78
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 79
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 80
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/web/themes/modern/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 80,  199 => 79,  192 => 78,  189 => 77,  187 => 70,  179 => 65,  173 => 61,  164 => 60,  160 => 58,  156 => 57,  151 => 54,  147 => 53,  142 => 50,  138 => 49,  133 => 46,  129 => 45,  126 => 44,  121 => 43,  116 => 42,  108 => 37,  104 => 36,  98 => 33,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  41 => 18,  38 => 17,  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="{{ this.theme.description }}">*/
/*     <meta name="author" content="Nest Project">*/
/*     <title>STMIK BHAKTI MULIA | {{ this.page.title }} </title>*/
/*     <link href="{{ [*/
/*         'assets/css/bootstrap.min.css',*/
/*         'assets/css/font-awesome.min.css',*/
/*         'assets/css/animate.min.css',*/
/*         'assets/css/prettyPhoto.css',*/
/*         'assets/css/main.css',*/
/*         'assets/css/responsive.css'*/
/*     ]|theme }}" rel="stylesheet">*/
/*     <link rel="apple-touch-icon" sizes="57x57" href="{{ 'assets/favicon/apple-icon-57x57.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="60x60" href="{{ 'assets/favicon/apple-icon-60x60.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="72x72" href="{{ 'assets/favicon/apple-icon-72x72.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="76x76" href="{{ 'assets/favicon/apple-icon-76x76.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="114x114" href="{{ 'assets/favicon/apple-icon-114x114.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="120x120" href="{{ 'assets/favicon/apple-icon-120x120.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="144x144" href="{{ 'assets/favicon/apple-icon-144x144.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="152x152" href="{{ 'assets/favicon/apple-icon-152x152.png' | theme }}">*/
/*     <link rel="apple-touch-icon" sizes="180x180" href="{{ 'assets/favicon/apple-icon-180x180.png' | theme }}">*/
/*     <link rel="icon" type="image/png" sizes="192x192"  href="{{ 'assets/favicon/android-icon-192x192.png' | theme }}">*/
/*     <link rel="icon" type="image/png" sizes="32x32" href="{{ 'assets/favicon/favicon-32x32.png' | theme }}">*/
/*     <link rel="icon" type="image/png" sizes="96x96" href="{{ 'assets/favicon/favicon-96x96.png' | theme }}">*/
/*     <link rel="icon" type="image/png" sizes="16x16" href="{{ 'assets/favicon/favicon-16x16.png' | theme }}">*/
/*     <link rel="manifest" href="{{ 'assets/favicon/manifest.json' | theme }}">*/
/*     <meta name="msapplication-TileColor" content="#ffffff">*/
/*     <meta name="msapplication-TileImage" content="{{ 'assets/favicon/ms-icon-144x144.png' | theme }}">*/
/*     <meta name="theme-color" content="#ffffff">*/
/*     <!--[if lt IE 9]>*/
/*     <script src="{{ ['assets/js/html5shiv.js']|theme }}"></script>*/
/*     <script src="{{ ['assets/js/respond.min.js']|theme }}"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body class="homepage">*/
/*     {% partial "header" no_telp = no_telp %}*/
/*     {% partial "slider" %}*/
/* <section id="last-article" class="">*/
/*     {% partial "informasi-terakhir" %}*/
/* </section>*/
/* */
/* <section id="recent-works">*/
/*    {% partial 'fasilitas-kampus' %}*/
/* </section>*/
/* */
/* <section id="services">*/
/*     {% content 'layanan'%}*/
/* </section>*/
/* */
/* <section id="partner">*/
/*     {% content 'partner'%}*/
/* </section>*/
/* */
/* {% partial "bottom" no_telp=no_telp nama_instansi=nama_instansi no_fax=no_fax alamat=alamat email=email %}*/
/* <footer id="footer" class="midnight-blue">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 &copy; 2013 {{ "now"|date("Y") }} <a target="_blank" href="#" >STIKES BHAKTI MULIA</a>. All Rights Reserved.*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <script src="{{ [*/
/*     'assets/js/jquery.js',*/
/*     'assets/js/bootstrap.min.js',*/
/*     'assets/js/jquery.prettyPhoto.js',*/
/*     'assets/js/main.js',*/
/*     'assets/js/wow.min.js',*/
/*     'assets/js/login.js',*/
/* ]|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
/* </body>*/
/* </html>*/
