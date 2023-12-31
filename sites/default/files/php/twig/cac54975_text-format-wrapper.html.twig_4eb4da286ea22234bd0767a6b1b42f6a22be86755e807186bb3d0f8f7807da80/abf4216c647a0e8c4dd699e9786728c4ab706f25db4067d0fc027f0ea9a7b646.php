<?php

/* core/themes/classy/templates/content-edit/text-format-wrapper.html.twig */
class __TwigTemplate_a5841ec014fc05361c118ca3ee1f4135983e0ad1fd6f7dd585e95f252bf2dd95 extends Twig_Template
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
        $tags = array("if" => 18, "set" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        echo "<div class=\"js-text-format-wrapper text-format-wrapper js-form-item form-item\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 20
            $context["classes"] = array(0 => ((            // line 21
(isset($context["aria_description"]) ? $context["aria_description"] : null)) ? ("description") : ("")));
            // line 24
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "</div>";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 26,  52 => 24,  50 => 21,  49 => 20,  47 => 18,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a text format-enabled form element.*/
/*  **/
/*  * Available variables:*/
/*  * - children: Text format element children.*/
/*  * - description: Text format element description.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - aria_description: Flag for whether or not an ARIA description has been*/
/*  *   added to the description container.*/
/*  **/
/*  * @see template_preprocess_text_format_wrapper()*/
/*  *//* */
/* #}*/
/* <div class="js-text-format-wrapper text-format-wrapper js-form-item form-item">*/
/*   {{ children }}*/
/*   {% if description %}*/
/*     {%*/
/*       set classes = [*/
/*         aria_description ? 'description',*/
/*       ]*/
/*     %}*/
/*     <div{{ attributes.addClass(classes) }}>{{ description }}</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
