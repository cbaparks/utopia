<?php

/* news.twig */
class __TwigTemplate_ed135ec704139af18c01b86c55671ed536b6166f295bac2a043888bae5d746a7 extends Twig_Template
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
        $this->loadTemplate("_header_news.twig", "news.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 6
        echo "<div class=\"container content\">
\t<div class=\"row\" id=\"news_items\">
";
        // line 8
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("entries", array("paging" => true) );
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"row\" style=\"height: 65px\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h5 class=\"subh\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row tag_holder\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["record"], "taxonomy", array()), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tname"]) {
                // line 19
                echo "\t\t\t\t\t<span class=\"tag\">";
                echo twig_escape_filter($this->env, $context["tname"], "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            \t</div>
\t\t\t</div>
        \t<div class=\"row\" style=\"height: 160px; \">
        \t\t<div class=\"col-md-12\">
        \t\t\t";
            // line 25
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 26
                echo "        \t\t\t";
            }
            // line 27
            echo "        \t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 200), "method"), "html", null, true);
            echo "
        \t\t\t<div class=\"clear\"></div>
        \t\t\t<br>
        \t\t\t<div class=\"row\">
        \t\t\t\t<div class=\"col-md-12\">
        \t\t\t\t\t<p>Published: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "values", array()), "datepublish", array()), "html", null, true);
            echo "</p>
        \t\t\t\t</div>
        \t\t\t</div>
        \t\t\t";
            // line 36
            echo "        \t\t\t";
            // line 37
            echo "        \t\t\t";
            // line 38
            echo "
        \t\t</div>
        \t</div>
        \t<div class=\"row\">
                <div class=\"col-md-12\">
                \t<br />
                    <a class=\"btn btn-secondary-outline m-b-2\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\" role=\"button\">Read</a>
                </div>
            </div>
        \t";
            // line 48
            echo "        \t<div class=\"item_hidden\" data-title=\"\" data-images=\"\" data-image=\"\" data-teaser=\"\" data-body=\"\"></div>
    \t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</div>
</div>


<script>
\twindow.onload = function() {
\t\t// news items on click event
\t\t\$('#news_items .read_more').on('click', function(e) {
\t\t\te.preventDefault();
\t\t\talert();
\t\t})
\t}
</script>


";
        // line 66
        $this->loadTemplate("_footer.twig", "news.twig", 66)->display($context);
    }

    public function getTemplateName()
    {
        return "news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 66,  113 => 51,  105 => 48,  99 => 44,  91 => 38,  89 => 37,  87 => 36,  81 => 32,  72 => 27,  69 => 26,  67 => 25,  61 => 21,  52 => 19,  48 => 18,  40 => 13,  35 => 10,  31 => 9,  28 => 8,  24 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header_news.twig' %}*/
/* */
/* {#*/
/* 	list all news items on this page*/
/* #}*/
/* <div class="container content">*/
/* 	<div class="row" id="news_items">*/
/* {% setcontent records = "entries" allowpaging %}*/
/* {% for record in records %}*/
/* 		<div class="col-md-4">*/
/* 			<div class="row" style="height: 65px">*/
/* 				<div class="col-md-12">*/
/* 					<h5 class="subh">{{record.title}}</h5>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row tag_holder">*/
/* 				<div class="col-md-12">*/
/* 				{% for tname in record.taxonomy.tags %}*/
/* 					<span class="tag">{{ tname }}</span>*/
/*                 {% endfor %}*/
/*             	</div>*/
/* 			</div>*/
/*         	<div class="row" style="height: 160px; ">*/
/*         		<div class="col-md-12">*/
/*         			{% if record.image!="" %}*/
/*         			{% endif %}*/
/*         			{{ record.excerpt(200) }}*/
/*         			<div class="clear"></div>*/
/*         			<br>*/
/*         			<div class="row">*/
/*         				<div class="col-md-12">*/
/*         					<p>Published: {{ record.values.datepublish }}</p>*/
/*         				</div>*/
/*         			</div>*/
/*         			{# {{dump(record)}} #}*/
/*         			{# values.datepublish #}*/
/*         			{# user.username #}*/
/* */
/*         		</div>*/
/*         	</div>*/
/*         	<div class="row">*/
/*                 <div class="col-md-12">*/
/*                 	<br />*/
/*                     <a class="btn btn-secondary-outline m-b-2" href="{{ record.link }}" role="button">Read</a>*/
/*                 </div>*/
/*             </div>*/
/*         	{# <p class="read_more">read more</p> #}*/
/*         	<div class="item_hidden" data-title="" data-images="" data-image="" data-teaser="" data-body=""></div>*/
/*     	</div>*/
/* {% endfor %}*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <script>*/
/* 	window.onload = function() {*/
/* 		// news items on click event*/
/* 		$('#news_items .read_more').on('click', function(e) {*/
/* 			e.preventDefault();*/
/* 			alert();*/
/* 		})*/
/* 	}*/
/* </script>*/
/* */
/* */
/* {% include '_footer.twig' %}*/
/* */
