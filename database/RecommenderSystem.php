<?php


class RecommenderSystem {
	
	function getByAntecedent($antecedent) {
		global $dbh, $schema;
		try {
			$stmt = $dbh->prepare("SELECT consequent FROM modelrecommendations WHERE antecedent = :antecedent");
			$stmt->bindParam(':antecedent', $antecedent, PDO::PARAM_INT);
			$stmt->execute();
			
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			
			return ($result);
		}
		catch(PDOException $e) {
			$_SESSION["s_errors"]["generic"][] = "ERRO[42]: ".$e->getMessage();
			header("Location: list.php");
			die;
		}
	}
}


?>