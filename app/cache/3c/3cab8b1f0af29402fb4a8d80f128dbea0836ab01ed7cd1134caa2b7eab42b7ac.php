<?php

/* index.twig */
class __TwigTemplate_7f28a5d6906e045259d429cef1d1632b77f4bc17b8d590d322f3a5267257703d extends Twig_Template
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
        $this->loadTemplate("_header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    ";
        // line 7
        echo "    ";
        // line 8
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("pages", array("paging" => true) );
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "            ";
            // line 11
            echo "
                ";
            // line 12
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 13
                echo "                    ";
                // line 18
                echo "                ";
            }
            // line 19
            echo "
                ";
            // line 21
            echo "
                ";
            // line 23
            echo "                    ";
            // line 24
            echo "                ";
            // line 25
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
            echo "
                ";
            // line 35
            echo "
            ";
            // line 37
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    ";
        // line 41
        echo "    ";
        // line 42
        echo "
           ";
        // line 44
        echo "            ";
        // line 45
        echo "
                ";
        // line 48
        echo "                ";
        // line 49
        echo "                ";
        // line 50
        echo "                    ";
        // line 51
        echo "                ";
        // line 52
        echo "
                ";
        // line 54
        echo "                    ";
        // line 55
        echo "                        ";
        // line 56
        echo "                            ";
        // line 57
        echo "                            ";
        // line 58
        echo "                        ";
        // line 59
        echo "                    ";
        // line 60
        echo "                ";
        // line 61
        echo "
                ";
        // line 63
        echo "               ";
        // line 74
        echo "
                ";
        // line 77
        echo "
            ";
        // line 79
        echo "               ";
        // line 83
        echo "            ";
        // line 84
        echo "        ";
        // line 85
        echo "
        ";
        // line 87
        echo "
        ";
        // line 89
        echo "
        ";
        // line 94
        echo "        ";
        // line 95
        echo "       ";
        // line 115
        echo "
        ";
        // line 117
        echo "
        ";
        // line 119
        echo "            ";
        // line 120
        echo "        ";
        // line 121
        echo "



    <!-- End Main Content -->
    ";
        // line 128
        echo "    ";
        // line 129
        echo "
