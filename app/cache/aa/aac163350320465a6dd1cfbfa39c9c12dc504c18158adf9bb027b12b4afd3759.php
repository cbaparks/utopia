<?php

/* entry.twig */
class __TwigTemplate_8ce40da6ee0e0fa3a28abf799129dbc02c93fe6abe03da7c36032a34f5b56fde extends Twig_Template
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
        $this->loadTemplate("_header_entry.twig", "entry.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container content\">
    <div id=\"item_tags\" class=\"tag_holder\">
        ";
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array()), "tags", array()));
        foreach ($context['_seq'] as $context["link"] => $context["tname"]) {
            // line 7
            echo "        <span class=\"tag\"><a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tname"], "html", null, true);
            echo "</a></span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['link'], $context['tname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        // line 10
        echo "    </div>
    <div class=\"row\">
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h1>
        ";
        // line 13
        $context["recdate"] = $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish", array()), "%A %B %e, %Y");
        // line 14
        echo "        <h5 class=\"subh\">";
        echo $this->env->getExtension('Bolt')->trans("Written by <em>%name%</em> on %date%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user", array()), "displayname", array()), "%date%" => (isset($context["recdate"]) ? $context["recdate"] : null)));
        echo "</h5>
        <div class=\"clear\"></div>
        <br>
        <div>
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h5 class=\"subh\">Continue reading</h5>
                <p class=\"meta\">
                ";
        // line 25
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
        // line 26
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 27
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
            echo "</a>
                ";
        }
        // line 29
        echo "                -
                ";
        // line 30
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 31
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 32
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 34
        echo "                </p>
            </div>
        </div>
    </div>
</div>

";
        // line 41
        echo "<div class=\"\" style=\"display: none\">

<div class=\"clear\"></div>
<br><br><br><br><br><br><br><br><br>

<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    ";
        // line 50
        echo "
        <article>

            <h2>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>

            ";
        // line 55
        if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()) != "")) {
            // line 56
            echo "                <div class=\"large-4 columns imageholder\">
                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()), 400, 260), "html", null, true);
            echo "\">
                    </a>
                </div>
            ";
        }
        // line 62
        echo "
            ";
        // line 64
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "

            ";
        // line 67
        echo "            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()))) {
            // line 68
            echo "                <div class=\"clearfix\"></div>
                ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()), "responsive", array()), "html", null, true);
            echo "
            ";
        }
        // line 71
        echo "
            ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "

            ";
        // line 74
        $this->loadTemplate("_recordfooter.twig", "entry.twig", 74)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 75
        echo "
            ";
        // line 76
        if (array_key_exists("Disqus", $context)) {
            // line 77
            echo "                ";
            // line 78
            echo "                <h4>Leave a comment</h4>
                ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Disqus"]) ? $context["Disqus"] : null), "disqus", array(), "method"), "html", null, true);
            echo "
                <hr>
            ";
        } elseif (        // line 81
array_key_exists("FacebookComments", $context)) {
            // line 82
            echo "                ";
            // line 83
            echo "                <h4>Leave a comment</h4>
                ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["FacebookComments"]) ? $context["FacebookComments"] : null), "facebookComments", array(), "method"), "html", null, true);
            echo "
                <hr>
            ";
        }
        // line 87
        echo "
            ";
        // line 99
        echo "
        </article>


    ";
        // line 104
        echo "
    <!-- End Main Content -->

    ";
        // line 108
        echo "
<!-- End Main Content and Sidebar -->
</div>




