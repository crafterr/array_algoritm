<?php
require_once '../vendor/autoload.php';
use ArrayAlgoritm\Recursion\Library\Category\Category;
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=arrayalgoritm;";
$username = "root";
$password = "root";
$dbh = new PDO($dsn, $username, $password);

$result = $dbh->query("Select * from categories order by parentCategory asc, sortInd asc", PDO::FETCH_OBJ);

$category = new Category($result);
$category->buildCategories();
$category->showCategoryTree(0);