<!-- End Main Content and Sidebar -->
    ";
        // line 132
        echo "    ";
        // line 133
        echo "    ";
        // line 134
        echo "    ";
        // line 135
        echo "

    <!-- News
    ================================================== -->
    <section class=\"section-news section-text text-xs-center\" id=\"news\">
        <h3 class=\"wp wp-1\">News</h3>
        <div class=\"container\">
            <div class=\"bg-inverse\">
                <div class=\"row\">
                    ";
        // line 144
        $template_storage = new Bolt\Storage($context['app']);
        $context['nw1'] =         $template_storage->getContent("entry/1", array() );
        // line 145
        echo "                    <div class=\"col-md-6 p-r-0\">
                        <figure class=\"has-light-mask m-b-0 image-effect\"><img alt=\"Article thumbnail\" class=\"img-fluid\" src=\"files/";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nw1"]) ? $context["nw1"] : null), "values", array()), "image", array()), "file", array()), "html", null, true);
        echo "\" /></figure>
                    </div>
                    <div class=\"col-md-6 p-l-0\">
                        <article class=\"center-block\"><span class=\"label label-info\">Featured article</span>
                            <h5><a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nw1"]) ? $context["nw1"] : null), "link", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nw1"]) ? $context["nw1"] : null), "title", array()), "html", null, true);
        echo " <span class=\"icon-arrow-right\"></span></a></h5>
                            <p class=\"m-b-0\">
                                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["nw1"]) ? $context["nw1"] : null), "taxonomy", array()), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tname"]) {
            // line 153
            echo "                                <a href=\"#\"><span class=\"label label-default text-uppercase\">";
            echo twig_escape_filter($this->env, $context["tname"], "html", null, true);
            echo "</span></a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                ";
        // line 156
        echo "                                ";
        // line 157
        echo "                                <a href=\"#\"><span class=\"label label-default text-uppercase\"> 1 Hour Ago</span></a>
                            </p>
                        </article>
                    </div>
                </div>

                <div class=\"row\">
                    ";
        // line 164
        $template_storage = new Bolt\Storage($context['app']);
        $context['nw2'] =         $template_storage->getContent("entry/2", array() );
        // line 165
        echo "                    ";
        // line 166
        echo "                    <div class=\"col-md-6 col-md-push-6 p-l-0\">
                        <figure class=\"has-light-mask m-b-0 image-effect\"><img alt=\"Article thumbnail\" class=\"img-fluid\" src=\"files/";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nw2"]) ? $context["nw2"] : null), "values", array()), "image", array()), "file", array()), "html", null, true);
        echo "\" /></figure>
                    </div>
                    <div class=\"col-md-6 col-md-pull-6 p-r-0\">
                        <article class=\"center-block\"><span class=\"label label-info\">Featured article</span>
                            <h5><a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nw2"]) ? $context["nw2"] : null), "link", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nw2"]) ? $context["nw2"] : null), "title", array()), "html", null, true);
        echo " <span class=\"icon-arrow-right\"></span></a></h5>
                            <p class=\"m-b-0\">
                                ";
        // line 174
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["nw2"]) ? $context["nw2"] : null), "taxonomy", array()), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tname"]) {
            // line 175
            echo "                                <a href=\"#\"><span class=\"label label-default text-uppercase\">";
            echo twig_escape_filter($this->env, $context["tname"], "html", null, true);
            echo "</span></a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                                <a href=\"#\"><span class=\"label label-default text-uppercase\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nw2"]) ? $context["nw2"] : null), "values", array()), "image", array()), "file", array()), "html", null, true);
        echo "</span></a></p>
                        </article>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\"><br /><br /><br />
                    <a class=\"btn btn-secondary-outline m-b-2\" href=\"showcase/news\" role=\"button\">More news</a>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 191
        echo "
    ";
        // line 193
        echo "    ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['contact'] =         $template_storage->getContent("/showcase/contact-us", array() );
        // line 194
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "html", array()), "html", null, true);
        echo "
    ";
        // line 196
        echo "



";
        // line 200
        $this->loadTemplate("_footer.twig", "index.twig", 200)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 200,  294 => 196,  289 => 194,  285 => 193,  282 => 191,  265 => 177,  256 => 175,  251 => 174,  244 => 171,  237 => 167,  234 => 166,  232 => 165,  229 => 164,  220 => 157,  218 => 156,  216 => 155,  207 => 153,  203 => 152,  196 => 150,  189 => 146,  186 => 145,  183 => 144,  172 => 135,  170 => 134,  168 => 133,  166 => 132,  162 => 129,  160 => 128,  153 => 121,  151 => 120,  149 => 119,  146 => 117,  143 => 115,  141 => 95,  139 => 94,  136 => 89,  133 => 87,  130 => 85,  128 => 84,  126 => 83,  124 => 79,  121 => 77,  118 => 74,  116 => 63,  113 => 61,  111 => 60,  109 => 59,  107 => 58,  105 => 57,  103 => 56,  101 => 55,  99 => 54,  96 => 52,  94 => 51,  92 => 50,  90 => 49,  88 => 48,  85 => 45,  83 => 44,  80 => 42,  78 => 41,  75 => 39,  68 => 37,  65 => 35,  60 => 25,  58 => 24,  56 => 23,  53 => 21,  50 => 19,  47 => 18,  45 => 13,  43 => 12,  40 => 11,  38 => 10,  33 => 9,  29 => 8,  27 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* */
