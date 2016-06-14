<?php

/**
 * @file Core/themes/classy/templates/block/block--local-tasks-block.html.twig .*/

/**
 *
 */
class __TwigTemplate_268847178ac425841af1f1cdb7468d24f535b663f34ca89284a6d486f311c5e4 extends Twig_Template {

  /**
   *
   */
  public function __construct(Twig_Environment $env) {

    parent::__construct($env);

    // Line 1.
    $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
    $this->blocks = array(
      'content' => array($this, 'block_content'),
    );
  }

  /**
   *
   */
  protected function doGetParent(array $context) {

    return "block.html.twig";
  }

  /**
   *
   */
  protected function doDisplay(array $context, array $blocks = array()) {

    $tags = array("if" => 9);
    $filters = array("t" => 10);
    $functions = array();

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array('if'),
            array('t'),
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

    $this->parent->display($context, array_merge($this->blocks, $blocks));
  }

  /**
   * Line 8.
   */
  public function block_content($context, array $blocks = array()) {

    // Line 9.
    echo "  ";
    if ((isset($context["content"]) ? $context["content"] : NULL)) {
      // Line 10.
      echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
      echo "\">
      ";
      // Line 11.
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : NULL), "html", NULL, TRUE));
      echo "
    </nav>
  ";
    }
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
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

    return array(63 => 11, 58 => 10, 55 => 9, 52 => 8, 11 => 1);
  }

}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
