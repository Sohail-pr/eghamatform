<?php
function loadkeys(){
  echo '<h2><strong>DataBase</strong> Initialize</h2>';
  echo '<div class="row">';
  echo '<div class="col-lg-12">';
      echo '<form class="" action="" method="post">';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="submit" name="InitDatabase" value="Init Database" />';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="submit" name="insertDefualt" value="insert Defualt Values" />';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="submit" name="loadAll" value="Load Every Thing" />';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="submit" name="CustomersCard" value="Show CustomerCard" />';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="submit" name="testinsertInsertPersonalImages" value="testinsertInsertPersonalImages" />';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="submit" name="AddOrder" value="AddOrder" />';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="file" name="imagefile" value="AddOrder" />';
            echo '<input class="btn btn-lg btn-block btn-danger px-3" type="submit" name="submit" value="image upload" />';




            echo '<input name="tst1">';
            echo '<input name="tst2">';
            echo '</br>';
      echo '</form>';
    echo '</div>';
}
loadkeys();
$sitePath = "https://let2trade.com/eghamat/";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo "Posted<br>";
    if (isset($_POST['InitDatabase'])) {
        echo "Initializing Database...</br>";
        require_once './db.php';
        $myDB = new Database();
        $myDB->Initialize();
    }

    if (isset($_POST['AddOrder'])) {
        echo "Add order...</br>";
        require_once './db.php';
        $myDB = new Database();
        $myDB->InsertOrder('s1','s2','s3','s4','s5','s6','s7','s8','s9','s10','s11','s12','s13','s14','s15','s16','s17','s18','y');
    }

    if(isset($_POST['submit'])) {
      echo "image Pushed </br>";
      $file= $_FILES['imagefile'];
      print_r($file);
      $fileName=$file['name'];
      $fileTMP_Name=$file['tmp_name'];
      $fileSize=$file['size'];
      $fileError=$file['error'];
      $fileType=$file['type'];
      $fileSavedName="";
      $fileExtention= explode('.',$fileName);
      $fileActualExtention=strtolower(end($fileExtention));

      $allow = array('jpg','jpeg','png','pdf');
      if (in_array($fileActualExtention,$allow)) {
        if ($fileError===0) {
          if ($fileSize<1000000) {
            $fileNameNew=uniqid('',true).".".$fileActualExtention;
            $fileDestination='images/useruploads/'.$fileNameNew;
            move_uploaded_file($fileTMP_Name,$fileDestination);
            require_once './db.php';
            $myDB = new Database();
            $siteAdress=$myDB->$siteadress;
            $myDB->InsertProduct($_POST['productName'],$_POST['productBarcodeNumber'],$siteAdress."/images/useruploads/".$fileNameNew,$_POST['storePlace']);
            //echo "</br>Uploaded!!</br>";
          }else {
            echo "The file is too big!";
          }
        }
        else {
          echo "There was an error uploading your file!";
        }
      }
      else {
        echo "You can not upload files by this type !";
      }

      //print_r($file);
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "Ajax Felt </br>";
      if (isset($_POST['PassPortNumber'])) {
        echo "Ajax insert";
        require_once './db.php';
        $myDB = new Database();


        $file= $_FILES['PaymentReceiptURL'];
        $fileName=$file['name'];
        $fileTMP_Name=$file['tmp_name'];
        $fileSize=$file['size'];
        $fileError=$file['error'];
        $fileType=$file['type'];
        $fileSavedName="";
        $fileExtention= explode('.',$fileName);
        $fileActualExtention=strtolower(end($fileExtention));

        $allow = array('jpg','jpeg','png','pdf');
        if (in_array($fileActualExtention,$allow)) {
          if ($fileError===0) {
            if ($fileSize<1000000) {
              $fileNameNew=uniqid('',true).".".$fileActualExtention;
              $fileDestination='images/useruploads/'.$fileNameNew;
              move_uploaded_file($fileTMP_Name,$fileDestination);
              $myDB->InsertOrder($_POST['PassPortNumber'],$fileNameNew,$_POST['Name'],$_POST['FamilyName'],$_POST['FatherName'],$_POST['MotherName'],$_POST['CellPhoneNumber'],$_POST['KimlikNumber'],$_POST['BirthYear'],$_POST['ParrentID'],$_POST['PersonalImageURL'],$_POST['PassPortURL'],$_POST['EntranceStampImageURL'],$_POST['biometrikFotoRequest'],$_POST['taxPaymentRequest'],$_POST['contractMakeRequest'], $_POST['Password'],$_POST['UserType'],'y');
              //$siteAdress=$myDB->$siteadress;
              //$myDB->InsertProduct($_POST['productName'],$_POST['productBarcodeNumber'],$siteAdress."/images/useruploads/".$fileNameNew,$_POST['storePlace']);
              //echo "</br>Uploaded!!</br>";
            }else {
              echo "The file is too big!";
            }
          }
          else {
            echo "There was an error uploading your file!";
          }
        }
        else {
          echo "You can not files of this type !";
        }



        $myDB->InsertOrder('s1','s2','s3','s4','s5','s6','s7','s8','s9','s10','s11','s12','s13','s14','s15','s16','s17','s18','y');

      }
    }






    if (isset($_POST['insertDefualt'])) {
        //echo "Insert pushed...</br>";
        require_once './db.php';
        $myDB = new Database();
        $myDB->InsertUser("sohail","SiteAdmin","master","ADM","yes");
        $myDB->InsertAgent("1","Mehrdad","+905510444046","No","istiklal Cd","images/uploads/personalimages/mehrdadistiklal.jpg","yes");
        $myDB->InsertAgent("2","RezaBoroumandZadeh","+905444038227","No","harbiyeh Mah","images/uploads/personalimages/rezaboroumandzadehharbiyeh.jpg","yes");
        $myDB->InsertPassPorts("FirstPassPort","uploads/passports/WhatsApp Image 2021-06-26 at 00.08.02.jpg","yes");
        $myDB->InsertPersonalImages("FirstPersonalImage","images/uploads/personalimages/personalImageDefualt.png","yes");
        $myDB->InsertCustomers("CustomerID","PassPortNumber","Name","FamilyName","CellPhoneNumber","KimlikNumber","BirthYear","ParrentID","PassPortURL","PersonalImageURL","Password","UserType","y");
        $myDB->InsertReadyDocs("docID","agentID","randevooURL","sigortaURL","noterWantStatus","taxpeymentWantStatus","personalImageWantStatus","documentStatus","yes");
    }

    if (isset($_POST['loadAll'])) {

        require_once './db.php';
        $myDB = new Database();
        $AllUsers = $myDB->fetchAllّUsers();
        $AllCustomers = $myDB->fetchAllّCustomers();
        $AllPassPorts = $myDB->fetchAllPassPorts();
        $AllّAgents = $myDB->fetchAllّAgents();
        $AllّPersonalImages = $myDB->fetchAllّPersonalImages();
        $AllReadyDocs = $myDB->fetchAllReadyDocs();
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        //---------------------------------------------------------
        if ($AllCustomers->num_rows > 0) {
          echo '<table class="table col-lg-12">';
              echo "<thead>";
                  echo "<tr>";
                      echo "<th>آی دی مشتری</th>";
                      echo "<th>شماره پاسپورت مشتری</th>";
                      echo "<th>نام مشتری</th>";
                      echo "<th>نام خانوادگی مشتری</th>";
                      echo "<th>شماره تلفن</th>";
                      echo "<th>شماره کیملیک</th>";
                      echo "<th>سال تولد</th>";
                      echo "<th>کد نمایندگی</th>";
                      echo "<th>پاسپورت</th>";
                      echo "<th>عکس</th>";
                      echo "<th>نوع مشتری</th>";
                    //  echo "<th>Actions</th>";
                  echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
          while ($row = $AllCustomers->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $row['CustomerID'] . "</td>";
                echo "<td>" . $row['PassPortNumber'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['FamilyName'] . "</td>";
                echo "<td>" . $row['CellPhoneNumber'] . "</td>";
                echo "<td>" . $row['KimlikNumber'] . "</td>";
                echo "<td>" . $row['BirthYear'] . "</td>";
                echo "<td>" . $row['ParrentID'] . "</td>";
                echo "<td>" . "<img style=\"width:65;height:65;\" src=".$sitePath.$row['PassPortURL'].">" ."</td>";
                echo "<td>" . "<img style=\"width:65;height:65;\" src=".$sitePath.$row['PersonalImageURL'].">" ."</td>";
                echo "<td>" . $row['UserType'] . "</td>";

                //echo "<td>" . "<img style=\"width:65;height:65;\" src=".$row['imageUrl'].">" ."</td>";

                //  echo "<td>" .'<a href="read.php?id='. $row['ProductID'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                //  echo '<a href="update.php?id='. $row['ProductID'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                  //echo '<a href="delete.php?id='. $row['ProductID'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>'. "</td>";
            echo "</tr>";
          //  echo $row['ProductID']." : ".$row['ProductName']." ".$row['Barcode']." ".$row['imageUrl'].$row['ProductType']."</br>";
            //$counter++;
          }
          //echo "</table>";
        //  echo "</div>";
          echo "</div>";
        } else {
            echo "No Customers added Yet";
        }
        //---------------------------------------------------------
        if ($AllUsers->num_rows > 0) {
          echo '<table class="table col-lg-12">';
              echo "<thead>";
                  echo "<tr>";
                      echo "<th>نام کاربر</th>";
                      echo "<th>تیترکاربر</th>";
                      echo "<th>گذرواژه</th>";
                      echo "<th>تایپ یوزر</th>";
                  echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
          while ($row = $AllUsers->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $row['UserName'] . "</td>";
                echo "<td>" . $row['UserTitle'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "<td>" . $row['UserType'] . "</td>";
                echo "</tr>";
                }
          echo "</div>";
        } else {
            echo "No Customers added Yet";
        }

        if ($AllّAgents->num_rows > 0) {
          echo '<table class="table col-lg-12">';
              echo "<thead>";
                  echo "<tr>";
                      echo "<th>کد فروشنده</th>";
                      echo "<th>نام فروشنده</th>";
                      echo "<th>تلفن</th>";
                      echo "<th>درگاه پرداختی</th>";
                      echo "<th>آدرس</th>";
                      echo "<th>عکس</th>";
                  echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
          while ($row = $AllّAgents->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $row['agentID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['CellNumber'] . "</td>";
                echo "<td>" . $row['paymentURL'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                echo "<td>" . "<img style=\"width:65;height:65;\" src=".$sitePath.$row['imageURL'].">" ."</td>";
                echo "</tr>";
                }
          echo "</div>";
        } else {
            echo "No Agents added Yet";
        }

        if ($AllReadyDocs->num_rows > 0) {
          echo '<table class="table col-lg-12">';
              echo "<thead>";
                  echo "<tr>";
                      echo "<th>شماره پرونده</th>";
                      echo "<th>کدفرشنده</th>";
                      echo "<th>راندوو</th>";
                      echo "<th>بیمه</th>";
                      echo "<th>آماده سازی نوتر</th>";
                      echo "<th>پرداخت حق خاک</th>";
                      echo "<th>عکس پرسنلی</th>";
                      echo "<th>وضعیت پرونده</th>";
                  echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
          while ($row = $AllReadyDocs->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $row['docID'] . "</td>";
                echo "<td>" . $row['agentID'] . "</td>";
                echo "<td>" . "<a  href=".$sitePath.$row['randevooURL']."download><img style=\"width:65;height:65;\" src=\"".$sitePath."/images/icons/randevu-Icon.png\">" ."</td>";
                echo "<td>" . "<a  href=".$sitePath.$row['sigortaURL']."download><img style=\"width:65;height:65;\" src=\"".$sitePath."/images/icons/sigorta-Icon.png\">" ."</td>";
                echo "<td>" . $row['noterWantStatus'] . "</td>";
                echo "<td>" . $row['taxpeymentWantStatus'] . "</td>";
                echo "<td>" . $row['personalImageWantStatus'] . "</td>";
                echo "<td>" . $row['documentStatus'] . "</td>";
                echo "</tr>";
                }
          echo "</div>";
        } else {
            echo "No Documents added Yet";
        }

    }

    if (isset($_POST['CustomersCard'])) {
      require_once './db.php';
      $myDB = new Database();
      $AllّAgents = $myDB->fetchAllّAgents();
      echo '<div class="row">';
      echo '<div class="col-lg-12">';

      echo '<div id="make-3D-space">';
        echo '<div id="product-card">';
          echo '<div id="product-front">';
            echo '<div class="shadow"></div>';
            echo '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />';
            echo '<div class="image_overlay"></div>';
            echo '<div id="view_details">View details</div>';
            echo '<div class="stats">';
                echo '<div class="stats-container">';
                    echo '<span class="product_price">$39</span>';
                    echo '<span class="product_name">سام علیک</span>';
                    echo'<p>Mens running shirt</p>';

                    echo '<div class="product-options">';
                    echo '<strong>SIZES</strong>';
                    echo '<span>XS, S, M, L, XL, XXL</span>';
                    echo '<strong>COLORS</strong>';
                    echo '<div class="colors">';
                        echo '<div class="c-blue"><span></span></div>';
                        echo '<div class="c-red"><span></span></div>';
                        echo '<div class="c-white"><span></span></div>';
                        echo '<div class="c-green"><span></span></div>';
                    echo '</div>';
                echo '</div>';
                echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div id="product-back">';
            echo '<div class="shadow"></div>';
            echo '<div id="carousel">';
                echo '<ul>';
                    echo '<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>';
                    echo '<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>';
                    echo '<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>';
                echo '</ul>';
                echo '<div class="arrows-perspective">';
                    echo '<div class="carouselPrev">';
                        echo '<div class="y"></div>';
                        echo '<div class="x"></div>';
                    echo '</div>';
                    echo '<div class="carouselNext">';
                        echo '<div class="y"></div>';
                        echo '<div class="x"></div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div id="flip-back">';
                echo '<div id="cy"></div>';
                echo '<div id="cx"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
echo '</div>';


echo '</div>';
    }


    if (isset($_POST['Login'])) {
        echo "Redirect to login";
        header("Location: ./login.php");
        exit();
    }


}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //echo "GOT<br>";
}

?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Data Base Initialize</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./styles/customersCardsStyle.css">
  <link rel="shortcut icon" href="./images/icons/add.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" style="margin:auto;">
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script  src="./scripts/customersCardsScript.js"></script>
<script src='https://a.kabachnik.info/assets/js/libs/quagga.min.js'></script><script  src="./script.js"></script>

</body>
</html>
