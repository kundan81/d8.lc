<?php

/**
 * @file
 */

use Drupal\Component\Utility\Html;

/**
 * Core/themes/classy/templates/form/form-element.html.twig .*/
class __TwigTemplate_892ef44e97992d4c38190e335c8db20608a35f2ac5664fa40182fb4ff516356c extends Twig_Template {

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

    $tags = array("set" => 48, "if" => 67);
    $filters = array("clean_class" => 51);
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

    // Line 48
    // line 51.
    $context["classes"] = array(
      0 => "js-form-item",
      1 => "form-item",
      2 => ("js-form-type-" . Html::getClass(
    // Line 52.
    (isset($context["type"]) ? $context["type"] : NULL))), 3 => ("form-type-" . Html::getClass(
    // Line 53.
    (isset($context["type"]) ? $context["type"] : NULL))), 4 => ("js-form-item-" . Html::getClass(
    // Line 54.
    (isset($context["name"]) ? $context["name"] : NULL))), 5 => ("form-item-" . Html::getClass(
    // Line 55.
    (isset($context["name"]) ? $context["name"] : NULL))), 6 => ((!twig_in_filter(
    // Line 56.
    (isset($context["title_display"]) ? $context["title_display"] : NULL), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((
    // Line 57.
    (isset($context["disabled"]) ? $context["disabled"] : NULL) == "disabled")) ? ("form-disabled") : ("")), 8 => ((
    (isset($context["errors"]) ? $context["errors"] : NULL)) ? ("form-item--error") : ("")),
    );
    // Line 61.
    $context["description_classes"] = array(
      0 => "description",
    // Line 63.
      1 => (((
    (isset($context["description_display"]) ? $context["description_display"] : NULL) == "invisible")) ? ("visually-hidden") : ("")),
    );
    // Line 66.
    echo "<div";
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : NULL), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : NULL)), "method"), "html", NULL, TRUE));
    echo ">
  ";
    // Line 67.
    if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : NULL), array(0 => "before", 1 => "invisible"))) {
      // Line 68.
      echo "    ";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : NULL), "html", NULL, TRUE));
      echo "
  ";
    }
    // Line 70.
    echo "  ";
    if (!twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : NULL))) {
      // Line 71.
      echo "    <span class=\"field-prefix\">";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : NULL), "html", NULL, TRUE));
      echo "</span>
  ";
    }
    // Line 73.
    echo "  ";
    if ((((isset($context["description_display"]) ? $context["description_display"] : NULL) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : NULL), "content", array()))) {
      // Line 74.
      echo "    <div";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : NULL), "attributes", array()), "html", NULL, TRUE));
      echo ">
      ";
      // Line 75.
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : NULL), "content", array()), "html", NULL, TRUE));
      echo "
    </div>
  ";
    }
    // Line 78.
    echo "  ";
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : NULL), "html", NULL, TRUE));
    echo "
  ";
    // Line 79.
    if (!twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : NULL))) {
      // Line 80.
      echo "    <span class=\"field-suffix\">";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : NULL), "html", NULL, TRUE));
      echo "</span>
  ";
    }
    // Line 82.
    echo "  ";
    if (((isset($context["label_display"]) ? $context["label_display"] : NULL) == "after")) {
      // Line 83.
      echo "    ";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : NULL), "html", NULL, TRUE));
      echo "
  ";
    }
    // Line 85.
    echo "  ";
    if ((isset($context["errors"]) ? $context["errors"] : NULL)) {
      // Line 86.
      echo "    <div class=\"form-item--error-message\">
      <strong>";
      // Line 87.
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : NULL), "html", NULL, TRUE));
      echo "</strong>
    </div>
  ";
    }
    // Line 90.
    echo "  ";
    if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : NULL), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : NULL), "content", array()))) {
      // Line 91.
      echo "    <div";
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : NULL), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : NULL)), "method"), "html", NULL, TRUE));
      echo ">
      ";
      // Line 92.
      echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : NULL), "content", array()), "html", NULL, TRUE));
      echo "
    </div>
  ";
    }
    // Line 95.
    echo "</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/classy/templates/form/form-element.html.twig";
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

    return array(139 => 95, 133 => 92, 128 => 91, 125 => 90, 119 => 87, 116 => 86, 113 => 85, 107 => 83, 104 => 82, 98 => 80, 96 => 79, 91 => 78, 85 => 75, 80 => 74, 77 => 73, 71 => 71, 68 => 70, 62 => 68, 60 => 67, 55 => 66, 53 => 63, 52 => 61, 50 => 57, 49 => 56, 48 => 55, 47 => 54, 46 => 53, 45 => 52, 44 => 51, 43 => 48);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - errors: (optional) Any errors for this form element, may not be set.*/
