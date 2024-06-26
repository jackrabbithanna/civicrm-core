<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Worldregion.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:a9293175f5f503dcd9cfcec59fc967b5)
 */

/**
 * Database access object for the WorldRegion entity.
 */
class CRM_Core_DAO_Worldregion extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.8';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_worldregion';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Country ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Region name to be associated with countries
   *
   * @var string|null
   *   (SQL type: varchar(128))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_worldregion';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Worldregions') : ts('Worldregion');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('World Region ID'),
          'description' => ts('Country ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_worldregion.id',
          'table_name' => 'civicrm_worldregion',
          'entity' => 'WorldRegion',
          'bao' => 'CRM_Core_DAO_Worldregion',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.8',
        ],
        'world_region' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('World Region'),
          'description' => ts('Region name to be associated with countries'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => TRUE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_worldregion.name',
          'export' => TRUE,
          'table_name' => 'civicrm_worldregion',
          'entity' => 'WorldRegion',
          'bao' => 'CRM_Core_DAO_Worldregion',
          'localizable' => 0,
          'add' => '1.8',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'worldregion', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'worldregion', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
