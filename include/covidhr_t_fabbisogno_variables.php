<?php
$strTableName="hostname.covidhr_t_fabbisogno";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hostname.covidhr_t_fabbisogno";

$gstrOrderBy="order by hostname.d_area.nome asc";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hostname.covidhr_t_fabbisogno");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hostname.covidhr_t_fabbisogno"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>