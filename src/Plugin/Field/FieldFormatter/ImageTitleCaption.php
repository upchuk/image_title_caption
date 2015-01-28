<?php

/**
 * @file
 * Contains \Drupal\image_title_caption\Plugin\Field\FieldFormatter\ImageTitleCaption
 */

namespace Drupal\image_title_caption\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;

/**
 * Plugin implementation of the 'image_title_caption' formatter.
 *
 * @FieldFormatter(
 *   id = "image_title_caption",
 *   label = @Translation("Image with caption from title"),
 *   field_types = {
 *     "image"
 *   }
 * )
 */
class ImageTitleCaption extends ImageFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items) {
    $elements = parent::viewElements($items);
    foreach ($elements as &$element) {
      $element['#theme'] = 'image_title_caption_formatter';
    }

    return $elements;
  }
}
