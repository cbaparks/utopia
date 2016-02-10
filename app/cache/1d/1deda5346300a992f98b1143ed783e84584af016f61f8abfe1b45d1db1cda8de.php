<?php

/* _header_entry.twig */
class __TwigTemplate_78dc79778f2a6a934e6d6f42b81d58a6d704e843dfcb612b87525eba25728ad9 extends Twig_Template
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


   <header id=\"landioCarousel\" class=\"carousel carousel-header slide bg-inverse\" data-ride=\"carousel\" data-interval=\"0\" role=\"banner\">
        <div id=\"home\"></div>
      <ol class=\"carousel-indicators\">
        <li data-target=\"#landioCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <!-- <li data-target=\"#landioCarousel\" data-slide-to=\"1\"></li> -->
        <!-- <li data-target=\"#landioCarousel\" data-slide-to=\"2\"></li> -->
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
          <!--
            carousel items will be pulled from database:
            limit of 5, latest and randomized
            -->
        <div class=\"carousel-item active\" style=\"background-image: url('../files/";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "values", array()), "image", array()), "file", array()), "html", null, true);
        echo "');\">
          <div class=\"carousel-caption\">
            <h1 class=\"display-3\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h1>
            <!-- <h2 class=\"m-b-3 hidden-sm-down\">slide 1 caption.</h2> -->
            <a class=\"btn btn-secondary-outline m-b-2\" href=\"#\" role=\"button\">View more</a>
          </div>
          <div class=\"background-vignette\"></div>
        </div>
          <!-- we will tap into social apis and get the counts for followers or posts and load here-->
        <ul class=\"nav nav-inline social-share\">
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"icon-twitter\"></span> 1024</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"icon-facebook\"></span> 562</a></li>
<!--          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"icon-linkedin\"></span> 356</a></li>-->
        </ul>
      </div>

    </header>




";
        // line 88
        echo "    ";
    }

    public function getTemplateName()
    {
        return "_header_entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 88,  125 => 68,  120 => 66,  98 => 47,  80 => 31,  75 => 27,  73 => 26,  71 => 24,  67 => 22,  63 => 21,  59 => 20,  54 => 19,  48 => 13,  43 => 12,  38 => 11,  33 => 10,  30 => 9,  22 => 2,  19 => 1,);
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
/* */
/*    <header id="landioCarousel" class="carousel carousel-header slide bg-inverse" data-ride="carousel" data-interval="0" role="banner">*/
/*         <div id="home"></div>*/
/*       <ol class="carousel-indicators">*/
/*         <li data-target="#landioCarousel" data-slide-to="0" class="active"></li>*/
/*         <!-- <li data-target="#landioCarousel" data-slide-to="1"></li> -->*/
/*         <!-- <li data-target="#landioCarousel" data-slide-to="2"></li> -->*/
/*       </ol>*/
/*       <div class="carousel-inner" role="listbox">*/
/*           <!--*/
/*             carousel items will be pulled from database:*/
/*             limit of 5, latest and randomized*/
/*             -->*/
/*         <div class="carousel-item active" style="background-image: url('../files/{{ record.values.image.file }}');">*/
/*           <div class="carousel-caption">*/
/*             <h1 class="display-3">{{ record.title }}</h1>*/
/*             <!-- <h2 class="m-b-3 hidden-sm-down">slide 1 caption.</h2> -->*/
/*             <a class="btn btn-secondary-outline m-b-2" href="#" role="button">View more</a>*/
/*           </div>*/
/*           <div class="background-vignette"></div>*/
/*         </div>*/
/*           <!-- we will tap into social apis and get the counts for followers or posts and load here-->*/
/*         <ul class="nav nav-inline social-share">*/
/*           <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>*/
/*           <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>*/
/* <!--          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> 356</a></li>-->*/
/*         </ul>*/
/*       </div>*/
/* */
/*     </header>*/
/* */
/* */
/* */
/* */
/* {# <div class="container"> #}*/
/*     {# <div class="container large-12 columns"> #}*/
/* */
