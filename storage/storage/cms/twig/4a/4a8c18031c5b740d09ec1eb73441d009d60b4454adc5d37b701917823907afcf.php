<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/partials/layanan.htm */
class __TwigTemplate_187609ad101907e99e4d522f040aa5cdb91a2673cffba3dae0e0ef68b1ae0a5f extends Twig_Template
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
        <div class=\"center wow fadeInDown animated\">
            <h2>Layanan Kampus</h2>
            <p class=\"lead\">Layanan kampus yang kami sediakan untuk mahasiswa dan dosen</p>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown animated\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src=\"";
        // line 11
        echo $this->env->getExtension('CMS')->mediaFilter("services4.png");
        echo "\">
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Perpustakaan</h3>
                        <p>Perpustakaan yang berisi buku buku untuk menunjang proses belajar </p>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown animated\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src=\"";
        // line 23
        echo $this->env->getExtension('CMS')->mediaFilter("services5.png");
        echo "\">
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">E-Learning</h3>
                        <p>Materi atau module yang tersedia dapat diakses secara online </p>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"media services-wrap wow fadeInDown animated\">
                    <div class=\"pull-left\">
                        <img class=\"img-responsive\" src=\"";
        // line 35
        echo $this->env->getExtension('CMS')->mediaFilter("services1.png");
        echo "\">
                    </div>
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">Siakad Online</h3>
                        <p>Proses KRS dan akses nilai IPK dapat dilakukan secara online oleh Mahasiswa</p>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/partials/layanan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 35,  46 => 23,  31 => 11,  19 => 1,);
    }
}
/* <div class="container">*/
/*         <div class="center wow fadeInDown animated">*/
/*             <h2>Layanan Kampus</h2>*/
/*             <p class="lead">Layanan kampus yang kami sediakan untuk mahasiswa dan dosen</p>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="media services-wrap wow fadeInDown animated">*/
/*                     <div class="pull-left">*/
/*                         <img class="img-responsive" src="{{ 'services4.png' | media }}">*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <h3 class="media-heading">Perpustakaan</h3>*/
/*                         <p>Perpustakaan yang berisi buku buku untuk menunjang proses belajar </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="media services-wrap wow fadeInDown animated">*/
/*                     <div class="pull-left">*/
/*                         <img class="img-responsive" src="{{ 'services5.png' | media }}">*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <h3 class="media-heading">E-Learning</h3>*/
/*                         <p>Materi atau module yang tersedia dapat diakses secara online </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="media services-wrap wow fadeInDown animated">*/
/*                     <div class="pull-left">*/
/*                         <img class="img-responsive" src="{{ 'services1.png' | media}}">*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <h3 class="media-heading">Siakad Online</h3>*/
/*                         <p>Proses KRS dan akses nilai IPK dapat dilakukan secara online oleh Mahasiswa</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!--/.row-->*/
/*     </div>*/