/*  * - prefix: (optional) The form element prefix, may not be set.*/
/*  * - suffix: (optional) The form element suffix, may not be set.*/
/*  * - required: The required marker, or empty if the associated form element is*/
/*  *   not required.*/
/*  * - type: The type of the element.*/
/*  * - name: The name of the element.*/
/*  * - label: A rendered label element.*/
/*  * - label_display: Label display setting. It can have these values:*/
/*  *   - before: The label is output before the element. This is the default.*/
/*  *     The label includes the #title and the required marker, if #required.*/
/*  *   - after: The label is output after the element. For example, this is used*/
/*  *     for radio and checkbox #type elements. If the #title is empty but the*/
/*  *     field is #required, the label will contain only the required marker.*/
/*  *   - invisible: Labels are critical for screen readers to enable them to*/
/*  *     properly navigate through forms but can be visually distracting. This*/
/*  *     property hides the label for everyone except screen readers.*/
/*  *   - attribute: Set the title attribute on the element to create a tooltip but*/
/*  *     output no label element. This is supported only for checkboxes and radios*/
/*  *     in \Drupal\Core\Render\Element\CompositeFormElementTrait::preRenderCompositeFormElement().*/
/*  *     It is used where a visual label is not needed, such as a table of*/
/*  *     checkboxes where the row and column provide the context. The tooltip will*/
/*  *     include the title and required marker.*/
/*  * - description: (optional) A list of description properties containing:*/
/*  *    - content: A description of the form element, may not be set.*/
/*  *    - attributes: (optional) A list of HTML attributes to apply to the*/
/*  *      description content wrapper. Will only be set when description is set.*/
/*  * - description_display: Description display setting. It can have these values:*/
/*  *   - before: The description is output before the element.*/
/*  *   - after: The description is output after the element. This is the default*/
/*  *     value.*/
/*  *   - invisible: The description is output after the element, hidden visually*/
/*  *     but available to screen readers.*/
/*  * - disabled: True if the element is disabled.*/
/*  * - title_display: Title display setting.*/
/*  **/
/*  * @see template_preprocess_form_element()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'js-form-item',*/
/*     'form-item',*/
/*     'js-form-type-' ~ type|clean_class,*/
/*     'form-type-' ~ type|clean_class,*/
/*     'js-form-item-' ~ name|clean_class,*/
/*     'form-item-' ~ name|clean_class,*/
/*     title_display not in ['after', 'before'] ? 'form-no-label',*/
/*     disabled == 'disabled' ? 'form-disabled',*/
/*     errors ? 'form-item--error',*/
/*   ]*/
/* %}*/
/* {%*/
/*   set description_classes = [*/
/*     'description',*/
/*     description_display == 'invisible' ? 'visually-hidden',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if label_display in ['before', 'invisible'] %}*/
/*     {{ label }}*/
/*   {% endif %}*/
/*   {% if prefix is not empty %}*/
/*     <span class="field-prefix">{{ prefix }}</span>*/
/*   {% endif %}*/
/*   {% if description_display == 'before' and description.content %}*/
/*     <div{{ description.attributes }}>*/
/*       {{ description.content }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {{ children }}*/
/*   {% if suffix is not empty %}*/
/*     <span class="field-suffix">{{ suffix }}</span>*/
/*   {% endif %}*/
/*   {% if label_display == 'after' %}*/
/*     {{ label }}*/
/*   {% endif %}*/
/*   {% if errors %}*/
/*     <div class="form-item--error-message">*/
/*       <strong>{{ errors }}</strong>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if description_display in ['after', 'invisible'] and description.content %}*/
/*     <div{{ description.attributes.addClass(description_classes) }}>*/
/*       {{ description.content }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
