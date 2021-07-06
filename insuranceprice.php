<?php
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
