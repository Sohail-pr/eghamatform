<?php
function formLoader(){
  echo '  <form class="" action="insurance-price.php" method="post">
          </br><input name="birthYear" id="birthYear" type="text" class="form-control" placeholder="Birth Year">
          </br><button type="submit" class="btn  btn-outline-info btn-lg btn-block"><i class="bi-calculator"></i> Calculate</button>
          </form>';
}
function edtimgdiscount(){
  $newDiscount = $_POST['Discount'];
  $year = date("Y");
  $BirthYear = intval($_POST['birthYear']);
  $age = $year-$BirthYear;
  echo '  <form class="" action="insurance-price.php" method="post">
          <input name="birthYear" id="birthYear" type="text" class="form-control" placeholder="Birth Year">
          <input type="text" id="Discount" name="Discount" class="form-control" placeholder="Discount"/>
          <button type="submit" class="btn  btn-outline-info btn-lg btn-block"><i class="bi-calculator"></i> Calculate</button>
          <img src="images/sigortaPriceList.jpg" style="width:99%;height:auto;"alt="">
          </form>';
}
function insurancePrice($age,$discount){
  $price=0;
  switch ($age) {
    case ($age < "18" && $age > "1"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(200-(200*(0.01*$discount))).'₺</a>';
        $price=200-(200*(0.01*$discount));
        break;
    case ($age < "26" && $age > "17"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(125-(125*(0.01*$discount))).'₺</a>';
        $price=125-(125*(0.01*$discount));
        break;
    case ($age < "36" && $age > "25"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(160-(160*(0.01*$discount))).'₺</a>';
        $price=160-(160*(0.01*$discount));
        break;
    case ($age < "46" && $age > "35"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(185-(185*(0.01*$discount))).'₺</a>';
        $price=185-(185*(0.01*$discount));
        break;
    case ($age < "51" && $age > "45"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(280-(280*(0.01*$discount))).'₺</a>';
        $price=280-(280*(0.01*$discount));
        break;
    case ($age < "56" && $age > "50"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(320-(320*(0.01*$discount))).'₺</a>';
        $price=320-(320*(0.01*$discount));
        break;
    case ($age < "61" && $age > "55"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(355-(355*(0.01*$discount))).'₺</a>';
        $price=355-(355*(0.01*$discount));
        break;
        case ($age < "66" && $age > "60"):
        echo '<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-success btn-block"><i class="bi-cash-stack"></i> Your Insurance Price : '.(595-(595*(0.01*$discount))).'₺</a>';
        $price=595-(595*(0.01*$discount));
        break;
}return $price;
}
function insurancePriceAjax($age,$discount){
  $price=0;
  switch ($age) {
    case ($age < "18" && $age > "1"):
        $price=200-(200*(0.01*$discount));
        echo $price;
        break;
    case ($age < "26" && $age > "17"):
        $price=125-(125*(0.01*$discount));
        echo $price;
        break;
    case ($age < "36" && $age > "25"):
        $price=160-(160*(0.01*$discount));
        echo $price;
        break;
    case ($age < "46" && $age > "35"):
        $price=185-(185*(0.01*$discount));
        echo $price;
        break;
    case ($age < "51" && $age > "45"):
        $price=280-(280*(0.01*$discount));
        echo $price;
        break;
    case ($age < "56" && $age > "50"):
        $price=320-(320*(0.01*$discount));
        echo $price;
        break;
    case ($age < "61" && $age > "55"):
        $price=355-(355*(0.01*$discount));
        echo $price;
        break;
    case ($age < "66" && $age > "60"):
        $price=595-(595*(0.01*$discount));
        echo $price;
        break;
        echo $price;
}return $price;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['ajaxAskedBirth']) && isset($_POST['ajaxAskedDiscount'])) {
    $BirthYear = intval($_POST['ajaxAskedBirth']);
    $year = date("Y");
    $age = $year-$BirthYear;
    $discount=intval($_POST['ajaxAskedDiscount']);
    insurancePriceAjax($age,$discount);
  }
  $BirthYear = intval($_POST['birthYear']);
  $year = date("Y");
  $age = $year-$BirthYear;
  if (isset($_POST['birthYear']) && isset($_POST['Discount'])) {
    $newDiscount = intval($_POST['Discount']);
    insurancePrice($age,$newDiscount);
  }
  if (isset($_POST['birthYear'])) {
    if ($BirthYear==19941997) {
      edtimgdiscount();
    }else {
      $discount=0;
      $year = date("Y");
      $age = $year-$BirthYear;
      if ($BirthYear>1945 && $BirthYear<$year) {
        echo'<a href="https://api.whatsapp.com/send?phone=905523456749&text=%D8%B3%D9%84%D8%A7%D9%85%20%D9%88%D9%82%D8%AA%20%D8%A8%D8%AE%DB%8C%D8%B1%20%D8%AC%D9%87%D8%AA%20%D8%A7%D9%86%D8%AC%D8%A7%D9%85%20%D8%A7%D9%82%D8%A7%D9%85%D8%AA%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&source=&data="   class="btn btn-outline-warning btn-block"><i class="bi-person-lines-fill"></i> You are : '.$age.' years old</button>'."</br>";
        echo insurancePrice($age,$discount);
        formLoader();
      }else {
        formLoader();
      }
    }
  }

}else {
  formLoader();
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   </head>
   <body>
<script type="text/javascript">
  var clicks=1;
  $("#birthYear").click(function(){
    var clicks=1;
    if (clicks == 4) {
      alert("4clicks");
      $("#Discount").toggle();
    }else {
      clicks++;
      //alert(clicks)
    }

  })
</script>
   </body>
 </html>
