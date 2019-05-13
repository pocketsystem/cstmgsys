<?php require_once '../common/const.php'; ?>
<?php require_once '../customer/select.php'; ?>
<?php require_once '../model/Customer.php'; ?>
<?php $ctm = showCustomer(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/button.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,200" rel="stylesheet">
    <title>顧客管理システム</title>
</head>
<body>
    <form method="POST" id="backform" action="showlist.php"></form>
    <form method="POST" action="../customer/update.php">
		<input type="hidden" id="ctmid" name="ctmid" value='<?= $ctm->getCTMID() ?>' />

        <h3>顧客情報変更
        </h3>
        <div class="btngroup">
            <button type="submit" form="backform" class="btn-simple btn-md btn-primary">戻る</button>
        </div>

        <div class="container">
            <div class="item">
                <label for="ctype">顧客分類</label>
                <input type="radio" id="ctype" name="ctype" value="0" <?php if($ctm->getCTYPE()==CUSTOMER_PERSON_ID){   echo 'checked';} ?> >個人
                <input type="radio" id="ctype" name="ctype" value="1" <?php if($ctm->getCTYPE()==CUSTOMER_CORPORATE_ID){echo 'checked';} ?> >法人
            </div>
            <div class="item">
                <label for="lname" class="input_label">氏名</label>
                <input type="text" id="lname" name="lname" size=20 maxlength="60" placeholder="山田" required value='<?= $ctm->getLNAME() ?>' />
                <input type="text" id="fname" name="fname" size=20 maxlength="60" placeholder="太郎" required value='<?= $ctm->getFNAME() ?>' />
            </div>
            <div class="item">
                <label for="lfrgn" class="input_label">フリガナ</label>
                <input type="text" id="lfrgn" name="lfrgn" size=20 maxlength="60" placeholder="ヤマダ" value='<?= $ctm->getLFRGN() ?>' />
                <input type="text" id="ffrgn" name="ffrgn" size=20 maxlength="60" placeholder="タロー" value='<?= $ctm->getFFRGN() ?>' />
            </div>
            <div class="item">
                <label for="tel" class="input_label">電話番号</label>
                <input type="tel" id="tel" name="tel" size=11 maxlength="11" placeholder="09012345678" value='<?= $ctm->getTEL() ?>' />
            </div>
            <div class="item">
                <label for="mail" class="input_label">メールアドレス</label>
                <input type="email" id="mail" name="mail" size=50 maxlength="100" placeholder="pocketsystem247@gmail.com" value='<?= $ctm->getMAIL() ?>' />
            </div>
            <div class="item">
                <label for="pstcd" class="input_label">郵便番号</label>
                <input type="text" id="pstcd" name="pstcd" size=7 maxlength="7"   placeholder="1234567" value='<?= $ctm->getPSTCD() ?>' />
            </div>
            <div class="item">
                <label for="adrs1" class="input_label">都道府県</label>
                <input type="text" id="adrs1" name="adrs1" size=50 maxlength="100" placeholder="都道府県" value='<?= $ctm->getADRS1() ?>' />
            </div>
            <div class="item">
                <label for="adrs2" class="input_label">市区町村</label>
                <input type="text" id="adrs2" name="adrs2" size=50 maxlength="100" placeholder="市町村" value='<?= $ctm->getADRS2() ?>' />
            </div>
            <div class="item">
                <label for="adrs3" class="input_label">番地</label>
                <input type="text" id="adrs3" name="adrs3" size=50 maxlength="100" placeholder="番地" value='<?= $ctm->getADRS3() ?>' />
            </div>
            <div class="btngroup2">
                <button type="submit" class="btn-simple btn-md btn-primary">更新</button>
                <button type="reset"  class="btn-simple btn-md btn-primary">変更破棄</button>
            </div>
        </div>
    </form>
</body>
</html>