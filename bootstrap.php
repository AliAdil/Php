<?php 
$confiq = require 'Database/confiq.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

//$pdo = Connection::make();
// $query = new QueryBuilder($pdo);
// inlined two line

// $query = new QueryBuilder(Connection::make());

return new QueryBuilder
(
    Connection::make($confiq['database'])
);
