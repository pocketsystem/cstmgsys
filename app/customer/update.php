<?php
require_once '../common/const.php';
require_once '../common/message.php';
require_once '../common/dbmanager.php';

$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
if (strlen($lname) <= 0) {
    echo MSGE001;
    return;
}

try {

    $sql  = " UPDATE CUSTOMER SET";
    $sql .= "     FNAME = :fname";
    $sql .= "   , LNAME = :lname";
    $sql .= "   , FFRGN = :ffrgn";
    $sql .= "   , LFRGN = :lfrgn";
    $sql .= "   , TEL = :tel";
    $sql .= "   , MAIL = :mail";
    $sql .= "   , PSTCD = :pstcd";
    $sql .= "   , ADRS1 = :adrs1";
    $sql .= "   , ADRS2 = :adrs2";
    $sql .= "   , ADRS3 = :adrs3";
    $sql .= "   , CTYPE = :ctype";
    $sql .= " WHERE";
    $sql .= "     CTMID = :ctmid";

    $db = getDb();
    $stt = $db->prepare($sql);

    $stt->bindValue(':ctmid', $_POST['ctmid']);
    $stt->bindValue(':fname', $_POST['fname']);
    $stt->bindValue(':lname', $_POST['lname']);
    $stt->bindValue(':ffrgn', $_POST['ffrgn']);
    $stt->bindValue(':lfrgn', $_POST['lfrgn']);
    $stt->bindValue(':tel',   $_POST['tel']);
    $stt->bindValue(':mail',  $_POST['mail']);
    $stt->bindValue(':pstcd', $_POST['pstcd']);
    $stt->bindValue(':adrs1', $_POST['adrs1']);
    $stt->bindValue(':adrs2', $_POST['adrs2']);
    $stt->bindValue(':adrs3', $_POST['adrs3']);
    $stt->bindValue(':ctype', $_POST['ctype']);

    $stt->execute();
    echo MSGI002;

    header('Location: ../form/showlist.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}
