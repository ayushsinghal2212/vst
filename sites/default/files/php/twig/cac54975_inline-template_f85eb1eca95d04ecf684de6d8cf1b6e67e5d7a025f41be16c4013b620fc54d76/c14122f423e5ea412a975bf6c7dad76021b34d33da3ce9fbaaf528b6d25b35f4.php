<?php

/* {# inline_template_start #}<h2 class="home-header">VST GROTECH</h2>
<h4 class="tagline-header">Technology and tools to boost Yield</h4>
<h2 class="sub-header">{{ title }}</h2>
<div class="cropTeaser">{{ field_body }}</div>
<div class="moreLink"><a class="use-ajax" data-dialog-type="modal" href="{{ path }}">View More</a></div> */
class __TwigTemplate_68ebcc47cce052b496637462d42d09653acb9c7be9d51b40c5c6ed8512a5a4b8 extends Twig_Template
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
        echo "<h2 class=\"home-header\">VST GROTECH</h2>
<h4 class=\"tagline-header\">Technology and tools to boost Yield</h4>
<h2 class=\"sub-header\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
<div class=\"cropTeaser\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_body"]) ? $context["field_body"] : null), "html", null, true));
        echo "</div>
<div class=\"moreLink\"><a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "\">View More</a></div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<h2 class=\"home-header\">VST GROTECH</h2>
<h4 class=\"tagline-header\">Technology and tools to boost Yield</h4>
<h2 class=\"sub-header\">{{ title }}</h2>
<div class=\"cropTeaser\">{{ field_body }}</div>
<div class=\"moreLink\"><a class=\"use-ajax\" data-dialog-type=\"modal\" href=\"{{ path }}\">View More</a></div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  55 => 4,  51 => 3,  47 => 1,);
    }
}
/* {# inline_template_start #}<h2 class="home-header">VST GROTECH</h2>*/
/* <h4 class="tagline-header">Technology and tools to boost Yield</h4>*/
/* <h2 class="sub-header">{{ title }}</h2>*/
/* <div class="cropTeaser">{{ field_body }}</div>*/
/* <div class="moreLink"><a class="use-ajax" data-dialog-type="modal" href="{{ path }}">View More</a></div>*/
