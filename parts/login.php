<?php
    require('head.php');
?>

<?php
    require('../func/function.php')
?>

<div style = "display:inline-block;border:ridge;margin-left:407px;width:450px;height:1000px;">

    ログイン
    メールアドレス:<input type="text" name="e-mail">
    パスワード:<input type="pass" name="pass">
    <input type="submit" value="ログイン">

</div>

<div style = "display:inline-block;vertical-align:top;border:ridge;height:700px;width:194px;">
    最新ｱﾆﾒのTL</br>
    <div>
        <?php
        require('tl.php')
        ?>
    </div>

</div>
