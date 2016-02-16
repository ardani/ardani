<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/partials/informasi-terakhir.htm */
class __TwigTemplate_2bf4f00e22dc4a51a8ceb5fae18168023d556634ef42b72163a09eb6d191d957 extends Twig_Template
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
        $context["sideposts"] = $this->getAttribute((isset($context["blogSidePosts"]) ? $context["blogSidePosts"] : null), "posts", array());
        // line 3
        echo "    <div class=\"container\">
        <img class=\"logo-stikes img-responsive center-block\" src=\"";
        // line 4
        echo $this->env->getExtension('CMS')->mediaFilter("logo-kecil.png");
        echo "\" style=\"margin-bottom: 10px;\">
        <div class=\"center wow fadeInDown animated\">
            <h2>Informasi Terakhir</h2>
            <p class=\"lead\">ikuti web kami untuk mendapatkan informasi yang terbaru</p>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "\t\t\t    <div class=\"col-sm-12 col-md-12 \">
                    <div class=\"post-container\">
                        <div class=\"post-thumb\">
                            ";
            // line 16
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 17
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "thumb", array(0 => 200, 1 => (isset($context["auto"]) ? $context["auto"] : null)), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                echo "\" />
                            ";
            } else {
                // line 19
                echo "                                <img width=\"200px\" src=\"";
                echo $this->env->getExtension('System')->appFilter("/storage/app/media/no-thumbnail.jpg");
                echo "\" alt=\"\">
                            ";
            }
            // line 21
            echo "                        </div>
                        <div class=\"post-content\">
                            <h4 class=\"title-information\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
                            <p class=\"info\">
                                posted
                                ";
            // line 26
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 27
            echo "                                ";
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
                // line 28
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
                echo "                                ";
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
            // line 30
            echo "                                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                            </p>
                            <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </div>
            </div>
            <div class=\"col-md-4\">
                <div id=\"list-information\" class=\"ticker\">
                    <ul>
                    \t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sideposts"]) ? $context["sideposts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 43
            echo "                        <li>
                            <h3><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                            <p>";
            // line 45
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["post"], "summary", array()), 0, 100) . "..."), "html", null, true);
            echo "</p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </ul>
                </div>
            </div>
        </div><!-- End row -->
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/partials/informasi-terakhir.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 48,  156 => 45,  150 => 44,  147 => 43,  143 => 42,  136 => 37,  125 => 32,  119 => 30,  105 => 29,  96 => 28,  78 => 27,  74 => 26,  66 => 23,  62 => 21,  56 => 19,  48 => 17,  46 => 16,  41 => 13,  37 => 12,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = blogPosts.posts %}*/
/* {% set sideposts = blogSidePosts.posts %}*/
/*     <div class="container">*/
/*         <img class="logo-stikes img-responsive center-block" src="{{'logo-kecil.png' | media }}" style="margin-bottom: 10px;">*/
/*         <div class="center wow fadeInDown animated">*/
/*             <h2>Informasi Terakhir</h2>*/
/*             <p class="lead">ikuti web kami untuk mendapatkan informasi yang terbaru</p>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-8">*/
/*                 <div class="row">*/
/*             {% for post in posts %}*/
/* 			    <div class="col-sm-12 col-md-12 ">*/
/*                     <div class="post-container">*/
/*                         <div class="post-thumb">*/
/*                             {% if post.featured_images.count %}*/
/*                                 <img src="{{ post.featured_images[0].thumb(200,auto)}}" alt="{{ post.featured_images[0].description }}" />*/
/*                             {% else %}*/
/*                                 <img width="200px" src="{{ '/storage/app/media/no-thumbnail.jpg' | app}}" alt="">*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="post-content">*/
/*                             <h4 class="title-information"><a href="{{ post.url }}">{{ post.title }}</a></h4>*/
/*                             <p class="info">*/
/*                                 posted*/
/*                                 {% if post.categories.count %} in {% endif %}*/
/*                                 {% for category in post.categories %}*/
/*                                 <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*                                 {% endfor %}*/
/*                                 on {{ post.published_at|date('M d, Y') }}*/
/*                             </p>*/
/*                             <p>{{ post.summary }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* 			{% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <div id="list-information" class="ticker">*/
/*                     <ul>*/
/*                     	{% for post in sideposts %}*/
/*                         <li>*/
/*                             <h3><a href="{{ post.url }}">{{ post.title }}</a></h3>*/
/*                             <p>{{ post.summary | slice(0, 100) ~ '...'}}</p>*/
/*                         </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- End row -->*/
/*     </div>*/
