<?php

/* {# inline_template_start #}<div class="col-md-4">
<div class="report-image><a href="{{ field_annual_report_link }}" download>{{ field_report_image }}</a></div>
<div class="annual-report-title"><a href="{{ field_annual_report_link }}" download>{{ title }}</a></div>
</div> */
class __TwigTemplate_0d6182b9eedaa783ab30d5c3825b78508381aca809bf634c72c1699c2495e2d1 extends Twig_Template
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
        echo "<div class=\"col-md-4\">
<div class=\"report-image><a href=\"";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_annual_report_link"]) ? $context["field_annual_report_link"] : null), "html", null, true));
        echo "\" download>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_report_image"]) ? $context["field_report_image"] : null), "html", null, true));
        echo "</a></div>
<div class=\"annual-report-title\"><a href=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_annual_report_link"]) ? $context["field_annual_report_link"] : null), "html", null, true));
        echo "\" download>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</a></div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-md-4\">
<div class=\"report-image><a href=\"{{ field_annual_report_link }}\" download>{{ field_report_image }}</a></div>
<div class=\"annual-report-title\"><a href=\"{{ field_annual_report_link }}\" download>{{ title }}</a></div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 3,  49 => 2,  46 => 1,);
    }
}
/* {# inline_template_start #}<div class="col-md-4">*/
/* <div class="report-image><a href="{{ field_annual_report_link }}" download>{{ field_report_image }}</a></div>*/
/* <div class="annual-report-title"><a href="{{ field_annual_report_link }}" download>{{ title }}</a></div>*/
/* </div>*/
