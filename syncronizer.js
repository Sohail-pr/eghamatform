$(document).ready(function(){
setInterval(function(){
    var userGivenNameText=document.getElementById("userGivenName").value;
    var userGivenFamilyNameText=document.getElementById("userGivenFamilyName").value;
    var userGivenFatherNameText=document.getElementById("userGivenFatherName").value;
    var userGivenMotherNameText=document.getElementById("userGivenMotherName").value;
    var userGivenCellPhoneNumberText=document.getElementById("userGivenCellPhoneNumber").value;
    var userGivenBirthYearText=document.getElementById("userGivenBirthYear").value;
    var userGivenAddressText=document.getElementById("userGivenAddress").value;
    var userGivenPassPortNumberText=document.getElementById("userGivenPassportNumber").value;
    var userGivenImageOrder=document.getElementById("magicBtn2").checked;
    var userGivenTaxPayOrder=document.getElementById("magicBtn3").checked;
    var userGivenContractSignedOrder=document.getElementById("magicBtn4").checked;
    if (userGivenImageOrder==true) {
      userGivenImageOrder="بله";
    }else {
      userGivenImageOrder="خیر";
    }
    if (userGivenTaxPayOrder==true) {
      userGivenTaxPayOrder="بله";
    }else {
      userGivenTaxPayOrder="خیر";
    }
    if (userGivenContractSignedOrder==true) {
      userGivenContractSignedOrder="بله";
    }else {
      userGivenContractSignedOrder="خیر";
    }
    document.getElementById("ConfirmNameText").innerHTML = userGivenNameText;
    document.getElementById("ConfirmFamilyNameText").innerHTML =userGivenFamilyNameText;
    document.getElementById("ConfirmFatherNameText").innerHTML =userGivenFatherNameText;
    document.getElementById("ConfirmMotherNameText").innerHTML =userGivenMotherNameText;
    document.getElementById("ConfirmCellPhoneNumberText").innerHTML =userGivenCellPhoneNumberText;
    document.getElementById("ConfirmBirthYearText").innerHTML =userGivenBirthYearText;
    document.getElementById("ConfirmAddressText").innerHTML =userGivenAddressText;
    document.getElementById("ConfirmImageOrder").innerHTML =userGivenImageOrder;
    document.getElementById("ConfirmTaxPayOrder").innerHTML =userGivenTaxPayOrder;
    document.getElementById("ConfirmContractSignedOrder").innerHTML =userGivenContractSignedOrder;
    document.getElementById("ConfirmPassportNumber").innerHTML =userGivenPassPortNumberText;
  }, 1000);
});