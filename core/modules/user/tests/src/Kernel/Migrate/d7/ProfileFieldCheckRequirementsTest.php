<?php

namespace Drupal\Tests\user\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;
use Drupal\migrate\Exception\RequirementsException;

/**
 * Tests check requirements for profile_field source plugin.
 *
 * @group user
 */
class ProfileFieldCheckRequirementsTest extends MigrateDrupal7TestBase {

  /**
   * {@inheritdoc}
   */
  public function setup() {
    parent::setUp();
    $this->sourceDatabase->schema()->dropTable('profile_field');
  }

  /**
   * Tests exception in thrown when profile_fields tables does not exist.
   */
  public function testCheckRequirements() {
    $this->setExpectedException(RequirementsException::class, 'Profile module not enabled on source site');
    $this->getMigration('user_profile_field')
      ->getSourcePlugin()
      ->checkRequirements();
  }

}
