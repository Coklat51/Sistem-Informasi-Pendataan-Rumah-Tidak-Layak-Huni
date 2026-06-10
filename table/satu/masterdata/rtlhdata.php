<?php  if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
	$aColumns	= array('nama_warga', 'nama_desa', 'alamat', 'rt', 'rw','kd_pondasi', 'kd_kond_atap', 'kd_rangka', 'kd_kond_dinding', 'kd_kond_lantai', 'kd_bahan_atap', 'kd_bahan_dinding', 'kd_bahan_lantai' ,'total_nilai'); 
	$sTable 	  = 'data_warga';
	$join		= 'LEFT JOIN aspek_keselamatan b 	 ON data_warga.nik=b.nik
					LEFT JOIN instrument_desa 		ON instrument_desa.id_desa=data_warga.kd_desa ';
	$sLimit 	  = '';
	$sOrder	  = '';
	switch(TRUE){
		case !empty($curl['tiga']):
			$kode_desa = 'AND kd_desa="'.$curl['tiga'].'"';
		break;
		default:
			$kode_desa = '';
		break;
	}
	switch(TRUE){
		case !empty($curl['empat']) && $curl['empat'] === 'lhn':
			$stats = 'AND total_nilai <= 60';
		break;
		case !empty($curl['empat']) && $curl['empat'] === 'tlhn':
			$stats = 'AND total_nilai >= 60 ';
		break;
		default:
			$stats = '';
		break;
	}
	switch(TRUE){
	case(isset($input['iDisplayStart']) && $input['iDisplayLength'] != '-1'):
		$sLimit = " LIMIT ".intval($input['iDisplayStart']).", ".intval($input['iDisplayLength']);
		$no		= $input['iDisplayStart']+1;
	break;
	default:
		$no		= 1;
	break;};
	$iColumnCount = count($aColumns);	
	switch(TRUE){ 
	case(isset($input['sSearch']) && $input['sSearch'] != ""):
		$aFilteringRules = array();
		for ($i=0 ; $i<$iColumnCount ; $i++) {
			switch(TRUE){ 
				case(isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true'):
					$aFilteringRules[] = "`".$aColumns[$i]."` LIKE '%".$record->real_escape_string($input['sSearch'])."%'";
				break;};};
		switch(TRUE){ 
			case(!empty($aFilteringRules)):
				$aFilteringRules = array('('.implode(" OR ", $aFilteringRules).')');
			break;};
	break;};
	for ($i=0 ; $i<$iColumnCount ; $i++) {
		switch(TRUE){ 
			case(isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != ''):
				$aFilteringRules[] = "`".$aColumns[$i]."` LIKE '%".$record->real_escape_string($input['sSearch_'.$i])."%'";
			break;};};
	switch(TRUE){ 
		case(!empty($aFilteringRules)):
			$sWhere = " WHERE b.kd_pondasi <> 0 AND b.kd_rangka <> 0 AND 
							  b.kd_kond_dinding <> 0 AND b.kd_kond_lantai <> 0 AND b.kd_bahan_atap <> 0 AND
							  b.kd_bahan_dinding <> 0 AND b.kd_bahan_lantai <> 0 ".$kode_desa." ".$stats." AND ".implode(" AND ", $aFilteringRules);
		break;
		default:
			$sWhere = " WHERE b.kd_pondasi <> 0 AND b.kd_rangka <> 0 AND 
							  b.kd_kond_dinding <> 0 AND b.kd_kond_lantai <> 0 AND b.kd_bahan_atap <> 0 AND
							  b.kd_bahan_dinding <> 0 AND b.kd_bahan_lantai <> 0 ".$kode_desa." ".$stats;
		break;};
	$aQueryColumns = array();
	foreach ($aColumns as $col) {
		switch(TRUE){ 
			case($col != ' '):
			$aQueryColumns[] = $col;
			break;};};
	$sQuery = "SELECT SQL_CALC_FOUND_ROWS data_warga.nik AS nikwarga, `".implode("`, `", $aQueryColumns)."` FROM `".$sTable."`".$join.$sWhere.$sOrder.$sLimit;	
	$rResult = $record->query($sQuery) or die($record->error);
	$sQuery = "SELECT FOUND_ROWS()";
	$rResultFilterTotal = $record->query($sQuery) or die($record->error);
	list($iFilteredTotal) = $rResultFilterTotal->fetch_row();
	$output = array(
    "iTotalRecords"        => $rResult->num_rows,
    "iTotalDisplayRecords" => $iFilteredTotal,
    "aaData"               => array());
	while ($aRow = $rResult->fetch_object()) {	
	$output['aaData'][] =  array($no++.'.','<strong>'.$aRow->nikwarga.'</strong>',$aRow->nama_warga,$aRow->nama_desa,$aRow->rt.'/'.$aRow->rw.', '.$aRow->alamat,jawabmiliknya($aRow->kd_pondasi) ,atap($aRow->kd_bahan_atap) , kondisinya($aRow->kd_rangka) , kondisinya($aRow->kd_kond_dinding), dinding($aRow->kd_bahan_dinding) , kondisinya($aRow->kd_kond_lantai) , lantai($aRow->kd_bahan_lantai),status_huni($aRow->total_nilai),$aRow->total_nilai);			
	}echo json_encode($output);?>