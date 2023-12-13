<?php

/* {# inline_template_start #}<div class="listing-envelope wow flipInX" data-wow-duration="1s" data-wow-delay="1s">
<figure class="effect-apollo">
	{{ field_listing_image }}
		<figcaption>
		</figcaption>			
</figure>
<div class="label-listing">{{ title }}</div>
</div> */
class __TwigTemplate_95c00fffabb75efcac0851b2becd5f90704b3e1b6eb438c3e2f1274f58c53d22 extends Twig_Template
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
        echo "<div class=\"listing-envelope wow flipInX\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
<figure class=\"effect-apollo\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_listing_image"]) ? $context["field_listing_image"] : null), "html", null, true));
        echo "
\t\t<figcaption>
\t\t</figcaption>\t\t\t
</figure>
<div class=\"label-listing\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"listing-envelope wow flipInX\" data-wow-duration=\"1s\" data-wow-delay=\"1s\">
<figure class=\"effect-apollo\">
\t{{ field_listing_image }}
\t\t<figcaption>
\t\t</figcaption>\t\t\t
</figure>
<div class=\"label-listing\">{{ title }}</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  53 => 3,  50 => 1,);
    }
}
/* {# inline_template_start #}<div class="listing-envelope wow flipInX" data-wow-duration="1s" data-wow-delay="1s">*/
/* <figure class="effect-apollo">*/
/* 	{{ field_listing_image }}*/
/* 		<figcaption>*/
/* 		</figcaption>			*/
/* </figure>*/
/* <div class="label-listing">{{ title }}</div>*/
/* </div>*/
