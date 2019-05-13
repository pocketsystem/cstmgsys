<?php
function getDb()
{

//    $dsn = 'mysql:dbname=test; host=127.0.0.1; charset=utf8';
//    $usr = 'root';
//    $passwd = '';

    $dsn = 'mysql:dbname=pocketsystem_test; host=mysql1019.db.sakura.ne.jp; charset=utf8';
    $usr = 'pocketsystem';
    $passwd = 'pass12345';

    try {
        $db = new PDO($dsn, $usr, $passwd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);

        return $db;
    } catch (PDOException $e) {
        throw $e;
    }
}
