<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
</head>
<body>
    
<form action="" class="container" method="post">
<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">age</label>
  <input type="number" name="age" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">salary</label>
  <input type="number" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">Loan Amount</label>
  <input type="number" name="l_amount" id="" class="form-control" placeholder="100000 to 400000" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">Advanced payment</label>
  <input type="number" name="a_payment" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">Select Number of year</label>
  <select class="form-control" name="year" id="">
    <option value="">select</option>
    <option>5</option>
    <option>10</option>
    <option>15</option>
  </select>
</div>
<input type="submit" class="btn btn-dark" name="loan" value="get_loan">
 

</form>
<?php
if(isset($_POST['loan'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $salary = $_POST['salary'];
  $l_amount = $_POST['l_amount'];
  $a_payment = $_POST['a_payment'];
  $year = $_POST['year'];
  $deduct = ($l_amount-$a_payment)/($year*12);

  if($age > 25 && $salary > 30000 && $l_amount <=400000 && $l_amount>=100000){
    echo "you are eligible for this scheme and " . "monthly installments is ". $deduct;
  }
  else{
    echo "Sorry! you are not eligible for this scheme";
  };
}
?>

</body>
</html>