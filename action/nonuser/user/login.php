<?php 
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case md5($base['kunci'].'login'):
		$query 	= $record->ngetoke('bukuuser', 'user_name,kdleveluser',NULL, 
									 'bukuuser.user_name="'.$record->bener($input['username']).'" 
									  AND user_password="'.$record->bener($input['pass']).'"', NULL, 1);
		switch(TRUE){
			case $query->num_rows > 0 :
				$data					  = $query->fetch_object();
				$sesi['panjul']			= $data->user_name;
				$sesi['kdlevelku']		 = $data->kdleveluser;
				switch(TRUE){
					case $sesi['kdlevelku']=='1' :
						$sesi['menu']	  = 'a=1';
					break;
					case $sesi['kdlevelku']=='2' :
						$sesi['menu']	  = 'b=1';
					break;};
				header('location:'.$base['url']);
			break;
			default:
				header('location:'.$base['url'].'/login/koreksi');
			break;}
	break;}
?>