<?php
//ini_set('display_errors',1); 
//error_reporting(E_ALL);
 
class Centers {


		static function getDestCCByTID($tid) {

							global $dbh;

								// create query skeleton
							try {       
									$stmt = $dbh->prepare("SELECT destino FROM pede WHERE transferenciainterna=:tid;");
											$stmt->bindParam(":tid", $tid);	
											$stmt->execute();
										 
										$result = $stmt->fetch(PDO::FETCH_ASSOC);
								  
								  
								  return $result['destino'];
							}
							catch(PDOException $e) {
							  $_SESSION["s_errors"]["generic"][] = "ERRO[102]: ".$e->getMessage();
							  header("Location: ../index.php");
							  die;
							}
						
						}

		
		static function getOrigCCByTID($tid) {

							global $dbh;

								// create query skeleton
							try {       
									$stmt = $dbh->prepare("SELECT origem FROM providencia WHERE transferenciainterna =:tid;");
											$stmt->bindParam(":tid", $tid);	
											$stmt->execute();
										 
										$result = $stmt->fetch(PDO::FETCH_ASSOC);
								  
								  
								  return $result['origem'];
							}
							catch(PDOException $e) {
							  $_SESSION["s_errors"]["generic"][] = "ERRO[102]: ".$e->getMessage();
							  header("Location: ../index.php");
							  die;
							}
						
						}
		
						

		static function updateBudget($ccid, $saldodisponivel, $saldocativo) {
		    global $dbh;
		    try {


		       	$stmt = $dbh->prepare("UPDATE centrodecustos SET (saldodisponivel,  saldocativo) =  (:saldodisponivel, :saldocativo) WHERE id = :ccid");

				$stmt->bindParam(":ccid", $ccid);
				$stmt->bindParam(":saldodisponivel", $saldodisponivel);
				$stmt->bindParam(":saldocativo", $saldocativo);

				$stmt->execute();

		    }
		    catch(PDOException $e) {
		      $errmsg = $e->getMessage();
		      // parse errmsg
				$_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
				
				header("Location: ../index.php");
				die;
		    }
		  }
		  
		static function updateCaptiveBudget($ccid, $valor) {
			    global $dbh;
			    try {

			       	$stmt = $dbh->prepare("UPDATE centrodecustos SET saldocativo = :valor WHERE id = :ccid");

					$stmt->bindParam(":ccid", $ccid);
					$stmt->bindParam(":valor", $valor);

					$stmt->execute();
					return true;

			    }
			    catch(PDOException $e) {
			      $errmsg = $e->getMessage();
			      // parse errmsg
					$_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
					
					header("Location: ../index.php");
					die;
			    }
			  }

		static function getCCByCID($cid) {

					global $dbh;

						// create query skeleton
					try {       
							$stmt = $dbh->prepare("SELECT cc FROM cabimentacao WHERE cid=:cid;");
									$stmt->bindParam(":cid", $cid);	
									$stmt->execute();
								 
								$result = $stmt->fetch(PDO::FETCH_ASSOC);
						  
						  
						  return $result['cc'];
					}
					catch(PDOException $e) {
					  $_SESSION["s_errors"]["generic"][] = "ERRO[100]: ".$e->getMessage();
					  header("Location: ../index.php");
					  die;
					}
				
				}


		static function getBudgets($ccid) {

			global $dbh;

				// create query skeleton
			try {       
					$stmt = $dbh->prepare("SELECT saldodisponivel, saldocativo FROM centrodecustos WHERE id=:ccid");
							$stmt->bindParam(":ccid", $ccid);	
							$stmt->execute();
						 
						$result = $stmt->fetch(PDO::FETCH_ASSOC);
				  
						extract($result, EXTR_OVERWRITE);
						
						$cc_item = array("saldodisponivel" => $saldodisponivel, "saldocativo" => $saldocativo);
				  
				  return ($cc_item);
			}
			catch(PDOException $e) {
			  $_SESSION["s_errors"]["generic"][] = "ERRO[101]: ".$e->getMessage();
			  header("Location: ../index.php");
			  die;
			}
		
		}


				

