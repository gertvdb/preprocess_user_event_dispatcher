<?php

namespace Drupal\preprocess_user_event_dispatcher\Event\Factory;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEvent;
use Drupal\preprocess_event_dispatcher\Factory\PreprocessEventFactoryInterface;
use Drupal\preprocess_user_event_dispatcher\Event\UserPreprocessEvent;
use Drupal\preprocess_user_event_dispatcher\Event\Variables\UserEventVariables;

/**
 * Class UserPreprocessEventFactory.
 */
class UserPreprocessEventFactory implements PreprocessEventFactoryInterface {

  public function createEvent(array &$variables): AbstractPreprocessEvent
  {
    return new UserPreprocessEvent(
      new UserEventVariables($variables)
    );
  }

  public function getEventHook(): string
  {
    return UserPreprocessEvent::getHook();
  }

}
