<?php

/* themes/bootstrap_mint/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_cb89b627b94d4d68008ddc19e1bed4b7b1a1c18e9d18055b29899d166f899140 extends Twig_Template
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
        $tags = array("if" => 16);
        $filters = array("t" => 17);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 16
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 17
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>";
        }
        // line 20
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 21
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_mint/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  56 => 21,  54 => 20,  50 => 18,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bootstrap Mint's theme override to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  **/
/*  * @see template_preprocess_menu_local_tasks()*/
/*  *//* */
/* #}*/
/* {% if primary %}*/
/*   <h2 class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*   <ul class="tabs primary">{{ primary }}</ul>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <h2 class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*   <ul class="tabs secondary">{{ secondary }}</ul>*/
/* {% endif %}*/
/* */
