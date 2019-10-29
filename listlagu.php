
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="halaman">
    <h2 style="color: white">ARTIST / LIST LAGU</h2>
    <div  class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <img src="img/persona.png" alt="Bitterlove" class="image" style="width:10%">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"style="background-color:coral"> <h3> Persona </h3></a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="list-group">
              <a href="#" class="list-group-item klik_menu" id ="lagu1">Boy with luv</a>
              <a href="#" class="list-group-item klik_menu" id ="lagu1">Bitterlove</a>
            </div>
          </div>
        </div>

    <!-- <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> <h3> ALBUM 2 </h3></a>
        </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
        <div class="list-group">
            <a href="" class="list-group-item">Bitterlove</a>
            <a href="" class="list-group-item">Bitterlove</a>
            <a href="" class="list-group-item">Bitterlove</a>
            <a href="" class="list-group-item">Bitterlove</a>
        </div>
        </div>
    </div>

</div> -->

<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "lagu1"){
				$('.badan').load('songDescription.php');						
			}
		});					
	});
</script>
