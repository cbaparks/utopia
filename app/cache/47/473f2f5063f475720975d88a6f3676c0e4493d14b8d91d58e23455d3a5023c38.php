<?php

/* _sub_taxonomylinks.twig */
class __TwigTemplate_ce9a4e9a0d48d16c23172d09b0d7860a509dfc6946b3a0063da4d62c98e99366 extends Twig_Template
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
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array(), "any", true, true)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array()));
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
            foreach ($context['_seq'] as $context["type"] => $context["values"]) {
                // line 3
                echo "        <em>
        ";
                // line 4
                if ((twig_length_filter($this->env, $context["values"]) < 2)) {
                    // line 5
                    echo "            ";
                    // line 6
                    echo "        ";
                } else {
                    // line 7
                    echo "            ";
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        </em>
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["values"]);
                $context['_iterated'] = false;
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
                foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                    // line 11
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 12
                    echo "        ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                if (!$context['_iterated']) {
                    // line 13
                    echo "            ";
                    echo $this->env->getExtension('Bolt')->trans("none");
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " - ";
                }
                // line 16
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  106 => 15,  97 => 13,  84 => 12,  75 => 11,  57 => 10,  54 => 9,  51 => 8,  49 => 7,  46 => 6,  44 => 5,  42 => 4,  39 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if record.taxonomy is defined %}*/
/*     {% for type, values in record.taxonomy %}*/
/*         <em>*/
/*         {% if values|length < 2 %}*/
/*             {# {{ config.get('taxonomy')[type].singular_name }}: #}*/
/*         {% else %}*/
/*             {# {{ config.get('taxonomy')[type].name }}: #}*/
/*         {% endif %}*/
/*         </em>*/
/*         {% for link, value in values %}*/
/*             <a href="{{ link }}">{{ value }}</a>{% if not loop.last %}, {% endif %}*/
/*         {% else %}*/
/*             {{ __('none') }}*/
/*         {% endfor %}*/
/*         {% if not loop.last %} - {% endif %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */