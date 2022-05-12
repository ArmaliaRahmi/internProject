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

// sidebar
let sidebar = document.querySelector(".sidebar");
// let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

// closeBtn.addEventListener("click", ()=>{
//   sidebar.classList.toggle("open");
//   menuBtnChange();//calling the function(optional)
// });

// // following are the code to change sidebar button(optional)
// function menuBtnChange() {
//  if(sidebar.classList.contains("open")){
//    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
//  }else {
//    closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
//  }
// }

// charts
//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
      label: "My First dataset",
      data: [65, 59, 80, 81, 56, 55, 40],
      backgroundColor: [
        'rgba(105, 0, 132, .2)',
      ],
      borderColor: [
        'rgba(200, 99, 132, .7)',
      ],
      borderWidth: 2
    },
    {
      label: "My Second dataset",
      data: [28, 48, 40, 19, 86, 27, 90],
      backgroundColor: [
        'rgba(0, 137, 132, .2)',
      ],
      borderColor: [
        'rgba(0, 10, 130, .7)',
      ],
      borderWidth: 2
    }
    ]
  },
  options: {
    responsive: true
  }
});
// polaar
var ctxPA = document.getElementById("polarChart").getContext('2d');
        var myPolarChart = new Chart(ctxPA, {
            type: 'polarArea',
            data: {
            labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: ["rgba(219, 0, 0, 0.1)", "rgba(0, 165, 2, 0.1)", "rgba(255, 195, 15, 0.2)",
                "rgba(55, 59, 66, 0.1)", "rgba(0, 0, 0, 0.3)"
                ],
                hoverBackgroundColor: ["rgba(219, 0, 0, 0.2)", "rgba(0, 165, 2, 0.2)",
                "rgba(255, 195, 15, 0.3)", "rgba(55, 59, 66, 0.1)", "rgba(0, 0, 0, 0.4)"
                ]
            }]
            },
            options: {
            responsive: true
            }
        });