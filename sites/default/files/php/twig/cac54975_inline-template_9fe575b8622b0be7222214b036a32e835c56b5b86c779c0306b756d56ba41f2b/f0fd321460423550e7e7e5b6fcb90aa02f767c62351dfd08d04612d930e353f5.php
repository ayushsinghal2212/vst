<?php

/* {# inline_template_start #}<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
	  <div class="pic">{{ field_image_news }}</div>
	</div>
    <div class="col-sm-9">
      <h2 class="title">{{ title }}</h2>
      <div class="date">{{ field_dated }}</div>
      <div class="location">{{ field_location }}</div>
      <div class="desc">{{ field_news }}</div>
      <div class="more">{{ view_node }}</div>
	</div>
  </div>
</div> */
class __TwigTemplate_429ea8ade1670a0519c2377e84bb3ad878c573e77df159239b9ab33200c300c1 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-3\">
\t  <div class=\"pic\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image_news"]) ? $context["field_image_news"] : null), "html", null, true));
        echo "</div>
\t</div>
    <div class=\"col-sm-9\">
      <h2 class=\"title\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
      <div class=\"date\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_dated"]) ? $context["field_dated"] : null), "html", null, true));
        echo "</div>
      <div class=\"location\">";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_location"]) ? $context["field_location"] : null), "html", null, true));
        echo "</div>
      <div class=\"desc\">";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_news"]) ? $context["field_news"] : null), "html", null, true));
        echo "</div>
      <div class=\"more\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
        echo "</div>
\t</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-3\">
\t  <div class=\"pic\">{{ field_image_news }}</div>
\t</div>
    <div class=\"col-sm-9\">
      <h2 class=\"title\">{{ title }}</h2>
      <div class=\"date\">{{ field_dated }}</div>
      <div class=\"location\">{{ field_location }}</div>
      <div class=\"desc\">{{ field_news }}</div>
      <div class=\"more\">{{ view_node }}</div>
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
        return array (  83 => 11,  79 => 10,  75 => 9,  71 => 8,  67 => 7,  61 => 4,  56 => 1,);
    }
}
/* {# inline_template_start #}<div class="container-fluid">*/
/*   <div class="row">*/
/*     <div class="col-sm-3">*/
/* 	  <div class="pic">{{ field_image_news }}</div>*/
/* 	</div>*/
/*     <div class="col-sm-9">*/
/*       <h2 class="title">{{ title }}</h2>*/
/*       <div class="date">{{ field_dated }}</div>*/
/*       <div class="location">{{ field_location }}</div>*/
/*       <div class="desc">{{ field_news }}</div>*/
/*       <div class="more">{{ view_node }}</div>*/
/* 	</div>*/
/*   </div>*/
/* </div>*/
