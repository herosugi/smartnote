<?php
    
    //index.phpで入力されたq1の値を受け取ります
    $q1 = htmlspecialchars($_POST["q1"]);
    
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>スマートノート２</title>
    </head>
    
    <body>
        <h2>最初の質問: <?php echo($q1); ?></h2>
         
        <form action="page-3.php" method="post">
            
            <input type="hidden" name="q1" value="<?php echo($q1); ?>"/>
           
            <div>
                <label for="">イエスの場合の答えを入力して下さい</label>
                <input type="text" name="q1_yes"/>
            </div>
            
            <div>
                <label for="">ノーの場合の答えを入力して下さい</label>
                <input type="text" name="q1_no"/>
            </div>
            
            <div>
                <input type="submit" value="Submit"/>
            </div>
            
        </form>
        
    </body>
</html>