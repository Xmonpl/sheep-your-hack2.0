<?PHP 
	session_start();
	$logged = isset($_SESSION['email']);
	if(@$_GET['logout']){
		session_destroy();
		session_unset();
		header('Location: /syh/index.php'); 
	}
?>
<body style="font-family: 'Roboto', sans-serif; display: flex; min-height: 100vh; flex-direction: column;">
  <nav>
    <div class="nav-wrapper" style="background-color: #0eb186">
      <div class="container">
        <a href="/syh/" class="brand-logo" style="font-weight:bold"><img src="img/logo.png" alt="Logo zobaczjak.pl" height="64" style="vertical-align:-30%"> ZobaczJak.pl</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		  <div class="input-field inline col s6" style="margin-left: 360px">
			  <input type="text">
			  <label style="color: white;">Wyszukaj</label>
			</div>
		  <a class="btn-floating btn waves-effect waves-light green accent-4" href="javascript:void(0)"><i class="material-icons">search</i> a</a>
        <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn green accent-4" href="create.php"><i class="material-icons left">add_circle</i>STWÓRZ NOWY</a></li>
			  <?PHP
				if($logged){
					echo('<li><a class="dropdown-trigger" href="#!" data-target="account"><i class="material-icons left">account_circle</i>Witaj '.$_SESSION['email'].'</a></li>');
				}else{
					echo('<li><a href="login.php"><i class="material-icons left">account_circle</i>Zaloguj się</a></li>');
				}
			  ?>
				  
        </ul>
      </div>
    </div>
  </nav> 
  <ul class="sidenav" id="mobile-demo">
			  <?PHP
				if($logged){
					echo('<li><a class="dropdown-trigger" href="#!" data-target="account2"><i class="material-icons left">account_circle</i>Witaj '.$_SESSION['email'].'</a></li>');
				}else{
					echo('<li><a href="login.php"><i class="material-icons left">account_circle</i>Zaloguj się</a></li>');
				}
			  ?>
	<?PHP if($logged){ ?>
	<li><a href="manage.php">Moje poradniki</a></li>
	<li class="divider"></li>
	<li><a href="account.php">Moje Konto</a></li>
	<li class="divider"></li>
  <li><a href="?logout=1">Wyloguj</a></li>
  
<?PHP } ?>
	  <li><a class="waves-effect waves-light btn green accent-4" href="create.php"><i class="material-icons left">add_circle</i>STWÓRZ NOWY</a></li>
  </ul>
<ul id="account" class="dropdown-content">
	<?PHP if($logged){ ?>
	<li><a href="manage.php">Moje poradniki</a></li>
	<li class="divider"></li>
	<li><a href="account.php">Moje Konto</a></li>
	<li class="divider"></li>
  <li><a href="?logout=1">Wyloguj</a></li>
  
<?PHP } ?>
</ul>

	