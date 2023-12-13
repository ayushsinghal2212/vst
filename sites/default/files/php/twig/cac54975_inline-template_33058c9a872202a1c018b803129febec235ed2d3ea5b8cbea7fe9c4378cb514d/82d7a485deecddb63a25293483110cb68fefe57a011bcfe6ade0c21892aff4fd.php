<?php

/* {# inline_template_start #}<div class="container-fluid trans">
<div class="row">
  <div class="col-xs-4 labels text-right">Transmission</div>
  <div class="col-xs-8 text-left">{{ field_transmission }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Forward</div>
  <div class="col-xs-8 text-left">{{ field_forward }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Reverse</div>
  <div class="col-xs-8 text-left">{{ field_reverse }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Travelling Speed</div>
  <div class="col-xs-8 text-left">{{ field_travelling_speed }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Power Take Off (P.T.O)</div>
  <div class="col-xs-8 text-left">{{ field_power_take_off_p_t_o_ }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Standard (P.T.O)</div>
  <div class="col-xs-8 text-left">{{ field_pto_std }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Brake</div>
  <div class="col-xs-8 text-left">{{ field_brake }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Hydraulics</div>
  <div class="col-xs-8 text-left">{{ field_hydraulics }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Max. Lift</div>
  <div class="col-xs-8 text-left">{{ field_max_lift }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Tyres</div>
  <div class="col-xs-8 text-left">{{ field_tyres }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Ground Clearance</div>
  <div class="col-xs-8 text-left">{{ field_ground_clearance }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Turning Radius</div>
  <div class="col-xs-8 text-left">{{ field_rad_turn }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Hauling Capacity</div>
  <div class="col-xs-8 text-left">{{ field_haul }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Rotary</div>
  <div class="col-xs-8 text-left">{{ field_rotary }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Weight</div>
  <div class="col-xs-8 text-left">{{ field_weight_tran }}</div>
</div>
</div> */
class __TwigTemplate_dba0a52d93522813584b70fc86c8a3f135890a9555f669510264c819983b93c4 extends Twig_Template
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
        echo "<div class=\"container-fluid trans\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Transmission</div>
  <div class=\"col-xs-8 text-left\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_transmission"]) ? $context["field_transmission"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Forward</div>
  <div class=\"col-xs-8 text-left\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_forward"]) ? $context["field_forward"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Reverse</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_reverse"]) ? $context["field_reverse"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Travelling Speed</div>
  <div class=\"col-xs-8 text-left\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_travelling_speed"]) ? $context["field_travelling_speed"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Power Take Off (P.T.O)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_power_take_off_p_t_o_"]) ? $context["field_power_take_off_p_t_o_"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Standard (P.T.O)</div>
  <div class=\"col-xs-8 text-left\">";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_pto_std"]) ? $context["field_pto_std"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Brake</div>
  <div class=\"col-xs-8 text-left\">";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_brake"]) ? $context["field_brake"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Hydraulics</div>
  <div class=\"col-xs-8 text-left\">";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_hydraulics"]) ? $context["field_hydraulics"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Max. Lift</div>
  <div class=\"col-xs-8 text-left\">";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_max_lift"]) ? $context["field_max_lift"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Tyres</div>
  <div class=\"col-xs-8 text-left\">";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tyres"]) ? $context["field_tyres"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Ground Clearance</div>
  <div class=\"col-xs-8 text-left\">";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_ground_clearance"]) ? $context["field_ground_clearance"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Turning Radius</div>
  <div class=\"col-xs-8 text-left\">";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_rad_turn"]) ? $context["field_rad_turn"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Hauling Capacity</div>
  <div class=\"col-xs-8 text-left\">";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_haul"]) ? $context["field_haul"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Rotary</div>
  <div class=\"col-xs-8 text-left\">";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_rotary"]) ? $context["field_rotary"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Weight</div>
  <div class=\"col-xs-8 text-left\">";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_weight_tran"]) ? $context["field_weight_tran"] : null), "html", null, true));
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid trans\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Transmission</div>
  <div class=\"col-xs-8 text-left\">{{ field_transmission }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Forward</div>
  <div class=\"col-xs-8 text-left\">{{ field_forward }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Reverse</div>
  <div class=\"col-xs-8 text-left\">{{ field_reverse }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Travelling Speed</div>
  <div class=\"col-xs-8 text-left\">{{ field_travelling_speed }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Power Take Off (P.T.O)</div>
  <div class=\"col-xs-8 text-left\">{{ field_power_take_off_p_t_o_ }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Standard (P.T.O)</div>
  <div class=\"col-xs-8 text-left\">{{ field_pto_std }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Brake</div>
  <div class=\"col-xs-8 text-left\">{{ field_brake }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Hydraulics</div>
  <div class=\"col-xs-8 text-left\">{{ field_hydraulics }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Max. Lift</div>
  <div class=\"col-xs-8 text-left\">{{ field_max_lift }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Tyres</div>
  <div class=\"col-xs-8 text-left\">{{ field_tyres }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Ground Clearance</div>
  <div class=\"col-xs-8 text-left\">{{ field_ground_clearance }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Turning Radius</div>
  <div class=\"col-xs-8 text-left\">{{ field_rad_turn }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Hauling Capacity</div>
  <div class=\"col-xs-8 text-left\">{{ field_haul }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Rotary</div>
  <div class=\"col-xs-8 text-left\">{{ field_rotary }}</div>
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
        return array (  207 => 60,  200 => 56,  193 => 52,  186 => 48,  179 => 44,  172 => 40,  165 => 36,  158 => 32,  151 => 28,  144 => 24,  137 => 20,  130 => 16,  123 => 12,  116 => 8,  109 => 4,  104 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid trans">*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Transmission</div>*/
/*   <div class="col-xs-8 text-left">{{ field_transmission }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Forward</div>*/
/*   <div class="col-xs-8 text-left">{{ field_forward }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Reverse</div>*/
/*   <div class="col-xs-8 text-left">{{ field_reverse }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Travelling Speed</div>*/
/*   <div class="col-xs-8 text-left">{{ field_travelling_speed }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Power Take Off (P.T.O)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_power_take_off_p_t_o_ }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Standard (P.T.O)</div>*/
/*   <div class="col-xs-8 text-left">{{ field_pto_std }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Brake</div>*/
/*   <div class="col-xs-8 text-left">{{ field_brake }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Hydraulics</div>*/
/*   <div class="col-xs-8 text-left">{{ field_hydraulics }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Max. Lift</div>*/
/*   <div class="col-xs-8 text-left">{{ field_max_lift }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Tyres</div>*/
/*   <div class="col-xs-8 text-left">{{ field_tyres }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Ground Clearance</div>*/
/*   <div class="col-xs-8 text-left">{{ field_ground_clearance }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Turning Radius</div>*/
/*   <div class="col-xs-8 text-left">{{ field_rad_turn }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Hauling Capacity</div>*/
/*   <div class="col-xs-8 text-left">{{ field_haul }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Rotary</div>*/
/*   <div class="col-xs-8 text-left">{{ field_rotary }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Weight</div>*/
/*   <div class="col-xs-8 text-left">{{ field_weight_tran }}</div>*/
/* </div>*/
/* </div>*/
