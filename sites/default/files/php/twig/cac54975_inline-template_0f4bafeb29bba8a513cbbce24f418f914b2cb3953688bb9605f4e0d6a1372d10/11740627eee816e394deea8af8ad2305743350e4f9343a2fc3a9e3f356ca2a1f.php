<?php

/* {# inline_template_start #}<h2 class="home-header">POWER REAPER</h2>
<h2 class="sub-header">{{ title }}</h2>
<div class="moreLink"><a href="/products/power-reaper/vst-shakti-5pr-power-reaper">View All</a></div> */
class __TwigTemplate_ba823289dca0c450e65b57906c26f0bf03488c43f3c3a3234cd60b00b4f83cf1 extends Twig_Template
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
        echo "<h2 class=\"home-header\">POWER REAPER</h2>
<h2 class=\"sub-header\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
<div class=\"moreLink\"><a href=\"/products/power-reaper/vst-shakti-5pr-power-reaper\">View All</a></div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<h2 class=\"home-header\">POWER REAPER</h2>
<h2 class=\"sub-header\">{{ title }}</h2>
<div class=\"moreLink\"><a href=\"/products/power-reaper/vst-shakti-5pr-power-reaper\">View All</a></div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 2,  45 => 1,);
    }
}
/* {# inline_template_start #}<h2 class="home-header">POWER REAPER</h2>*/
/* <h2 class="sub-header">{{ title }}</h2>*/
/* <div class="moreLink"><a href="/products/power-reaper/vst-shakti-5pr-power-reaper">View All</a></div>*/
