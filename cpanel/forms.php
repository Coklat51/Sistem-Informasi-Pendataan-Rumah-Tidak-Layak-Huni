<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
function startForm($type,$method,$action){
echo preg_replace('/\r|\n|[\	]/','','<form class="form-'.$type.' animated slideInUp fast" id="AFI-FORM" method="'.$method.'" 
	action="'.$action.'" enctype="multipart/form-data">');}; 

function inputText($label=NULL,$nama=NULL,$value=NULL,$read=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<label class="col-sm-12" for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<input type="text" name="'.$nama.'" id="'.$nama.'" value="'.$value.'" '.$read.' class="form-control" autocomplete="off"/>
	</div>');};

function telpText($label=NULL,$nama=NULL,$value=NULL,$read=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<label class="col-sm-12" for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info input-group">
		<div class="input-group-prepend">
			<div class="input-group-text">+62</div>
		</div>
		<input type="text" name="'.$nama.'" id="'.$nama.'" value="'.$value.'" '.$read.' class="form-control" placeholder="82111111111111"/>
	</div>');};
	
function timeText($label=NULL,$nama=NULL,$value=NULL,$read=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<label class="col-sm-12" for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<input type="time" name="'.$nama.'" id="'.$nama.'" value="'.$value.'" '.$read.' class="form-control" autocomplete="off"/>
	</div>');};
	
function searchText($label=NULL,$nama=NULL,$value=NULL,$read=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<label class="col-sm-12" for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<input type="search" name="'.$nama.'" id="'.$nama.'" value="'.$value.'" '.$read.' class="form-control" autocomplete="off"/>
	</div>');};

function nominalText($label=NULL,$nama=NULL,$value=NULL,$read=NULL){ 
switch(TRUE){
	case !empty($value):
		$value	= number_format($value,0, ",", ".");
	break;};
echo preg_replace('/\r|\n|[\	]/','','
	<label class="col-sm-12" for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<input type="search" name="'.$nama.'" id="'.$nama.'" value="'.$value.'" '.$read.' class="form-control" autocomplete="off"/>
		<script type="text/javascript">
			var xxnx'.$nama.'=document.getElementById("'.$nama.'");
			xxnx'.$nama.'.addEventListener("keyup",function(e){
				xxnx'.$nama.'.value=formatRupiah(this.value);});
			xxnx'.$nama.'.addEventListener("keydown",function(event){
				limitCharacter(event);});
		</script>
	</div>');};
	
function selectText($label=NULL,$nama=NULL,$value=NULL,$select=NULL,$read=NULL){
	$opsi	= '<option selected disabled value="">--Silahkan pilih--</option>';
	switch(TRUE){
		case ($value!=NULL && !empty($value)):
			foreach($value as $isi => $option){
				$opsi	.=  '<option value="'.$isi.'"';
				switch(TRUE){
					case (!empty($select) && ($select==$isi)):
						$opsi	.= 'SELECTED';
					break;};
				$opsi	.= '>'.$option.'</option>';};
		break;};
echo preg_replace('/\r|\n|[\	]/','','
	<label class="control-label col-sm-12 " for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<select class="form-control custom-select" name="'.$nama.'" id="'.$nama.'" '.$read.'>'.$opsi.'</select>
	</div>');};

function selectPilih($label=NULL,$nama=NULL,$value=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<label class="control-label col-sm-12 " for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<select class="form-control custom-select" name="'.$nama.'" id="'.$nama.'">
			<option selected disabled value="">'.$value.'</option>
		</select>
	</div>');};

function selectTexted($label=NULL,$nama=NULL,$value=NULL,$select=NULL,$read=NULL){
	$opsi	= '<option selected disabled value="">--Silahkan pilih--</option>';
	switch(TRUE){
		case ($value!=NULL && !empty($value)):
			foreach($value as $isi){
				$opsi	.=  '<option value="'.$isi.'"';
				switch(TRUE){
					case (!empty($select) && ($select==$isi)):
						$opsi	.= 'SELECTED';
					break;};
				$opsi	.= '>'.$isi.'</option>';};
		break;};
echo preg_replace('/\r|\n|[\	]/','','
	<label class="control-label col-sm-12 " for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<select class="form-control custom-select" name="'.$nama.'" id="'.$nama.'" '.$read.'>'.$opsi.'</select>
	</div>');}; 

function selectBase($label=NULL,$nama=NULL,$nameDB,$id_record,$name_record,$value=NULL,$_user,$_name,$_pass,$host,$read=NULL){
$get_rec			= new lahir;
$get_rec->ngeces($_user,$_name,$_pass,$host);
$query				= $get_rec->ngetoke($nameDB,$id_record.",".$name_record);
$opsi				= '<option selected disabled value="">--Silahkan pilih--</option>';
while($row_query	= $query->fetch_assoc()){
	$opsi			.= '<option value="'.$row_query[$id_record].'"';
	switch(TRUE){
		case(($value!=NULL) && ($value==$row_query[$id_record])): 
			$opsi	.= 'SELECTED';
		break;};
    $opsi			.= '>'.$row_query[$name_record].'</option>';};
echo preg_replace('/\r|\n|[\	]/','','
	<label class="control-label col-sm-12 " for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<select class="form-control custom-select" name="'.$nama.'" id="'.$nama.'" '.$read.'>'.$opsi.'</select>
	</div>');
$get_rec->nutup();}; 

function selectBaseDua($label=NULL,$nama=NULL,$nameDB,$id_record,$name_record,$value=NULL,$_user,$_name,$_pass,$host,$read=NULL){
$get_rec			= new lahir;
$get_rec->ngeces($_user,$_name,$_pass,$host);
$query				= $get_rec->ngetoke($nameDB,$id_record.",".$name_record);
$opsi				= '<option selected disabled value="">--Silahkan pilih--</option>';
while($row_query	= $query->fetch_assoc()){
	$opsi			.= '<option value="'.$row_query[$id_record].'"';
	switch(TRUE){
		case(($value!=NULL) && ($value==$row_query[$id_record])): 
			$opsi	.= 'SELECTED';
		break;};
    $opsi			.= '>'.$row_query[$id_record].'. '.$row_query[$name_record].'</option>';};
echo preg_replace('/\r|\n|[\	]/','','
	<label class="control-label col-sm-12 " for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<select class="form-control custom-select" name="'.$nama.'" id="'.$nama.'" '.$read.'>'.$opsi.'</select>
	</div>');
$get_rec->nutup();}; 

function selectWhere($label=NULL,$nama=NULL,$nameDB,$id_record,$name_record,$where,$value=NULL,$_user,$_name,$_pass,$host,$read=NULL){
$get_rec 			= new lahir;
$get_rec->ngeces($_user,$_name,$_pass,$host);
$query				= $get_rec->ngetoke($nameDB,$id_record.",".$name_record,NULL,$where);
$opsi				= '<option selected disabled value="">--Silahkan pilih--</option>';
while($row_query	= $query->fetch_assoc()){
	$opsi			.= '<option value="'.$row_query[$id_record].'"';
	switch(TRUE){
		case(($value!=NULL) && ($value==$row_query[$id_record])): 
			$opsi	.= 'SELECTED';
		break;};
    $opsi			.= '>'.$row_query[$name_record].'</option>';};
echo preg_replace('/\r|\n|[\	]/','','
	<label class="control-label col-sm-12 " for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<select class="form-control custom-select" name="'.$nama.'" id="'.$nama.'" '.$read.'>'.$opsi.'</select>
	</div>');
$get_rec->nutup();};

function selectJoin($label=NULL,$nama=NULL,$nameDB,$id_record,$name_record,$join,$where=NULL,$value=NULL,$_user,$_name,$_pass,$host){
$get_rec 			= new lahir;
$get_rec->ngeces($_user,$_name,$_pass,$host);
$query				= $get_rec->ngetoke($nameDB,$id_record.",".$name_record,$join,$where);
$opsi				= '<option selected disabled value="">--Silahkan pilih--</option>';
while($row_query	= $query->fetch_assoc()){
	$opsi			.= '<option value="'.$row_query[$id_record].'"';
	switch(TRUE){
		case(($value!=NULL) && ($value==$row_query[$id_record])): 
			$opsi	.= 'SELECTED';
		break;};
    $opsi			.= '>'.$row_query[$id_record].'. '.$row_query[$name_record].'</option>';};
echo preg_replace('/\r|\n|[\	]/','','
	<label class="control-label col-sm-12 " for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<select class="form-control custom-select" name="'.$nama.'" id="'.$nama.'" '.$read.'>'.$opsi.'</select>
	</div>');
$get_rec->nutup();};

function textareaText($label=NULL,$nama=NULL,$value=NULL,$placehoder=NULL,$read=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<label class="col-sm-12" for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<textarea name="'.$nama.'" id="'.$nama.'" rows="5" class="form-control" placeholder="'.$placehoder.'" '.$read.'>
		'.$value.'
		</textarea>
	</div>');};

function SaveText(){
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-sm-12 pt-3 text-center">
		<div class="btn-group">
			<button class="btn btn-outline-danger mr-1" type="reset">
				<i class="fa fa-undo"></i> Reset
			</button>
			<button class="btn btn-outline-primary" type="submit" name="AFI" value="Save">
				<i class="fa fa-save"></i> Simpan
			</button>
		</div>
	</div>');}; 

function ProsesText(){
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-sm-12 pt-3 text-center">
		<div class="btn-group">
			<button class="btn btn-outline-danger mr-1" type="reset">
				<i class="fa fa-undo"></i> Reset
			</button>
			<button class="btn btn-outline-primary" type="submit" name="AFI" value="Proses">
				<i class="fa fa-external-link"></i> Proses</button>
		</div>
	</div>');};

function AddText(){
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-sm-12 pt-3 text-center">
		<div class="btn-group">
			<button class="btn btn-outline-danger mr-1" type="reset">
				<i class="fa fa-undo"></i> Reset
			</button>
			<button class="btn btn-outline-primary" type="submit" name="AFI" value="Tambah">
				<i class="fa fa-plus"></i> Tambah
			</button>
		</div>
	</div>');};

function RegText($kunci=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-sm-12 pt-3 text-center">
		<div class="btn-group">
			<button class="btn btn-outline-danger mr-1" type="reset">
				<i class="fa fa-undo"></i> Reset
			</button>
			<button class="btn btn-outline-primary" type="submit" name="AFI" value="'.md5($kunci.'Daftar').'">
				<i class="fa fa-unlock-alt"></i> Register
			</button>
		</div>
	</div>');};

function SendText($kunci=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-sm-12 pt-3 text-center">
		<div class="btn-group">
			<button class="btn btn-outline-danger mr-1" type="reset">
				<i class="fa fa-undo"></i> Reset
			</button> 
			<button class="btn btn-outline-primary" type="submit" name="AFI" value="'.md5($kunci.'Kirim').'">
				<i class="fa fa-send"></i> Kirim
			</button>
		</div>
	</div>');}; 

function SaveAll(){
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-sm-12 pt-3 text-center">
		<div class="btn-group">
			<button class="btn btn-outline-danger mr-1" type="submit" name="AFI" value="Batalkan">
				<i class="fa fa-remove"></i> Batalkan
			</button>
			<button class="btn btn-outline-primary" type="submit" name="AFI" value="Simpan Semua">
				<i class="fa fa-save"></i> Save All
			</button>
		</div>
	</div>');}; 

function updateText(){
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-sm-12 pt-3 text-center">
		<div class="btn-group">
			<button class="btn btn-outline-danger mr-1" type="reset">
				<i class="fa fa-undo"></i> Reset
			</button>
			<button class="btn btn-outline-primary" type="submit" name="AFI" value="Update">
				<i class="fa fa-check-square-o"></i> Update
			</button>
		</div>
	</div>');};

function hiddenText($nama=NULL,$value=NULL){
echo '<input type="hidden" name="'.$nama.'" id="'.$nama.'" value="'.$value.'"/>';}; 

function textEditor($label=NULL,$nama=NULL,$value=NULL,$placehoder=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<label class="col-sm-12" for="'.$nama.'">'.$label.' :</label>
	<div class="col-sm-12 has-info">
		<textarea name="'.$nama.'" id="'.$nama.'" rows="5" class="ckeditor form-control" placeholder="'.$placehoder.'">
		'.$value.'
		</textarea>
	</div>');};
	
function endForm(){echo'</form>';};

function upfoto($label=NULL,$upload=NULL,$value=NULL,$read=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<script type="text/javascript">
		function preview'.$upload.'(){
			var oFReader	=	new FileReader();
			oFReader.readAsDataURL(document.getElementById("'.$upload.'").files[0]);
			oFReader.onload	=	function(oFREvent){
				document.getElementById("upload'.$upload.'").src	=	oFREvent.target.result;};};
		$("#'.$upload.'").change(function(e){ 
		var fileName = e.target.files[0].name; 
		$(this).next(".custom-file-label").html(fileName);});
	</script>
	<label class="col-sm-12 control-label" for="'.$upload.'">'.$label.' :</label>
	<div class="col-sm-12">
		<img class="kecil" id="upload'.$upload.'" src="'.$value.'" width="40px" height="40px"></img>
	</div>
	<div class="col-sm-12 has-info custom-file">
		<input type="file" name="'.$upload.'" id="'.$upload.'" accept="image/*" value="'.$value.'" '.$read.' 
		onchange="preview'.$upload.'()" class="custom-file-input form-control" style="border:none"/>
		<label class="custom-file-label">Silahkan Upload Foto</label>
	</div>');};

function upcamera($label=NULL,$upload=NULL,$value=NULL,$read=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<script type="text/javascript">
		function preview'.$upload.'(){
			var oFReader	=	new FileReader();
			oFReader.readAsDataURL(document.getElementById("'.$upload.'").files[0]);
			oFReader.onload	=	function(oFREvent){
				document.getElementById("upload'.$upload.'").src	=	oFREvent.target.result;};}; 
		$("#'.$upload.'").change(function(e){ 
		var fileName = e.target.files[0].name; 
		$(this).next(".custom-file-label").html(fileName);});
	</script>
	<label class="col-sm-12 control-label" for="'.$upload.'">'.$label.' :</label>
	<div class="col-sm-12">
		<img class="kecil" id="upload'.$upload.'" src="'.$value.'" width="40px" height="40px"></img>
	</div>
	<div class="col-sm-12 has-info custom-file">
		<input type="file" name="'.$upload.'" id="'.$upload.'" accept="image/*" capture="camera" value="'.$value.'" '.$read.' 
		onchange="preview'.$upload.'()" class="custom-file-input form-control" style="border:none"/>
		<label class="custom-file-label">Silahkan Upload Foto</label>
	</div>');};

function upfile($label=NULL,$upload=NULL,$value=NULL){
echo preg_replace('/\r|\n|[\	]/','','
	<script>
	$("#'.$upload.'").change(function(e){ 
		var fileName = e.target.files[0].name; 
		$(this).next(".custom-file-label").html(fileName);});
	</script>
	<label class="col-sm-12 control-label" for="'.$upload.'">'.$label.' :</label>
	<div class="col-sm-12 has-info custom-file">
		<input type="file" name="'.$upload.'" id="'.$upload.'" value="'.$value.'" class="custom-file-input form-control" style="border:none" 
		accept="application/pdf, application/msword, application/vnd.ms-excel"/>
		<label class="custom-file-label">Silahkan Upload File</label>
	</div>');};