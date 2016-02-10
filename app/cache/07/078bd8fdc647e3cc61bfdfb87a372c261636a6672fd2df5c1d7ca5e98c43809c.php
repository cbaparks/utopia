<?php

/* _footer.twig */
class __TwigTemplate_fd3042cb8024c57ddae2375aae1416728efdeea2977aab36b7cfe9ab377b191e extends Twig_Template
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
        echo "
";
        // line 2
        $template_storage = new Bolt\Storage($context['app']);
        $context['footer'] =         $template_storage->getContent("/showcase/footer", array() );
        // line 3
        echo "
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : null), "html", array()), "html", null, true);
        echo "
<!-- Footer -->
        ";
        // line 18
        echo "    ";
        // line 20
        echo "
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/index.js\"></script>
     <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/staff.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/landio.min.js\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/master.js\"></script>
    ";
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        // line 31
        echo "
    ";
        // line 34
        echo "    ";
        // line 35
        echo "
    ";
        // line 37
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 37,  66 => 35,  64 => 34,  61 => 31,  59 => 30,  57 => 29,  53 => 27,  49 => 26,  45 => 25,  41 => 24,  35 => 20,  33 => 18,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% setcontent footer = '/showcase/footer' %}*/
/* */
/*         {{ footer.html }}*/
/* <!-- Footer -->*/
/*         {# <footer class="large-12 columns">*/
/*             <hr />*/
/*             <div class="large-6 columns">*/
/*                 <p>{{ __("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.",{'%url%':'http://bolt.cm'}) }}*/
/*                 </p>*/
/*             </div>*/
/*             <div class="large-6 columns">*/
/*                 <ul class="inline-list">*/
/*                     {{ menu() }}*/
/*                 </ul>*/
/*             </div>*/
/*         </footer> #}*/
/*     {# </div> #}*/
/* {# </div> #}*/
/* */
/*     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*     <script src="{{ paths.theme }}js/index.js"></script>*/
/*      <script src="{{ paths.theme }}js/staff.js"></script>*/
/*     <script src="{{ paths.theme }}js/landio.min.js"></script>*/
/*     <script src="{{ paths.theme }}js/master.js"></script>*/
/*     {# // <script src="{{ paths.theme }}js/jquery-2.1.0.min.js"></script> #}*/
/*     {# // <script src="{{ paths.theme }}js/foundation.min.js"></script> #}*/
/*     {# // <script src="{{ paths.theme }}js/modernizr.js"></script> #}*/
/* */
/*     {# Bolt comes with Magnific Popup, as it's used in the backend. We can use it here, or you can*/
/*        just swap it out for the image-viewing script of your choice. Or delete it altogether. #}*/
/*     {# // <script src="{{ paths.theme }}js/jquery.magnific-popup.min.js"></script> #}*/
/* */
/*     {# // <script src="{{ paths.theme }}js/app.js" async defer></script> #}*/
/* */
/* </body>*/
/* </html>*/
/* */
