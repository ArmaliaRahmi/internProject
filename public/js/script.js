// Service group
function selectAnswer() {
//get the selected value from the dropdown list
var mylist = document.getElementById("sgAns");
var result = mylist.options[mylist.selectedIndex].text;
  if (result == 'Shared') {
	document.getElementById("FAQ").disabled = false;
  	document.getElementById("Transactional").disabled = true;
  } else if (result == 'Dedicated') {
  	document.getElementById("FAQ").disabled = false;
  	document.getElementById("Transactional").disabled = false;
  } else{
	document.getElementById("FAQ").disabled = false;
	document.getElementById("Transactional").disabled = false;
  }
}

// Channel
function checkAnswer() {
    //disable all the radio button 
	document.getElementById("custom").hidden = true;
	
    //get the value if checkbox is checked
    var dev = document.getElementById("ssAns").checked;
    if (dev == true) {
	//enable all the radio button
  	  document.getElementById("custom").hidden = false;

   }
}

//password
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

// captcha
$('.reload').click(function () {
  $.ajax({
      type: 'GET',
      url: 'reload-captcha',
      success: function (data) {
          $(".captcha span").html(data.captcha);
      }
  });
});
// Data Picker
// $('.datepicker').datepicker({
//   inline: true
// });

