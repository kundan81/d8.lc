<?php

/**
 * @file Core/themes/stable/templates/navigation/menu--toolbar.html.twig .*/

/**
 *
 */
class __TwigTemplate_6a9790578feaa79f0836d59149d3d63f0fcac9d45c0108f91c8d6e1480ea6817 extends Twig_Template {

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

    $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39);
    $filters = array();
    $functions = array("link" => 47);

    try {
      $this->env->getExtension('sandbox')->checkSecurity(
            array('import', 'macro', 'if', 'for', 'set'),
            array(),
            array('link')
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

    // Line 21.
    $context["menus"] = $this;
    // Line 22.
    echo "
";
    // Line 27.
    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : NULL), (isset($context["attributes"]) ? $context["attributes"] : NULL), 0)));
    echo "

";
  }

  /**
   * Line 29.
   */
  public function getmenu_links($__items__ = NULL, $__attributes__ = NULL, $__menu_level__ = NULL) {

    $context = $this->env->mergeGlobals(array(
      "items" => $__items__,
      "attributes" => $__attributes__,
      "menu_level" => $__menu_level__,
      "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
    ));

    $blocks = array();

    ob_start();
    try {
      // Line 30.
      echo "  ";
      $context["menus"] = $this;
      // Line 31.
      echo "  ";
      if ((isset($context["items"]) ? $context["items"] : NULL)) {
        // Line 32.
        echo "    ";
        if (((isset($context["menu_level"]) ? $context["menu_level"] : NULL) == 0)) {
          // Line 33.
          echo "      <ul";
          echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : NULL), "addClass", array(0 => "toolbar-menu"), "method"), "html", NULL, TRUE));
          echo ">
    ";
        }
        else {
          // Line 35.
          echo "      <ul class=\"toolbar-menu\">
    ";
        }
        // Line 37.
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : NULL));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
          // Line 38.
          echo "      ";
          // Line 39
          // line 41.
          $context["classes"] = array(
            0 => "menu-item",
            1 => (($this->getAttribute(
          // Line 42.
          $context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(
          // Line 43.
          $context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(
          $context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")),
          );
          // Line 46.
          echo "      <li";
          echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : NULL)), "method"), "html", NULL, TRUE));
          echo ">
        ";
          // Line 47.
          echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", NULL, TRUE));
          echo "
        ";
          // Line 48.
          if ($this->getAttribute($context["item"], "below", array())) {
            // Line 49.
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : NULL), ((isset($context["menu_level"]) ? $context["menu_level"] : NULL) + 1))));
            echo "
        ";
          }
          // Line 51.
          echo "      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 53.
        echo "    </ul>
  ";
      }
    }
    catch (Exception $e) {
      ob_end_clean();

      throw $e;
    }

    return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
  }

  /**
   *
   */
  public function getTemplateName() {

    return "core/themes/stable/templates/navigation/menu--toolbar.html.twig";
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

    return array(124 => 53, 117 => 51, 111 => 49, 109 => 48, 105 => 47, 100 => 46, 98 => 43, 97 => 42, 96 => 41, 95 => 39, 93 => 38, 88 => 37, 84 => 35, 78 => 33, 75 => 32, 72 => 31, 69 => 30, 55 => 29, 48 => 27, 45 => 22, 43 => 21);
  }

}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a toolbar menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       <ul{{ attributes.addClass('toolbar-menu') }}>*/
/*     {% else %}*/
/*       <ul class="toolbar-menu">*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       {%*/
/*         set classes = [*/
/*           'menu-item',*/
/*           item.is_expanded ? 'menu-item--expanded',*/
/*           item.is_collapsed ? 'menu-item--collapsed',*/
/*           item.in_active_trail ? 'menu-item--active-trail',*/
/*         ]*/
/*       %}*/
/*       <li{{ item.attributes.addClass(classes) }}>*/
/*         {{ link(item.title, item.url) }}*/
/*         {% if item.below %}*/
/*           {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
