<?php
include 'controlers/connexion.php';
include 'controlers/date.php';
EstConnecte();

include 'views/headerComplet.php';
include 'models/dbFormation.php';

$formationEmploye = RechercheFormationUtilisateur(ObtenirIdEnCours());


?>
<div id="principal">
	<h2>Vos formations</h2>
	<table>
		<thead><tr><td>Titre</td><td>Date </td><td>Durée</td><td>Etat</td></tr></thead>
		<?php
			foreach($formationEmploye as $uneFormation)
			{

				echo "<tr>";
				echo "<td>$uneFormation->titre </td>";
				echo "<td class='date'>".AfficherDateComplete($uneFormation->date)."</td>";
				echo "<td class='duree'>$uneFormation->duree</td>";
				echo "<td>$uneFormation->etat</td>";
				echo "</tr>"; 
			}
		?>
	</table>
</div>


<?php 
include 'views/sideBar.php';
include 'views/footer.php';
