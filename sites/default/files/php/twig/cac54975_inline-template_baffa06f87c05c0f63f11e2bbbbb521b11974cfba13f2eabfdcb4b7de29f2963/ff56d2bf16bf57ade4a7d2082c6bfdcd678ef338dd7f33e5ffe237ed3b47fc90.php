<?php

/* {# inline_template_start #}<div class="container-fluid wrap">
  <div class="row">
    <div class="col-xs-3 col-sm-2">
	  <div class="month">{{ field_dated }} </div>
      <div class="day">{{ field_dated_1 }} </div>
      <div class="location">{{ field_location }}</div>	
	</div>
    <div class="col-xs-9 col-sm-10">
      <div class="desc">{{ field_news }}</div>	
	</div>
  </div>
</div> */
class __TwigTemplate_489f99dc7dbf97baf8e0194e8b2be46a41da8fe8c59e5e68e4012a484f920a0d extends Twig_Template
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
        echo "<div class=\"container-fluid wrap\">
  <div class=\"row\">
    <div class=\"col-xs-3 col-sm-2\">
\t  <div class=\"month\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_dated"]) ? $context["field_dated"] : null), "html", null, true));
        echo " </div>
      <div class=\"day\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_dated_1"]) ? $context["field_dated_1"] : null), "html", null, true));
        echo " </div>
      <div class=\"location\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_location"]) ? $context["field_location"] : null), "html", null, true));
        echo "</div>\t
\t</div>
    <div class=\"col-xs-9 col-sm-10\">
      <div class=\"desc\">";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_news"]) ? $context["field_news"] : null), "html", null, true));
        echo "</div>\t
\t</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid wrap\">
  <div class=\"row\">
    <div class=\"col-xs-3 col-sm-2\">
\t  <div class=\"month\">{{ field_dated }} </div>
      <div class=\"day\">{{ field_dated_1 }} </div>
      <div class=\"location\">{{ field_location }}</div>\t
\t</div>
    <div class=\"col-xs-9 col-sm-10\">
      <div class=\"desc\">{{ field_news }}</div>\t
\t</div>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  67 => 6,  63 => 5,  59 => 4,  54 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid wrap">*/
/*   <div class="row">*/
/*     <div class="col-xs-3 col-sm-2">*/
/* 	  <div class="month">{{ field_dated }} </div>*/
/*       <div class="day">{{ field_dated_1 }} </div>*/
/*       <div class="location">{{ field_location }}</div>	*/
/* 	</div>*/
/*     <div class="col-xs-9 col-sm-10">*/
/*       <div class="desc">{{ field_news }}</div>	*/
/* 	</div>*/
/*   </div>*/
/* </div>*/
