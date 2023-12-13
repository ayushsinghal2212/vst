<?php

/* {# inline_template_start #}<div class="row crop_top">
  <div class="col-md-6 title">{{ field_content_title }}</div>
  <div class="col-md-6 pdf_file">{{ field_crop_type_pdf }} to view</div>
</div> */
class __TwigTemplate_622b037ff9a83cec4f88f730349887d8ad26534a92e3b54a52516ad301ada0cd extends Twig_Template
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
        echo "<div class=\"row crop_top\">
  <div class=\"col-md-6 title\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_content_title"]) ? $context["field_content_title"] : null), "html", null, true));
        echo "</div>
  <div class=\"col-md-6 pdf_file\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_crop_type_pdf"]) ? $context["field_crop_type_pdf"] : null), "html", null, true));
        echo " to view</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row crop_top\">
  <div class=\"col-md-6 title\">{{ field_content_title }}</div>
  <div class=\"col-md-6 pdf_file\">{{ field_crop_type_pdf }} to view</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  49 => 2,  46 => 1,);
    }
}
/* {# inline_template_start #}<div class="row crop_top">*/
/*   <div class="col-md-6 title">{{ field_content_title }}</div>*/
/*   <div class="col-md-6 pdf_file">{{ field_crop_type_pdf }} to view</div>*/
/* </div>*/
