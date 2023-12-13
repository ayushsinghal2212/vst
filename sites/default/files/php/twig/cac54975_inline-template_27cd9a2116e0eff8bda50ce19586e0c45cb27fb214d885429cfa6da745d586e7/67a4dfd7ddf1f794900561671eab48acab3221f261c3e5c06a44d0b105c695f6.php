<?php

/* {# inline_template_start #}<div class="container-fluid perf">
<div class="row">
  <div class="col-xs-4 labels text-right">Tilling Width</div>
  <div class="col-xs-8 text-left">{{ field_tilling }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">No. of Tynes</div>
  <div class="col-xs-8 text-left">{{ field_no_of_tynes }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Tilling Depth</div>
  <div class="col-xs-8 text-left">{{ field_tilling_depth }}</div>
</div>
<div class="row">
  <div class="col-xs-4 labels text-right">Plough Depth</div>
  <div class="col-xs-8 text-left">{{ field_plough_depth }}</div>
</div>
</div> */
class __TwigTemplate_07bb87cba73bb4a2d6ff5b0666b2ad8b5ebb51632f31f9b44043e453d177db3b extends Twig_Template
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
        echo "<div class=\"container-fluid perf\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Tilling Width</div>
  <div class=\"col-xs-8 text-left\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tilling"]) ? $context["field_tilling"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">No. of Tynes</div>
  <div class=\"col-xs-8 text-left\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_no_of_tynes"]) ? $context["field_no_of_tynes"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Tilling Depth</div>
  <div class=\"col-xs-8 text-left\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tilling_depth"]) ? $context["field_tilling_depth"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Plough Depth</div>
  <div class=\"col-xs-8 text-left\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_plough_depth"]) ? $context["field_plough_depth"] : null), "html", null, true));
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid perf\">
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Tilling Width</div>
  <div class=\"col-xs-8 text-left\">{{ field_tilling }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">No. of Tynes</div>
  <div class=\"col-xs-8 text-left\">{{ field_no_of_tynes }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Tilling Depth</div>
  <div class=\"col-xs-8 text-left\">{{ field_tilling_depth }}</div>
</div>
<div class=\"row\">
  <div class=\"col-xs-4 labels text-right\">Plough Depth</div>
  <div class=\"col-xs-8 text-left\">{{ field_plough_depth }}</div>
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
/* {# inline_template_start #}<div class="container-fluid perf">*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Tilling Width</div>*/
/*   <div class="col-xs-8 text-left">{{ field_tilling }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">No. of Tynes</div>*/
/*   <div class="col-xs-8 text-left">{{ field_no_of_tynes }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Tilling Depth</div>*/
/*   <div class="col-xs-8 text-left">{{ field_tilling_depth }}</div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-xs-4 labels text-right">Plough Depth</div>*/
/*   <div class="col-xs-8 text-left">{{ field_plough_depth }}</div>*/
/* </div>*/
/* </div>*/
