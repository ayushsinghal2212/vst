<?php

/* {# inline_template_start #}<div class="container-fluid lgsystem">
<div class="row">
  <div class="col-xs-4 labels text-right">Lighting</div>
  <div class="col-xs-8 text-left">{{ field_lighting }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Alternator</div>
  <div class="col-xs-8 text-left">{{ field_alternator }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Glow Plug</div>
  <div class="col-xs-8 text-left">{{ field_glow_plug }}</div>
</div>
</div> */
class __TwigTemplate_3157b7504b0f38b49f46092758e9c2c0786ccc9abe2c8f2261a996ae6ca2f3d7 extends Twig_Template
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
        echo "<div class=\"container-fluid lgsystem\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Lighting</div>
  <div class=\"col-xs-8 text-left\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_lighting"]) ? $context["field_lighting"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Alternator</div>
  <div class=\"col-xs-8 text-left\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_alternator"]) ? $context["field_alternator"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Glow Plug</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_glow_plug"]) ? $context["field_glow_plug"] : null), "html", null, true));
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid lgsystem\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Lighting</div>
  <div class=\"col-xs-8 text-left\">{{ field_lighting }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Alternator</div>
  <div class=\"col-xs-8 text-left\">{{ field_alternator }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Glow Plug</div>
  <div class=\"col-xs-8 text-left\">{{ field_glow_plug }}</div>
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
/* {# inline_template_start #}<div class="container-fluid lgsystem">*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Lighting</div>*/
/*   <div class="col-xs-8 text-left">{{ field_lighting }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Alternator</div>*/
/*   <div class="col-xs-8 text-left">{{ field_alternator }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Glow Plug</div>*/
/*   <div class="col-xs-8 text-left">{{ field_glow_plug }}</div>*/
/* </div>*/
/* </div>*/
