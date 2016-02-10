<?php

/* editcontent/fields/_textarea.twig */
class __TwigTemplate_8d9f7b3346e898eb9a6d66aca5c68a3d91f957c73251f064d16c8121644baa89 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["option"] = array("class" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")));
        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        $context["attr_text"] = array("class" => $this->getAttribute(        // line 15
(isset($context["option"]) ? $context["option"] : null), "class", array()), "name" =>         // line 16
(isset($context["name"]) ? $context["name"] : null), "required" => $this->getAttribute(        // line 17
(isset($context["option"]) ? $context["option"] : null), "required", array()), "style" => (($this->getAttribute(        // line 18
(isset($context["option"]) ? $context["option"] : null), "height", array())) ? ((("height: " . $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())) . ";")) : ("")), "data_errortext" => $this->getAttribute(        // line 19
(isset($context["option"]) ? $context["option"] : null), "errortext", array()));
        // line 21
        echo "
";
        // line 23
        echo "
<fieldset class=\"textarea\">

    <div class=\"col-sm-12\">
        <label class=\"control-label\">";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
        <textarea";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_text"]) ? $context["attr_text"] : null)), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  52 => 27,  46 => 23,  43 => 21,  41 => 19,  40 => 18,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  33 => 13,  30 => 11,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     class:     field.class|default(''),*/
/*     height:    field.height|default(''),*/
/*     label:     field.label|default(''),*/
/*     info:      field.info|default(''),*/
/*     required:  field.required|default(false),*/
/*     errortext: field.error|default(''),*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set attr_text = {*/
/*     class:     option.class,*/
/*     name:      name,*/
/*     required:  option.required,*/
/*     style:     option.height ? 'height: ' ~ option.height ~ ';' : '',*/
/*     data_errortext: option.errortext,*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* <fieldset class="textarea">*/
/* */
/*     <div class="col-sm-12">*/
/*         <label class="control-label">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>*/
/*         <textarea{{ macro.attr(attr_text) }}>{{ context.content.get(contentkey)|default('') }}</textarea>*/
/*     </div>*/
/* */
/* </fieldset>*/
/* */
