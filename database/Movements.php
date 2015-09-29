<?php
	class Movements {
		static function getAllMovements(){
			global $dbh;
			
			try {
				$stmt = $dbh->prepare("SELECT * FROM movimento");
				$stmt->execute(); 
				while($table_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					extract($table_row, EXTR_OVERWRITE);
				 	$valor = number_format($valor, 2, '.', ' ');
					$tab_item = array("ID" => $mid, "Valor" => $valor, "Ben" => $instituicaobeneficiaria, "Tipo" => $tipo, "Cab" => $cabimentacao, "Data" => $data);
					$result[] = $tab_item;
				}
				
				return $result;
				
			} catch(PDOException $e) {
				$_SESSION["s_errors"]["generic"][] = "ERRO[41]: ".$e->getMessage();
				header("Location: ../main/index.php");
				die;
			}
		}
		
		static function getAllMovements2(){
			global $dbh;
			
			try {
				$stmt = $dbh->prepare("SELECT movimento.mid, movimento.valor, movimento.instituicaobeneficiaria, movimento.tipo, movimento.cabimentacao, movimento.data, cabimentacao.cc as CC FROM movimento
										JOIN cabimentacao
										ON cabimentacao.cid = movimento.cabimentacao");
				$stmt->execute(); 
				while($table_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					extract($table_row, EXTR_OVERWRITE);
				 	$valor = number_format($valor, 2, '.', ' ');
					$tab_item = array("ID" => $mid, "Valor" => $valor, "Ben" => $instituicaobeneficiaria, "Tipo" => $tipo, "Cab" => $cabimentacao, "Data" => $data, "CC" => $cc);
					$result[] = $tab_item;
				}
				
				return $result;
				
			} catch(PDOException $e) {
				$_SESSION["s_errors"]["generic"][] = "ERRO[41]: ".$e->getMessage();
				header("Location: ../main/index.php");
				die;
			}
		}
		
		static function getMovementValue($mid) {
			global $dbh;
			try {
				$stmt = $dbh->prepare("SELECT valor FROM movimento WHERE mid=:mid");
				$stmt->bindParam(":mid", $mid);
			  	$stmt->execute();
				
				$table_row = $stmt->fetch(PDO::FETCH_ASSOC);
				$table_row = array("valor" => $valor);
				
				return ($table_row);
			} catch(PDOException $e) {
					$errmsg = $e->getMessage();
					// parse errmsg
				$_SESSION["s_errors"]["generic"] = "ERRO[163]: ".$errmsg;
					return false;
			}
		}
		
		
		static function getTotalSpentForCab($cid)
		{
			global $dbh;
			try {
				$stmt = $dbh->prepare("SELECT
										movimento.valor
									  FROM movimento
									  JOIN cabimentacao
									   ON movimento.cabimentacao = cabimentacao.cid
									  
									  WHERE cid = :cid");
				$stmt->bindParam(":cid", $cid);
			  	$stmt->execute();
				
				$total_spent = 0;
				while($table_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					
					$total_spent += $table_row['valor'];
				}
				
				return $total_spent;
			
			
			} catch(PDOException $e) {
					$errmsg = $e->getMessage();
					// parse errmsg
				$_SESSION["s_errors"]["generic"] = "ERRO[163]: ".$errmsg;
					return false;
			}
		}
		
		static function get_NONReimbursed_SpentForCab($cid)
		{
			global $dbh;
			try {
				$stmt = $dbh->prepare("SELECT
										movimento.valor
									  FROM movimento
									  JOIN cabimentacao
									   ON movimento.cabimentacao = cabimentacao.cid
									  JOIN suporta
										ON movimento.mid = suporta.movimento
									  
									  WHERE cid = :cid and reembolsado = FALSE");
				$stmt->bindParam(":cid", $cid);
			  	$stmt->execute();
				
				$total_missing = 0;
				while($table_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					
					$total_missing += $table_row['valor'];
				}
				
				return $total_missing;
			
			
			} catch(PDOException $e) {
					$errmsg = $e->getMessage();
					// parse errmsg
				$_SESSION["s_errors"]["generic"] = "ERRO[163]: ".$errmsg;
					return false;
			}
		}
		
		
		static function getMovementInfo($mid) {
			global $dbh;
			try {
				$stmt = $dbh->prepare("SELECT
										*
									  FROM movimento
									  JOIN beneficia
										ON movimento.mid = beneficia.movimento
									  WHERE movimento.mid = :mid");
				$stmt->bindParam(":mid", $mid);
			  	$stmt->execute();
				
				$table_row = $stmt->fetch(PDO::FETCH_ASSOC);
				
				return ($table_row);
			} catch(PDOException $e) {
					$errmsg = $e->getMessage();
					// parse errmsg
				$_SESSION["s_errors"]["generic"] = "ERRO[163]: ".$errmsg;
					return false;
			}
		}
		
		static function getRMovementAdditionalInfo($mid) {
			global $dbh;
			try {
				$stmt = $dbh->prepare("SELECT
										*
									  FROM suporta
									  WHERE movimento = :mid");
				$stmt->bindParam(":mid", $mid);
			  	$stmt->execute();
				
				$table_row = $stmt->fetch(PDO::FETCH_ASSOC);
				
				return ($table_row);
			} catch(PDOException $e) {
					$errmsg = $e->getMessage();
					// parse errmsg
				$_SESSION["s_errors"]["generic"] = "ERRO[163]: ".$errmsg;
					return false;
			}
		}
	}
?>