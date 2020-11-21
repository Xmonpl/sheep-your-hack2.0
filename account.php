<?php
	include_once("inc/header.php");
	include_once("inc/navbar.php");	
	include_once("utils/utils.php");	
	if (empty($_SESSION['email']) || empty($_SESSION['name'])){
		header("Location: /syh/login.php");
	}
?>

 <main style="flex: 1 0 auto;">
    <div class="container">
      <div class="row">
		  <h1>Zarządzaj kontem</h1>
		  <div class="col s12 m8 offset-m2 l6 offset-l3">
			  <div class="card-panel grey lighten-3">
				<div class="row valign-wrapper">
					<div class="col 2">
					<img src='<?php echo(get_gravatar($_SESSION['email'], 250, 'mp', 'g', false, array())); ?>' alt="" class="circle responsive-img">
					</div>
					<h2>
						<?php echo($_SESSION['name']);?>
					</h2>
					<div class="col s10">
					<a class="waves-effect waves-light btn" href="/panel?account" text-align="right">Konto</a><br>
						<p></p>
					<a class="waves-effect waves-light btn" href="!#" text-align="right">Treści</a><br>
						<p></p>
					<a class="waves-effect waves-light btn" href="?logout=1" text-align="right">Logout</a><br>
					</div>
			  </div>
		  </div>
      </div>
    </div>
		
	<div>
		<form method="POST" action="account.php">
		 	<p>
				Edytuj Profil
			</p>
			<div class="row">
				<div class="input-field col m4 s12">
					<i class="material-icons prefix">face</i>
					<input name="nickname" id="nickname" type="text"  data-position="top"  required="" value='<?php echo($_SESSION['name']); ?>'>
					<label for="nickname" class="active">Imię i nazwisko</label>
				</div>
				<div class="input-field col m4 s12">
					<i class="material-icons prefix">email</i>
					<input name="realname" id="realname" type="text" class="validate" required="" value='<?php echo($_SESSION['email']); ?>'>
					<label for="realname" class="active">E-mail</label>
				</div>
				
			</div>
		</form>
	</div>
		
  </main>
<?php
	include_once("inc/footer.php");
?>