		static function getGenericInfoByNif($nif) {

				global $dbh;

				// create query skeleton
			try {       
					$stmt = $dbh->prepare("SELECT id, nome, nomecurto, instituicao, tipo, saldodisponivel, saldocativo FROM centrodecustos WHERE gestor=:nif AND aberto='TRUE'");
				
				
							$stmt->bindParam(":nif", $nif);
				
							$stmt->execute();

						 
							$result = [];

						  // get next row as an array indexed by column name
					  while( $cc_set = $stmt->fetch(PDO::FETCH_ASSOC) )
					  {
						//create elements:
								//assume cc_set is an array, extract all relevant data, make sure to overwrite old stuff:
								//extract makes new variables using column names
								extract($cc_set, EXTR_OVERWRITE);
								
								$saldoautorizado = $saldodisponivel-$saldocativo;
								//format all numbers: from strings to floats with two decimal cases and thousands separated by spaces
								$saldodisponivel = number_format($saldodisponivel, 2, '.', ' ');
								$saldocativo = number_format($saldocativo, 2, '.', ' ');
								$saldoautorizado = number_format($saldoautorizado, 2, '.', ' ');

								$cc_item = array("id" => $id, "nome" => $nome, "nomecurto" => $nomecurto, "instituicao" => $instituicao, "tipo" => $tipo, "saldodisponivel" => $saldodisponivel, "saldocativo" => $saldocativo, "saldoautorizado" => $saldoautorizado);

								$result[] = $cc_item;

					  }
					  return $result;
			}
			catch(PDOException $e) {
			  $_SESSION["s_errors"]["generic"][] = "ERRO[50]: ".$e->getMessage();
			  header("Location: ../index.php");
			  die;
			}
		
		}


				static function getById($id) {
				global $dbh;
				
				try {
				  $stmt = $dbh->prepare("SELECT * FROM centrodecustos WHERE id = :id AND aberto='TRUE'");
				  $stmt->bindParam(':id', $id);
				  $stmt->execute();

										  // get only row as an array indexed by column name
				  $result = $stmt->fetch(PDO::FETCH_ASSOC);
				  
				  extract($result, EXTR_OVERWRITE);
								
						$saldoautorizado = $saldodisponivel-$saldocativo;
						//format all numbers: from strings to floats with two decimal cases and thousands separated by spaces
						$saldodisponivel = number_format($saldodisponivel, 2, '.', ' ');
						$saldocativo = number_format($saldocativo, 2, '.', ' ');
						$saldoautorizado = number_format($saldoautorizado, 2, '.', ' ');
						$orcamento = number_format($orcamento, 2, '.', ' ');

						$cc_item = array("id" => $id, "nome" => $nome, "nomecurto" => $nomecurto, "orcamento" => $orcamento, "instituicao" => $instituicao, "tipo" => $tipo, 'descricao' => $descricao, "saldodisponivel" => $saldodisponivel, "saldocativo" => $saldocativo, "saldoautorizado" => $saldoautorizado, "datainicio" => $datainicio, "datafim" => $datafim, "gestor" => $gestor);
				  
				  return ($cc_item);

				}
				catch(PDOException $e) {
				  $_SESSION["s_errors"]["generic"][] = "ERRO[51]: ".$e->getMessage();
				  header("Location: ../index.php");
				  die;
				}
		  }

		  
		  
			static function getAllCenters($ccid) {
				global $dbh;
				
				try {
				  $stmt = $dbh->prepare("SELECT id, nome, nomecurto, gestor FROM centrodecustos WHERE id <> :ccid AND aberto='TRUE'");
				  $stmt->bindParam(":ccid", $ccid);
				  $stmt->execute();

										  // get only row as an array indexed by column name
				 while( $cc_set = $stmt->fetch(PDO::FETCH_ASSOC) )
				 {
				  
								extract($cc_set, EXTR_OVERWRITE);

								$cc_item = array("id" => $id, "nome" => $nome, "nomecurto" => $nomecurto, "gestor" => $gestor);

								$result[] = $cc_item;

					  }

				 return $result;

				}
				catch(PDOException $e) {
				  $_SESSION["s_errors"]["generic"][] = "ERRO[52]: ".$e->getMessage();
				  header("Location: ../index.php");
				  die;
				}


		  }
		
		static function getOpenCenters() {
				global $dbh;
				
				try {
				  $stmt = $dbh->prepare("SELECT id, nome, nomecurto, gestor FROM centrodecustos WHERE aberto = true;");
				  $stmt->execute();
				  while($cc_set = $stmt->fetch(PDO::FETCH_ASSOC)){
								extract($cc_set, EXTR_OVERWRITE);
								$cc_item = array("id" => $id, "nome" => $nome, "nomecurto" => $nomecurto, "gestor" => $gestor);
								$result[] = $cc_item;
					  }
				 return $result;

				}
				catch(PDOException $e) {
				  $_SESSION["s_errors"]["generic"][] = "ERRO[52]: ".$e->getMessage();
				  header("Location: ../index.php");
				  die;
				}
		  }
		
