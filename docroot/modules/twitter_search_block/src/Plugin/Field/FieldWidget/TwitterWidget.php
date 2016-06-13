<?php

namespace Drupal\twitter_search_block\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'field_example_text' widget.
 *
 * @FieldWidget(
 *   id = "twitter_search_widget",
 *   module = "twitter_search_block",
 *   label = @Translation("Twitter Search Widget"),
 *   field_types = {
 *     "twitter_search_fieldtype"
 *   }
 * )
 */
class TwitterWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    $element['tweet_values'] = array(
      '#title' => t('twitter Search Query'),
      '#type' => 'textfield',
      '#default_value' => isset($items[$delta]->tweet_values) ? $items[$delta]->tweet_values : NULL,
    );
    return $element;

  }

}