/*     <!-- Main Blog Content -->*/
/*     {# <div class="row"> #}*/
/*     {# main page teasers #}*/
/*         {% setcontent records = "pages" allowpaging %}*/
/*         {% for record in records %}*/
/*             {# <div class="row"> #}*/
/* */
/*                 {% if record.image!="" %}*/
/*                     {# <div class="large-4 imageholder">*/
/*                         <a href="{{ image(record.image) }}">*/
/*                             <img src="{{ thumbnail(record.image, 400, 260) }}">*/
/*                         </a>*/
/*                     </div> #}*/
/*                 {% endif %}*/
/* */
/*                 {# <h3><a href="{{ record.link }}">{{ record.title }}</a></h3> #}*/
/* */
/*                 {# <p> #}*/
/*                     {# {{ record.excerpt(220) }} #}*/
/*                 {# </p> #}*/
/*                 {{ record.teaser }}*/
/*                 {# {% if record.link %}*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <br><br>*/
/*                         <a class="btn btn-secondary-outline m-b-2" href="#" role="button">{{record.link}}</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %} #}*/
/* */
/*             {# <hr> #}*/
/* */
/*         {% endfor %}*/
/* */
/*     {# </div> #}*/
/*     {# end of main page teasers #}*/
/* */
/*            {# <article> #}*/
/*             {# {% if record is defined %} #}*/
/* */
/*                 {# make the 'home' variable refer to the current record, which is set by the*/
/*                    user in config.yml #}*/
/*                 {# {% set home = record %} #}*/
/*                 {# {% if home.title is defined and home.title is not empty %} #}*/
/*                     {# <h1>the title: {{ home.title }}</h1> #}*/
/*                 {# {% endif %} #}*/
/* */
/*                 {# {% if home.image is defined and home.image is not empty %} #}*/
/*                     {# <div class="large-5 columns imageholder"> #}*/
/*                         {# <a href="{{ image(home.image) }}"> #}*/
/*                             {# blah #}*/
/*                             {# <img src="{{ thumbnail(home.image, 696, 400) }}"> #}*/
/*                         {# </a> #}*/
/*                     {# </div> #}*/
/*                 {# {% endif %} #}*/
/* */
/*                 {# display something introduction-like.. #}*/
/*                {#  {% if home.introduction is defined and home.introduction is not empty %}*/
/*                     {{ home.introduction }}*/
/*                 {% elseif home.teaser is defined and home.teaser is not empty %}*/
/*                     {{ home.teaser }}*/
/*                 {% elseif home is not empty %}*/
/*                     <p> blah again {{ home.excerpt(500) }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% if home.link is defined and home.link is not empty %}*/
/*                     <a href="{{ home.link }}">Read more!!! &raquo;</a>*/
/*                 {% endif %} #}*/
/* */
/*                 {# Tip: If you're curious what all of the available fields of this*/
/*                    record contain, just use {{ print(home) }}, to print it all. #}*/
/* */
/*             {# {% else %} #}*/
/*                {#  <p>*/
/*                     {{ __('Content for home not found!') }}*/
/*                     {{ __("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.") }}*/
/*                 </p> #}*/
/*             {# {% endif %} #}*/
/*         {# </article> #}*/
/* */
/*         {# <hr> #}*/
/* */
/*         {# <h4>{{ __('Latest entries') }}</h4> #}*/
/* */
/*         {# Here we use 'setcontent' to set the variable 'records' to "entries/latest/6",*/
/*            which is shorthand for "the 6 latest records in Entries. Note that we are*/
/*            requesting multiple entries, so 'records' will be an array containing each*/
/*            of the entries. That's why we use the 'for' loop to iterate over them all. #}*/
/*         {# {% setcontent records = "entries/latest/6" allowpaging %} #}*/
/*        {#  {% for record in records %}*/
/*             <article>*/
/* */
/*                 {% if record.image!="" %}*/
/*                     <div class="large-4 imageholder">*/
/*                         <a href="{{ image(record.image) }}">*/
/*                             <img src="{{ thumbnail(record.image, 400, 260) }}">*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <h3><a href="{{ record.link }}">{{ record.title }}</a></h3>*/
/* */
/*                 <p>{{ record.excerpt(220) }}</p>*/
/* */
/*             </article>*/
/* */
/*             <hr>*/
/* */
/*         {% endfor %} #}*/
/* */
/*         {# {{ pager() }} #}*/
/* */
/*         {# <div class="" id="whyus"> #}*/
/*             {# <p>the why us div</p> #}*/
/*         {# </div> #}*/
/* */
/* */
/* */
/* */
/*     <!-- End Main Content -->*/
/*     {# include the sidebar. The include tag can be used to break up your templates in logical parts,*/
/*        and re-use them across different templates/pages. #}*/
/*     {# {% include '_aside.twig' %} #}*/
/* */
/* <!-- End Main Content and Sidebar -->*/
/*     {# news block#}*/
/*     {# for the news block we need to build the html content into the page then randomly select items to be inserted into the page #}*/
/*     {# {% setcontent news = '/showcase/news' %} #}*/
/*     {# {{ news.html }} #}*/
/* */
/* */
/*     <!-- News*/
/*     ================================================== -->*/
/*     <section class="section-news section-text text-xs-center" id="news">*/
/*         <h3 class="wp wp-1">News</h3>*/
/*         <div class="container">*/
/*             <div class="bg-inverse">*/
/*                 <div class="row">*/
/*                     {% setcontent nw1 = 'entry/1' %}*/
/*                     <div class="col-md-6 p-r-0">*/
/*                         <figure class="has-light-mask m-b-0 image-effect"><img alt="Article thumbnail" class="img-fluid" src="files/{{nw1.values.image.file}}" /></figure>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-l-0">*/
/*                         <article class="center-block"><span class="label label-info">Featured article</span>*/
/*                             <h5><a href="{{nw1.link}}">{{nw1.title}} <span class="icon-arrow-right"></span></a></h5>*/
/*                             <p class="m-b-0">*/
/*                                 {% for tname in nw1.taxonomy.tags %}*/
/*                                 <a href="#"><span class="label label-default text-uppercase">{{tname}}</span></a>*/
/*                                 {% endfor %}*/
/*                                 {# <a href="#"><span class="label label-default text-uppercase">Design Studio</span></a> #}*/
/*                                 {# <a href="#"><span class="label label-default text-uppercase">Image: {{nw1.values.image.file}}</span></a> #}*/
/*                                 <a href="#"><span class="label label-default text-uppercase"> 1 Hour Ago</span></a>*/
/*                             </p>*/
/*                         </article>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     {% setcontent nw2 = 'entry/2' %}*/
/*                     {# {{dump(nw2)}} #}*/
/*                     <div class="col-md-6 col-md-push-6 p-l-0">*/
/*                         <figure class="has-light-mask m-b-0 image-effect"><img alt="Article thumbnail" class="img-fluid" src="files/{{nw2.values.image.file}}" /></figure>*/
/*                     </div>*/
/*                     <div class="col-md-6 col-md-pull-6 p-r-0">*/
/*                         <article class="center-block"><span class="label label-info">Featured article</span>*/
/*                             <h5><a href="{{nw2.link}}">{{nw2.title}} <span class="icon-arrow-right"></span></a></h5>*/
/*                             <p class="m-b-0">*/
/*                                 {# {% for record in records %} #}*/
/*                                 {% for tname in nw2.taxonomy.tags %}*/
/*                                 <a href="#"><span class="label label-default text-uppercase">{{tname}}</span></a>*/
/*                                 {% endfor %}*/
/*                                 <a href="#"><span class="label label-default text-uppercase"> {{nw2.values.image.file}}</span></a></p>*/
/*                         </article>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-12"><br /><br /><br />*/
/*                     <a class="btn btn-secondary-outline m-b-2" href="showcase/news" role="button">More news</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     {# end of news block#}*/
/* */
/*     {# news contact#}*/
/*     {% setcontent contact = '/showcase/contact-us' %}*/
/*     {{ contact.html }}*/
/*     {# end of news contact#}*/
/* */
/* */
/* */
/* */
/* {% include '_footer.twig' %}*/
/* */
