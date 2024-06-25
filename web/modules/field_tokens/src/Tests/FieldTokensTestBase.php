<?php

namespace Drupal\field_tokens\Tests;

use Drupal\Tests\image\Functional\ImageFieldTestBase;

/**
 * Class FieldTokensTest.
 */
abstract class FieldTokensTestBase extends ImageFieldTestBase {

  /**
   * A content type.
   *
   * @var \Drupal\node\Entity\NodeType
   */
  protected $contentType;

  /**
   * An Image field.
   *
   * @var \Drupal\field\Entity\FieldConfig
   */
  protected $field;

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = array('field_tokens', 'image');

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Create a content type.
    $this->contentType = $this->drupalCreateContentType();

    // Create an Image field.
    $field_name = strtolower($this->randomMachineName());
    $this->field = $this->createImageField($field_name, $this->contentType->id());
  }

}
