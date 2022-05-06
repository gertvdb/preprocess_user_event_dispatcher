<?php

namespace Drupal\preprocess_user_event_dispatcher\Event;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEntityEvent;
use Drupal\preprocess_event_dispatcher\Event\PreprocessEntityEventInterface;

/**
 * Class UserPreprocessEvent.
 */
final class UserPreprocessEvent extends AbstractPreprocessEntityEvent implements PreprocessEntityEventInterface {

  public static function getHook(): string
  {
    return 'user';
  }

}
