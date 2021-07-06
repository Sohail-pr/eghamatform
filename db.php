<?php
class Database
{
    public $servername;
    public $dbName;
    public $username;
    public $password;
    public $port;
    public $conn;
    public $siteAdress;

    function __construct()
    {
        $this->servername = "localhost";
        $this->dbName = "u312411968_ikamet";
        $this->username = "u312411968_ikametuser";
        $this->password = "M3BTiU2@d";
        $this->$siteAdress="https://orginaltoner.com/barcodeScanner";

        $this->port = 3306;
    }
    function Initialize(){
      $this->CreateUsersTable();
      $this->CreatepassportsTable();
      $this->CreatePersonalImagesTable();
      $this->CreateCustomersTable();
      $this->CreateAgentsTable();
      $this->CreateReadyDocsTable();
      //$this->CreateOrdersTable();
      $this->CreateOrdersTable();
    }

    function Connect()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbName, $this->port);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function Disconnect()
    {
        try {
            $this->conn->close();
        }
        catch (Exception $e) {
        }
    }
    function CreateUsersTable()
    {
        $this->Connect();
        static $strSQL = "CREATE TABLE Users (";
        $strSQL .= "UserName VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci  PRIMARY KEY,";
        $strSQL .= "UserTitle VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "Password VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "UserType VARCHAR(3))";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table Users created successfully</br>";
        }
        else {
            echo "Error creating table Users: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }
    function CreateCustomersTable()
    {
        $this->Connect();
        static $strSQL = "CREATE TABLE Customers (";
        $strSQL .= "CustomerID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci  PRIMARY KEY AUTO_INCREMENT,";
        $strSQL .= "PassPortNumber VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "Name VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "FamilyName VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "CellPhoneNumber VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "KimlikNumber VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "BirthYear VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "ParrentID VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "PassPortURL VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "PersonalImageURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "Password VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "UserType VARCHAR(3))";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table Customers created successfully</br>";
        }
        else {
            echo "Error creating table Customers: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }
    function CreateOrdersTableOld()
    {
        static $strSQL = "CREATE TABLE Orders (";
        $strSQL .= "customerID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci  PRIMARY KEY,";
        $strSQL .= "parentID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci,";
        $strSQL .= "dateOfOrder DATE,";
        $strSQL .= "Status BOOLEAN)";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table Orders created successfully</br>";
        }
        else {
            echo "Error creating table Orders: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }
    function CreatepassportsTable()
    {
        $this->Connect();
        static $strSQL = "CREATE TABLE PassPorts (";
        $strSQL .= "passportID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci  PRIMARY KEY,";
        $strSQL .= "passportURL VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL)";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table PassPorts created successfully</br>";
        }
        else {
            echo "Error creating table PassPorts: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }
    function CreateAgentsTable()
    {
        $this->Connect();
        static $strSQL = "CREATE TABLE Agents (";
        $strSQL .= "agentID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci  PRIMARY KEY,";
        $strSQL .= "Name VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "CellNumber VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "paymentURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "Location VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "imageURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci )";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table Agents created successfully</br>";
        }
        else {
            echo "Error creating table Agents: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }
    function CreateReadyDocsTable()
    {
        $this->Connect();
        static $strSQL = "CREATE TABLE ReadyDocs (";
        $strSQL .= "docID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci  PRIMARY KEY,";
        $strSQL .= "agentID VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "randevooURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "sigortaURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL,";
        $strSQL .= "noterWantStatus VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "taxpeymentWantStatus VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "personalImageWantStatus VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "documentStatus VARCHAR(3))";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table ReadyDocs created successfully</br>";
        }
        else {
            echo "Error creating table ReadyDocs: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }
    function CreatePersonalImagesTable()
    {
        $this->Connect();
        static $strSQL = "CREATE TABLE PersonalImages (";
        $strSQL .= "PersonalImageID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci  PRIMARY KEY,";
        $strSQL .= "PersonalImageURL VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_persian_ci  NOT NULL)";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table PersonalImages created successfully</br>";
        }
        else {
            echo "Error creating table PersonalImages: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }



    function CreateOrdersTable()
    {
        $this->Connect();
        static $strSQL = "CREATE TABLE Orders (";
        $strSQL .= "CustomerID INT PRIMARY KEY AUTO_INCREMENT,";
        $strSQL .= "PassPortNumber VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "PaymentReceiptURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "Name VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "FamilyName VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "FatherName VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "MotherName VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "CellPhoneNumber VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "KimlikNumber VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "BirthYear VARCHAR(4) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "ParrentID VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "PersonalImageURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "PassPortURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "EntranceStampImageURL VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "BiometrikFotoRequest VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "TaxPaymentRequest VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "ContractMakeRequest VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "TurkishAddress VARCHAR(115) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "Password VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_persian_ci ,";
        $strSQL .= "UserType VARCHAR(3))";
        if ($this->conn->query($strSQL) === TRUE) {
            echo "Table Orders created successfully</br>";
        }
        else {
            echo "Error creating table Orders: " . $this->conn->error . "<br>";
        }
        $this->Disconnect();
    }

    function InsertUser($UserName,$UserTitle,$Password,$UserType,$reportAsked){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO Users(UserName, UserTitle, Password, UserType)";
        $strSQL .= " VALUES ('";
        //$HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
        $strSQL .=$UserName;
        $strSQL .="','";
        $strSQL .=$UserTitle;
        $strSQL .="','";
        $strSQL .=$Password;
        $strSQL .="','";
        $strSQL .=$UserType;
        $strSQL .="')";
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
            echo "User added : ".$UserName."<br>";
          }else {
            return true;
          }
        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
              echo "Error Adding User : ".$UserName."  :  ".$this->ErrorMessage."<br>";
            }else {
              return false;
            }
        }
    }

    function InsertReadyDocs($docID,$agentID,$randevooURL,$sigortaURL,$noterWantStatus,$taxpeymentWantStatus,$personalImageWantStatus,$documentStatus,$reportAsked){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO ReadyDocs(docID, agentID, randevooURL, sigortaURL, noterWantStatus, taxpeymentWantStatus, personalImageWantStatus, documentStatus)";
        $strSQL .= " VALUES ('";
        //$HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
        $strSQL .=$docID;
        $strSQL .="','";
        $strSQL .=$agentID;
        $strSQL .="','";
        $strSQL .=$randevooURL;
        $strSQL .="','";
        $strSQL .=$sigortaURL;
        $strSQL .="','";
        $strSQL .=$noterWantStatus;
        $strSQL .="','";
        $strSQL .=$taxpeymentWantStatus;
        $strSQL .="','";
        $strSQL .=$personalImageWantStatus;
        $strSQL .="','";
        $strSQL .=$documentStatus;
        $strSQL .="')";
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
            echo "Document added : "."docID : ".$docID."agentID : ".$agentID."randevooURL : ".$randevooURL."sigortaURL : ".$sigortaURL."noterWantStatus : ".$noterWantStatus."taxpeymentWantStatus : ".$taxpeymentWantStatus."personalImageWantStatus : ".$personalImageWantStatus."documentStatus : ".$documentStatus."<br>";
          }else {
            return true;
          }
        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
              echo "Error Document Adding : "."docID : ".$docID."agentID : ".$agentID."randevooURL : ".$randevooURL."sigortaURL : ".$sigortaURL."noterWantStatus : ".$noterWantStatus."taxpeymentWantStatus : ".$taxpeymentWantStatus."personalImageWantStatus : ".$personalImageWantStatus."documentStatus : ".$documentStatus."<br>";
            }else {
              return false;
            }
        }
    }

    function InsertCustomers($CustomerID,$PassPortNumber,$Name,$FamilyName,$CellPhoneNumber,$KimlikNumber,$BirthYear,$ParrentID,$PassPortURL,$PersonalImageURL,$Password,$UserType,$reportAsked){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO Customers(CustomerID, PassPortNumber, Name, FamilyName, CellPhoneNumber, KimlikNumber, BirthYear, ParrentID, PassPortURL, PersonalImageURL, Password, UserType)";
        $strSQL .= " VALUES ('";
        //$HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
        $strSQL .=$CustomerID;
        $strSQL .="','";
        $strSQL .=$PassPortNumber;
        $strSQL .="','";
        $strSQL .=$Name;
        $strSQL .="','";
        $strSQL .=$FamilyName;
        $strSQL .="','";
        $strSQL .=$CellPhoneNumber;
        $strSQL .="','";
        $strSQL .=$KimlikNumber;
        $strSQL .="','";
        $strSQL .=$BirthYear;
        $strSQL .="','";
        $strSQL .=$ParrentID;
        $strSQL .="','";
        $strSQL .=$PassPortURL;
        $strSQL .="','";
        $strSQL .=$PassPortURL;
        $strSQL .="','";
        $strSQL .=$Password;
        $strSQL .="','";
        $strSQL .=$UserType;
        $strSQL .="')";
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
            echo "Customer added : Id: ".$CustomerID." PassPortNumber : ".$PassPortNumber." Name : ".$Name." FamilyName : ".$FamilyName."<br>";
          }else {
            return true;
          }
        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
              echo "Error Customer NOT added : Id: ".$CustomerID." PassPortNumber : ".$PassPortNumber." Name : ".$Name." FamilyName : ".$FamilyName." Error is  :  ".$this->ErrorMessage."<br>";
            }else {
              return false;
            }
        }
    }

    function InsertAgent($agentID,$Name,$CellNumber,$paymentURL,$Location,$imageURL,$reportAsked){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO Agents(agentID, Name, CellNumber,



          , Location, imageURL)";
        $strSQL .= " VALUES ('";
        //$HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
        $strSQL .=$agentID;
        $strSQL .="','";
        $strSQL .=$Name;
        $strSQL .="','";
        $strSQL .=$CellNumber;
        $strSQL .="','";
        $strSQL .=$paymentURL;
        $strSQL .="','";
        $strSQL .=$Location;
        $strSQL .="','";
        $strSQL .=$imageURL;
        $strSQL .="')";
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
            echo "Agent added : ".$Name."<br>";
          }else {
            return true;
          }
        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
              echo "Error Adding : ".$Name."  :  ".$this->ErrorMessage."<br>";
            }else {
              return false;
            }
        }
    }

    function InsertPassPorts($passportID,$passportURL,$reportAsked){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO PassPorts(passportID, passportURL)";
        $strSQL .= " VALUES ('";
        //$HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
        $strSQL .=$passportID;
        $strSQL .="','";
        $strSQL .=$passportURL;
        $strSQL .="')";
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
            echo "Passport added : ".$passportID."<br>";
          }else {
            return true;
          }

        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
              echo "Error Adding Passport : ".$passportID."  :  ".$this->ErrorMessage."<br>";
            }else {
              return false;
            }
        }
    }

    function InsertPersonalImages($PersonalImageID,$PersonalImageURL,$reportAsked){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO PersonalImages(PersonalImageID, PersonalImageURL)";
        $strSQL .= " VALUES ('";
        $strSQL .=$PersonalImageID;
        $strSQL .="','";
        $strSQL .=$PersonalImageURL;
        $strSQL .="')";
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
            echo "PersonalImageID added : ".$PersonalImageID."<br>";
          }else {
            return true;
          }
        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
              echo "Error Adding PersonalImage : ".$PersonalImageID."  :  ".$this->ErrorMessage."<br>";
            }else {
              return false;
            }
        }
    }

    function InsertOrder($PassPortNumber,$PaymentReceiptURL,$Name,$FamilyName,$FatherName,$MotherName,$CellPhoneNumber,$KimlikNumber,$BirthYear,$ParrentID,$PersonalImageURL,$PassPortURL,$EntranceStampImageURL,$biometrikFotoRequest,$TaxPaymentRequest,$contractMakeRequest,$TurkishAddress,$Password,$UserType,$reportAsked){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO Orders(PassPortNumber,PaymentReceiptURL,Name,FamilyName,FatherName,MotherName,CellPhoneNumber,KimlikNumber,BirthYear,ParrentID,PersonalImageURL,PassPortURL,EntranceStampImageURL,biometrikFotoRequest,TaxPaymentRequest,contractMakeRequest,TurkishAddress,Password,UserType)";
        $strSQL .= " VALUES ('";
        $strSQL .=$PassPortNumber;
        $strSQL .="','";
        $strSQL .=$PaymentReceiptURL;
        $strSQL .="','";
        $strSQL .=$Name;
        $strSQL .="','";
        $strSQL .=$FamilyName;
        $strSQL .="','";
        $strSQL .=$FatherName;
        $strSQL .="','";
        $strSQL .=$MotherName;
        $strSQL .="','";
        $strSQL .=$CellPhoneNumber;
        $strSQL .="','";
        $strSQL .=$KimlikNumber;
        $strSQL .="','";
        $strSQL .=$BirthYear;
        $strSQL .="','";
        $strSQL .=$ParrentID;
        $strSQL .="','";
        $strSQL .=$PersonalImageURL;
        $strSQL .="','";
        $strSQL .=$PassPortURL;
        $strSQL .="','";
        $strSQL .=$EntranceStampImageURL;
        $strSQL .="','";
        $strSQL .=$biometrikFotoRequest;
        $strSQL .="','";
        $strSQL .=$TaxPaymentRequest;
        $strSQL .="','";
        $strSQL .=$contractMakeRequest;
        $strSQL .="','";
        $strSQL .=$TurkishAddress;
        $strSQL .="','";
        $strSQL .=$Password;
        $strSQL .="','";
        $strSQL .=$UserType;
        $strSQL .="')";
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
            echo "Order added : ".$Name."  ".$FamilyName."<br>";
          }else {
            return true;
          }
        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            if ($reportAsked==="y"|$reportAsked==="Y"|$reportAsked==="yes"|$reportAsked==="YES") {
              echo "Error Adding Order : ".$Name."  ".$FamilyName."  :  ".$this->ErrorMessage."<br>";
            }else {
              return false;
            }
        }
    }

    function UploadImageAndPdf ($givenFile){
     $file = $givenFile;
     //print_r($file);
     $fileName=$file['name'];
     $fileTMP_Name=$file['tmp_name'];
     $fileSize=$file['size'];
     $fileError=$file['error'];
     $fileType=$file['type'];

     $fileExtention=explode('.',$fileName);
     $fileActualExtention=strtolower(end($fileExtention));
     $allow= array('jpg','jpeg','png','pdf');
     if (in_array($fileActualExtention,$allow)) {
       if ($fileError===0) {
         if ($fileSize<6000000) {
           $fileOnServerName=uniqid('',true).".".$fileActualExtention;
           $fileDestination = 'images/useruploads/'.$fileOnServerName;
           if (move_uploaded_file($fileTMP_Name,$fileDestination)) {
             return $fileDestination;
           }else {
             echo "something went wrong";
           }

         }else {
           echo "The file is too very big =>bigger than 6MB";
         }
       }else {
         echo "There is an error uploading file";
       }
     }else {
       echo "Not supported format";
     }
   }

    public function fetchAllّUsers()
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  Users";
        $results = $myDB->conn->query($strSQL);
        $myDB->Disconnect();
        return $results;
    }
    public function fetchAllّCustomers()
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  Customers";
        $results = $myDB->conn->query($strSQL);
        $myDB->Disconnect();
        return $results;
    }
    public function fetchAllPassPorts()
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  PassPorts";
        $results = $myDB->conn->query($strSQL);
        $myDB->Disconnect();
        return $results;
    }
    public function fetchAllّAgents()
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  Agents";
        $results = $myDB->conn->query($strSQL);
        $myDB->Disconnect();
        return $results;
    }
    public function fetchAllّPersonalImages()
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  PersonalImages";
        $results = $myDB->conn->query($strSQL);
        $myDB->Disconnect();
        return $results;
    }
    public function fetchAllReadyDocs()
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  ReadyDocs";
        $results = $myDB->conn->query($strSQL);
        $myDB->Disconnect();
        return $results;
    }
    public function fetchAllOrders()
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  Orders";
        $results = $myDB->conn->query($strSQL);
        $myDB->Disconnect();
        return $results;
    }

    //------
    public function fetchProductByID($ProductID)
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  Products Where ProductID ='" . $ProductID . "'";

        $result = $myDB->conn->query($strSQL);
        return $result;
        $myDB->Disconnect();
    }
    public function fetchProductByBarcode($ProductBarcode)
    {
        $myDB = new Database();
        $myDB->Connect();

        $strSQL = "Select * From  Products Where Barcode ='" . $ProductBarcode . "'";

        $result = $myDB->conn->query($strSQL);
        return $result;
        $myDB->Disconnect();
    }



    function InsertProduct($Name,$Barcode,$imageUrl,$ProductType){
      //echo "inserting . . . . . .</br>";
        $strSQL = "INSERT INTO Products(ProductName, Barcode, imageUrl, ProductType)";
        $strSQL .= " VALUES ('";
        //$HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
        $strSQL .=$Name;
        $strSQL .="','";
        $strSQL .=$Barcode;
        $strSQL .="','";
        $strSQL .=$imageUrl;
        $strSQL .="','";
        $strSQL .=$ProductType;
        $strSQL .="')";
        //(for sql code "'"+"'" to define string variable: '" + UserTitle +"'  )
        $myDB = new Database();
        $myDB->Connect();
        if ($myDB->conn->query($strSQL) === true) {
            $myDB->Disconnect();
            return true;
        } else {
            $this->ErrorMessage =  $myDB->conn->error . "<br>";
            $myDB->Disconnect();
            return false;
        }
    }







}//class End . . . . . .

 ?>
