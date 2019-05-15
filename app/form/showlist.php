<?php require_once '../customer/select.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/button.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,200" rel="stylesheet">
	
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <title>顧客管理システム</title>
</head>

<body>
    <form method="POST" id="insfrm" action="regist.php"></form>
    <form method="POST" id="bakfrm" action="/portfolio/portfolio.html"></form>

    <h3>顧客一覧画面</h3>
    <div class="btngroup">
        <button type="button" form="insfrm" class="btn-simple btn-md btn-primary" id="insbtn">新規登録</button>
        <button type="button" form="delfrm" class="btn-simple btn-md btn-primary" id="delbtn">削除</button>
        <button type="button" form="bakfrm" class="btn-simple btn-md btn-primary" id="bakbtn">戻る</button>
    </div>

    <form method="POST" id="delfrm" action="../customer/delete.php">
    <div class="container2">
        <table>
            <thead>
                <tr>
                    <th>削除</th>
                    <th>ID</th>
                    <th>分類</th>
                    <th>氏名</th>
                    <th>フリガナ</th>
                    <th>電話番号</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php echo showCustomerList(); ?>
            </tbody>
        </table>
    </div>
    </form>
</body>

</html>