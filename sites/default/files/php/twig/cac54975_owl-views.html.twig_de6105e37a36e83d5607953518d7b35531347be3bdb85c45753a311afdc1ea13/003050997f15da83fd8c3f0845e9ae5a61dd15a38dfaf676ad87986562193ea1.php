<?php

/* modules/owl/templates/owl-views.html.twig */
class __TwigTemplate_5a4edae95085ae7f07148086839948329cb10aab13843fbcffe90465cc44bcc6 extends Twig_Template
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
        $tags = array("if" => 1, "for" => 8);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">";
        }
        // line 4
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 5
            echo "        <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>";
        }
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "        <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 14
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "modules/owl/templates/owl-views.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  71 => 13,  61 => 9,  57 => 8,  52 => 5,  50 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if attributes -%}*/
/* <div{{ attributes }}>*/
/*     {% endif %}*/
/*     {% if title %}*/
/*         <h3>{{ title }}</h3>*/
/*     {% endif %}*/
/* */
/*     {% for row in rows %}*/
/*         <div{{ row.attributes }}>{{ row.content }}</div>*/
/*     {% endfor %}*/
/* */
/* */
/* {% if attributes -%}*/
/*     </div>*/
/* {% endif %}*/
/* */
