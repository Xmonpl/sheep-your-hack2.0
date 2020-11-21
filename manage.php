<?php
	include_once("inc/header.php");
	include_once("inc/navbar.php");	
	if (empty($_SESSION['email']) || empty($_SESSION['name'])){
		header("Location: /syh/login.php");
	}
?>

 <main style="flex: 1 0 auto;">
    <div class="container">
      <div class="row">
		  <h1>Twoje poradniki</h1>
		  <div class="col s12 m8 offset-m2 l6 offset-l3">
			  <table class="responsive-table">
				  <thead>
					  <tr>
						  <th>Nazwa</th>
						  <th>Wyświetleń</th>
						  <th>Adres URL</th>
						  <th>Zarządzaj</th>
					  </tr>
					</thead>

					<tbody>
					<?php	
						
						$poradnik[$] = json_decode(file_get_contents('class/poradniki.json'), true);
						foreach($value as $poradnik[$])
					?>
					  <tr>
						<td>Alvin</td>
						<td>Eclair</td>
						<td>$0.87</td>
					  </tr>
					  <tr>
						<td>Alan</td>
						<td>Jellybean</td>
						<td>$3.76</td>
					  </tr>
					  <tr>
						<td>Jonathan</td>
						<td>Lollipop</td>
						<td>$7.00</td>
					  </tr>
					</tbody>
			  </table>
		  </div>
      </div>
    </div>
  </main>
<?php
	include_once("inc/footer.php");
?>