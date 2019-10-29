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
</style>

<div class="halaman">
	<h1 style="color:white">New Album</h1>
	<div class="row">
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
					<h5> Persona - BTS </h5>
					<div class="middle">
						<img src="img/play-button.png" alt="Bitterlove" class="text">
					</div>
				</div>
			</a>
		</div>
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
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "lagu"){
				$('.badan').load('listlagu.php');						
			}
		});					
	});
</script>