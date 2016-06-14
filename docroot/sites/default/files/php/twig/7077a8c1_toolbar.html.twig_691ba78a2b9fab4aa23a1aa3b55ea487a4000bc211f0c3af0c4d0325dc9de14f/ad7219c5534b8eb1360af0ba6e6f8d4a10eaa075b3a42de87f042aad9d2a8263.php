<?php

/**
 * @file Core/themes/classy/templates/navigation/toolbar.html.twig .*/

/**
 *
 */
class __TwigTemplate_1982dad2772b796e8e6f7228dfc28c92873a12c5308015333f3a06d9ed3889ce extends Twig_Template {

  /**
   *
   */
  public function __construct(Twig_Environment $env) {

    parent::__construct($env);

    $this->parent = FALSE;

    $this->blocks = array();
  }

  /**
   *
   */
  protected function doDisplay(array $context, array $blocks = array()) {

    $tags = array("for" => 26, "set" => 27, "spaceless" => 30, "if" => 32);
    $filters = array();
    $functions = array();

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array('for', 'set', 'spaceless', 'if'),
            array(),
            array()
        );
    }
    catch (Twig_Sandbox_SecurityError $e) {
      $e->setTemplateFile($this->getTemplateName());

      if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
        $e->setTemplateLine($tags[$e->getTagName()]);
      }
      elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
        $e->setTemplateLine($filters[$e->getFilterName()]);
      }
      elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
        $e->setTemplateLine($functions[$e->getFunctionName()]);
      }

      throw $e;
    }

    // Line 23.
    echo "<div";
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : NULL), "addClass", array(0 => "toolbar"), "method"), "html", NULL, TRUE));
    echo ">
  <nav";
    // Line 24.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : NULL), "addClass", array(0 => "toolbar-bar", 1 => "clearfix"), "method"), "html", NULL, TRUE));
    echo ">
    <h2 class=\"visually-hidden\">";
    // Line 25.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : NULL), "html", NULL, TRUE));
    echo "</h2>
    ";
    // Line 26.
    $context['_parent'] = $context;
    $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : NULL));
    foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
      // Line 27.
      echo "      ";
      $context["tray"] = $this->getAttribute((isset($context["trays"]) ? $context["trays"] : NULL), $context["key"], array(), "array");
      // Line 28.
      echo "      <div";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["tab"], "attributes", array()), "addClass", array(0 => "toolbar-tab"), "method"), "html", NULL, TRUE));
      echo ">
        ";
      // Line 29.
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tab"], "link", array()), "html", NULL, TRUE));
      echo "
        ";
      // Line 30.
      ob_start();
      // Line 31.
      echo "          <div";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : NULL), "attributes", array()), "html", NULL, TRUE));
      echo ">
            ";
      // Line 32.
      if ($this->getAttribute((isset($context["tray"]) ? $context["tray"] : NULL), "label", array())) {
        // Line 33.
        echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : NULL), "label", array()), "html", NULL, TRUE));
        echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
        // Line 34.
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : NULL), "label", array()), "html", NULL, TRUE));
        echo "</h3>
            ";
      }
      else {
        // Line 36.
        echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
      }
      // Line 38.
      echo "            ";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : NULL), "links", array()), "html", NULL, TRUE));
      echo "
            </nav>
          </div>
        ";
      echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
      // Line 42.
      echo "      </div>
    ";
    }
    $_parent = $context['_parent'];
    unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
    $context = array_intersect_key($context, $_parent) + $_parent;
    // Line 44.
    echo "  </nav>
  ";
    // Line 45.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["remainder"]) ? $context["remainder"] : NULL), "html", NULL, TRUE));
    echo "
</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/classy/templates/navigation/toolbar.html.twig";
  }

  /**
   *
   */
  public function isTraitable() {

    return FALSE;
  }

  /**
   *
   */
  public function getDebugInfo() {

    return array(113 => 45, 110 => 44, 103 => 42, 95 => 38, 91 => 36, 86 => 34, 81 => 33, 79 => 32, 74 => 31, 72 => 30, 68 => 29, 63 => 28, 60 => 27, 56 => 26, 52 => 25, 48 => 24, 43 => 23);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the administrative toolbar.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper.*/
/*  * - toolbar_attributes: HTML attributes to apply to the toolbar.*/
/*  * - toolbar_heading: The heading or label for the toolbar.*/
/*  * - tabs: List of tabs for the toolbar.*/
/*  *   - attributes: HTML attributes for the tab container.*/
/*  *   - link: Link or button for the menu tab.*/
/*  * - trays: Toolbar tray list, each associated with a tab. Each tray in trays*/
/*  *   contains:*/
/*  *   - attributes: HTML attributes to apply to the tray.*/
/*  *   - label: The tray's label.*/
/*  *   - links: The tray menu links.*/
/*  * - remainder: Any non-tray, non-tab elements left to be rendered.*/
/*  **/
/*  * @see template_preprocess_toolbar()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('toolbar') }}>*/
/*   <nav{{ toolbar_attributes.addClass('toolbar-bar', 'clearfix') }}>*/
/*     <h2 class="visually-hidden">{{ toolbar_heading }}</h2>*/
/*     {% for key, tab in tabs %}*/
/*       {% set tray = trays[key] %}*/
/*       <div{{ tab.attributes.addClass('toolbar-tab') }}>*/
/*         {{ tab.link }}*/
/*         {% spaceless %}*/
/*           <div{{ tray.attributes }}>*/
/*             {% if tray.label %}*/
/*               <nav class="toolbar-lining clearfix" role="navigation" aria-label="{{ tray.label }}">*/
/*                 <h3 class="toolbar-tray-name visually-hidden">{{ tray.label }}</h3>*/
/*             {% else %}*/
/*               <nav class="toolbar-lining clearfix" role="navigation">*/
/*             {% endif %}*/
/*             {{ tray.links }}*/
/*             </nav>*/
/*           </div>*/
/*         {% endspaceless %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </nav>*/
/*   {{ remainder }}*/
/* </div>*/
/* */
