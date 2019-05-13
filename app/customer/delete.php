<?php
require_once '../common/const.php';
require_once '../common/message.php';
require_once '../common/dbmanager.php';

$delchk = isset($_POST['delchk']) ? $_POST['delchk'] : null;

if (isset($_POST['delchk']) && is_array($_POST['delchk'])) {} else {
    echo 'データ取得エラー発生。';
}

try {

    $sql  = " DELETE FROM CUSTOMER";
    $sql .= " WHERE ";
    $sql .= "   CTMID=:delchk;";

    $db = getDb();
    $stt = $db->prepare($sql);

    if (isset($_POST['delchk']) && is_array($_POST['delchk'])) {
        foreach ($_POST['delchk'] as $value) {
            $ctmid = (int)$value;
            $stt->bindParam(':delchk', $ctmid);
            $stt->execute();
        }
    }

    echo MSGI003;

    header('Location: ../form/showlist.php');

} catch (PDOException $e) {
    print "エラーメッセージ：{$e->getMessage()}";
}

?>