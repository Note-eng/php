<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title> Teste formulário</title>
</head>
<?php
/*
  $erro = false;

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST['num1'])){
      $erro = true;
      $erro_num1 = "Operador 1 é obrigatorio";
    } 
    else {
      $num1 = POST['num1'];
    }
  }
*/
?>




<body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="number" name="num1" value="<?php echo $_POST['num1']?>"><br>
    <?php if(!empty($erro_num1)) echo $erro_num1 . "<br>" ?>
    <select name="calc">
					<option value="+">	+(somar)</option>
					<option value="-">	-(subtrair)</option>
					<option value="*">	*(multiplicar)</option>
					<option value="/">	/(dividir)</option>
</select><br>
    <input type="number" name="num2" value="<?php echo $_POST['num2']?>"><br>
    <input type="submit" value$calc
  <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <h1>Resultado:</h1>  

    <?php $calc = $_POST['calc'] ?>
     <?php endif; ?>

<?php 
switch ($calc) {
    case "+":
        echo $_POST['num1'] + $_POST['num2'];
        break;
    case "-":
        echo $_POST['num1'] - $_POST['num2'];
        break;
    case "*":
        echo $_POST['num1'] *  $_POST['num2'];
        break;
        case "/":
        echo $_POST['num1'] /  $_POST['num2'];
        break;
} ?>

  </body>
</html>