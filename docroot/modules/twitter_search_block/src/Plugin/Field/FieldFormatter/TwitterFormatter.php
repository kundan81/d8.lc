<?php

namespace Drupal\twitter_search_block\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * FieldFormatter for Twitter Search Formatter.
 *
 * @FieldFormatter(
 *   id = "twitter_search_formatter",
 *   module = "twitter_search_block",
 *   label = @Translation("Twitter Search Formatter"),
 *   field_types = {
 *     "twitter_search_fieldtype"
 *   }
 * )
 */
class TwitterFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = array();

    foreach ($items as $delta => $item) {
      $elements[$delta] = array(
        '#markup' => $item->tweet_values,
      );
    }
    return $elements;
  }

}
