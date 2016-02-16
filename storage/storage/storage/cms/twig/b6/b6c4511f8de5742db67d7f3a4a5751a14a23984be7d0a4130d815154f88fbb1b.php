<?php

/* /home/stikesbm/webserver/web/themes/modern/partials/informasi-terakhir.htm */
class __TwigTemplate_99353590f6d330a821e6c970b415b1b661bc22a1596d75da8aed7f9165d0547d extends Twig_Template
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
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 2
        echo "<div class=\"container\" id=\"tourpackages-carousel\">
        <div class=\"center wow fadeInDown animated\" style=\"visibility: visible; animation-name: fadeInDown;\">
            <h2>Informasi Terakhir</h2>
            <p class=\"lead\">Informasi - informasi dari STIKES BHAKTI MULIA <br> ikuti web kami untuk mendapatkan informasi yang terbaru</p>
        </div>
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "\t\t\t    <div class=\"col-xs-18 col-sm-6 col-md-3\">
\t\t\t    \t<div class=\"thumbnail\">
\t\t\t    \t\t";
            // line 11
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 12
                echo "\t\t\t\t\t\t\t<img data-src=\"";
                echo $this->env->getExtension('System')->appFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()));
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                echo "\" style=\"max-width: 100%\" />
\t\t\t\t        ";
            } else {
                // line 14
                echo "\t\t\t\t        \t<img src=\"";
                echo $this->env->getExtension('System')->appFilter("/storage/app/media/no-thumbnail.jpg");
                echo "\" alt=\"\">
\t\t\t\t        ";
            }
            // line 16
            echo "\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h4><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t<p class=\"info\">
\t\t\t\t\t\t\t\tPosted
\t\t\t\t\t\t\t\t";
            // line 20
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 21
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t\ton ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\" role=\"button\">Selengkapnya</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div><!-- End row -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/web/themes/modern/partials/informasi-terakhir.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  121 => 27,  117 => 26,  111 => 24,  97 => 23,  88 => 22,  70 => 21,  66 => 20,  58 => 17,  55 => 16,  49 => 14,  39 => 12,  37 => 11,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = blogPosts.posts %}*/
/* <div class="container" id="tourpackages-carousel">*/
/*         <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">*/
/*             <h2>Informasi Terakhir</h2>*/
/*             <p class="lead">Informasi - informasi dari STIKES BHAKTI MULIA <br> ikuti web kami untuk mendapatkan informasi yang terbaru</p>*/
/*         </div>*/
/*         <div class="row">*/
/*             {% for post in posts %}*/
/* 			    <div class="col-xs-18 col-sm-6 col-md-3">*/
/* 			    	<div class="thumbnail">*/
/* 			    		{% if post.featured_images.count %}*/
/* 							<img data-src="{{ post.featured_images[0].filename | app }}" src="{{ post.featured_images[0].path}}" alt="{{ post.featured_images[0].description }}" style="max-width: 100%" />*/
/* 				        {% else %}*/
/* 				        	<img src="{{ '/storage/app/media/no-thumbnail.jpg' | app}}" alt="">*/
/* 				        {% endif %}*/
/* 						<div class="caption">*/
/* 							<h4><a href="{{ post.url }}">{{ post.title }}</a></h4>*/
/* 							<p class="info">*/
/* 								Posted*/
/* 								{% if post.categories.count %} in {% endif %}*/
/* 								{% for category in post.categories %}*/
/* 									<a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/* 								{% endfor %}*/
/* 								on {{ post.published_at|date('M d, Y') }}*/
/* 							</p>*/
/* 							<p>{{ post.summary }}</p>*/
/* 							<p><a href="{{ post.url }}" class="btn btn-info btn-xs" role="button">Selengkapnya</a></p>*/
/* 						</div>*/
/* 					</div>*/
/*                 </div>*/
/* 			{% endfor %}*/
/*         </div><!-- End row -->*/
/*     </div>*/
/* </div>*/
