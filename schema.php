<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/15
 * Time: 0:17
 */

require 'vendor/autoload.php';

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json; charset=UTF-8');

$config = [
    'schema_id'                      => '',
    'properties_required_by_default' => true,
    'schema_uri'                     => 'http://json-schema.org/draft-04/schema#',
    'schema_title'                   => null,
    'schema_description'             => null,
    'schema_type'                    => null,
    "items_schema_collect_mode"      => 0,
    'schema_required_field_names'    => []
];

$jsonContext = file_get_contents("php://input");
$schemaContext = \JSONSchemaGenerator\Generator::fromJson($jsonContext, $config);

echo $schemaContext;