<?php
$dalTablearea = array();
$dalTablearea["id_area"] = array("type"=>3,"varname"=>"id_area", "name" => "id_area");
$dalTablearea["id_struttura"] = array("type"=>200,"varname"=>"id_struttura", "name" => "id_struttura");
$dalTablearea["id_d_area"] = array("type"=>200,"varname"=>"id_d_area", "name" => "id_d_area");
$dalTablearea["nome"] = array("type"=>200,"varname"=>"nome", "name" => "nome");
$dalTablearea["responsabile"] = array("type"=>200,"varname"=>"responsabile", "name" => "responsabile");
$dalTablearea["riferimento"] = array("type"=>200,"varname"=>"riferimento", "name" => "riferimento");
$dalTablearea["stato_validita"] = array("type"=>200,"varname"=>"stato_validita", "name" => "stato_validita");
	$dalTablearea["id_area"]["key"]=true;

$dal_info["schemaname_at_hostname_hostname_area"] = &$dalTablearea;
?>