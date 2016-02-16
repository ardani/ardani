<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/pages/detail.htm */
class __TwigTemplate_731499e7631fa6c5766819d10f20b614167cb4579e57581df48b6ff066b8c246 extends Twig_Template
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
        $context["post"] = $this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "post", array());
        // line 2
        echo "<div class=\"blog\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"blog-item\">
                <div class=\"featured-images text-center\">
                    ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "count", array())) {
            // line 8
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array()), "html", null, true);
            echo "\"><img class=\"img-responsive img-blog\" data-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
            echo "\"
                                                  src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
            echo "\" /></a>
                    ";
        } else {
            // line 11
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array()), "html", null, true);
            echo "\"><img class=\"img-responsive img-blog\" src=\"";
            echo $this->env->getExtension('System')->appFilter("/storage/app/media/big-no-thumbnail.jpg");
            echo "\"></a>
                    ";
        }
        // line 13
        echo "                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-2 text-center\">
                        <div class=\"entry-meta\">
                            <span class=\"publish_date\">";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-10 blog-content\">
                        <h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h2>
                        ";
        // line 22
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "
                    </div>
                </div>
            </div><!--/.blog-item-->
        </div><!--/.col-md-8-->

        <aside class=\"col-md-4\">
            <div class=\"widget search\">
                <form role=\"form\" method=\"get\" action=\"";
        // line 30
        echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "resultPage", array()));
        echo "\">
                    <input type=\"text\" name=\"search\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Pencarian\">
                </form>
            </div><!--/.search-->
            <div class=\"widget tags\">
                <h3>Tag Artikel</h3>
                <ul class=\"tag-cloud\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blogTags"]) ? $context["blogTags"] : null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 38
            echo "                    <li><a class=\"btn btn-xs btn-primary\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo " <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["tag"], "posts", array())), "html", null, true);
            echo "</span></a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </ul>
            </div><!--/.tags-->
            ";
        // line 42
        $context["categories"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array());
        // line 43
        echo "            <div class=\"widget categories\">
                <h3>Kategori</h3>
                <ul class=\"blog_category\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
            echo "                    ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 48
            echo "                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                            ";
            // line 50
            if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                // line 51
                echo "                            <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            // line 53
            echo "                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </ul>
            </div>
        </aside>

    </div><!--/.row-->

</div><!--/.blog-->";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/pages/detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  140 => 53,  134 => 51,  132 => 50,  126 => 49,  123 => 48,  120 => 47,  116 => 46,  111 => 43,  109 => 42,  105 => 40,  94 => 38,  90 => 37,  80 => 30,  69 => 22,  65 => 21,  58 => 17,  52 => 13,  44 => 11,  37 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% set post = blogPost.post %}*/
/* <div class="blog">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <div class="blog-item">*/
/*                 <div class="featured-images text-center">*/
/*                     {% if post.featured_images.count %}*/
/*                     <a href="{{ post.url }}"><img class="img-responsive img-blog" data-src="{{ post.featured_images[0].filename }}"*/
/*                                                   src="{{ post.featured_images[0].path }}" alt="{{ post.featured_images[0].description }}" /></a>*/
/*                     {% else %}*/
/*                     <a href="{{ post.url }}"><img class="img-responsive img-blog" src="{{ '/storage/app/media/big-no-thumbnail.jpg' | app}}"></a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 col-sm-2 text-center">*/
/*                         <div class="entry-meta">*/
/*                             <span class="publish_date">{{ post.published_at|date('M d, Y') }}</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-sm-10 blog-content">*/
/*                         <h2>{{ post.title }}</h2>*/
/*                         {{ post.content_html|raw }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--/.blog-item-->*/
/*         </div><!--/.col-md-8-->*/
/* */
/*         <aside class="col-md-4">*/
/*             <div class="widget search">*/
/*                 <form role="form" method="get" action="{{ searchForm.resultPage|page }}">*/
/*                     <input type="text" name="search" class="form-control search_box" autocomplete="off" placeholder="Pencarian">*/
/*                 </form>*/
/*             </div><!--/.search-->*/
/*             <div class="widget tags">*/
/*                 <h3>Tag Artikel</h3>*/
/*                 <ul class="tag-cloud">*/
/*                     {% for tag in blogTags.tags %}*/
/*                     <li><a class="btn btn-xs btn-primary" href="#">{{ tag.name }} <span class="label label-info">{{ tag.posts|length }}</span></a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div><!--/.tags-->*/
/*             {% set categories = blogCategories.categories %}*/
/*             <div class="widget categories">*/
/*                 <h3>Kategori</h3>*/
/*                 <ul class="blog_category">*/
/*                     {% for category in categories %}*/
/*                     {% set postCount = category.post_count %}*/
/*                     <li>*/
/*                         <a href="{{ category.url }}">{{ category.name }}*/
/*                             {% if postCount %}*/
/*                             <span class="label label-info">{{ postCount }}</span>*/
/*                             {% endif %}*/
/*                         </a>*/
/*                     </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </aside>*/
/* */
/*     </div><!--/.row-->*/
/* */
/* </div><!--/.blog-->*/
