<?php

/**
 * @file
 */

use Drupal\Component\Utility\Html;

/**
 * Core/themes/classy/templates/block/block.html.twig .*/
class __TwigTemplate_2df41681deb52155bce5344f825218f791c525d505cb5abe11d12e86fd4f4a3d extends Twig_Template {

  /**
   *
   */
  public function __construct(Twig_Environment $env) {

    parent::__construct($env);

    $this->parent = FALSE;

    $this->blocks = array(
      'content' => array($this, 'block_content'),
    );
  }

  /**
   *
   */
  protected function doDisplay(array $context, array $blocks = array()) {

    $tags = array("set" => 29, "if" => 37, "block" => 41);
    $filters = array("clean_class" => 31);
    $functions = array();

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array('set', 'if', 'block'),
            array('clean_class'),
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

    // Line 29
    // line 31.
    $context["classes"] = array(
      0 => "block",
      1 => ("block-" . Html::getClass($this->getAttribute(
    // Line 32.
    (isset($context["configuration"]) ? $context["configuration"] : NULL), "provider", array()))), 2 => ("block-" . Html::getClass(
    (isset($context["plugin_id"]) ? $context["plugin_id"] : NULL))),
    );
    // Line 35.
    echo "<div";
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : NULL), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : NULL)), "method"), "html", NULL, TRUE));
    echo ">
  ";
    // Line 36.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : NULL), "html", NULL, TRUE));
    echo "
  ";
    // Line 37.
    if ((isset($context["label"]) ? $context["label"] : NULL)) {
      // Line 38.
      echo "    <h2";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : NULL), "html", NULL, TRUE));
      echo ">";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : NULL), "html", NULL, TRUE));
      echo "</h2>
  ";
    }
    // Line 40.
    echo "  ";
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : NULL), "html", NULL, TRUE));
    echo "
  ";
    // Line 41.
    $this->displayBlock('content', $context, $blocks);
    // Line 44.
    echo "</div>
";
  }

  /**
   * Line 41.
   */
  public function block_content($context, array $blocks = array()) {

    // Line 42.
    echo "    ";
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : NULL), "html", NULL, TRUE));
    echo "
  ";
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/classy/templates/block/block.html.twig";
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

    return array(82 => 42, 79 => 41, 74 => 44, 72 => 41, 67 => 40, 59 => 38, 57 => 37, 53 => 36, 48 => 35, 46 => 32, 45 => 31, 44 => 29);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2{{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/* </div>*/
/* */
