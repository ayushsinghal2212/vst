<?php

/* core/themes/stable/templates/views/views-view-row-rss.html.twig */
class __TwigTemplate_0b5fe31bebe3f0b728ebaac8f3d5d2157995312dd41c7bc499c6a990247498d0 extends Twig_Template
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
        $tags = array("for" => 20, "if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 16
        echo "<item>
  <title>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</title>
  <link>";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</link>
  <description>";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
        echo "</description>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item_elements"]) ? $context["item_elements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "<";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
            // line 22
            if ($this->getAttribute($context["item"], "value", array())) {
                // line 23
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true));
                echo ">";
            } else {
                // line 25
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(" />"));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</item>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/views/views-view-row-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  74 => 25,  67 => 23,  65 => 22,  61 => 21,  57 => 20,  54 => 19,  50 => 18,  46 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display an item in a views RSS feed.*/
/*  **/
/*  * Available variables:*/
/*  * - title: RSS item title.*/
/*  * - link: RSS item link.*/
/*  * - description: RSS body text.*/
/*  * - item_elements: RSS item elements to be rendered as XML (pubDate, creator,*/
/*  *   guid).*/
/*  **/
/*  * @see template_preprocess_views_view_row_rss()*/
/*  *//* */
/* #}*/
/* <item>*/
/*   <title>{{ title }}</title>*/
/*   <link>{{ link }}</link>*/
/*   <description>{{ description }}</description>*/
/*   {% for item in item_elements -%}*/
/*     <{{ item.key }}{{ item.attributes -}}*/
/*     {% if item.value -%}*/
/*       >{{ item.value }}</{{ item.key }}>*/
/*     {% else -%}*/
/*       {{ ' />' }}*/
/*     {% endif %}*/
/*   {%- endfor %}*/
/* </item>*/
/* */
