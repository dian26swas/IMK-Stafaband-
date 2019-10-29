<html>
<head>
	
	<title>Stafaband</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery-3.4.1.js"></script>
</head>
<body>

<div class="content">
	<header>
		<img class="bg" src="img/stafaband.png" style="width:40%">
	</header>
 
	<div class="menu">
		<ul>
			<li class="active"><a class="klik_menu " id="home">HOME</a></li>
			<li><a class="klik_menu" id="tentang">ALBUM</a></li>
			<li><a class="klik_menu" id="tutorial">SONG</a></li>
			<li><a class="klik_menu" id="sosmed">ARTIST</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
 
	</div>
</div>
</body>
 
<script type="text/javascript">
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var menu = $(this).attr('id');
			if(menu == "home"){
				$('.badan').load('home.php');						
			}else if(menu == "tentang"){
				$('.badan').load('tentang.php');						
			}else if(menu == "tutorial"){
				$('.badan').load('tutorial.php');						
			}else if(menu == "sosmed"){
				$('.badan').load('sosmed.php');						
			} 
		});
 
 
		// halaman yang di load default pertama kali
		$('.badan').load('home.php');						
 
	});

	 $(document).ready(function(){
          $('ul li ').click(function(){
            $('li ').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
 
</html>