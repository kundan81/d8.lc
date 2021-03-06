<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal_ui\Tests\MigrateAccessTest.
 */

namespace Drupal\migrate_drupal_ui\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests that only user 1 can access the migrate UI.
 *
 * @group migrate_drupal_ui
 */
class MigrateAccessTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['migrate_drupal_ui'];

  /**
   * Tests that only user 1 can access the migrate UI.
   */
  protected function testAccess() {
    $this->drupalLogin($this->rootUser);
    $this->drupalGet('upgrade');
    $this->assertResponse(200);
    $this->assertText(t('Drupal Upgrade'));

    $user = $this->createUser(['administer software updates']);
    $this->drupalLogin($user);
    $this->drupalGet('upgrade');
    $this->assertResponse(403);
    $this->assertNoText(t('Drupal Upgrade'));
  }

}
