<?php

/* core/themes/stable/templates/admin/admin-page.html.twig */
class __TwigTemplate_394b178bf363bd98fe780b643a999c121ce6e57d47ff033e93aa3770d771a72d extends Twig_Template
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
        $tags = array("for" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 15
        echo "
<div class=\"clearfix\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["system_compact_link"]) ? $context["system_compact_link"] : null), "html", null, true));
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
            // line 19
            echo "    <div class=\"layout-column layout-column--half\">";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["container"], "blocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["block"], "html", null, true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  64 => 23,  58 => 21,  54 => 20,  52 => 19,  48 => 18,  46 => 17,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an administrative page.*/
/*  **/
/*  * Available variables:*/
/*  * - system_compact_link: Themed link to toggle compact view.*/
/*  * - containers: An list of administrative blocks keyed by position: left or*/
/*  *   right. Contains:*/
/*  *   - blocks: A list of blocks within a container.*/
/*  **/
/*  * @see template_preprocess_admin_page()*/
/*  *//* */
/* #}*/
/* */
/* <div class="clearfix">*/
/*   {{ system_compact_link }}*/
/*   {% for container in containers %}*/
/*     <div class="layout-column layout-column--half">*/
/*       {% for block in container.blocks %}*/
/*         {{ block }}*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
