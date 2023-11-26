<?php
const HOST = 'aws.connect.psdb.cloud';
const USERNAME = '5ehr5yrxlrak6igquoj1';
const PASSWORD = 'pscale_pw_sVuU765L32t3YBsN3PQmiKBji9SQY4HW4Y1iOlMYnFu';
const DBNAME = 'todopost';
$ssl_options = array(
  "sslmode" => MYSQLI_CLIENT_SSL,
  // Path to your SSL certificate files
  "sslca" => '/etc/ssl/cert.pem',
  // Other SSL options if required
);
  
$dbcon = mysqli_init();
$dbcon->ssl_set(NULL, NULL, "/etc/ssl/cert.pem", NULL, NULL);
$dbcon->real_connect(HOST, USERNAME, PASSWORD, DBNAME);
// $dbcon->close();
// $dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME,$ssl_options);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

?>