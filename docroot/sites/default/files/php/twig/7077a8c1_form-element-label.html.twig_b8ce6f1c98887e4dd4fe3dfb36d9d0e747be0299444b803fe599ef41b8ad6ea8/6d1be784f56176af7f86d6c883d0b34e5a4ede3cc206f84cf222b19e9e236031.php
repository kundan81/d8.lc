<?php

/**
 * @file Core/themes/classy/templates/form/form-element-label.html.twig .*/

/**
 *
 */
class __TwigTemplate_66057ff459a07acc5a828cfeb244b5d3be2141b9b36f9185a9f58f1cac401ead extends Twig_Template {

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

    $tags = array("set" => 16, "if" => 23);
    $filters = array();
    $functions = array();

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array('set', 'if'),
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

    // Line 16
    // line 17.
    $context["classes"] = array(
      0 => (((
    // Line 18.
    (isset($context["title_display"]) ? $context["title_display"] : NULL) == "after")) ? ("option") : ("")), 1 => (((
    // Line 19.
    (isset($context["title_display"]) ? $context["title_display"] : NULL) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((
    // Line 20.
    (isset($context["required"]) ? $context["required"] : NULL)) ? ("js-form-required") : ("")), 3 => ((
    (isset($context["required"]) ? $context["required"] : NULL)) ? ("form-required") : ("")),
    );
    // Line 23.
    if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : NULL)) || (isset($context["required"]) ? $context["required"] : NULL))) {
      // Line 24.
      echo "<label";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : NULL), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : NULL)), "method"), "html", NULL, TRUE));
      echo ">";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : NULL), "html", NULL, TRUE));
      echo "</label>";
    }
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/classy/templates/form/form-element-label.html.twig";
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

    return array(51 => 24, 49 => 23, 47 => 20, 46 => 19, 45 => 18, 44 => 17, 43 => 16);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a form element label.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The label's text.*/
/*  * - title_display: Elements title_display setting.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  * - attributes: A list of HTML attributes for the label.*/
/*  **/
/*  * @see template_preprocess_form_element_label()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     title_display == 'after' ? 'option',*/
/*     title_display == 'invisible' ? 'visually-hidden',*/
/*     required ? 'js-form-required',*/
/*     required ? 'form-required',*/
/*   ]*/
/* %}*/
/* {% if title is not empty or required -%}*/
/*   <label{{ attributes.addClass(classes) }}>{{ title }}</label>*/
/* {%- endif %}*/
/* */
