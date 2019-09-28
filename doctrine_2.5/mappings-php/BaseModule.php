<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'base_module',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'processflag',
   'columnName' => 'processflag',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'insertPlatform',
   'columnName' => 'insert_platform',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'insertUser',
   'columnName' => 'insert_user',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'insertDate',
   'columnName' => 'insert_date',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'updatePlatform',
   'columnName' => 'update_platform',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'updateUser',
   'columnName' => 'update_user',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'updateDate',
   'columnName' => 'update_date',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'deletePlatform',
   'columnName' => 'delete_platform',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'deleteUser',
   'columnName' => 'delete_user',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'deleteDate',
   'columnName' => 'delete_date',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'cruCsvnote',
   'columnName' => 'cru_csvnote',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isErpsent',
   'columnName' => 'is_erpsent',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isEnabled',
   'columnName' => 'is_enabled',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'i',
   'columnName' => 'i',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'codeErp',
   'columnName' => 'code_erp',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'description',
   'columnName' => 'description',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'orderBy',
   'columnName' => 'order_by',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '100',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idType',
   'columnName' => 'id_type',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '3',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'notedev',
   'columnName' => 'notedev',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'noteuser',
   'columnName' => 'noteuser',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isShortcut',
   'columnName' => 'is_shortcut',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isSelectMenu',
   'columnName' => 'is_select_menu',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isInsertMenu',
   'columnName' => 'is_insert_menu',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isPick',
   'columnName' => 'is_pick',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isSelect',
   'columnName' => 'is_select',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isInsert',
   'columnName' => 'is_insert',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isRead',
   'columnName' => 'is_read',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isUpdate',
   'columnName' => 'is_update',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isDelete',
   'columnName' => 'is_delete',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isQuarantine',
   'columnName' => 'is_quarantine',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isExcelexport',
   'columnName' => 'is_excelexport',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isPrint',
   'columnName' => 'is_print',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isForeign',
   'columnName' => 'is_foreign',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);