
<?PHP
include_once("inc/header.php");
include_once("inc/navbar.php");
?>
  <main style="flex: 1 0 auto;">
    <div class="container">
      <div class="row">
		  <div class="row">
			 <div class="col s7 push-s5">
				<form method="post" id="login" action="login_.php"> 
					<span>Adres e-mail:</span>
					<input type="text" name="email" id="email" /> 
					<br/> 
					<span>Hasło:</span>
					<input type="password" name="password" id="password"/> 
					<br/>
					<button type="submit">Zaloguj!</button>
					<a class="btn-floating btn-small waves-effect waves-light" style="background-color:#1877F2" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=17542022141488529&kid_directed_site=0&app_id=1754202214188529&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.8%2Fdialog%2Foauth%3Fresponse_type%3Dcode%26client_id%3D1754202251488529%26scope%3Demail%2B%2Bpublic_profile%26redirect_uri%3Dhttps%253A%252F%252Fwww.zobaczjak.pl%252Fconnect%252Fcheck-facebook%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Ddf398c58-f683-4198-b409-0bffe0debe9c%26shared_id%3DTODO_SHARED_ID%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.zobaczjak.pl%2Fconnect%2Fcheck-facebook%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%23_%3D_&display=page&locale=pl_PL&pl_dbl=0" target="_blank"><i class="fab fa-facebook"></i></a>
					<a href="/syh/register.php">Zarejestruj!</a>
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
				url: 'class/login_.php',
				data: $(this).serialize(),
				success: function (date){
					if (date === "true"){
						window.location = 'index.php';
					}else{
						//alert(date);
						alert('Nie prawidłowe dane!');
					}
				}
			});
		});
	});
</script>
