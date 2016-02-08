<?php
    
    //page-3.phpで入力された値を受け取ります
    $q1 = htmlspecialchars($_POST["q1"]);
    
    $q1_yes = htmlspecialchars($_POST["q1_yes"]);
    $q1_no = htmlspecialchars($_POST["q1_no"]);
    
    $q2_1_yes = htmlspecialchars($_POST["q2_1_yes"]);
    $q2_1_no = htmlspecialchars($_POST["q2_1_no"]);
    $q2_2_yes = htmlspecialchars($_POST["q2_2_yes"]);
    $q2_2_no = htmlspecialchars($_POST["q2_2_no"]);
    
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>スマートノート４</title>
    </head>
    
    <body>
        
        <h2>確認</h2>
     
        <form action="post.php" method="post">
            
            <div>
                <label for="">この質問のタイトル</label>
                <input type="text" name="title" value="<?php echo($q1);?>"/>
            </div>
            
             <hr>
             
            <div>
                <label for="">最初の質問</label>
                <input type="text" name="q1" value="<?php echo($q1);?>"/>
            </div>
           
            <hr>
            
           <div>
                <label for=""><?php echo ($q1); ?>がイエスの場合</label>
                <input type="text" name="q1_yes" value="<?php echo($q1_yes);?>"/>
            </div>
            
            <div>
                <label for=""><?php echo ($q1); ?>がノーの場合の</label>
                <input type="text" name="q1_no" value="<?php echo($q1_no);?>"/>
            </div>
            
             <hr>
             
            <div>
                <label for=""><?php echo ($q1_yes); ?>がイエスの場合の</label>
                <input type="text" name="q2_1_yes" value="<?php echo($q2_1_yes);?>"/>
            </div>
            
            <div>
                <label for=""><?php echo ($q1_yes); ?>がノーの場合</label>
                <input type="text" name="q2_1_no" value="<?php echo($q2_1_no);?>"/>
            </div>
            
            <hr>
            
            <div>
                <label for=""><?php echo ($q1_no); ?>がイエスの場合</label>
                <input type="text" name="q2_2_yes" value="<?php echo($q2_2_yes);?>"/>
            </div>
            
            <div>
                <label for=""><?php echo ($q1_no); ?>がノーの場合</label>
                <input type="text" name="q2_2_no" value="<?php echo($q2_2_no);?>"/>
            </div>
            
            <div>
                <input type="submit" value="Submit"/>
            </div>
            
        </form>
        
    </body>
</html>