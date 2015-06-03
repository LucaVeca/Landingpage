<?php
						require_once(__DIR__."/model/config.php");
					?>
<!DOCTYPE html>

<html>
<div class="page">
	<head>
		<link type="text/css" rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Pragati+Narrow' rel='stylesheet' type='text/css'>
		<title></title>
	</head>
	<body>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic' rel='stylesheet' type='text/css'>

<nav class="Quick-navigation">
  <a href="#A" class="Quick-navigation-item">1</a>
  <a href="#B" class="Quick-navigation-item">2</a>
  <a href="#C" class="Quick-navigation-item">3</a>
  <a href="#E" class="Quick-navigation-item">4</a>
  
  <div class="Scroll-progress-indicator"></div>
</nav>

<section id="A" class="js-scroll-step">
  <div class="icon1">
		<div class="text2">PASADENA, CA
			</div>	
			<div width="150px">
			<a href="http://localhost/appacademyapi/index.php"><img class="space" src="images/social122.png" alt="" style="width:24px;height:24px"></a>
			<a href="https://plus.google.com/u/0/108103159754030345023"><img class="space" src="images/google124.png" alt="" style="width:24px;height:24px"></a>
			<a href="https://www.youtube.com/channel/UCGfWzIeWdmXvW621JryfQ3A"><img class="space" src="images/social135.png" alt="" style="width:24px;height:24px"></a>
			<a href="http://localhost/appacademyapi/index.php"><img class="space" src="images/social136.png" alt="" style="width:24px;height:24px"></a>
			<a href="https://instagram.com/wolfgang_13"><img class="space" src="images/instagram19.png" alt="" style="width:24px;height:24px"></a>
			</div>
		</div>
		<center class="name">LUCA VECA<center class="type">WEBSITE DESIGNER | FRONT END DEVELOPER</center></center>
		
		
</section>

<section id="B"  class="js-scroll-step">
  <center class="aboutme">ABOUT ME</center>
		<hr class="line2"w idth="30%">
		<center class="about">
È universalmente riconosciuto che un lettore che osserva il layout di una pagina viene distratto dal contenuto testuale se questo è leggibile. Lo scopo dell’utilizzo del Lorem Ipsum è che offre una normale distribuzione delle lettere (al contrario di quanto avviene se si utilizzano brevi frasi ripetute, ad esempio “testo qui”), apparendo come un normale blocco di testo leggibile. Molti software di impaginazione e di web design utilizzano Lorem Ipsum come testo modello. Molte versioni del testo sono state prodotte negli anni, a volte casualmente, a volte di proposito (ad esempio inserendo passaggi ironici).</center>
</section>

<section id="C" class="js-scroll-step">
		<center class="projects">PROJECTS</center>
		<hr class="line2" color="white" width="30%">
		<div class="set1">
		<a href="http://localhost/appacademyapi/index.php"><img class="spaces" src="images/api.png" alt="" height="240" width="520"></a>
		<a href="http://localhost/todo-list2/todo-list.php"><img src="images/todo.png" alt="" height="240" width="520"></a>
		</div>
		<div class="set2">
		<a href="http://localhost/PHPblog/login.php"><img class="spaces" src="images/blog.png" alt="" height="240" width="520"></a>
		<a href="https://instagram.com/wolfgang_13"><img src="images/insta.png" alt="" height="240" width="520"></a>
		</div>
</section>

<section id="E" class="js-scroll-step">
  		<center class="projects">CONTACT</center>
		<hr class="line2" color="white" width="30%">
  		<div class="contact">
  			<p>Email: lucaveca@gmail.com
  			<p>Phone: 917-680-6642
  			<p>Intagram: @Wolfgang_13
  			<p>Twitter: @lucaveca
  			<p>Tumblr: xxlucavecaxx
  			
  		</div>
  		<!-- Button trigger modal -->
<button type="button" class="btns" data-toggle="modal" data-target="#myModal">
  Your Info
</button>

<!-- Modal -->
<div class="modal fade" id="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Your Info</h4>
      </div>
      <div class="modal-body">
        <form class="register" method="post" action="<?php echo $path . "controller/create-user.php";?> ">
				<div id="name">
					<!-- input box for user's username  -->
					<label for="name">Name: </label>
					<input type="text" name="name" placeholder="John Doe"/>
				</div>
				<div id="number">
					<!-- input box for user's password -->
					<label for="number">Phone: </label>
					<input type="text" name="number" placeholder="(123)-456-7899"/>
				</div>
				<div id="email">
					<!-- input box for user's email -->
					<label for="email">Email: </label>
					<input type="text" name="email" placeholder="john.doe@example.com"/>
				</div>
				<div id="other">
					<!-- input box for user's username  -->
					<label for="other">Other: </label>
					<input type="text" name="other" placeholder="@johndoe"/>
				</div>
				<div>
					<!-- button to submit previous three input values -->
					<button type="submit" class="btn btn-primary btn-lg" id="submitbutton" data-toggle="modal" data-target="#myModal">
						Submit
					</button>
				</div>
			</form>
      </div>
      
    </div>
  </div>
</div></section>

<button class="Scroll-to-top">Scroll To Top</button>
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	</body>
	<!-- <div>Icons made by <a href="http://www.flaticon.com/authors/alessio-atzeni" title="Alessio Atzeni">Alessio Atzeni</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div> 
	<div>Icons made by <a href="http://www.flaticon.com/authors/google" title="Google">Google</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
	<div>Icons made by <a href="http://www.flaticon.com/authors/alessio-atzeni" title="Alessio Atzeni">Alessio Atzeni</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
	<div>Icons made by <a href="http://www.flaticon.com/authors/alessio-atzeni" title="Alessio Atzeni">Alessio Atzeni</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
	<div>Icons made by <a href="http://www.flaticon.com/authors/bogdan-rosu" title="Bogdan Rosu">Bogdan Rosu</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>-->
	</div>
</html>