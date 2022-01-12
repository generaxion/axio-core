<?php
/**
 * Class Plugins_Acf
 */
class Axio_Core_Plugins_Acf extends Axio_Core_Sub_Feature {

  public function setup() {

    // var: key
    $this->set('key', 'axio_core_plugins_acf');

    // var: name
    $this->set('name', 'Settings for the ACF plugin');

    // var: is_active
    $this->set('is_active', true);

  }

  /**
   * Run feature
   */
  public function run() {
    add_filter('acf/settings/show_admin', array($this, 'axio_core_hide_acf_from_nonadmins'));
  }

  /**
   * Hide ACF from non-administrator admin menu
   *
   * @param bool $show is ACF shown
   *
   * @return bool is ACF shown
   */
  public static function axio_core_hide_acf_from_nonadmins($show) {
    return current_user_can('administrator');
  }

}
