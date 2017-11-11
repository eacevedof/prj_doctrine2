<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'app_shop_head',
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
   'fieldName' => 'date',
   'columnName' => 'date',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'hour',
   'columnName' => 'hour',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idSeller',
   'columnName' => 'id_seller',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '1',
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
   'fieldName' => 'idTypeValidate',
   'columnName' => 'id_type_validate',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idTypePayment',
   'columnName' => 'id_type_payment',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idTypeCurrency',
   'columnName' => 'id_type_currency',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'linesSubtotal',
   'columnName' => 'lines_subtotal',
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
   'fieldName' => 'discount',
   'columnName' => 'discount',
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
   'fieldName' => 'discountAmount',
   'columnName' => 'discount_amount',
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
   'fieldName' => 'subtotal',
   'columnName' => 'subtotal',
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
   'fieldName' => 'shippingCost',
   'columnName' => 'shipping_cost',
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
   'fieldName' => 'total',
   'columnName' => 'total',
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
   'fieldName' => 'idAddressInvoice',
   'columnName' => 'id_address_invoice',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idAddressDelivery',
   'columnName' => 'id_address_delivery',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'invoiceAddress',
   'columnName' => 'invoice_address',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'deliveryAddress',
   'columnName' => 'delivery_address',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'deliveryDate',
   'columnName' => 'delivery_date',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'deliveryHour',
   'columnName' => 'delivery_hour',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idDeliveryUser',
   'columnName' => 'id_delivery_user',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'isPayed',
   'columnName' => 'is_payed',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'visitHour',
   'columnName' => 'visit_hour',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'timeTakingStart',
   'columnName' => 'time_taking_start',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'timeTakingEnd',
   'columnName' => 'time_taking_end',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'transacCode',
   'columnName' => 'transac_code',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'notes',
   'columnName' => 'notes',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);