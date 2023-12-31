<?php

/* core/themes/stable/templates/admin/views-ui-view-info.html.twig */
class __TwigTemplate_42f8a2f31890b24a42177a04fc3582d258df61087db3659619cf126e20b89c2d extends Twig_Template
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
        $tags = array("if" => 12, "trans" => 13);
        $filters = array("safe_join" => 18, "t" => 20);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
                array('safe_join', 't'),
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

        // line 10
        echo "<h3 class=\"views-ui-view-title\" data-drupal-selector=\"views-table-filter-text-source\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "label", array()), "html", null, true));
        echo "</h3>
<div class=\"views-ui-view-displays\">";
        // line 12
        if ((isset($context["displays"]) ? $context["displays"] : null)) {
            // line 13
            echo \Drupal::translation()->formatPlural(abs(            // line 15
(isset($context["displays"]) ? $context["displays"] : null)), "Display", "Displays", array());
            // line 17
            echo ":
    <em>";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["displays"]) ? $context["displays"] : null), ", ")));
            echo "</em>";
        } else {
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("None")));
        }
        // line 22
        echo "</div>
<div class=\"views-ui-view-machine-name\">";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Machine name:")));
        echo "
  <span data-drupal-selector=\"views-table-filter-text-source\">";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "id", array()), "html", null, true));
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-view-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  66 => 24,  63 => 22,  60 => 20,  56 => 18,  53 => 17,  51 => 15,  50 => 13,  48 => 12,  43 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for basic administrative info about a View.*/
/*  **/
/*  * Available variables:*/
/*  * - displays: List of displays.*/
/*  *//* */
/* #}*/
/* <h3 class="views-ui-view-title" data-drupal-selector="views-table-filter-text-source">{{ view.label }}</h3>*/
/* <div class="views-ui-view-displays">*/
/*   {% if displays %}*/
/*     {% trans %}*/
/*       Display*/
/*     {% plural displays %}*/
/*       Displays*/
/*     {% endtrans %}:*/
/*     <em>{{ displays|safe_join(', ') }}</em>*/
/*   {% else %}*/
/*     {{ 'None'|t }}*/
/*   {% endif %}*/
/* </div>*/
/* <div class="views-ui-view-machine-name">*/
/*   {{ 'Machine name:'|t }}*/
/*   <span data-drupal-selector="views-table-filter-text-source">{{ view.id }}</span>*/
/* </div>*/
/* */
