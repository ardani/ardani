<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/layouts/static-layout.htm */
class __TwigTemplate_3195a6364c77b3e3a80f67d95ff838195cc4acab20e6bdfe6098a3e4d6761e7a extends Twig_Template
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
    <meta name=\"description\" content=\"STIKES Bhaktimulia adalah sekolah tinggi kesehatan dengan 
    pendidikan yang baik dan berkualias, didukung dosen dosen yang terbaik bertujuan menciptakan lulusan terbaik dalam bidang kesehatan\">
    <meta name=\"keywords\" content=\"Mahasiswa,Sekolah,Tinggi,STIKES,Kesehatan,
    Bidan,AKBID,NERS,Perawat,Kediri,Penelitian,Jawa timur,Bhakti,Bakti,Mulia,\">
    <meta property=\"og:title\" content=\"STIKES Bhakti Mulia\">
\t<meta property=\"og:description\" content=\"STIKES Bhaktimulia adalah sekolah tinggi kesehatan dengan 
    pendidikan yang baik dan berkualias, didukung dosen dosen yang terbaik bertujuan menciptakan lulusan terbaik dalam bidang kesehatan\">
\t<meta property=\"og:image\" content=\"http://stikesbhaktimulia.ac.id/storage/app/media/logo-kecil.png\">
    <meta name=\"author\" content=\"STIKES Bhakti Mulia\">
    <title>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " </title>
    <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/prettyPhoto.css", 4 => "assets/css/opensans.css", 5 => "assets/css/main.css", 6 => "assets/css/responsive.css"));
        // line 24
        echo "\" rel=\"stylesheet\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-57x57.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-60x60.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-72x72.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-76x76.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-114x114.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-120x120.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-144x144.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-152x152.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/apple-icon-180x180.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 34
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/android-icon-192x192.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 36
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/favicon-96x96.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 37
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/manifest.json");
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 40
        echo $this->env->getExtension('CMS')->themeFilter("assets/favicon/ms-icon-144x144.png");
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!--[if lt IE 9]>
    <script src=\"";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/html5shiv.js"));
        echo "\"></script>
    <script src=\"";
        // line 44
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/respond.min.js"));
        echo "\"></script>
    <![endif]-->
    <!-- Piwik -->
    <script type=\"text/javascript\">
        var _paq = _paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u=\"//piwik.stikesbhaktimulia.ac.id/\";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 1]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src=\"//piwik.stikesbhaktimulia.ac.id/piwik.php?idsite=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
    <!-- End Piwik Code -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-40313453-3', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
    ";
        // line 73
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['no_telp'] = (isset($context["no_telp"]) ? $context["no_telp"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 74
        echo "<section id=\"content\" class=\"container\">
    ";
        // line 75
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 76
        echo "</section><!--/#content-->
";
        // line 77
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['no_telp'] = (isset($context["no_telp"]) ? $context["no_telp"] : null)        ;
        $context['__cms_partial_params']['nama_instansi'] = (isset($context["nama_instansi"]) ? $context["nama_instansi"] : null)        ;
        $context['__cms_partial_params']['no_fax'] = (isset($context["no_fax"]) ? $context["no_fax"] : null)        ;
        $context['__cms_partial_params']['alamat'] = (isset($context["alamat"]) ? $context["alamat"] : null)        ;
        $context['__cms_partial_params']['email'] = (isset($context["email"]) ? $context["email"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 78
        echo "<footer id=\"footer\" class=\"midnight-blue\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                &copy; 2013 ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a target=\"_blank\" href=\"#\" >STIKES BHAKTI MULIA</a>. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
    <script src=\"http://code.jquery.com/jquery-2.2.0.min.js\"></script>
    <script src=\"";
        // line 88
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 89
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script src=\"";
        // line 90
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.easy-ticker.min.js");
        echo "\"></script>
    <script src=\"";
        // line 91
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
    <script src=\"";
        // line 92
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 93
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/login.js");
        echo "\"></script>
";
        // line 94
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 95
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 96
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 96,  211 => 95,  204 => 94,  200 => 93,  196 => 92,  192 => 91,  188 => 90,  184 => 89,  180 => 88,  171 => 82,  165 => 78,  156 => 77,  153 => 76,  151 => 75,  148 => 74,  143 => 73,  111 => 44,  107 => 43,  101 => 40,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  52 => 27,  48 => 26,  44 => 25,  41 => 24,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="STIKES Bhaktimulia adalah sekolah tinggi kesehatan dengan */
/*     pendidikan yang baik dan berkualias, didukung dosen dosen yang terbaik bertujuan menciptakan lulusan terbaik dalam bidang kesehatan">*/
/*     <meta name="keywords" content="Mahasiswa,Sekolah,Tinggi,STIKES,Kesehatan,*/
/*     Bidan,AKBID,NERS,Perawat,Kediri,Penelitian,Jawa timur,Bhakti,Bakti,Mulia,">*/
/*     <meta property="og:title" content="STIKES Bhakti Mulia">*/
/* 	<meta property="og:description" content="STIKES Bhaktimulia adalah sekolah tinggi kesehatan dengan */
/*     pendidikan yang baik dan berkualias, didukung dosen dosen yang terbaik bertujuan menciptakan lulusan terbaik dalam bidang kesehatan">*/
/* 	<meta property="og:image" content="http://stikesbhaktimulia.ac.id/storage/app/media/logo-kecil.png">*/
/*     <meta name="author" content="STIKES Bhakti Mulia">*/
/*     <title>{{ this.page.title }} </title>*/
/*     <link href="{{ [*/
/*         'assets/css/bootstrap.min.css',*/
/*         'assets/css/font-awesome.min.css',*/
/*         'assets/css/animate.min.css',*/
/*         'assets/css/prettyPhoto.css',*/
/*         'assets/css/opensans.css',*/
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
/*     <!-- Piwik -->*/
/*     <script type="text/javascript">*/
/*         var _paq = _paq || [];*/
/*         _paq.push(['trackPageView']);*/
/*         _paq.push(['enableLinkTracking']);*/
/*         (function() {*/
/*             var u="//piwik.stikesbhaktimulia.ac.id/";*/
/*             _paq.push(['setTrackerUrl', u+'piwik.php']);*/
/*             _paq.push(['setSiteId', 1]);*/
/*             var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];*/
/*             g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);*/
/*         })();*/
/*     </script>*/
/*     <noscript><p><img src="//piwik.stikesbhaktimulia.ac.id/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>*/
/*     <!-- End Piwik Code -->*/
/*     <script>*/
/*         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*                 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*         ga('create', 'UA-40313453-3', 'auto');*/
/*         ga('send', 'pageview');*/
/* */
/*     </script>*/
/* </head>*/
/* <body>*/
/*     {% partial "header" no_telp = no_telp %}*/
/* <section id="content" class="container">*/
/*     {% page %}*/
/* </section><!--/#content-->*/
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
/*     <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>*/
/*     <script src="{{ 'assets/js/bootstrap.min.js' | theme }}"></script>*/
/*     <script src="{{ 'assets/js/jquery.prettyPhoto.js' | theme }}"></script>*/
/*     <script src="{{ 'assets/js/jquery.easy-ticker.min.js' | theme }}"></script>*/
/*     <script src="{{ 'assets/js/main.js' | theme }}"></script>*/
/*     <script src="{{ 'assets/js/wow.min.js' | theme }}"></script>*/
/*     <script src="{{ 'assets/js/login.js' | theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
/* </body>*/
/* </html>*/
