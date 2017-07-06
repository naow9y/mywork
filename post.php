<?php

	/*
	while($_POST[] != NULL){
		$sql =  . " " . $xx;
	}	
	*/
	
	//イズセット判定
	
	//echo $_POST['Submit1'];
	//echo $_POST['Submit2'];
	//echo "<br />";
	
	$n = 5;
	
	if(isset($_POST['itemReg'])){
		for($i=0; $i < 5; $i++){
			$itemReg .= '"' . $_POST['itemReg'][$i] . '"';
		}
	}
	
	
	if(isset($_POST['itemEdit'])){
		for($i=0; $i < 5; $i++){
			$itemEdit .= '"' . $_POST['itemEdit'][$i] . '"';	
		}
	}
	
	
	/* Debug */
	print_r($itemReg);
	print_r($itemEdit);

	
	
	/*
	if(empty($_POST['itemReg'])){
		print_r($_POST['itemReg']);
		echo "itemReg - エンプティ…登録";
	}elseif(isset($_POST['itemReg'])){
		echo "itemReg - イズセット…編集";
	}
	
echo "<br />";

	if(empty($_POST['itemEdit'])){
		print_r($_POST['itemEdit']);
		echo "itemEdit - エンプティ…登録";
	}elseif(isset($_POST['itemEdit'])){
		echo "itemEdit - イズセット…編集";
	}
	*/
	/*
	if($_POST['editMode'] == 0){
		echo "登録";
		
	while(!empty($_POST['itemReg'])){
		echo $_POST['itemReg'];
	}
	
	}elseif($_POST['editMode'] == 1){
		echo "編集";
		
	while(!empty($_POST['itemReg'])){
		echo $_POST['itemEdit'];
	}
	
	
	}else{
		
		echo "不正なアクセスです。";
		
	}
	*/

?>