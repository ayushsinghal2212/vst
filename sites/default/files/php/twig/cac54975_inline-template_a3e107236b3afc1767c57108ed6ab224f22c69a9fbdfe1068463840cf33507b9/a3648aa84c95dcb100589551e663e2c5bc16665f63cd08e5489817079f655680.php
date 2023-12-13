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
  <div class="col-xs-4 labels text-right">Overall Dimensions (L x W x H)</div>
  <div class="col-xs-8 text-left">{{ field_overall_dimensions_l_x_w_x }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Wheel Base</div>
  <div class="col-xs-8 text-left">{{ field_wheel_bse }}</div>
</div>
</div> */
class __TwigTemplate_4755bdeed4dbe5d8da83cccc9573227cafc175ea93a31384d5318f8e416bcf78 extends Twig_Template
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
  <div class=\"col-xs-4 labels text-right\">Overall Dimensions (L x W x H)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_overall_dimensions_l_x_w_x"]) ? $context["field_overall_dimensions_l_x_w_x"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Wheel Base</div>
  <div class=\"col-xs-8 text-left\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_wheel_bse"]) ? $context["field_wheel_bse"] : null), "html", null, true));
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
  <div class=\"col-xs-4 labels text-right\">Overall Dimensions (L x W x H)</div>
  <div class=\"col-xs-8 text-left\">{{ field_overall_dimensions_l_x_w_x }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Wheel Base</div>
  <div class=\"col-xs-8 text-left\">{{ field_wheel_bse }}</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  79 => 12,  72 => 8,  65 => 4,  60 => 1,);
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
/*   <div class="col-xs-4 labels text-right">Overall Dimensions (L x W x H)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_overall_dimensions_l_x_w_x }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Wheel Base</div>*/
/*   <div class="col-xs-8 text-left">{{ field_wheel_bse }}</div>*/
/* </div>*/
/* </div>*/
