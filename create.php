<?PHP
include_once("inc/header.php");
include_once("inc/navbar.php");
include_once("utils/utils.php");

if (empty($_SESSION['email']) || empty($_SESSION['name'])){
	header("Location: /syh/login.php");
}
if(!empty($_POST)){
	//$steps
	$newHash = generateRandomString('8');
	$steps = @array($_POST['step-1'],$_POST['step-2'],$_POST['step-3'],$_POST['step-4'],$_POST['step-5'],$_POST['step-6'],$_POST['step-7']);
	
	
	$poradniki = json_decode(file_get_contents('class/poradniki.json'), true);
	$poradniki[$newHash] = array("author"=>$_SESSION['email'], "title"=>$_POST['title'], "views"=> 0, "steps"=>$steps);
	
	file_put_contents("class/poradniki.json", json_encode($poradniki, JSON_PRETTY_PRINT));
	header("Location: /syh/view.php?v=".$newHash);
}

?>
  <main style="flex: 1 0 auto;">
    <div class="container">
      <div class="row">
		  <form method="POST" action="create.php">
       <div class="col s12 m8">
		   <h1>
			   Stwórz nowy poradnik
		   </h1>
		   <div id="cards">
			  <div class="card-panel cyan darken-1">
				  <h2 style="display:inline-block;color:white;font-size:6rem;margin:0">
					  1
				  </h2>
				  <a class="btn-floating btn waves-effect waves-light red accent-4 right" href="javascript:void(0)" id="button"><i class="material-icons">remove</i></a>
				  <input type="hidden" name="step" value="1">
				<textarea name="step-1" style="width: 80%; color:white; border: 2px solid #00acc1;">Krok nr. 1.....</textarea>
			  </div>
		   </div>
		   <a class="btn-floating btn-large waves-effect waves-light green accent-4 right button-test" href="javascript:void(0)" id="button"><i class="material-icons">add</i></a>
		</div>
		  
		  <div class="col s12 m4">
			  <h2>
				  <i class="material-icons medium">settings</i> Ustawienia
			  </h2>
			<div class="card-panel cyan darken-1">
				<div class="input-field col s12">
					<input type="text" name="title" placeholder="Jak skonfigurować MS Teams?" style="color: white;">
					<label style="color: white;">Nazwa poradnika</label>
				</div>
				<div class="switch">
					<span style="color: white;">&nbsp;&nbsp;&nbsp; Prywatny (Premium) 💲&nbsp;&nbsp;&nbsp;</span>
					<label style="color: white;">
					  Off
					  <input type="checkbox" style="color: white;" disabled>
					  <span class="lever" style="color: white;"></span>
					  On
					</label>
				  </div>
			</div>
			  <div class="center">
				<button class="waves-effect waves-light btn-large cyan darken-1" type="submit" text-align="right"><strong>Zapisz 💾</strong></button>
				<button class="waves-effect waves-light btn-large cyan darken-1" type="submit" text-align="right"><strong>Opublikuj 🌐</strong></button> 
			  </div>
		</div>
		</form>
      </div>
		
    </div>
  </main>
<?PHP
include_once("inc/footer.php");
?>
<script>
	var number = 1;
	$(document).ready(function(){
			
			$('a.button-test').on("click", function(e){
				number++;
				if (number > 99){
					alert("Maksymalna ilość kroków wynosi 99 😥");
				}else{
					$("#cards").append($('<div class="card-panel cyan darken-1"><h2 style="display:inline-block;color:white;font-size:6rem;margin:0">' + number + '</h2><a class="btn-floating btn waves-effect waves-light red accent-4 right" href="javascript:void(0)" id="button"><i class="material-icons">remove</i></a><input type="hidden" name="step" value="' + number + '"><textarea name="step-' + number + '" style="width: 80%; color:white; border: 2px solid #00acc1;">Krok nr. ' + number + '....</textarea></div>'));
				}
			});
	});
</script>
