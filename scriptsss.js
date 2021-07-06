//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

	$(function(){
	$("#personalimage-fileupload").change(function(event) {
		var x = URL.createObjectURL(event.target.files[0]);
		var ext = $('#personalimage-fileupload').val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
			$("#personalimage-upload-img").attr("src","./images/file-upload-logo.png");
			$("#confirmPersonalImage-upload-img").attr("src","./images/file-upload-logo.png");
		}else{
			$("#personalimage-upload-img").attr("src",x);
			$("#confirmPersonalImage-upload-img").attr("src",x);
		}
	});
  });
  $(function(){
	$("#passport-fileupload").change(function(event) {
		var x = URL.createObjectURL(event.target.files[0]);
		var ext = $('#passport-fileupload').val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
			$("#passport-upload-img").attr("src","./images/file-upload-logo.png");
			$("#confirnpassport-upload-img").attr("src","./images/file-upload-logo.png");
		}else{
			$("#passport-upload-img").attr("src",x);
			$("#confirnpassport-upload-img").attr("src",x);
		}
	});
  });
  $(function(){
	$("#entrascestamp-fileupload").change(function(event) {
		var x = URL.createObjectURL(event.target.files[0]);
		var ext = $('#entrascestamp-fileupload').val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
			$("#entrasceStamp-upload-img").attr("src","./images/file-upload-logo.png");
			$("#confirmentrasceStamp-upload-img").attr("src","./images/file-upload-logo.png");
		}else{
			$("#entrasceStamp-upload-img").attr("src",x);
			$("#confirmentrasceStamp-upload-img").attr("src",x);
		}
	});
  });
  $(function(){
	$("#PaymentReceipt-fileupload").change(function(event) {
		var x = URL.createObjectURL(event.target.files[0]);
		var ext = $('#PaymentReceipt-fileupload').val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
			$("#PaymentReceipt-upload-img").attr("src","./images/file-upload-logo.png");
			$("#confirmPaymentReceipt-upload-img").attr("src","./images/file-upload-logo.png");
		}else{
			$("#PaymentReceipt-upload-img").attr("src",x);
			$("#confirmPaymentReceipt-upload-img").attr("src",x);
		}
	});
  });

  $(".userInputTextControl").keypress(function(event){
	var ew = event.which;
	if(ew == 32)
		return true;
	if(48 <= ew && ew <= 57)
		return true;
	if(65 <= ew && ew <= 90)
		return true;
	if(97 <= ew && ew <= 122)
		return true;
		else {
			alert("کیبوررد را انگلیسی کنید");
			return false;
		}

});
$(":input").inputmask();
$("#userGivenCellPhoneNumber").inputmask({"mask": "(999) 999-9999"});


$("#userGivenBirthYear").keypress(insurencePriceAjax());
function insurencePriceAjax(){
	setInterval(() => {
		var userGivenBirthYearText = document.getElementById('userGivenBirthYear').value;
		userGivenBirthYearText = userGivenBirthYearText.replace(/\s/g, '');
		userGivenBirthYearText=Number(userGivenBirthYearText);
		if(userGivenBirthYearText>1940 && userGivenBirthYearText<2021){
			$("#insurance-price").fadeIn();
	  $.ajax({
		  url:'./insuranceprice.php',
		  type:'POST',
		  data:{ajaxAskedBirth:userGivenBirthYearText,ajaxAskedDiscount:'0'},
		  success: function(data_recived){
		  insurancePrice = data_recived;
		  document.getElementById("insurance-price").innerHTML = "قیمت بیمه شما : "+" ₺ "+data_recived;

		  }
		});}

	}, 1000);
}
