<?php

/* /home/stikesbm/webserver/siakad-cms/themes/modern/pages/category.htm */
class __TwigTemplate_96d84c39482264de40bb41a806a9ea7555ab613e6d9972c42655320aa47dbdf9 extends Twig_Template
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
        echo "<div class=\"blog\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "            <div class=\"blog-item\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-2 text-center\">
                        <div class=\"entry-meta\">
                            <span class=\"publish_date\">";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</span>
                        </div>
                    </div>

                    <div class=\"col-xs-12 col-sm-10 blog-content\">
                        ";
            // line 15
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 16
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"><img class=\"img-responsive img-blog\" data-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                echo "\"
                                                      src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                echo "\" style=\"max-width: 100%\" /></a>
                        ";
            } else {
                // line 19
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\"><img class=\"img-responsive img-blog\" src=\"";
                echo $this->env->getExtension('System')->appFilter("/storage/app/media/big-no-thumbnail.jpg");
                echo "\" alt=\"\"></a>
                        ";
            }
            // line 21
            echo "                        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                        <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-primary readmore\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">Selengkapnya <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div><!--/.blog-item-->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
            ";
        // line 29
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 30
            echo "            <ul class=\"pagination pagination-lg\">
                ";
            // line 31
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 32
                echo "                <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\"><i class=\"fa fa-long-arrow-left\"></i> Prev</a></li>
                ";
            }
            // line 34
            echo "
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "                <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a href=\"";
                // line 37
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
                ";
            // line 41
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 42
                echo "                <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next <i class=\"fa fa-long-arrow-right\"></i></a></li>
                ";
            }
            // line 44
            echo "            </ul>
            ";
        }
        // line 46
        echo "
        </div><!--/.col-md-8-->
        <aside class=\"col-md-4\">
            <div class=\"widget search\">
                <form role=\"form\" method=\"get\" action=\"";
        // line 50
        echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "resultPage", array()));
        echo "\">
                    <input type=\"text\" name=\"search\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Pencarian\">
                </form>
            </div><!--/.search-->
            <div class=\"widget tags\">
                <h3>Tag Artikel</h3>
                <ul class=\"tag-cloud\">
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blogTags"]) ? $context["blogTags"] : null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 58
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
        // line 60
        echo "                </ul>
            </div><!--/.tags-->
            ";
        // line 62
        $context["categories"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array());
        // line 63
        echo "            <div class=\"widget categories\">
                <h3>Kategori</h3>
                <ul class=\"blog_category\">
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 67
            echo "                    ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 68
            echo "                    <li ";
            if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                            ";
            // line 70
            if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                // line 71
                echo "                            <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            // line 73
            echo "                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </ul>
            </div>
        </aside>
    </div><!--/.row-->
</div>";
    }

    public function getTemplateName()
    {
        return "/home/stikesbm/webserver/siakad-cms/themes/modern/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 76,  214 => 73,  208 => 71,  206 => 70,  200 => 69,  193 => 68,  190 => 67,  186 => 66,  181 => 63,  179 => 62,  175 => 60,  164 => 58,  160 => 57,  150 => 50,  144 => 46,  140 => 44,  134 => 42,  132 => 41,  129 => 40,  118 => 37,  113 => 36,  109 => 35,  106 => 34,  100 => 32,  98 => 31,  95 => 30,  93 => 29,  90 => 28,  79 => 23,  75 => 22,  68 => 21,  60 => 19,  53 => 17,  46 => 16,  44 => 15,  36 => 10,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = blogPosts.posts %}*/
/* <div class="blog">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {% for post in posts %}*/
/*             <div class="blog-item">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 col-sm-2 text-center">*/
/*                         <div class="entry-meta">*/
/*                             <span class="publish_date">{{ post.published_at|date('M d, Y') }}</span>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-xs-12 col-sm-10 blog-content">*/
/*                         {% if post.featured_images.count %}*/
/*                         <a href="{{ post.url }}"><img class="img-responsive img-blog" data-src="{{ post.featured_images[0].filename }}"*/
/*                                                       src="{{ post.featured_images[0].path }}" alt="{{ post.featured_images[0].description }}" style="max-width: 100%" /></a>*/
/*                         {% else %}*/
/*                         <a href="{{ post.url }}"><img class="img-responsive img-blog" src="{{ '/storage/app/media/big-no-thumbnail.jpg'|app}}" alt=""></a>*/
/*                         {% endif %}*/
/*                         <h2><a href="{{ post.url }}">{{ post.title }}</a></h2>*/
/*                         <p>{{ post.summary }}</p>*/
/*                         <a class="btn btn-primary readmore" href="{{ post.url }}">Selengkapnya <i class="fa fa-angle-right"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--/.blog-item-->*/
/*             {% endfor %}*/
/* */
/*             {% if posts.lastPage > 1 %}*/
/*             <ul class="pagination pagination-lg">*/
/*                 {% if posts.currentPage > 1 %}*/
/*                 <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}"><i class="fa fa-long-arrow-left"></i> Prev</a></li>*/
/*                 {% endif %}*/
/* */
/*                 {% for page in 1..posts.lastPage %}*/
/*                 <li class="{{ posts.currentPage == page ? 'active' : null }}">*/
/*                     <a href="{{ this.page.baseFileName|page({ (pageParam): page }) }}">{{ page }}</a>*/
/*                 </li>*/
/*                 {% endfor %}*/
/* */
/*                 {% if posts.lastPage > posts.currentPage %}*/
/*                 <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}">Next <i class="fa fa-long-arrow-right"></i></a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*             {% endif %}*/
/* */
/*         </div><!--/.col-md-8-->*/
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
/*                     <li {% if category.slug == currentCategorySlug %}class="active"{% endif %}>*/
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
/*     </div><!--/.row-->*/
/* </div>*/
