<?php

/* modules/webform/templates/webform-actions.html.twig */
class __TwigTemplate_7c1d5947bf1d8ccf10829e135399b19e40e7726f2f9c446c7aa3bffed59d7d74 extends Twig_Template
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

        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["draft"]) ? $context["draft"] : null), "html", null, true));
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true));
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true));
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submit"]) ? $context["submit"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  47 => 15,  45 => 14,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a webform actions.*/
/*  **/
/*  * @see template_preprocess_webform_actions()*/
/*  * @see \Drupal\webform\WebformSubmissionForm::actionsElement*/
/*  * @see \Drupal\webform\WebformSubmissionForm::actions*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ draft }}*/
/* {{ previous }}*/
/* {{ next }}*/
/* {{ submit }}*/
/* */
