<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'app_shop_bonus',
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
   'fieldName' => 'idCustomer',
   'columnName' => 'id_customer',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
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
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idOrder',
   'columnName' => 'id_order',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'expiryDate',
   'columnName' => 'expiry_date',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'amount',
   'columnName' => 'amount',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
  ));
$metadata->mapField(array(
   'fieldName' => 'token',
   'columnName' => 'token',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'reason',
   'columnName' => 'reason',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isUsed',
   'columnName' => 'is_used',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);