<?php
require_once '../common/const.php';
require_once '../common/message.php';
require_once '../common/dbmanager.php';

$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
if (strlen($lname) <= 0) {
    echo 'データ取得エラー発生。';
    return;
}

try {

    $sql  = '';
    $sql .= " INSERT INTO CUSTOMER (";
    $sql .= "     CTMID";
    $sql .= "   , FNAME";
    $sql .= "   , LNAME";
    $sql .= "   , FFRGN";
    $sql .= "   , LFRGN";
    $sql .= "   , TEL";
    $sql .= "   , MAIL";
    $sql .= "   , PSTCD";
    $sql .= "   , ADRS1";
    $sql .= "   , ADRS2";
    $sql .= "   , ADRS3";
    $sql .= "   , CTYPE)";
    $sql .= " SELECT";
    $sql .= "   MAX(CTMID + 1)";
    $sql .= "   , :fname";
    $sql .= "   , :lname";
    $sql .= "   , :ffrgn";
    $sql .= "   , :lfrgn";
    $sql .= "   , :tel";
    $sql .= "   , :mail";
    $sql .= "   , :pstcd";
    $sql .= "   , :adrs1";
    $sql .= "   , :adrs2";
    $sql .= "   , :adrs3";
    $sql .= "   , :ctype";
    $sql .= " FROM";
    $sql .= "   CUSTOMER";

    $db = getDb();
    $stt = $db->prepare($sql);

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
    echo MSGI001;

    header('Location: ../form/showlist.php');

} catch (PDOException $e) {
    print "エラーメッセージ：{$e->getMessage()}";
}

?>