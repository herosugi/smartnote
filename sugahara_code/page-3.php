<?php
    
    //page-2.phpで入力された値を受け取ります
    $q1 = htmlspecialchars($_POST["q1"]);
    $q1_yes = htmlspecialchars($_POST["q1_yes"]);
    $q1_no = htmlspecialchars($_POST["q1_no"]);
    
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>スマートノート３</title>
    </head>
    
    <body>
        <h2>最初の質問: <?php echo ($q1); ?></h2>
        
         
        <form action="complete.php" method="post">
            
            <input type="hidden" name="q1" value="<?php echo ($q1); ?>"/>
            <input type="hidden" name="q1_yes" value="<?php echo ($q1_yes); ?>"/>
            <input type="hidden" name="q1_no" value="<?php echo ($q1_no); ?>"/>
           
            <div>
                <label for=""><?php echo ($q1_yes); ?>がイエスの場合の答えを入力して下さい</label>
                <input type="text" name="q2_1_yes"/>
            </div>
            
            <div>
                <label for=""><?php echo ($q1_yes); ?>がノーの場合の答えを入力して下さい</label>
                <input type="text" name="q2_1_no"/>
            </div>
            
            <hr>
            
            <div>
                <label for=""><?php echo ($q1_no); ?>がイエスの場合の答えを入力して下さい</label>
                <input type="text" name="q2_2_yes"/>
            </div>
            
            <div>
                <label for=""><?php echo ($q1_no); ?>がノーの場合の答えを入力して下さい</label>
                <input type="text" name="q2_2_no"/>
            </div>
            
            <div>
                <input type="submit" value="Submit"/>
            </div>
            
        </form>
        
    </body>
</html>