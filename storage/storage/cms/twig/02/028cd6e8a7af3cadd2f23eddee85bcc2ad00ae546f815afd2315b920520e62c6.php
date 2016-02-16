<?php

/* /home/stikesbm/webserver/web/themes/modern/partials/bottom.htm */
class __TwigTemplate_3b25a97b3f89181021c7789aa4b7695f7f9850c0c1e9d07435b3a041faf1f714 extends Twig_Template
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
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Kampus</h3>
                    <ul>
                        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('System')->appFilter("/page/kampus/visi-dan-misi");
        echo "\">Visi Misi</a></li>
                        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('System')->appFilter("/page/kampus/jurusan-dan-fakultas");
        echo "\">Jurusan</a></li>
                        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('System')->appFilter("/informasi");
        echo "\">Informasi</a></li>
                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('System')->appFilter("/page/kampus/staf-pengajar");
        echo "\">Dosen & Karyawan</a></li>
                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('System')->appFilter("/page/kontak-kami");
        echo "\">Kontak Kami</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('System')->appFilter("/page/layanan/e-learning");
        echo "\">E - Learning</a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('System')->appFilter("/page/layanan/digilib");
        echo "\">Digilib</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('System')->appFilter("/page/layanan/siakad-online");
        echo "\">Siakad Online</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class=\"col-md-6 col-sm-6\">
                <div class=\"widget\">
                    <h3>Kontak Kami</h3>
                    <address>
                        ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["nama_instansi"]) ? $context["nama_instansi"] : null), "html", null, true);
        echo " <br>
                        alamat :  ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["alamat"]) ? $context["alamat"] : null), "html", null, true);
        echo " no telp : ";
        echo twig_escape_filter($this->env, (isset($context["no_telp"]) ? $context["no_telp"] : null), "html", null, true);
        echo " no fax : ";
        echo twig_escape_filter($this->env, (isset($context["no_fax"]) ? $context["no_fax"] : null), "html", null, true);
        echo "<br>
                        email : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "
                    </address>
                </div>
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/web/themes/modern/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  80 => 33,  76 => 32,  64 => 23,  60 => 22,  56 => 21,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <section id="bottom">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>Kampus</h3>*/
/*                     <ul>*/
/*                         <li><a href="{{ '/page/kampus/visi-dan-misi' | app }}">Visi Misi</a></li>*/
/*                         <li><a href="{{ '/page/kampus/jurusan-dan-fakultas' | app }}">Jurusan</a></li>*/
/*                         <li><a href="{{ '/informasi' | app }}">Informasi</a></li>*/
/*                         <li><a href="{{ '/page/kampus/staf-pengajar' | app }}">Dosen & Karyawan</a></li>*/
/*                         <li><a href="{{ '/page/kontak-kami' | app }}">Kontak Kami</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!--/.col-md-3-->*/
/* */
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>Layanan</h3>*/
/*                     <ul>*/
/*                         <li><a href="{{ '/page/layanan/e-learning' | app }}">E - Learning</a></li>*/
/*                         <li><a href="{{ '/page/layanan/digilib' | app }}">Digilib</a></li>*/
/*                         <li><a href="{{ '/page/layanan/siakad-online' | app }}">Siakad Online</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!--/.col-md-3-->*/
/* */
/*             <div class="col-md-6 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>Kontak Kami</h3>*/
/*                     <address>*/
/*                         {{ nama_instansi }} <br>*/
/*                         alamat :  {{ alamat }} no telp : {{ no_telp }} no fax : {{ no_fax }}<br>*/
/*                         email : {{ email }}*/
/*                     </address>*/
/*                 </div>*/
/*             </div><!--/.col-md-3-->*/
/*         </div>*/
/*     </div>*/
/* </section><!--/#bottom-->*/
