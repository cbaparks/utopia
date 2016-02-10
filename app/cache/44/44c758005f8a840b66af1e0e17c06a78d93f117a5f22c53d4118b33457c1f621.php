<?php

/* _sub_menu.twig */
class __TwigTemplate_294adc2484597d7245dff1c17b519de1cc3eff8758f994090e6218e5f4ca76aa extends Twig_Template
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
        ob_start();
        // line 7
        echo "
";
        // line 30
        echo "
";
        // line 32
        $context["__internal_9e1ed9b5de380063b9ef3f8406489e6079ec7bf5d77e5080a4eb6bcf8395ab03"] = $this;
        // line 33
        echo "
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 37
                echo "        ";
                echo $context["__internal_9e1ed9b5de380063b9ef3f8406489e6079ec7bf5d77e5080a4eb6bcf8395ab03"]->getdisplay_menu_item($context["item"], $context["loop"]);
                echo "
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "
    ";
            // line 12
            $context["__internal_0a92776786207c06341185975238461ec4572c03916d60bee717fcdcabd20677"] = $this;
            // line 13
            echo "
    <li class=\"nav-item nav-item-toggable ";
            // line 14
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) ? (" active") : (""));
            echo "\">

        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
            echo "\" title='";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "")) : ("")));
            echo "' class='nav-link ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "")) : ("")), "html", null, true);
            echo "'>
            ";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "-")) : ("-")), "html", null, true);
            echo "
        </a>

        ";
            // line 20
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                // line 21
                echo "            <ul class=\"dropdown\">
                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 23
                    echo "                    ";
                    echo $context["__internal_0a92776786207c06341185975238461ec4572c03916d60bee717fcdcabd20677"]->getdisplay_menu_item($context["submenu"], $context["loop"]);
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            </ul>
        ";
            }
            // line 27
            echo "
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 27,  155 => 25,  138 => 23,  121 => 22,  118 => 21,  116 => 20,  110 => 17,  102 => 16,  97 => 14,  94 => 13,  92 => 12,  89 => 11,  76 => 10,  70 => 40,  52 => 37,  49 => 36,  32 => 35,  29 => 33,  27 => 32,  24 => 30,  21 => 7,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {# This file might seem a little complex, because of the high density of tags.*/
/*    It uses Twig macros and ternary selectors. Read up on them, if required:*/
/*    macros: http://twig.sensiolabs.org/doc/templates.html#macros*/
/*    ternary operators: http://twig.sensiolabs.org/doc/templates.html#other-operators*/
/* #}*/
/* */
/* {# The 'recursive' macro, for inserting one menu item. If it has a submenu, it*/
/*    invokes itself to insert the items of the submenus. #}*/
/* {% macro display_menu_item(item, loop) %}*/
/* */
/*     {% from _self import display_menu_item %}*/
/* */
/*     <li class="nav-item nav-item-toggable {{ loop.first ? ' active'}}">*/
/* */
/*         <a href="{{ item.link }}" title='{{ item.title|default('')|escape }}' class='nav-link {{ item.class|default('') }}'>*/
/*             {{ item.label|default('-') }}*/
/*         </a>*/
/* */
/*         {% if item.submenu is defined %}*/
/*             <ul class="dropdown">*/
/*                 {% for submenu in item.submenu %}*/
/*                     {{ display_menu_item(submenu, loop) }}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/* */
/*     </li>*/
/* {% endmacro %}*/
/* */
/* {# Make the macro available for use #}*/
/* {% from _self import display_menu_item %}*/
/* */
/* {# The main menu loop: Iterates over the items, calling `display_menu_item` #}*/
/* {% for item in menu %}*/
/*     {% if item.label is defined %}*/
/*         {{ display_menu_item(item, loop) }}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% endspaceless %}*/
/* */
