<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'vehicle_details';
 
// Table's primary key
$primaryKey = 'repId';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'repId', 'dt' => 0 ),
    array( 'db' => 'ownerName',  'dt' => 1 ),
    array( 'db' => 'vehicleMake',   'dt' => 2 ),
    array( 'db' => 'vehicleModel',   'dt' => 3 ),
    array( 'db' => 'vehicleVariant',   'dt' => 4 ),
    array( 'db' => 'vehicleRegNo',   'dt' => 5 ),
    array( 'db' => 'valuationPrice',   'dt' => 6 ),
    array( 'db' => 'remarks',   'dt' => 7 ),
    array( 'db' => 'inspectionDate',   'dt' => 8 ),
    array( 'db' => 'createdBy',   'dt' => 9 ),
    array( 'db' => 'createdOn',   'dt' => 10 ),
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'frsiv_25576221',
    'pass' => 'd1307201dh',
    'db'   => 'frsiv_25576221_fastvalue',
    'host' => 'sql212.freesite.vip'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);