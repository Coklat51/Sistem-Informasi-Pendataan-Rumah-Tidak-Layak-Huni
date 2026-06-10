<?php  if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
	$aColumns 		= array('kdtentangkami', 'tentangkami_tanggal', 'jenistentangkami', 'tentangkami_nama', 'tentangkami_email', 'tentangkami_deskripsi', 'tentangkami_telp','nama_status'); 
	$sTable 		= 'bukutentangkami';
	$join			= ' LEFT JOIN instrumentjenistentangkami 
								ON instrumentjenistentangkami.kdjenistentangkami=bukutentangkami.kdjenistentangkami
						 LEFT JOIN instrument_status ON instrument_status.kd_status=bukutentangkami.status';
	$sLimit 		= '';
	$sOrder			= '';
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
			$sWhere = " WHERE ".implode(" AND ", $aFilteringRules);
		break;
		default:
			$sWhere = " ";
		break;};
	$aQueryColumns = array();
	foreach ($aColumns as $col) {
		switch(TRUE){ 
			case($col != ' '):
			$aQueryColumns[] = $col;
			break;};};
	$sQuery = "SELECT SQL_CALC_FOUND_ROWS `".implode("`, `", $aQueryColumns)."` FROM `".$sTable."`".$join.$sWhere.$sOrder.$sLimit;	
	$rResult = $record->query($sQuery) or die($record->error);
	$sQuery = "SELECT FOUND_ROWS()";
	$rResultFilterTotal = $record->query($sQuery) or die($record->error);
	list($iFilteredTotal) = $rResultFilterTotal->fetch_row();
	$output = array(
    "iTotalRecords"        => $rResult->num_rows,
    "iTotalDisplayRecords" => $iFilteredTotal,
    "aaData"               => array());
	while ($aRow = $rResult->fetch_object()) {	
	$output['aaData'][] =  array($no++.'.',$aRow->tentangkami_tanggal,$aRow->jenistentangkami,'<strong>'.$aRow->tentangkami_nama.'</strong>',$aRow->tentangkami_email,$aRow->tentangkami_deskripsi,telp($aRow->tentangkami_telp),$aRow->nama_status,
		'<div class="btn-group pull-right">
			<a class="btn btn-xs btn-outline-primary kintilmu" id="edit" href="#" data-id="'.$aRow->kdtentangkami.'" data-toggle="modal" 
			data-target="#myModal" data-placement="bottom" title="Ubah data"><span class="fa fa-edit"></span></a>
			<a class="btn btn-xs btn-outline-danger kintilmu" id="delete" href="#" data-id="'.$aRow->kdtentangkami.'" data-toggle="modal"
			data-target="#myModal" data-placement="bottom" title="Hapus"><span class="fa fa-trash"></span></a></div>');			
	}echo json_encode($output);?>