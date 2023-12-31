<?php

/* modules/flexslider/templates/flexslider.html.twig */
class __TwigTemplate_4a436202cc3671340eb1eb593094bb5bd0a6021844c519ae3662228a204bd42e extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 14
        echo "
<div";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "list", array()), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/flexslider/templates/flexslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  46 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default output for a FlexSlider object.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: An array of attributes to apply to the element.*/
/*  * - content.list: A renderable array of the flexslider list*/
/*  * - settings: An array containing the given settings.*/
/*  **/
/*  * @see template_preprocess_flexslider()*/
/*  *//* */
/* #}*/
/* */
/* <div{{ attributes }}>*/
/*  {{ content.list }}*/
/* </div>*/
/* */
