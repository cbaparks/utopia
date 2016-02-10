<?php

/* _header.twig */
class __TwigTemplate_8781b783cf45980f282938cd114820a9dcb0e3ab847c8ac862b684c04cc58f2b extends Twig_Template
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
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmlLang(), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 9
        echo "    <title>
        ";
        // line 10
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 12
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 13
        echo "    </title>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    ";
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/boot.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/landio.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/components.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/master.min.css\">
    ";
        // line 24
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>


    ";
        // line 31
        echo "
</head>
<body>

<!-- header nav -->
<nav class=\"navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">
         <span class=\"logo-icon\"></span>
          <span class=\"sr-only\">Land.io</span>
        </a>
        <a class=\"navbar-toggler hidden-md-up pull-xs-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
        &#9776;
      </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
          <ul class=\"nav navbar-nav pull-xs-right\">
            ";
        // line 47
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_sub_menu.twig");
        echo "
          </ul>
        </div>
      </div>
    </nav>

";
        // line 53
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("entries", array("paging" => true) );
        // line 54
        echo "

    ";
        // line 57
        echo "   <header id=\"landioCarousel\" class=\"carousel carousel-header slide bg-inverse\" data-ride=\"carousel\" data-interval=\"0\" role=\"banner\">
        <div id=\"home\"></div>
      <ol class=\"carousel-indicators\">
      ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 61
            echo "        <li data-target=\"#landioCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\"></li>
      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
          <!--
            carousel items will be pulled from database:
            limit of 5, latest and randomized
            -->



            ";
        // line 76
        echo "            ";
        // line 77
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 78
            echo "                    <div class=\"carousel-item ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active") : (""));
            echo "\" style=\"background-image: url('files/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["record"], "values", array()), "image", array()), "file", array()), "html", null, true);
            echo "');\">
                  <div class=\"carousel-caption\">
                    <h1 class=\"display-3\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</h1>
                    ";
            // line 82
            echo "                    <h2 class=\"m-b-3 hidden-sm-down\">";
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
            echo "</h2>
                    <a class=\"btn btn-secondary-outline m-b-2\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\" role=\"button\">View more</a>
                  </div>
                  <div class=\"background-vignette\"></div>
                </div>
                ";
            // line 88
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "


   ";
        // line 108
        echo "          <!-- we will tap into social apis and get the counts for followers or posts and load here-->
        <ul class=\"nav nav-inline social-share\">
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"icon-twitter\"></span> 1024</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"icon-facebook\"></span> 562</a></li>
    ";
        // line 113
        echo "<!--          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"icon-linkedin\"></span> 356</a></li>-->
        </ul>
      </div>
    </header>




