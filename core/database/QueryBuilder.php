<?php

class QueryBuilder {

	protected $pdo;

	public function __construct($pdo) {

		$this->pdo = $pdo;

	}

	public function selectAll($table) {

		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);


	}

	public function insert($table, $parammeters) {

		$sql = sprintf(
			'insert into %s (%s) values (%s)',

			$table, 

			implode(', ', array_keys($parammeters)),

			':'.implode(', :', array_keys($parammeters))
		);

		try {

			$statement = $this->pdo->prepare($sql);

			$statement->execute($parammeters);

		} catch (Exception $e){

			die($e);

		}

		

	}

}

?>