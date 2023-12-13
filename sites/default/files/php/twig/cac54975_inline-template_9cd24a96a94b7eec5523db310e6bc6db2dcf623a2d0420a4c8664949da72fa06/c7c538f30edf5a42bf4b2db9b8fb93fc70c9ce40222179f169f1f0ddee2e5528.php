<?php

/* {# inline_template_start #}<div class="container-fluid engine">
<div class="row">
  <div class="col-xs-4 labels text-right">Model</div>
  <div class="col-xs-8 text-left">{{ field_model_pt }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Type</div>
  <div class="col-xs-8 text-left">{{ field_type }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Bore</div>
  <div class="col-xs-8 text-left">{{ field_bore }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Stroke</div>
  <div class="col-xs-8 text-left">{{ field_stroke }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Displacement (Swept Volume)</div>
  <div class="col-xs-8 text-left">{{ field_displacement }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Compression Ratio</div>
  <div class="col-xs-8 text-left">{{ field_cratio }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Max. Torque</div>
  <div class="col-xs-8 text-left">{{ field_max_torque }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Output/Rated</div>
  <div class="col-xs-8 text-left">{{ field_output_rated }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">SFC (Specific Fuel Cons)</div>
  <div class="col-xs-8 text-left">{{ field_sfc_specific_fuel_consumpt }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Cooling System</div>
  <div class="col-xs-8 text-left">{{ field_cooling_system }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Starting System</div>
  <div class="col-xs-8 text-left">{{ field_starting_system }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Dry Weight</div>
  <div class="col-xs-8 text-left">{{ field_dry_weight }}</div>
</div>
</div> */
class __TwigTemplate_a4557b83cae857706e3945e2fd4d1ec336c06234570f9050a24945f8b56b41ce extends Twig_Template
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
        echo "<div class=\"container-fluid engine\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Model</div>
  <div class=\"col-xs-8 text-left\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_model_pt"]) ? $context["field_model_pt"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Type</div>
  <div class=\"col-xs-8 text-left\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_type"]) ? $context["field_type"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Bore</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_bore"]) ? $context["field_bore"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Stroke</div>
  <div class=\"col-xs-8 text-left\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_stroke"]) ? $context["field_stroke"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Displacement (Swept Volume)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_displacement"]) ? $context["field_displacement"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Compression Ratio</div>
  <div class=\"col-xs-8 text-left\">";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_cratio"]) ? $context["field_cratio"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Max. Torque</div>
  <div class=\"col-xs-8 text-left\">";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_max_torque"]) ? $context["field_max_torque"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Output/Rated</div>
  <div class=\"col-xs-8 text-left\">";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_output_rated"]) ? $context["field_output_rated"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">SFC (Specific Fuel Cons)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_sfc_specific_fuel_consumpt"]) ? $context["field_sfc_specific_fuel_consumpt"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Cooling System</div>
  <div class=\"col-xs-8 text-left\">";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_cooling_system"]) ? $context["field_cooling_system"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Starting System</div>
  <div class=\"col-xs-8 text-left\">";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_starting_system"]) ? $context["field_starting_system"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Dry Weight</div>
  <div class=\"col-xs-8 text-left\">";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_dry_weight"]) ? $context["field_dry_weight"] : null), "html", null, true));
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid engine\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Model</div>
  <div class=\"col-xs-8 text-left\">{{ field_model_pt }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Type</div>
  <div class=\"col-xs-8 text-left\">{{ field_type }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Bore</div>
  <div class=\"col-xs-8 text-left\">{{ field_bore }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Stroke</div>
  <div class=\"col-xs-8 text-left\">{{ field_stroke }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Displacement (Swept Volume)</div>
  <div class=\"col-xs-8 text-left\">{{ field_displacement }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Compression Ratio</div>
  <div class=\"col-xs-8 text-left\">{{ field_cratio }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Max. Torque</div>
  <div class=\"col-xs-8 text-left\">{{ field_max_torque }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Output/Rated</div>
  <div class=\"col-xs-8 text-left\">{{ field_output_rated }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">SFC (Specific Fuel Cons)</div>
  <div class=\"col-xs-8 text-left\">{{ field_sfc_specific_fuel_consumpt }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Cooling System</div>
  <div class=\"col-xs-8 text-left\">{{ field_cooling_system }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Starting System</div>
  <div class=\"col-xs-8 text-left\">{{ field_starting_system }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Dry Weight</div>
  <div class=\"col-xs-8 text-left\">{{ field_dry_weight }}</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 48,  167 => 44,  160 => 40,  153 => 36,  146 => 32,  139 => 28,  132 => 24,  125 => 20,  118 => 16,  111 => 12,  104 => 8,  97 => 4,  92 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid engine">*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Model</div>*/
/*   <div class="col-xs-8 text-left">{{ field_model_pt }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Type</div>*/
/*   <div class="col-xs-8 text-left">{{ field_type }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Bore</div>*/
/*   <div class="col-xs-8 text-left">{{ field_bore }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Stroke</div>*/
/*   <div class="col-xs-8 text-left">{{ field_stroke }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Displacement (Swept Volume)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_displacement }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Compression Ratio</div>*/
/*   <div class="col-xs-8 text-left">{{ field_cratio }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Max. Torque</div>*/
/*   <div class="col-xs-8 text-left">{{ field_max_torque }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Output/Rated</div>*/
/*   <div class="col-xs-8 text-left">{{ field_output_rated }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">SFC (Specific Fuel Cons)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_sfc_specific_fuel_consumpt }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Cooling System</div>*/
/*   <div class="col-xs-8 text-left">{{ field_cooling_system }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Starting System</div>*/
/*   <div class="col-xs-8 text-left">{{ field_starting_system }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Dry Weight</div>*/
/*   <div class="col-xs-8 text-left">{{ field_dry_weight }}</div>*/
/* </div>*/
/* </div>*/
