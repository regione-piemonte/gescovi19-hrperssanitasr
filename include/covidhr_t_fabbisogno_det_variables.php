<?php
$strTableName="hostname.covidhr_t_fabbisogno_det";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hostname.covidhr_t_fabbisogno_det";

$gstrOrderBy="ORDER BY fabpers_tipo_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hostname.covidhr_t_fabbisogno_det");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hostname.covidhr_t_fabbisogno_det"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>