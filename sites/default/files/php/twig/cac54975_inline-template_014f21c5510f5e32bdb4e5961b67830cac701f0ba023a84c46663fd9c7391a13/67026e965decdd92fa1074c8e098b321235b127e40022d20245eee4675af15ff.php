<?php

/* {# inline_template_start #}<div class="container-fluid overview">
<div class="row">
  <div class="col-xs-4 labels text-right">Name</div>
  <div class="col-xs-8 text-left">{{ title }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Overall Dimensions (L x W x H)</div>
  <div class="col-xs-8 text-left">{{ field_overall_dimensions_l_x_w_x }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Weight (Engine & Transmission with Rotary)</div>
  <div class="col-xs-8 text-left">{{ field_haul }}</div>
</div>
</div> */
class __TwigTemplate_fc10220a63c02ebe77205453cb389013a02d7714028f64888cbc8d4d383e5e2c extends Twig_Template
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
  <div class=\"col-xs-4 labels text-right\">Overall Dimensions (L x W x H)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_overall_dimensions_l_x_w_x"]) ? $context["field_overall_dimensions_l_x_w_x"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Weight (Engine & Transmission with Rotary)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_haul"]) ? $context["field_haul"] : null), "html", null, true));
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
  <div class=\"col-xs-4 labels text-right\">Overall Dimensions (L x W x H)</div>
  <div class=\"col-xs-8 text-left\">{{ field_overall_dimensions_l_x_w_x }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Weight (Engine & Transmission with Rotary)</div>
  <div class=\"col-xs-8 text-left\">{{ field_haul }}</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  68 => 8,  61 => 4,  56 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid overview">*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Name</div>*/
/*   <div class="col-xs-8 text-left">{{ title }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Overall Dimensions (L x W x H)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_overall_dimensions_l_x_w_x }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Weight (Engine & Transmission with Rotary)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_haul }}</div>*/
/* </div>*/
/* </div>*/