";
        // line 115
        $this->loadTemplate("_footer.twig", "entry.twig", 115)->display($context);
    }

    public function getTemplateName()
    {
        return "entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 115,  220 => 108,  215 => 104,  209 => 99,  206 => 87,  200 => 84,  197 => 83,  195 => 82,  193 => 81,  188 => 79,  185 => 78,  183 => 77,  181 => 76,  178 => 75,  176 => 74,  171 => 72,  168 => 71,  163 => 69,  160 => 68,  157 => 67,  151 => 64,  148 => 62,  141 => 58,  137 => 57,  134 => 56,  132 => 55,  127 => 53,  122 => 50,  112 => 41,  104 => 34,  96 => 32,  93 => 31,  91 => 30,  88 => 29,  80 => 27,  77 => 26,  75 => 25,  66 => 19,  62 => 18,  54 => 14,  52 => 13,  48 => 12,  44 => 10,  42 => 9,  31 => 7,  26 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header_entry.twig' %}*/
/* */
/* <div class="container content">*/
/*     <div id="item_tags" class="tag_holder">*/
/*         {# {{dump(record)}} #}*/
/*     {% for link, tname in record.taxonomy.tags %}*/
/*         <span class="tag"><a href="{{ link }}">{{ tname }}</a></span>*/
/*     {% endfor %}*/
/*     {# {% include '_recordfooter.twig' with {'record': record} %} #}*/
/*     </div>*/
/*     <div class="row">*/
/*         <h1>{{ record.title}}</h1>*/
/*         {% set recdate = record.datepublish|localdate("%A %B %e, %Y") %}*/
/*         <h5 class="subh">{{ __('Written by <em>%name%</em> on %date%',{ '%name%': record.user.displayname, '%date%': recdate }) }}</h5>*/
/*         <div class="clear"></div>*/
/*         <br>*/
/*         <div>*/
/*             {{ record.teaser }}*/
/*             {{ record.body }}*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h5 class="subh">Continue reading</h5>*/
/*                 <p class="meta">*/
/*                 {% set previous = record.previous('id') %}*/
/*                 {% if previous %}*/
/*                     <a href="{{ previous.link }}">&laquo; {{ previous.title }}</a>*/
/*                 {% endif %}*/
/*                 -*/
/*                 {% set next = record.next('id') %}*/
/*                 {% if next %}*/
/*                     <a href="{{ next.link }}">{{ next.title }} &raquo;</a>*/
/*                 {% endif %}*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {# deal with this section later #}*/
/* <div class="" style="display: none">*/
/* */
/* <div class="clear"></div>*/
/* <br><br><br><br><br><br><br><br><br>*/
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* */
/*     <!-- Main Blog Content -->*/
/*     {# <div class="large-8 columns"> #}*/
/* */
/*         <article>*/
/* */
/*             <h2>{{ record.title }}</h2>*/
/* */
/*             {% if record.image!="" %}*/
/*                 <div class="large-4 columns imageholder">*/
/*                     <a href="{{ image(record.image) }}">*/
/*                         <img src="{{ thumbnail(record.image, 400, 260) }}">*/
/*                     </a>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {# display something introduction-like.. #}*/
/*             {{ record.teaser }}*/
/* */
/*             {# if the entry has a video, display it. #}*/
/*             {% if record.video is not empty %}*/
/*                 <div class="clearfix"></div>*/
/*                 {{ record.video.responsive }}*/
/*             {% endif %}*/
/* */
/*             {{ record.body }}*/
/* */
/*             {% include '_recordfooter.twig' with {'record': record} %}*/
/* */
/*             {% if Disqus is defined %}*/
/*                 {# Show the Disqus comment box, if the Disqus extension is installed .. #}*/
/*                 <h4>Leave a comment</h4>*/
/*                 {{ Disqus.disqus() }}*/
/*                 <hr>*/
/*             {% elseif FacebookComments is defined %}*/
/*                 {# Show the Facebook comment box, if Facebookcomments extension is installed .. #}*/
/*                 <h4>Leave a comment</h4>*/
/*                 {{ FacebookComments.facebookComments() }}*/
/*                 <hr>*/
/*             {% endif %}*/
/* */
/*             {# <p class="meta">*/
/*                 {% set previous = record.previous('id') %}*/
/*                 {% if previous %}*/
/*                     <a href="{{ previous.link }}">&laquo; {{ previous.title }}</a>*/
/*                 {% endif %}*/
/*                 -*/
/*                 {% set next = record.next('id') %}*/
/*                 {% if next %}*/
/*                     <a href="{{ next.link }}">{{ next.title }} &raquo;</a>*/
/*                 {% endif %}*/
/*             </p> #}*/
/* */
/*         </article>*/
/* */
/* */
/*     {# </div> #}*/
/* */
/*     <!-- End Main Content -->*/
/* */
/*     {# {% include '_aside.twig' %} #}*/
/* */
/* <!-- End Main Content and Sidebar -->*/
/* </div>*/
/* */
/* */
/* */
/* */
/* {% include '_footer.twig' %}*/
/* */
