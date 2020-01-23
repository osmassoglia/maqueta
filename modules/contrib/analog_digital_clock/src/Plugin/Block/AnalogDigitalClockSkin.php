<?php

namespace Drupal\analog_digital_clock\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Analog Digital Clock' Block.
 *
 * @Block(
 *   id = "analog_digital_clock_skin",
 *   admin_label = @Translation("Analog Digital Clock"),
 * )
 */
class AnalogDigitalClockSkin extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $config = \Drupal::config('analog_digital_clock.settings');
    return [
      '#theme' => 'analogDigitalLightDarkSkin',
      '#analog_digital_clock_selected_skin' => $config->get('analog_digital_clock_skin'),
    ];
  }

}
