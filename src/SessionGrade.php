<?php

namespace Drupal\openy_node_session;

use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides logic for listing session's grade types.
 */
final class SessionGrade {

  /**
   * Gets the list of all available session's grade types.
   *
   * @return array
   *   The labels, keyed by ID.
   */
  public static function getGrades() : array {
    return [
      'PRE_K' => new TranslatableMarkup('Pre K'),
      'K' => new TranslatableMarkup('Kindergarten'),
      '1' => new TranslatableMarkup('Grade 1'),
      '2' => new TranslatableMarkup('Grade 2'),
      '3' => new TranslatableMarkup('Grade 3'),
      '4' => new TranslatableMarkup('Grade 4'),
      '5' => new TranslatableMarkup('Grade 5'),
      '6' => new TranslatableMarkup('Grade 6'),
      '7' => new TranslatableMarkup('Grade 7'),
      '8' => new TranslatableMarkup('Grade 8'),
      '9' => new TranslatableMarkup('Grade 9'),
      '10' => new TranslatableMarkup('Grade 10'),
      '11' => new TranslatableMarkup('Grade 11'),
      '12' => new TranslatableMarkup('Grade 12'),
    ];
  }

}
