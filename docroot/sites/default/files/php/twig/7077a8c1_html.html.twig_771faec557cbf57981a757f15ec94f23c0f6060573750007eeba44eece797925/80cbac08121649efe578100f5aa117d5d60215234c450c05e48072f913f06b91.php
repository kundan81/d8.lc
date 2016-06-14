<?php

/**
 * @file
 */

use Drupal\Component\Utility\Html;

/**
 * Core/themes/classy/templates/layout/html.html.twig .*/
class __TwigTemplate_e546e050adb96dc0b27e7f8c0e48826581d2cfd1eac3c8a37e8ee123ae138297 extends Twig_Template {

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

    $tags = array("set" => 27);
    $filters = array("clean_class" => 29, "raw" => 37, "safe_join" => 38, "t" => 44);
    $functions = array();

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array('set'),
            array('clean_class', 'raw', 'safe_join', 't'),
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

    // Line 27
    // line 28.
    $context["body_classes"] = array(
      0 => ((
    // Line 29
    // Line 30.
    (isset($context["logged_in"]) ? $context["logged_in"] : NULL)) ? ("user-logged-in") : ("")), 1 => ((!(isset($context["root_path"]) ? $context["root_path"] : NULL)) ? ("path-frontpage") : (("path-" . Html::getClass((isset($context["root_path"]) ? $context["root_path"] : NULL))))),
      2 => ((
    // Line 31.
    (isset($context["node_type"]) ? $context["node_type"] : NULL)) ? (("page-node-type-" . Html::getClass((isset($context["node_type"]) ? $context["node_type"] : NULL)))) : ("")), 3 => ((
    (isset($context["db_offline"]) ? $context["db_offline"] : NULL)) ? ("db-offline") : ("")),
    );
    // Line 34.
    echo "<!DOCTYPE html>
<html";
    // Line 35.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : NULL), "html", NULL, TRUE));
    echo ">
  <head>
    <head-placeholder token=\"";
    // Line 37.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : NULL)));
    echo "\">
    <title>";
    // Line 38.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : NULL), " | ")));
    echo "</title>
    <css-placeholder token=\"";
    // Line 39.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : NULL)));
    echo "\">
    <js-placeholder token=\"";
    // Line 40.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : NULL)));
    echo "\">
  </head>
  <body";
    // Line 42.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : NULL), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : NULL)), "method"), "html", NULL, TRUE));
    echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
    // Line 44.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
    echo "
    </a>
    ";
    // Line 46.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : NULL), "html", NULL, TRUE));
    echo "
    ";
    // Line 47.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : NULL), "html", NULL, TRUE));
    echo "
    ";
    // Line 48.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : NULL), "html", NULL, TRUE));
    echo "
    <js-bottom-placeholder token=\"";
    // Line 49.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : NULL)));
    echo "\">
  </body>
</html>
";
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/classy/templates/layout/html.html.twig";
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

    return array(96 => 49, 92 => 48, 88 => 47, 84 => 46, 79 => 44, 74 => 42, 69 => 40, 65 => 39, 61 => 38, 57 => 37, 52 => 35, 49 => 34, 47 => 31, 46 => 30, 45 => 29, 44 => 28, 43 => 27);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set body_classes = [*/
/*     logged_in ? 'user-logged-in',*/
/*     not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*     node_type ? 'page-node-type-' ~ node_type|clean_class,*/
/*     db_offline ? 'db-offline',*/
/*   ]*/
/* %}*/
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   <body{{ attributes.addClass(body_classes) }}>*/
/*     <a href="#main-content" class="visually-hidden focusable skip-link">*/
/*       {{ 'Skip to main content'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
