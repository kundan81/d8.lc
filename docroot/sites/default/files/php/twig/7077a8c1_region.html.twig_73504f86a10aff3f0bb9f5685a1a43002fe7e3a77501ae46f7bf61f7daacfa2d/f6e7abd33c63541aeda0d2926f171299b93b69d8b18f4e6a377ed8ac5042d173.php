<?php

/**
 * @file
 */

use Drupal\Component\Utility\Html;

/**
 * Core/themes/classy/templates/layout/region.html.twig .*/
class __TwigTemplate_d3ea6d38be841d5c881769fb59c426761da52a14bce3c2885bcc4f7500ae5ad8 extends Twig_Template {

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

    $tags = array("set" => 16, "if" => 21);
    $filters = array("clean_class" => 18);
    $functions = array();

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array('set', 'if'),
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

    // Line 16.
    $context["classes"] = array(
      0 => "region",
    // Line 18.
      1 => ("region-" . Html::getClass(
    (isset($context["region"]) ? $context["region"] : NULL))),
    );
    // Line 21.
    if ((isset($context["content"]) ? $context["content"] : NULL)) {
      // Line 22.
      echo "  <div";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : NULL), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : NULL)), "method"), "html", NULL, TRUE));
      echo ">
    ";
      // Line 23.
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : NULL), "html", NULL, TRUE));
      echo "
  </div>
";
    }
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/classy/templates/layout/region.html.twig";
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

    return array(53 => 23, 48 => 22, 46 => 21, 44 => 18, 43 => 16);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'region',*/
/*     'region-' ~ region|clean_class,*/
/*   ]*/
/* %}*/
/* {% if content %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*     {{ content }}*/
/*   </div>*/
/* {% endif %}*/
/* */
