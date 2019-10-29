<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
.container {
  position: relative;
}

.image {
  opacity: 1;
	display: block;
	
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  padding: 16px 32px;
  width : 300px ;
}



.filterDiv {
  float: left;
  width: 30%;
  padding: 5px;
  color: #ffffff;
 
  height: auto;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<div class="halaman">
	<h1 style="color:white">New Song</h1>
	<input id="myInput" type="text" placeholder="Search..">

  <div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('cars')"> Video</button>
  <button class="btn" onclick="filterSelection('animals')"> Song</button>
  
</div>

<div class="container">
  <div class="filterDiv cars"><div class="container">
  <a href = "#" class="klik_menu" id="video">
					<img src="img/bitterlove.jpg" alt="Bitterlove" class="image" style="width:100%">
					<h5> Bitterlove - Ardhito Pramono </h5>
					<div class="middle">
						<img src="img/play-button.png" alt="Bitterlove" style="width:25%"class="text">
					</div>
				</div></div>
 
  <div class="filterDiv animals"><div class="container">
  <a href = "#" class="klik_menu" id="lagu">
					<img src="img/persona.png" alt="Bitterlove" class="image" style="width:100%">
					<h5> Boy with luv - BTS </h5>
					<div class="middle">
						<img src="img/play-button.png" style="width:25%"calt="Bitterlove" class="text">
					</div>
				</div></div>
 


 
</div>


	<!-- <div class="row">
  		<div class="column">
		  	<a href = "#" class="klik_menu" id="lagu">
			  <div class="container">
					<img src="img/bitterlove.jpg" alt="Bitterlove" class="image" style="width:100%">
					<h5> Bitterlove - Ardhito Pramono </h5>
					<div class="middle">
						<img src="img/play-button.png" alt="Bitterlove" class="text">
					</div>
				</div>
			</a>
		</div>
		<div class="column">
			<a href = "#" class="klik_menu" id="lagu">
				<div class="container">
					<img src="img/persona.png" alt="Bitterlove" class="image" style="width:100%">
					<h5> Boy with luv - BTS </h5>
					<div class="middle">
						<img src="img/play-button.png" alt="Bitterlove" class="text">
					</div>
				</div>
			</a>
		</div>
		<div class="column">
			<a href = "#" class="klik_menu" id="lagu">
				<div class="container">
					<img src="img/persona.png" alt="Bitterlove" class="image" style="width:100%">
					<h5> Dionysus - BTS </h5>
					<div class="middle">
						<img src="img/play-button.png" alt="Bitterlove" class="text">
					</div>
				</div>
			</a>
		</div>
		 -->


<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "lagu"){
				$('.badan').load('songDescription.php');						
			}
		});					
	});
  $(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "video"){
				$('.badan').load('videoDescription.php');						
			}
		});					
	});

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".container *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>