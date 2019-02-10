<?php
/**
 * Created by PhpStorm.
 * User: sarah
 * Date: 28.01.2019
 * Time: 11:50
 */
require_once "config.php";
require "vendor/autoload.php";

$config = new \Doctrine\DBAL\Configuration();

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

/*Schema(Database) erstellen*/
/*Tables erstellen*/
/*Daten einfügen*/

$queryBuilder = $conn->createQueryBuilder();
$inputAutor = 1;
$qry = $queryBuilder
    ->select('pk_autor', 'fk_blog')
    ->from('autor')
    ->where('pk_autor = ?')
    ->setParameter(0, $inputAutor);
$sth = $qry->execute();
$result = $sth->fetchAll();
foreach ($result as $row) {
    echo "Autor: ".$row['pk_autor'] . "|" . " Blog:" . $row['fk_blog'];
}