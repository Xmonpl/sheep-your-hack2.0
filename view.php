<?php
	include_once("inc/header.php");
	include_once("inc/navbar.php");	
	include_once("utils/utils.php");	
	$poradnik = json_decode(file_get_contents('class/poradniki.json'), true);
?>

 <main style="flex: 1 0 auto;">
    <div class="container">
      <div class="row">
		  <div class="col s12">
			  <h1>Poradnik <?php echo $poradnik[$_GET['v']]['title']; ?></h1>
		  </div>
		  <div class="col s12 m9">
			  <?php
					$v = 1;
				  for ($i = 0; $i <=8; $i++){
					  	
						@$step = $poradnik[$_GET['v']]['steps'][$i];
					  	
					  	if ($step !== null){
							echo('<div class="card-panel cyan darken-1"><h2 style="display:inline-block;color:white;font-size:6rem;margin:0">'.$v.'</h2><p style="width: 70%; color:white;word-wrap: break-word;">'.$step.'</p></div>');
						}
					  	$v++;
					}
			  		if($poradnik[$_GET['v']]['author'] == @$_SESSION['email']){
						echo('<div class="fixed-action-btn">
						  <a class="btn-floating btn-large red">
							<i class="large material-icons">mode_edit</i>
						  </a>
						  <ul>
							<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
							<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
							<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
							<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
						  </ul>
						</div>');
					}
				?>
		     
		  </div>
		  <div class="col s12 m3">
			  <div id="cards">
				  <div class="card-panel cyan darken-1">
					<img src='<?php echo(generateCodeQrImageBase64("http://".$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI'])) ?>' alt="kod qr" class="materialboxed responsive-img">
				  </div>
			   </div>
			  
			  
		  </div>
      </div>
    </div>
  </main>
<?php
	include_once("inc/footer.php");
?>