		static function closeCenter($ccid) {
				global $dbh;
				
				try {
				  $stmt = $dbh->prepare("UPDATE centrodecustos SET aberto = false WHERE id = :id");
				  $stmt->bindParam(":id", $ccid);
				  $stmt->execute();
				  return true;
				}
				catch(PDOException $e) {
				  $_SESSION["s_errors"]["generic"][] = "ERRO[52]: ".$e->getMessage();
				  header("Location: ../index.php");
				  die;
				}
		  }
		  
		  
		  
		static function insert($nome, $nome_curto, $orcamento, $instituicao, $tipo, $saldo_disponivel, $data_inicio, $gestor, $descricao, $saldo_cativo, $data_fim)
		{
				global $dbh;
				try {
						
						$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						
				  $stmt = $dbh->prepare("INSERT INTO centrodecustos (nome, nomecurto, orcamento, instituicao, tipo, saldodisponivel, datainicio, gestor, descricao, saldocativo, datafim) VALUES (:nome, :nomecurto, :orcamento, :instituicao, :tipo, :saldodisponivel, :datainicio, :gestor, :descricao, :saldocativo, :datafim) RETURNING id");
				  
						$stmt->bindParam(":nome", $nome);
						$stmt->bindParam(":nomecurto", $nome_curto);
						$stmt->bindParam(":orcamento", $orcamento);
						$stmt->bindParam(":instituicao", $instituicao);
						$stmt->bindParam(":tipo", $tipo);
						$stmt->bindParam(":saldodisponivel", $saldo_disponivel);
						
						if($data_inicio == null)
								$data_inicio = "now()";
						
						$stmt->bindParam(":datainicio", $data_inicio);
								
						$stmt->bindParam(":gestor", $gestor);
						
						$stmt->bindParam(":descricao", $descricao);
								
						if($saldo_cativo  == null)
								$saldo_cativo = 0;
								
						$stmt->bindParam(":saldocativo", $saldo_cativo);
						
						$stmt->bindParam(":datafim", $data_fim);
						
				  
				  $stmt->execute();
				  
				  $cc_id = $stmt->fetch(PDO::FETCH_ASSOC);
						
						return $cc_id['id'];

				}
				catch(PDOException $e) {
				  $errmsg = $e->getMessage();
				  // parse errmsg
					 //if (strpos($errmsg, 'pessoa_email_fkey')) 
						//$_SESSION["s_errors"]["generic"] = "O endereço de e-mail introduzido já existe!";
				  //else
						$_SESSION["s_errors"]["generic"][] = "ERRO[34]: ".$errmsg;
				
						return false;

				}
				
				
				
		  }
		  
		  
		  // delete user
  static function deleteAllCentersByNif($nif) {
	global $dbh;
	try {
	  $sql = "DELETE FROM centrodecustos WHERE gestor = :nif";
	  $stmt = $dbh->prepare($sql);
	  $stmt->bindParam(':nif', $nif);
	  $stmt->execute();
	  //$count = $stmt->rowCount();
	}
	catch(PDOException $e) {
	  $_SESSION["s_errors"]["generic"][] = "ERRO[35]: ".$e->getMessage();
	  header("Location: index.php");
	  die;
	}
  }
  
