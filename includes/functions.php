<?php
function create_form_field($label='', $type='text', $name='', $id='', $extras=array()){
	if(!empty($_POST[$name])){
		$value = $_POST[$name]; //$first_name, $last_name
		$value = stripslashes($value);
	}

	echo "<p>";
	if(!empty($label)) echo "<label for='$id' class='input_label'>$label</label>";
	if(($type=='text') || ($type=='email') || ($type=='tel') || ($type=='url') || ($type=='password') || ($type=='date') || ($type=='color') || ($type=='number')){
		echo "<input type='$type' id='$id' name='$name'";
		if(!empty($value)) echo "value='$value'";
			if(count($extras) > 0){
				foreach($extras as $key=>$var){
					echo "$key='$var'";
				}
			}
		echo ">";
	}elseif($type=='textarea'){
		echo "<textarea id='$id' name='$name'";
			if(count($extras) > 0){
				foreach($extras as $key=>$var){
					echo "$key='$var'";
				}
			}
		echo ">";
		if(!empty($value)) echo "$value";
		echo "</textarea>";
	}
	echo "</p>";
}
?>
