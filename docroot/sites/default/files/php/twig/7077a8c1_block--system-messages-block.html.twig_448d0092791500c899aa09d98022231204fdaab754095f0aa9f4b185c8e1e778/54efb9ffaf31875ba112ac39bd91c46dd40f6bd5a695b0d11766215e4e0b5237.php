<?php

/**
 * @file Core/themes/stable/templates/block/block--system-messages-block.html.twig .*/

/**
 *
 */
class __TwigTemplate_3fa8c7c19073823b1127e1c78a25c838cc951650d0d9d4220cb97d0c99ff7f38 extends Twig_Template {

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

    $tags = array();
    $filters = array();
    $functions = array();

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array(),
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

    // Line 13.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : NULL), "html", NULL, TRUE));
    echo "
";
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/stable/templates/block/block--system-messages-block.html.twig";
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

    return array(43 => 13);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the messages block.*/
/*  **/
/*  * Removes wrapper elements from block so that empty block does not appear when*/
/*  * there are no messages.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content of this block.*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */
