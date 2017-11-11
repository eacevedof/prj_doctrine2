<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'base_security_session',
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
   'fieldName' => 'remoteIp',
   'columnName' => 'remote_ip',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'sessionid',
   'columnName' => 'sessionid',
   'type' => 'text',
   'nullable' => true,
   'length' => NULL,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);