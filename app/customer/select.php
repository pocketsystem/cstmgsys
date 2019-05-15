<?php
require_once '../common/const.php';
require_once '../common/message.php';
require_once '../common/dbmanager.php';
require_once '../model/Customer.php';

function showCustomer()
{

    $sql  = " SELECT ";
    $sql .= "    LPAD(CTMID,3,0) AS CTMID";
    $sql .= "   ,CTYPE";
    $sql .= "   ,(CASE CTYPE WHEN ".CUSTOMER_PERSON_ID." THEN '".CUSTOMER_PERSON."' WHEN ".CUSTOMER_CORPORATE_ID." THEN '".CUSTOMER_CORPORATE."' END) AS CTYPENM";
    $sql .= "   ,LNAME";
    $sql .= "   ,FNAME";
    $sql .= "   ,LFRGN";
    $sql .= "   ,FFRGN";
    $sql .= "   ,TEL";
    $sql .= "   ,MAIL";
    $sql .= "   ,PSTCD";
    $sql .= "   ,ADRS1";
    $sql .= "   ,ADRS2";
    $sql .= "   ,ADRS3";
    $sql .= " FROM CUSTOMER";
    $sql .= " WHERE";
    $sql .= "   CTMID = :ctmid";

    $db = getDb();
    $stt = $db->prepare($sql);

    if (isset($_POST['ctmid'])) {
		$ctmid = (int)$_POST['ctmid'];
        $stt->bindParam(':ctmid', $ctmid);
        $stt->execute();
        $stt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Customer');
		$result = $stt->fetch();

		if ($stt->rowCount() > 0) {
			return $result;
		}
    }
}

function showCustomerList()
{

    $sql  = " SELECT";
    $sql .= "    LPAD(CTMID,3,0) AS CTMID";
    $sql .= "   ,CTYPE";
    $sql .= "   ,(CASE CTYPE WHEN ".CUSTOMER_PERSON_ID." THEN '".CUSTOMER_PERSON."' WHEN ".CUSTOMER_CORPORATE_ID." THEN '".CUSTOMER_CORPORATE."' END) AS CTYPENM";
    $sql .= "   ,LNAME";
    $sql .= "   ,FNAME";
    $sql .= "   ,LFRGN";
    $sql .= "   ,FFRGN";
    $sql .= "   ,TEL";
    $sql .= " FROM CUSTOMER";
    $sql .= " ORDER BY CONVERT(CTMID, SIGNED)";

    $db = getDb();
    $stt = $db->prepare($sql);
    $stt->execute();

    $out = '';
    while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
        $out .= '<tr>';
        $out .= '   <td><input type="checkbox" form="delfrm" name="delchk[]" class="delchk" value="' . $row['CTMID'] . '"></td>';
        $out .= '   <td>' . $row['CTMID'] . '</td>';
        $out .= '   <td>' . $row['CTYPENM'] . '</td>';
        $out .= '   <td>' . $row['LNAME'] . ' ' . $row['FNAME'] . '</td>';
        $out .= '   <td>' . $row['LFRGN'] . ' ' . $row['FFRGN'] . '</td>';
        $out .= '   <td>' . $row['TEL'] . '</td>';
        $out .= '   <td>';
        $out .= '   	<form method="POST" action="edit.php">';
        $out .= '       	<input  type="hidden" name="ctmid" value="'.$row['CTMID'].'">';
        $out .= '       	<button type="submit" class="btn-simple btn-sm btn-primary">詳細</button>';
        $out .= '   	</form>';
        $out .= '   </td>';
        $out .= '</tr>';
    }
    return $out;
}
