<?php

/* {# inline_template_start #}<div class="container-fluid dmns_nw">
<div class="row">
  <div class="col-xs-12">
{{ field_dimensions_new_format_ }}
  </div>
</div>
</div> */
class __TwigTemplate_3e2bd71e0043c257cea6de63438c8266495eb13f0d3ba83aaee474b6941fed5c extends Twig_Template
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
        echo "<div class=\"container-fluid dmns_nw\">
<div class=\"row\">
  <div class=\"col-xs-12\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_dimensions_new_format_"]) ? $context["field_dimensions_new_format_"] : null), "html", null, true));
        echo "
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid dmns_nw\">
<div class=\"row\">
  <div class=\"col-xs-12\">
{{ field_dimensions_new_format_ }}
  </div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  49 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid dmns_nw">*/
/* <div class="row">*/
/*   <div class="col-xs-12">*/
/* {{ field_dimensions_new_format_ }}*/
/*   </div>*/
/* </div>*/
/* </div>*/
