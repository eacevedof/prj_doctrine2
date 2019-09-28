<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'app_product',
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
   'fieldName' => 'idProductBrand',
   'columnName' => 'id_product_brand',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idProductFamily',
   'columnName' => 'id_product_family',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idProductSubfamily',
   'columnName' => 'id_product_subfamily',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'name',
   'columnName' => 'name',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idTypeContainer',
   'columnName' => 'id_type_container',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idTypeSize',
   'columnName' => 'id_type_size',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'priceCost',
   'columnName' => 'price_cost',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'tax',
   'columnName' => 'tax',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'taxAmount',
   'columnName' => 'tax_amount',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'priceTax',
   'columnName' => 'price_tax',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'priceRegular',
   'columnName' => 'price_regular',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'priceWholesale',
   'columnName' => 'price_wholesale',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'priceCustom',
   'columnName' => 'price_custom',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'priceOld',
   'columnName' => 'price_old',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'stock',
   'columnName' => 'stock',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'bonusPoints',
   'columnName' => 'bonus_points',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
   'options' => 
   array(
   'default' => '0.000',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'tagGroup',
   'columnName' => 'tag_group',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'observation',
   'columnName' => 'observation',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);