<?php

/* themes/bootstrap_mint/templates/layout/page--webform.html.twig */
class __TwigTemplate_27d4350aa3a66c0acd84a1967dc4ecbb8338792cc4244266d498108e5642fd31 extends Twig_Template
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
        $tags = array("if" => 72);
        $filters = array("date" => 411);
        $functions = array("attach_library" => 304);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('date'),
                array('attach_library')
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

        // line 68
        echo "
<!-- Header and Navbar -->
<header class=\"main-header\">
<!-- Sliding Header Widget -->";
        // line 72
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 73
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sliding_header_one", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sliding_header_two", array()))) {
                // line 74
                echo "    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
          <!-- Slide first region -->";
                // line 83
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sliding_header_one", array())) {
                    // line 84
                    echo "            <div class =";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slidewidget_first"]) ? $context["slidewidget_first"] : null), "html", null, true));
                    echo ">";
                    // line 85
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sliding_header_one", array()), "html", null, true));
                    echo "
            </div>";
                }
                // line 88
                echo "          
          <!-- End slide first region -->
          <!-- Slide second region -->";
                // line 92
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sliding_header_two", array())) {
                    // line 93
                    echo "            <div class =";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slidewidget_class"]) ? $context["slidewidget_class"] : null), "html", null, true));
                    echo ">";
                    // line 94
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sliding_header_two", array()), "html", null, true));
                    echo "
            </div>";
                }
                // line 97
                echo "          
          <!-- End slide second region -->
          
\t\t  </div>
        </div>
      </div>
\t  <!-- end: Container -->
\t  </div>
\t  <div class=\"toggle-switch\"><div class=\"fa fa-gear fa-spin\"></div></div>
    </div>";
            }
        }
        // line 109
        echo "<!--Sliding Header Widget -->
  <!-- Top Nav -->";
        // line 111
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_nav", array())) {
            echo "  
    <div class=\"container-fluid top-nav\">
      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_nav", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>";
        }
        // line 120
        echo "  <!-- End Top Nav -->
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container-fluid\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>";
        // line 131
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 132
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        }
        // line 134
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">";
        // line 138
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        }
        // line 140
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->";
        // line 149
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 153
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>";
        }
        // line 158
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->";
        // line 165
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 166
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
        }
        // line 168
        echo "<!--End Search-->


<!--Home page banner-->";
        // line 172
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promo", array()))) {
            // line 173
            echo "    <div class=\"container-fluid promo-wrap\">
      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 176
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promo", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>";
        }
        // line 181
        echo "<!--End Home page banner-->


<!--Highlighted-->";
        // line 185
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 186
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 189
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>";
        }
        // line 194
        echo "<!--End Highlighted-->

<!--Help-->";
        // line 197
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 198
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 201
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>";
        }
        // line 206
        echo "<!--End Help-->

<!-- Start Top Widget -->";
        // line 209
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 210
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_right", array()))) {
                // line 211
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->";
                // line 219
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_left", array())) {
                    // line 220
                    echo "            <div class =";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                    echo ">";
                    // line 221
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_left", array()), "html", null, true));
                    echo "
            </div>";
                }
                // line 224
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->";
                // line 228
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_middle", array())) {
                    // line 229
                    echo "            <div class =";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                    echo ">";
                    // line 230
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_middle", array()), "html", null, true));
                    echo "
            </div>";
                }
                // line 233
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->";
                // line 237
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_right", array())) {
                    // line 238
                    echo "            <div class =";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                    echo ">";
                    // line 239
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_right", array()), "html", null, true));
                    echo "
            </div>";
                }
                // line 242
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>";
            }
        }
        // line 249
        echo "<!--End Top Widget -->


