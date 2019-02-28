<?php

require_once 'studentdiscount.civix.php';
use CRM_Studentdiscount_ExtensionUtil as E;


/**
 * Implements hook_civicrm_validateForm().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_validateForm
 */
function studentdiscount_civicrm_validateForm($formName, &$fields, &$files, &$form, &$errors) {
  if ($formName == 'CRM_Event_Form_Registration_Register') {
    // IF using a civiDiscount with the word 'student'
    if (!empty($form->_submitValues['discountcode']) && stripos($form->_submitValues['discountcode'], 'student') >= 0) {
      // Check that there is a primary email AND that it is an .edu
      if (!empty($form->_submitValues['email-Primary'])) {
        if (substr($form->_submitValues['email-Primary'], -4) != '.edu') {
          $errors['discountcode'] = ts('The "%1" discount code  is a student discount code, to use this code please enter a ".edu" Email Address', [1 => $form->_submitValues['discountcode']]);
        }
      // If no email address
      } else {
        $errors['discountcode'] = ts('The "%1" discount code  is a student discount code, to use this code please enter a ".edu" Email Address', [1 => $form->_submitValues['discountcode']]);
      }
    }
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function studentdiscount_civicrm_config(&$config) {
  _studentdiscount_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function studentdiscount_civicrm_xmlMenu(&$files) {
  _studentdiscount_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function studentdiscount_civicrm_install() {
  _studentdiscount_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function studentdiscount_civicrm_postInstall() {
  _studentdiscount_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function studentdiscount_civicrm_uninstall() {
  _studentdiscount_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function studentdiscount_civicrm_enable() {
  _studentdiscount_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function studentdiscount_civicrm_disable() {
  _studentdiscount_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function studentdiscount_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _studentdiscount_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function studentdiscount_civicrm_managed(&$entities) {
  _studentdiscount_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function studentdiscount_civicrm_caseTypes(&$caseTypes) {
  _studentdiscount_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function studentdiscount_civicrm_angularModules(&$angularModules) {
  _studentdiscount_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function studentdiscount_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _studentdiscount_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function studentdiscount_civicrm_entityTypes(&$entityTypes) {
  _studentdiscount_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function studentdiscount_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function studentdiscount_civicrm_navigationMenu(&$menu) {
  _studentdiscount_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _studentdiscount_civix_navigationMenu($menu);
} // */
