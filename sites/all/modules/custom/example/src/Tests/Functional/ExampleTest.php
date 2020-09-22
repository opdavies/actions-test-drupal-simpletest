<?php

namespace Drupal\example\Tests\Functional;

final class ExampleTest extends \DrupalWebTestCase {

  public function getInfo(): array {
    return [
      'name' => 'Example Web Test',
      'description' => 'An example web test.',
      'group' => 'Custom',
    ];
  }

  public function testThatItReturnsTrue(): void {
    $this->assertTrue(FALSE);
  }

}