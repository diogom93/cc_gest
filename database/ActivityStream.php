<?php

class ActivityStream {
	
	function insert($session, $activity) {
		global $dbh;
		try {
			
			$stmt = $dbh->prepare("INSERT INTO activitystream (session, activity) VALUES (?, ?)");
			$stmt->execute(array($session, $activity));
		}
		catch(PDOException $e) {
			$errmsg = $e->getMessage();
			$errors["generic"] = "ERRO[44]: ".$errmsg;
			return $errors;
		}
	}
}


?>