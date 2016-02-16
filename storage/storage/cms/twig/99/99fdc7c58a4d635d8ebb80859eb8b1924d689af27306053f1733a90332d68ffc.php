<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/pages/404.htm */
class __TwigTemplate_452a599f30522efea90d2009674ebdda0ea771426ff7c6d56a6b663d48c4ebb6 extends Twig_Template
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
  <meta charset=\"UTF-8\">
  <title>Error 404 - Page not found</title>
  <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lato:300,900\">
  <link href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/error.css"));
        // line 9
        echo "\" rel=\"stylesheet\">
</head>
<body class=\"page-404\">
  <div class=\"container\">
    <div class=\"message animated bounceIn\">
      <div class=\"display-table\">
        <div class=\"display-table-cell\">
          <svg class=\"icon icon-left icon-x\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-x\"></use></svg>
        </div>
        <div class=\"display-table-cell\">
          <h1>Error 404</h1>
          <h2>Page not Found!</h2>
        </div>
      </div>
    </div>
  </div>
  <svg class=\"icons\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"><symbol viewBox=\"0 0 512 512\" id=\"icon-x\"><title>x</title><path d=\"M438.393 374.595L319.757 255.977l118.62-118.63-63.782-63.74-118.6 118.618-118.62-118.603-63.768 63.73 118.64 118.63L73.62 374.626l63.73 63.768 118.65-118.66 118.65 118.645z\"/></symbol></svg>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <meta charset="UTF-8">*/
/*   <title>Error 404 - Page not found</title>*/
/*   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,900">*/
/*   <link href="{{ [*/
/*         'assets/css/error.css'*/
/*     ]|theme }}" rel="stylesheet">*/
/* </head>*/
/* <body class="page-404">*/
/*   <div class="container">*/
/*     <div class="message animated bounceIn">*/
/*       <div class="display-table">*/
/*         <div class="display-table-cell">*/
/*           <svg class="icon icon-left icon-x"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-x"></use></svg>*/
/*         </div>*/
/*         <div class="display-table-cell">*/
/*           <h1>Error 404</h1>*/
/*           <h2>Page not Found!</h2>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <svg class="icons" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><symbol viewBox="0 0 512 512" id="icon-x"><title>x</title><path d="M438.393 374.595L319.757 255.977l118.62-118.63-63.782-63.74-118.6 118.618-118.62-118.603-63.768 63.73 118.64 118.63L73.62 374.626l63.73 63.768 118.65-118.66 118.65 118.645z"/></symbol></svg>*/
/* </body>*/
/* </html>*/