";
        // line 122
        echo "    ";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 122,  241 => 113,  235 => 108,  230 => 89,  216 => 88,  209 => 83,  204 => 82,  200 => 80,  192 => 78,  174 => 77,  172 => 76,  161 => 66,  159 => 65,  157 => 64,  155 => 63,  136 => 61,  119 => 60,  114 => 57,  110 => 54,  107 => 53,  98 => 47,  80 => 31,  75 => 27,  73 => 26,  71 => 24,  67 => 22,  63 => 21,  59 => 20,  54 => 19,  48 => 13,  43 => 12,  38 => 11,  33 => 10,  30 => 9,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="{{ htmllang() }}">*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*     {# make sure we always display a proper title: The record's title if there is one, appended with the*/
/*        sitename. If there is no title, we append the sitename with the payoff, if there is one. #}*/
/*     <title>*/
/*         {% if record.title is defined %}{{ record.title|striptags }} | {% endif %}*/
/*             {{ app.config.get('general/sitename') }}*/
/*         {% if record.title is not defined and app.config.get('general/payoff') %} | {{ app.config.get('general/payoff') }}{% endif %}*/
/*     </title>*/
/* */
/*     <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>*/
/* */
/*     {# paths.theme is always a correct path to the current theme. Even if you rename the theme-folder,*/
/*        this will keep working. See the documentation on paths: http://docs.bolt.cm/internals#paths #}*/
/*     <link rel="stylesheet" href="{{ paths.theme }}css/boot.css">*/
/*     <link rel="stylesheet" href="{{ paths.theme }}css/landio.css">*/
/*     <link rel="stylesheet" href="{{ paths.theme }}css/components.min.css">*/
/*     <link rel="stylesheet" href="{{ paths.theme }}css/master.min.css">*/
/*     {# <link rel="stylesheet" href="{{ paths.theme }}css/app.css"> #}*/
/*     {# Bolt comes with Magnific Popup, as it's used in the backend. We can use it here, or you can*/
/*       just swap it out for the image-viewing script of your choice. Or delete it altogether. #}*/
/*     {# <link rel="stylesheet" href="{{ paths.theme }}css/magnific-popup.css"> #}*/
/*     <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>*/
/* */
/* */
/*     {#<!-- A variable from the theme's config: {{ theme.foo }} -->#}*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <!-- header nav -->*/
/* <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">*/
/*       <div class="container">*/
/*         <a class="navbar-brand" href="#">*/
/*          <span class="logo-icon"></span>*/
/*           <span class="sr-only">Land.io</span>*/
/*         </a>*/
/*         <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">*/
/*         &#9776;*/
/*       </a>*/
/*         <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">*/
/*           <ul class="nav navbar-nav pull-xs-right">*/
/*             {{ menu('main', '_sub_menu.twig') }}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </nav>*/
/* */
/* {% setcontent records = "entries" allowpaging %}*/
/* */
/* */
/*     {# the home page carousel #}*/
/*    <header id="landioCarousel" class="carousel carousel-header slide bg-inverse" data-ride="carousel" data-interval="0" role="banner">*/
/*         <div id="home"></div>*/
/*       <ol class="carousel-indicators">*/
/*       {% for record in records %}*/
/*         <li data-target="#landioCarousel" data-slide-to="{{loop.index}}" class="{{loop.first ? 'active'}}"></li>*/
/*       {% endfor %}*/
/*         {# <li data-target="#landioCarousel" data-slide-to="0" class="active"></li> #}*/
/*         {# <li data-target="#landioCarousel" data-slide-to="1"></li> #}*/
/*         {# <li data-target="#landioCarousel" data-slide-to="2"></li> #}*/
/*       </ol>*/
/*       <div class="carousel-inner" role="listbox">*/
/*           <!--*/
/*             carousel items will be pulled from database:*/
/*             limit of 5, latest and randomized*/
/*             -->*/
/* */
/* */
/* */
/*             {# {{dump(records)}} #}*/
/*             {# {% setcontent c = 0 %}/ #}*/
/*             {% for record in records %}*/
/*                     <div class="carousel-item {{loop.first ? 'active'}}" style="background-image: url('files/{{ record.values.image.file }}');">*/
/*                   <div class="carousel-caption">*/
/*                     <h1 class="display-3">{{ record.title }}</h1>*/
/*                     {# <h2 class="m-b-3 hidden-sm-down">slide 1 caption.</h2> #}*/
/*                     <h2 class="m-b-3 hidden-sm-down">{{ c }}</h2>*/
/*                     <a class="btn btn-secondary-outline m-b-2" href="{{ record.link }}" role="button">View more</a>*/
/*                   </div>*/
/*                   <div class="background-vignette"></div>*/
/*                 </div>*/
/*                 {# {{ c++ }} #}*/
/*             {% endfor %}*/
/* */
/* */
/* */
/*    {#      <div class="carousel-item" style="background-image: url(img/DSC_0285.jpg);">*/
/*           <div class="carousel-caption">*/
/*             <h1 class="display-3">Slide 2</h1>*/
/*             <h2 class="m-b-3 hidden-sm-down">slide <strong>2</strong> caption.</h2>*/
/*             <a class="btn btn-secondary-outline m-b-2" href="#" role="button">View more</a>*/
/*           </div>*/
/*           <div class="background-vignette"></div>*/
/*         </div>*/
/*         <div class="carousel-item" style="background-image: url(img/DSC_0285.jpg);">*/
/*           <div class="carousel-caption">*/
/*             <h1 class="display-3">Slide 3</h1>*/
/*             <h2 class="m-b-3 hidden-sm-down">slide 3 caption.</h2>*/
/*             <a class="btn btn-secondary-outline m-b-2" href="#" role="button">View more</a>*/
/*           </div>*/
/*           <div class="background-vignette"></div>*/
/*         </div> #}*/
/*           <!-- we will tap into social apis and get the counts for followers or posts and load here-->*/
/*         <ul class="nav nav-inline social-share">*/
/*           <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>*/
/*           <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>*/
/*     {# } #}*/
/* <!--          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> 356</a></li>-->*/
/*         </ul>*/
/*       </div>*/
/*     </header>*/
/* */
/* */
/* */
/* */
/* {# <div class="container"> #}*/
/*     {# <div class="container large-12 columns"> #}*/
/* */
