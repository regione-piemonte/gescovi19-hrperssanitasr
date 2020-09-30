<?php
$dalTablestruttura = array();
$dalTablestruttura["id_struttura"] = array("type"=>200,"varname"=>"id_struttura", "name" => "id_struttura");
$dalTablestruttura["id_ente"] = array("type"=>3,"varname"=>"id_ente", "name" => "id_ente");
$dalTablestruttura["nome"] = array("type"=>200,"varname"=>"nome", "name" => "nome");
$dalTablestruttura["natura"] = array("type"=>200,"varname"=>"natura", "name" => "natura");
	$dalTablestruttura["id_struttura"]["key"]=true;

$dal_info["schemaname_at_hostname_hostname_struttura"] = &$dalTablestruttura;
?>