  static function insertPeriod($nome, $nome_curto, $orcamento, $instituicao, $tipo, $saldo_disponivel, $data_inicio, $gestor, $descricao, $saldo_cativo, $data_fim)
		{
				global $dbh;
				try {
						
						$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						
				  $stmt = $dbh->prepare("INSERT INTO centrodecustos (nome, nomecurto, orcamento, instituicao, tipo, saldodisponivel, datainicio, gestor, descricao, saldocativo, datafim) VALUES (:nome, :nomecurto, :orcamento, :instituicao, :tipo, :saldodisponivel, :datainicio, :gestor, :descricao, :saldocativo, :datafim)");
				  
						$stmt->bindParam(":nome", $nome);
						$stmt->bindParam(":nomecurto", $nome_curto);
						$stmt->bindParam(":orcamento", $orcamento);
						$stmt->bindParam(":instituicao", $instituicao);
						$stmt->bindParam(":tipo", $tipo);
						$stmt->bindParam(":saldodisponivel", $saldo_disponivel);
						
						if($data_inicio == null)
								$data_inicio = "now()";
						
						$stmt->bindParam(":datainicio", $data_inicio);
								
						$stmt->bindParam(":gestor", $gestor);
						
						if($descricao  == null)
								$descricao = "NULL";    
						
						$stmt->bindParam(":descricao", $descricao);
								
						if($saldo_cativo  == null)
								$saldo_cativo = 0;
								
						$stmt->bindParam(":saldocativo", $saldo_cativo);
						
						if($data_fim  == null)
								$data_fim = null;
						
						$stmt->bindParam(":datafim", $data_fim);
						
				  
				  $stmt->execute();

				}
				catch(PDOException $e) {
				  $errmsg = $e->getMessage();
				  // parse errmsg
					 if (strpos($errmsg, 'pessoa_email_fkey')) 
						$_SESSION["s_errors"]["uuser"] = "O endereço de e-mail introduzido já existe!";
				  else
						$_SESSION["s_errors"]["generic"] = "ERRO[34]: ".$errmsg;
				
				header("Location: register.php");
				die;
				}
		  }

		  
		static function getAllRequests($id) {
	global $dbh;

	try {
		$stmt = $dbh->prepare("SELECT
																		Cabimentacao.cid as ID,
																		Cabimentacao.valor as Valor,
																		Cabimentacao.cc as CC,
																		Cabimentacao.datapedido as Data,
																		'C' as Tipo,
																		Cabimentacao.estado as Estado
																FROM  Cabimentacao
																WHERE Cabimentacao.cc = :id
																UNION
																SELECT
																		TransferenciaInterna.eid as ID,
																		TransferenciaInterna.valor as Valor,
																		Pede.destino as CC,
																		Pede.data as Data,
																		'TI' as Tipo,
																		Providencia.estado as Estado
																FROM TransferenciaInterna
																		JOIN Pede
																				ON TransferenciaInterna.eid = Pede.transferenciainterna
																		JOIN Providencia
																				ON TransferenciaInterna.eid = Providencia.transferenciainterna
																WHERE Pede.destino= :id;");
		
				$stmt->bindParam(':id', $id);
		
		$stmt->execute();
		// get next row as an array indexed by column name
		

		while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
				{
					//create elements:
					//assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
					
					extract($table_row, EXTR_OVERWRITE);
					
					$valor = number_format($valor, 2, '.', ' ');

					$tab_item = array("ID" => $id, "Valor" => $valor, "CC" => $cc, "Data" => $data, "Tipo" => $tipo, "Estado" => $estado);


					$result[] = $tab_item;
				}


		return ($result);

	}
	catch(PDOException $e) {
		$_SESSION["s_errors"]["generic"][] = "ERRO[20]: ".$e->getMessage();
		header("Location: ../index.php");
		die;
	}
  }
  
  
  
  static function getPendingRequests($id) {
	global $dbh;

	try {
		$stmt = $dbh->prepare("SELECT
																		Cabimentacao.cid as ID,
																		Cabimentacao.valor as Valor,
																		Cabimentacao.cc as CC,
																		Cabimentacao.datapedido as Data,
																		'C' as Tipo,
																		Cabimentacao.estado as Estado
																FROM  Cabimentacao
																WHERE estado='Em Análise' AND Cabimentacao.cc = :id
																UNION
																SELECT
																		TransferenciaInterna.eid as ID,
																		TransferenciaInterna.valor as Valor,
																		Pede.destino as CC,
																		Pede.data as Data,
																		'TI' as Tipo,
																		Providencia.estado as Estado
																FROM TransferenciaInterna
																		JOIN Pede
																				ON TransferenciaInterna.eid = Pede.transferenciainterna
																		JOIN Providencia
																				ON TransferenciaInterna.eid = Providencia.transferenciainterna
																WHERE Pede.destino= :id AND (Providencia.estado = 'Pendente' OR Providencia.estado = 'Em Análise');");
		
				$stmt->bindParam(':id', $id);
		
		$stmt->execute();
		// get next row as an array indexed by column name
		

		while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
				{
					//create elements:
					//assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
					
					extract($table_row, EXTR_OVERWRITE);
					
					$valor = number_format($valor, 2, '.', ' ');

					$tab_item = array("ID" => $id, "Valor" => $valor, "CC" => $cc, "Data" => $data, "Tipo" => $tipo, "Estado" => $estado);


					$result[] = $tab_item;
				}


		return ($result);

	}
	catch(PDOException $e) {
		$_SESSION["s_errors"]["generic"][] = "ERRO[20]: ".$e->getMessage();
		header("Location: ../index.php");
		die;
	}
  }

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
	<title></title>
</head>

<body>
</body>
</html>
