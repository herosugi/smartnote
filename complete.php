<?php
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
        <title>スマートノート</title>
    </head>
    
    <body>
        <taitle>３つの質問出　題入力フォーム</taitle>
    
        <form action="page3.php" method="post">
    
        <h1>質問を確認</h1>
        
         
 
    
     <input type="hidden" name="tytle" value="<?php echo($tytle); ?>"/>
        <h3>質問１，２</h3>
          <table border="1">
  <tr>
    <td>質問１</td><td><input type="text" name="q1" value="<?php echo $_POST["q1"] ?>"</td>
  </tr>
  <tr>
    <td>質問１がYESの場合の質問２</td><td><input type="text" name="q1_yes" value="<?php echo $_POST["q1_yes"] ?>"</td>
  </tr>
  <tr>
    <td>質問１がNOの場合の質問２</td><td><input type="text" name="q1_no" value="<?php echo $_POST["q1_no"] ?>"</td>
  </tr>
</table>
        
    
        
         <h3>質問1がYES</h3>
           <table border="1">
  
  <tr>
    <td>質問２がYESの場合の質問２</td><td><input type="text" name="q2_1_yes" value="<?php echo $_POST["q2_1_yes"] ?>"</td>
  </tr>
  <tr>
    <td>質問２がNOの場合の質問２</td><td><input type="text" name="q2_1_no" value="<?php echo $_POST["q2_1_no"] ?>"</td>
  </tr>
</table>
        
        
         <h3>質問1がNO</h3>
          <table border="1">
  
  <tr>
    <td>質問２がYESの場合の質問２</td><td><input type="text" name="q2_2_yes" value="<?php echo $_POST["q2_2_yes"] ?>"</td2>
  </tr>
  <tr>
    <td>質問２がNOの場合の質問２</td><td><input type="text" name="q2_2_no" value="<?php echo $_POST["q2_2_no"] ?>"</td>
  </tr>
</table>

        
      
        </form>
        
        
      


    </body>
    
</html>