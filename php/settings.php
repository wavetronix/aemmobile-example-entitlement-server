<?php
/**
 * @param {String} $db_host - The mysql host name.
 * @example $db_host = "localhost";
 * Please uncomment below and input actual value.
 */
$db_host = getenv('MYSQL_DB_HOST');

/**
 * @param {String} $db_user - The mysql user name.
 * @example $db_user = "root";
 * Please uncomment below and input actual value.
 */
$db_user = getenv('MYSQL_DB_USER');

/**
 * @param {String} $db_password - The mysql password.
 * @example $db_password = "root";
 * Please uncomment below and input actual value.
 */
$db_password = getenv('MYSQL_DB_PASSWORD');

/**
 * @param {String} $db_name - The mysql database name.
 * @example $db_name = "entitlement_admin";
 * Only change below if the database name was different than 'entitlement_admin'.
 */
$db_name = getenv('MYSQL_DB');

/**
 * @param {Array} $admin_list - The list of admin user credentials
 * @example $admin_list = array(array('username' => 'username', 'password' => 'password'));
 * This is a list of administrators that will be allowed to sign into the entitlement service.
 * Please DO NOT input plain user password into the array, always MD5 hash it.
 * i.e. "123" after MD5 hash is "202cb962ac59075b964b07152d234b70"
 * For more info, please see http://php.net/manual/en/function.md5.php
 * Please uncomment below and input actual value.
 */
$admin_list = array(
	array('username' => 'marketing_admin', 'password' => '889da330297dadee8084f2b31d705983'), // Marketing admin
	array('username' => 'admin', 'password' => '695dc2b126181c3c3f2a2cba60214fe8'), // Server admin
);

?>