<!-- Page Title -->";
        // line 253
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 254
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">";
            // line 258
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>";
        }
        // line 263
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->";
        // line 272
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 273
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">";
            // line 276
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>";
        }
        // line 281
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->";
        // line 284
        if ( !(isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 285
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 286
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "</div>
    </div>";
        }
        // line 289
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->";
        // line 293
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 294
            echo "        <div class=\"sidebar\" >
          <div class =";
            // line 295
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >";
            // line 296
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>";
        }
        // line 300
        echo "      <!---End Left Sidebar -->

      <!--- Start content -->";
        // line 303
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 304
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("bootstrap_mint/scroll-link"), "html", null, true));
            echo "
        <div class=\"content_layout\">
          <div class=";
            // line 306
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">";
            // line 307
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>";
        }
        // line 311
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->";
        // line 314
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 315
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 316
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">";
            // line 317
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>";
        }
        // line 321
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->
  </div>
</div>
<!-- End layout -->
<!--Start Content Bottom-->";
        // line 329
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 330
            echo "    <div class=\"container-fluid content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">";
            // line 333
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>";
        }
        // line 338
        echo "<!--End Content Bottom-->
<!-- Start Footer -->";
        // line 340
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_one", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_two", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_three", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_four", array()))) {
            // line 341
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->";
            // line 349
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_one", array())) {
                // line 350
                echo "            <div class =";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_class"]) ? $context["footer_top_class"] : null), "html", null, true));
                echo ">";
                // line 351
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_one", array()), "html", null, true));
                echo "
            </div>";
            }
            // line 354
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->";
            // line 358
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_two", array())) {
                // line 359
                echo "            <div class =";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_class"]) ? $context["footer_top_class"] : null), "html", null, true));
                echo ">";
                // line 360
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_two", array()), "html", null, true));
                echo "
            </div>";
            }
            // line 363
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->";
            // line 368
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_three", array())) {
                // line 369
                echo "            <div class =";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_class"]) ? $context["footer_top_class"] : null), "html", null, true));
                echo ">";
                // line 370
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_three", array()), "html", null, true));
                echo "
            </div>";
            }
            // line 373
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->";
            // line 378
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_four", array())) {
                // line 379
                echo "          <div class =";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_top_class"]) ? $context["footer_top_class"] : null), "html", null, true));
                echo ">";
                // line 380
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_four", array()), "html", null, true));
                echo "
          </div>";
            }
            // line 383
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>";
        }
        // line 390
        echo "  <!-- Footer Region-->";
        // line 391
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 392
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 396
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
          </div>
      </div>
      </div>
\t</div>";
        }
        // line 402
        echo "  <!-- End Footer Region-->
<!--End Footer -->


<!-- Start Footer Ribbon -->
  <div class=\"footer-ribbon\">
    <div class=\"container\">
      <div class=\"row\">
\t    <div class=\"col-md-12\">
\t\t  <p class=\"copyright\">&copy;";
        // line 411
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ", V.S.T Tillers Tractors Ltd. All Rights Reserved.</p>
\t\t</div>
      </div>
    </div>
  </div>
<!-- End Footer Ribbon -->


<!-- #footer-bottom -->
<div id=\"footer-bottom\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-md-12\">
\t\t<div class=\"footer_logo\"></div>
        </div>
\t\t</div>
    </div>
