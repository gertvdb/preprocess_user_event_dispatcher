<?php

namespace Drupal\preprocess_user_event_dispatcher\Event\Variables;

use Drupal\Core\Entity\EntityInterface;
use Drupal\preprocess_event_dispatcher\Variables\AbstractEntityEventVariables;
use Drupal\user\UserInterface;

/**
 * Class UserEventVariables.
 */
class UserEventVariables extends AbstractEntityEventVariables {

  /**
   * @return EntityInterface
   */
  public function getEntity(): EntityInterface
  {
    return $this->getUser();
  }

  /**
   * Get the user.
   *
   * @return UserInterface
   *   The user.
   */
  public function getUser(): UserInterface {
    return $this->variables['user'];
  }

  /**
   * Get the view mode.
   *
   * @return string
   *   View mode.
   */
  public function getViewMode(): string {
    return $this->variables['elements']['#view_mode'];
  }

}
