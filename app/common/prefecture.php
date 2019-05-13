<?php
require_once '../common/const.php';
require_once '../common/message.php';
require_once '../common/dbmanager.php';
require_once '../model/Prefecture.php';


/*
 *
 */
function getPrefecture()
{

    $sql  = " SELECT ";
    $sql .= "    PFTCD";
    $sql .= "   ,PFTNM";
    $sql .= " FROM PREFECTURE";

    $db = getDb();
    $stt = $db->prepare($sql);

    $stt->execute();
    $stt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prefecture');
    $result = $stt->fetchAll();

    echo $stt->rowCount();
    if ($stt->rowCount() > 0) {
        return $result;
    }
}
?>