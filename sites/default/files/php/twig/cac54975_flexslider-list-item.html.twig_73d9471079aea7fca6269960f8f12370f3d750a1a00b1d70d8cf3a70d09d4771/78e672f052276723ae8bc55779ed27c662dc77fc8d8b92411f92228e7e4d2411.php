<?php

/* modules/flexslider/templates/flexslider-list-item.html.twig */
class __TwigTemplate_6889879aa58636a14f0f9dd98f09f0a9bbc838c0776ef372b68a99702f11977d extends Twig_Template
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
        $tags = array("if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 20
        echo "
<li";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true));
        // line 23
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 24
            echo "        <div class=\"flex-caption\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
            echo "</div>";
        }
        // line 26
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "modules/flexslider/templates/flexslider-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 26,  53 => 24,  51 => 23,  49 => 22,  46 => 21,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the individual Flexslider item/slide template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: An array of attributes to apply to the element.*/
/*  * - item.slide: A renderable array of the main image/background.*/
/*  * - item.caption: A renderable array containing caption fields if provided:*/
/*  *   - title: The individual slide title.*/
/*  *   - alt: The core Image field Alt as caption.*/
/*  *   - link: The slide links or buttons.*/
/*  *   - overlay: The image/audio/video overlay, or a nested slick.*/
/*  *   - data: any possible field for more complex data if crazy enough.*/
/*  * - settings: An array containing the given settings.*/
/*  **/
/*  * @see template_preprocess_flexslider_list_item()*/
/*  *//* */
/* #}*/
/* */
/* <li{{ attributes }}>*/
/*     {{ item }}*/
/*     {% if caption %}*/
/*         <div class="flex-caption">{{ caption }}</div>*/
/*     {% endif %}*/
/* </li>*/