</div>
<!-- #footer-bottom ends here -->
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_mint/templates/layout/page--webform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 411,  529 => 402,  521 => 396,  516 => 392,  514 => 391,  512 => 390,  504 => 383,  499 => 380,  495 => 379,  493 => 378,  488 => 373,  483 => 370,  479 => 369,  477 => 368,  472 => 363,  467 => 360,  463 => 359,  461 => 358,  456 => 354,  451 => 351,  447 => 350,  445 => 349,  437 => 341,  435 => 340,  432 => 338,  425 => 333,  421 => 330,  419 => 329,  410 => 321,  404 => 317,  401 => 316,  398 => 315,  396 => 314,  392 => 311,  386 => 307,  383 => 306,  378 => 304,  376 => 303,  372 => 300,  366 => 296,  363 => 295,  360 => 294,  358 => 293,  353 => 289,  348 => 286,  345 => 285,  343 => 284,  339 => 281,  332 => 276,  328 => 273,  326 => 272,  316 => 263,  309 => 258,  304 => 254,  302 => 253,  297 => 249,  289 => 242,  284 => 239,  280 => 238,  278 => 237,  274 => 233,  269 => 230,  265 => 229,  263 => 228,  259 => 224,  254 => 221,  250 => 220,  248 => 219,  240 => 211,  238 => 210,  236 => 209,  232 => 206,  225 => 201,  221 => 198,  219 => 197,  215 => 194,  208 => 189,  204 => 186,  202 => 185,  197 => 181,  190 => 176,  186 => 173,  184 => 172,  179 => 168,  176 => 166,  174 => 165,  166 => 158,  159 => 153,  153 => 149,  143 => 140,  140 => 139,  138 => 138,  133 => 134,  130 => 132,  128 => 131,  116 => 120,  109 => 115,  103 => 111,  100 => 109,  87 => 97,  82 => 94,  78 => 93,  76 => 92,  72 => 88,  67 => 85,  63 => 84,  61 => 83,  52 => 74,  50 => 73,  48 => 72,  43 => 68,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bootstrap Mint's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.sliding_header_one: Items for the Sliding Header Left region.*/
/*  * - page.sliding_header_two: Items for the Sliding Header Right region.*/
/*  * - page.header: Items for the Header region.*/
/*  * - page.primary_menu: Items for the Primary Menu navigation region.*/
/*  * - page.page_title: Region for the current page title.*/
/*  * - page.slideshow: Items for the Slideshow region.*/
/*  * - page.promo: Items for the promo region.*/
/*  * - page.highlighted: Items for the Highlighted region.*/
/*  * - page.topwidget_left: Items for the Top Widget - Left region.*/
/*  * - page.topwidget_middle: Items for the Top Widget - Middle region.*/
/*  * - page.topwidget_right: Items for the Top Widget - Right region.*/
/*  * - page.content_top: Items for the Content Top region.*/
/*  * - page.help: Items for the Help region.*/
/*  * - page.breadcrumb: Items for the Breadcrumb region.*/
/*  * - page.search: The search region.*/
/*  * - page.content: Main content of the current page.*/
/*  * - page.sidebar_first: Items for the Left sidebar region.*/
/*  * - page.sidebar_second: Items for the Right sidebar region.*/
/*  * - page.content_bottom: Items for the Content Bottom region.*/
/*  * - page.footer_top_one: Items for the Footer Top Widget - One region.*/
/*  * - page.footer_top_two: Items for the Footer Top Widget - Two region.*/
/*  * - page.footer_top_three: Items for the Footer Top Widget - Three region.*/
/*  * - page.footer_top_four: Items for the Footer Top Widget - Four region.*/
/*  * - page.footer: Items for the Footer region.*/
/*  * - page.footer_menu: Items for the Footer Menu region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* <!-- Header and Navbar -->*/
/* <header class="main-header">*/
/* <!-- Sliding Header Widget -->*/
/* {% if is_front %}*/
/*   {% if page.sliding_header_one or page.sliding_header_two %}*/
/*     <div class="slidewidget">*/
/* 	<div class="wrapper">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/*         */
/*         <div class="row">*/
/*           <div id="sliding-header-wrap">*/
/*           <!-- Slide first region -->*/
/*           */
/*           {% if page.sliding_header_one %}*/
/*             <div class = {{ slidewidget_first }}>*/
/*               {{ page.sliding_header_one }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End slide first region -->*/
/*           <!-- Slide second region -->*/
/*           */
/*           {% if page.sliding_header_two %}*/
/*             <div class = {{ slidewidget_class }}>*/
/*               {{ page.sliding_header_two }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End slide second region -->*/
/*           */
/* 		  </div>*/
/*         </div>*/
/*       </div>*/
/* 	  <!-- end: Container -->*/
/* 	  </div>*/
/* 	  <div class="toggle-switch"><div class="fa fa-gear fa-spin"></div></div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--Sliding Header Widget -->*/
/*   <!-- Top Nav -->*/
/*   {% if page.top_nav %}  */
/*     <div class="container-fluid top-nav">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ page.top_nav }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <!-- End Top Nav -->*/
/*   <nav class="navbar topnav navbar-default" role="navigation">*/
/*     <div class="container-fluid">*/
/*       <div class="row">*/
/*       <div class="navbar-header col-md-3">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/*         {% if page.header %}*/
/*           {{ page.header }}*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <!-- Navigation -->*/
/*       <div class="col-md-9">*/
/*         {% if page.primary_menu %}*/
/*           {{ page.primary_menu }}*/
/*         {% endif %}      */
/*       </div>*/
/*       <!--End Navigation -->*/
/* */
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/* */
/*   <!-- Banner -->*/
/*   {% if is_front and page.slideshow %}  */
/*     <div class="container slideshow">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ page.slideshow }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <!-- End Banner -->*/
/* */
/* </header>*/
/* <!--End Header & Navbar -->*/
/* */
/* */
/* <!--Search-->*/
/*   {% if page.search %}*/
/*     {{ page.search }}*/
/*   {% endif %}*/
/* <!--End Search-->*/
/* */
/* */
/* <!--Home page banner-->*/
/*   {% if is_front and page.promo %}*/
/*     <div class="container-fluid promo-wrap">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {{ page.promo }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* <!--End Home page banner-->*/
/* */
/* */
/* <!--Highlighted-->*/
/*   {% if page.highlighted %}*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {{ page.highlighted }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* <!--End Highlighted-->*/
/* */
/* <!--Help-->*/
/*   {% if page.help %}*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {{ page.help }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* <!--End Help-->*/
/* */
/* <!-- Start Top Widget -->*/
/* {% if is_front %}  */
/*   {% if page.topwidget_left or page.topwidget_middle or page.topwidget_right %}*/
/*     <div class="topwidget">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/*         */
/*         <div class="row">*/
/* */
/*           <!-- Top widget left region -->*/
/*           */
/*           {% if page.topwidget_left %}*/
/*             <div class = {{ topwidget_class }}>*/
/*               {{ page.topwidget_left }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End top widget left region -->		  */
/*           <!-- Top widget middle region -->*/
/*           */
/*           {% if page.topwidget_middle %}*/
/*             <div class = {{ topwidget_class }}>*/
/*               {{ page.topwidget_middle }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End top widget middle region -->*/
/*           <!-- Top widget right region -->*/
/*           */
/*           {% if page.topwidget_right %}*/
/*             <div class = {{ topwidget_class }}>*/
/*               {{ page.topwidget_right }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End top widget right region -->*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--End Top Widget -->*/
/* */
/* */
/* <!-- Page Title -->*/
/* {%  if page.page_title and not is_front %}*/
/*   <div id="page-title">*/
/*     <div id="page-title-inner">*/
/*       <!-- start: Container -->*/
/*       <div class="container-fluid">*/
/*         {{ page.page_title }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Page Title -->*/
/* */
/* */
/* <!-- layout -->*/
/* <div id="wrapper">*/
/*   <!-- start: Container -->*/
/*   <div class="container-fluid">*/
/*     */
/*     <!--Start Content Top-->*/
/*     {% if page.content_top %}*/
/*     <div class="content-top">*/
/*         <div class="row">*/
/* 		  <div class="col-md-12">*/
/*             {{ page.content_top }}*/
/* 		  </div>*/
/*         </div>*/
/* 	</div>*/
/*     {% endif %}*/
/*     <!--End Content Top-->*/
/*     */
/*     <!--start:Breadcrumbs -->*/
/* 	{%  if not is_front %}*/
/*     <div class="row">*/
/*       <div class="col-md-12">{{ page.breadcrumb }}</div>*/
/*     </div>*/
/* 	{% endif %}*/
/*     <!--End Breadcrumbs-->*/
/* 	*/
/*     <div class="row layout">*/
/*       <!--- Start Left Sidebar -->*/
/*       {% if page.sidebar_first %}*/
/*         <div class="sidebar" >*/
/*           <div class = {{sidebarfirst}} >*/
/*             {{ page.sidebar_first }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Left Sidebar -->*/
/* */
/*       <!--- Start content -->*/
/*       {% if page.content %}*/
/* 	  {{ attach_library( 'bootstrap_mint/scroll-link' ) }}*/
/*         <div class="content_layout">*/
/*           <div class={{contentlayout}}>*/
/*             {{ page.content }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End content -->*/
/* */
/*       <!--- Start Right Sidebar -->*/
/*       {% if page.sidebar_second %}*/
/*         <div class="sidebar">*/
/*           <div class={{sidebarsecond}}>*/
/*             {{ page.sidebar_second }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Right Sidebar -->*/
/*       */
/*     </div>*/
/*     <!--End Content -->*/
/*   </div>*/
/* </div>*/
/* <!-- End layout -->*/
/* <!--Start Content Bottom-->*/
/*     {% if page.content_bottom %}*/
/*     <div class="container-fluid content-bottom">*/
/*         <div class="row">*/
/* 		  <div class="col-md-12">*/
/*             {{ page.content_bottom }}*/
/* 		  </div>*/
/*         </div>*/
/* 	</div>*/
/*     {% endif %}*/
/* <!--End Content Bottom-->*/
/* <!-- Start Footer -->*/
/*   {% if page.footer_top_one or page.footer_top_two or page.footer_top_three or page.footer_top_four %}*/
/*     <div class="footer-widgets">*/
/*       <!-- Start Container -->*/
/*       <div class="container">*/
/*         */
/*         <div class="row">*/
/* */
/*           <!-- Start Footer Top One Region -->*/
/*           */
/*           {% if page.footer_top_one %}*/
/*             <div class = {{ footer_top_class }}>*/
/*               {{ page.footer_top_one }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End Footer Top One Region -->*/
/* */
/*           <!-- Start Footer Top Two Region -->*/
/*           {% if page.footer_top_two %}*/
/*             <div class = {{ footer_top_class }}>*/
/*               {{ page.footer_top_two }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End Footer Top Two Region -->*/
/* */
/*           <!-- Start Footer Top Three Region -->*/
/*           */
/*           {% if page.footer_top_three %}*/
/*             <div class = {{ footer_top_class }}>*/
/*               {{ page.footer_top_three }}*/
/*             </div>*/
/*           {% endif %}*/
/*           */
/*           <!-- End Footer Top Three Region -->*/
/* 		  */
/* 		  <!-- Start Footer Top Four Region -->*/
/* */
/*           {% if page.footer_top_four %}*/
/*           <div class = {{ footer_top_class }}>*/
/*             {{ page.footer_top_four }}*/
/*           </div>*/
/*           {% endif %}*/
/* 		  */
/* 		  <!-- End Footer Top Four Region -->*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <!-- Footer Region-->*/
/*   {% if page.footer %}*/
/*     <div class="footer-space">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-md-12">*/
/*             {{ page.footer }}*/
/*           </div>*/
/*       </div>*/
/*       </div>*/
/* 	</div>*/
/*   {% endif %}*/
/*   <!-- End Footer Region-->*/
/* <!--End Footer -->*/
/* */
/* */
/* <!-- Start Footer Ribbon -->*/
/*   <div class="footer-ribbon">*/
/*     <div class="container">*/
/*       <div class="row">*/
/* 	    <div class="col-md-12">*/
/* 		  <p class="copyright">&copy; {{ "now"|date("Y") }}, V.S.T Tillers Tractors Ltd. All Rights Reserved.</p>*/
/* 		</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <!-- End Footer Ribbon -->*/
/* */
/* */
/* <!-- #footer-bottom -->*/
/* <div id="footer-bottom">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*         <div class="col-md-12">*/
/* 		<div class="footer_logo"></div>*/
/*         </div>*/
/* 		</div>*/
/*     </div>*/
/* </div>*/
/* <!-- #footer-bottom ends here -->*/
/* */
