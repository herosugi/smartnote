
<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>スマートノート</title>
    </head>
    
    <body>
    <taitle>３つの質問出　題入力フォーム</taitle>
        <form action="page3.php" method="post">
        
        <h1>質問２を入力</h1>
        <input type="hidden" name="q1" value="<?php echo($tytle); ?>"/>
        <input type="hidden" name="q1" value="<?php echo($q1); ?>"/>
        
        <p>
        質問１がYESの場合<br>
        <input type="text" name="q1_yes" size="40">
        </p>
        
        <p>
        質問１がNOの場合<<br>
        <input type="text" name="q1_no" size="40">
        </p>
        
        
        <p>
        <input type="submit" value="送信">
        </p>
        </form>
        
    </body>
    
</html>