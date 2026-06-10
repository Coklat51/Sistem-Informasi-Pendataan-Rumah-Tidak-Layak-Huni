<?php if(!defined('AFISYNTAX')) die('Access Denied');?>
<?php
class lahir{
	private $conn='';
	public function ngeces($db_user = NULL, $db_name = NULL, $db_pass = NULL, $db_host = NULL){
			$this->conn 		= new mysqli($db_host,$db_user,$db_pass,$db_name); 
		switch(TRUE){
			case $this->conn->connect_error:
				exit ('<h1 align="center">WEBSITE SEDANG DALAM PROSES PERBAIKAN (MAIN TENIS)</h1><br>
					   <img src="images/default/maintenis.gif" 
					   style="margin-left:auto; margin-right:auto; width:100%"/>');
			break;
		};
	}
	public function kueri($sql){
		$data 			  	  = $this->conn->query($sql);
		return $data;
	}
	public function mlebu($table,$insert){
		$sql 			   	   = 'INSERT INTO '.$table.' SET';
			foreach($insert as $field => $value){
				$sql 	  	  .= ' '.$field.'="'.$this->conn->real_escape_string($value).'",';
			};
		$sql 			   	   = rtrim($sql, ',');
		$data 			  	  = $this->conn->query($sql);
		return $data;
	}
	public function ngowahi($table, $where,$update) {
		$sql 			  	   = 'UPDATE '.$table.' SET';
			foreach($update as $field => $value){
				$sql 	  	  .= ' '.$field.'="'.$this->conn->real_escape_string($value).'",';};
		$sql 			  	   = rtrim($sql, ',');
		$sql 			  	  .= 'WHERE '.$where.'';
		$data 			 	  = $this->conn->query($sql);
		return $data;
	}
	public function gabungan($sql){
		$data 			  	  = $this->conn->multi_query($sql);
		return $data;
	}
	public function busek($table,$where){
		$data 			  	  = $this->conn->query("DELETE FROM $table WHERE $where");
		return $data;
	}
	public function ngetoke($table, $rows = '*', $join = NULL, $where = NULL, $order = NULL, $limit = NULL){
		$sql 				   = 'SELECT '.$rows.' FROM '.$table;
			switch(TRUE){
				case($join != NULL):
					$sql 	  .= ' LEFT JOIN '.$join;
				break;
			};
			switch(TRUE){
				case($where != NULL):
					$sql 	  .= ' WHERE '.$where;
			break;
			};
			switch(TRUE){
				case($order != NULL):
					$sql 	  .= ' ORDER BY '.$order;
				break;
			};
			switch(TRUE){
				case($limit != NULL):
					$sql 	  .= ' LIMIT '.$limit;
				break;
			};
		$data 				  = $this->conn->query($sql);
		return $data;
	}
	public function bener($kolom=NULL){
		$data 				  = $this->conn->real_escape_string($kolom);
		return $data;
	}
	public function nutup(){
		$this->conn->close();}};?>