<?php

/* {# inline_template_start #}<div class="container-fluid overview">
<div class="row">
  <div class="col-xs-4 labels text-right">Name</div>
  <div class="col-xs-8 text-left">{{ title }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Model</div>
  <div class="col-xs-8 text-left">{{ field_model }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Type</div>
  <div class="col-xs-8 text-left">{{ field_type }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Working Efficiency</div>
  <div class="col-xs-8 text-left">{{ field_working_efficiency_acre_hr }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Overall Dimensions (L x W x H)</div>
  <div class="col-xs-8 text-left">{{ field_overall_dimensions_l_x_w_x }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Weight</div>
  <div class="col-xs-8 text-left">{{ field_weight_tran }}</div>
</div>
</div> */
class __TwigTemplate_e7f3f4f9c242ffc0be929882ecd5a7a8f45baad4e674091d1be39f360446c60c extends Twig_Template
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

        // line 1
        echo "<div class=\"container-fluid overview\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Name</div>
  <div class=\"col-xs-8 text-left\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Model</div>
  <div class=\"col-xs-8 text-left\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_model"]) ? $context["field_model"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Type</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_type"]) ? $context["field_type"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Working Efficiency</div>
  <div class=\"col-xs-8 text-left\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_working_efficiency_acre_hr"]) ? $context["field_working_efficiency_acre_hr"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Overall Dimensions (L x W x H)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_overall_dimensions_l_x_w_x"]) ? $context["field_overall_dimensions_l_x_w_x"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Weight</div>
  <div class=\"col-xs-8 text-left\">";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_weight_tran"]) ? $context["field_weight_tran"] : null), "html", null, true));
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid overview\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Name</div>
  <div class=\"col-xs-8 text-left\">{{ title }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Model</div>
  <div class=\"col-xs-8 text-left\">{{ field_model }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Type</div>
  <div class=\"col-xs-8 text-left\">{{ field_type }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Working Efficiency</div>
  <div class=\"col-xs-8 text-left\">{{ field_working_efficiency_acre_hr }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Overall Dimensions (L x W x H)</div>
  <div class=\"col-xs-8 text-left\">{{ field_overall_dimensions_l_x_w_x }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Weight</div>
  <div class=\"col-xs-8 text-left\">{{ field_weight_tran }}</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  101 => 20,  94 => 16,  87 => 12,  80 => 8,  73 => 4,  68 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid overview">*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Name</div>*/
/*   <div class="col-xs-8 text-left">{{ title }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Model</div>*/
/*   <div class="col-xs-8 text-left">{{ field_model }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Type</div>*/
/*   <div class="col-xs-8 text-left">{{ field_type }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Working Efficiency</div>*/
/*   <div class="col-xs-8 text-left">{{ field_working_efficiency_acre_hr }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Overall Dimensions (L x W x H)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_overall_dimensions_l_x_w_x }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Weight</div>*/
/*   <div class="col-xs-8 text-left">{{ field_weight_tran }}</div>*/
/* </div>*/
/* </div>*/
