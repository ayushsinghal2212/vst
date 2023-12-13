<?php

/* {# inline_template_start #}<div class="container-fluid overview">
<div class="row">
  <div class="col-xs-4 labels text-right">Cutting Type</div>
  <div class="col-xs-8 text-left">{{ field_cutting_type }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Cutting Width</div>
  <div class="col-xs-8 text-left">{{ field_cutting_width }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Min. Cutting Height</div>
  <div class="col-xs-8 text-left">{{ field_min_cutting_height }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Crop Placing</div>
  <div class="col-xs-8 text-left">{{ field_crop_placing }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Turning</div>
  <div class="col-xs-8 text-left">{{ field_turning }}</div>
</div>
</div> */
class __TwigTemplate_b092136534610f6b7c194f4ab43325d573dc0cb03a736c79e4ef4e206b22974a extends Twig_Template
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
  <div class=\"col-xs-4 labels text-right\">Cutting Type</div>
  <div class=\"col-xs-8 text-left\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_cutting_type"]) ? $context["field_cutting_type"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Cutting Width</div>
  <div class=\"col-xs-8 text-left\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_cutting_width"]) ? $context["field_cutting_width"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Min. Cutting Height</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_min_cutting_height"]) ? $context["field_min_cutting_height"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Crop Placing</div>
  <div class=\"col-xs-8 text-left\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_crop_placing"]) ? $context["field_crop_placing"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Turning</div>
  <div class=\"col-xs-8 text-left\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_turning"]) ? $context["field_turning"] : null), "html", null, true));
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid overview\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Cutting Type</div>
  <div class=\"col-xs-8 text-left\">{{ field_cutting_type }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Cutting Width</div>
  <div class=\"col-xs-8 text-left\">{{ field_cutting_width }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Min. Cutting Height</div>
  <div class=\"col-xs-8 text-left\">{{ field_min_cutting_height }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Crop Placing</div>
  <div class=\"col-xs-8 text-left\">{{ field_crop_placing }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Turning</div>
  <div class=\"col-xs-8 text-left\">{{ field_turning }}</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 20,  90 => 16,  83 => 12,  76 => 8,  69 => 4,  64 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid overview">*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Cutting Type</div>*/
/*   <div class="col-xs-8 text-left">{{ field_cutting_type }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Cutting Width</div>*/
/*   <div class="col-xs-8 text-left">{{ field_cutting_width }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Min. Cutting Height</div>*/
/*   <div class="col-xs-8 text-left">{{ field_min_cutting_height }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Crop Placing</div>*/
/*   <div class="col-xs-8 text-left">{{ field_crop_placing }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Turning</div>*/
/*   <div class="col-xs-8 text-left">{{ field_turning }}</div>*/
/* </div>*/
/* </div>*/
