<?php
$strTableName="hostname.covidhr_d_fabbisogno_personale_tipo";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hostname.covidhr_d_fabbisogno_personale_tipo";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hostname.covidhr_d_fabbisogno_personale_tipo");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hostname.covidhr_d_fabbisogno_personale_tipo"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>