
<?PHP
include_once("inc/header.php");
include_once("inc/navbar.php");
?>
  <main style="flex: 1 0 auto;">
    <div class="container">
      <div class="row">
		  <div class="row">
			 <div class="col s7 push-s5">
				<form method="post" id="login" action="register_.php"> 
					<span>Adres e-mail:</span>
					<input type="text" name="email" id="email" /> 
					<br/> 
					<span>Imię i nazwisko:</span>
					<input type="text" name="name" id="name" /> 
					<br/> 
					<span>Hasło:</span>
					<input type="password" name="password" id="password"/> 
					<br/>
					<button type="submit">Zarejestruj!</button>
				</form>
		  	</div>
      		<div class="col s5 pull-s7"><span class="flow-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></div>
    	</div>
      </div>
    </div>
  </main>
<?PHP
include_once("inc/footer.php");
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#login').submit(function(e){
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: 'class/register_.php',
				data: $(this).serialize(),
				success: function (date){
					if (date === "true"){
						window.location = 'account.php';
					}else{
						alert('Taki email już istnieje -_-');
					}
				}
			});
		});
	});
</script>
