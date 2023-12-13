<?php

/* {# inline_template_start #}<div class="container-fluid tech_spec">
<div class="row">
  <div class="col-xs-12">{{ field_technical_specification }}</div>
</div>
</div> */
class __TwigTemplate_c4321195579097166179160cba9ead3b7f6205e3e403e1bc5916e1a74dd672be extends Twig_Template
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
        echo "<div class=\"container-fluid tech_spec\">
<div class=\"row\">
  <div class=\"col-xs-12\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_technical_specification"]) ? $context["field_technical_specification"] : null), "html", null, true));
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid tech_spec\">
<div class=\"row\">
  <div class=\"col-xs-12\">{{ field_technical_specification }}</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 3,  47 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid tech_spec">*/
/* <div class="row">*/
/*   <div class="col-xs-12">{{ field_technical_specification }}</div>*/
/* </div>*/
/* </div>*/
