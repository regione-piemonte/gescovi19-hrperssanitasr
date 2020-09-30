<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["hostname.ente"] ) ) {
			$lookupTableLinks["hostname.ente"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.ente"]["covidhr_t_fabbisogno.id_ente"] )) {
			$lookupTableLinks["hostname.ente"]["covidhr_t_fabbisogno.id_ente"] = array();
		}
		$lookupTableLinks["hostname.ente"]["covidhr_t_fabbisogno.id_ente"]["edit"] = array("table" => "hostname.covidhr_t_fabbisogno", "field" => "id_ente", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.d_area"] ) ) {
			$lookupTableLinks["hostname.d_area"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.d_area"]["covidhr_t_fabbisogno.id_d_area"] )) {
			$lookupTableLinks["hostname.d_area"]["covidhr_t_fabbisogno.id_d_area"] = array();
		}
		$lookupTableLinks["hostname.d_area"]["covidhr_t_fabbisogno.id_d_area"]["edit"] = array("table" => "hostname.covidhr_t_fabbisogno", "field" => "id_d_area", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"] ) ) {
			$lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"]["covidhr_t_fabbisogno.fab_stato_id"] )) {
			$lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"]["covidhr_t_fabbisogno.fab_stato_id"] = array();
		}
		$lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"]["covidhr_t_fabbisogno.fab_stato_id"]["edit"] = array("table" => "hostname.covidhr_t_fabbisogno", "field" => "fab_stato_id", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.struttura"] ) ) {
			$lookupTableLinks["hostname.struttura"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.struttura"]["area.id_struttura"] )) {
			$lookupTableLinks["hostname.struttura"]["area.id_struttura"] = array();
		}
		$lookupTableLinks["hostname.struttura"]["area.id_struttura"]["edit"] = array("table" => "hostname.area", "field" => "id_struttura", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.d_area"] ) ) {
			$lookupTableLinks["hostname.d_area"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.d_area"]["area.id_d_area"] )) {
			$lookupTableLinks["hostname.d_area"]["area.id_d_area"] = array();
		}
		$lookupTableLinks["hostname.d_area"]["area.id_d_area"]["edit"] = array("table" => "hostname.area", "field" => "id_d_area", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.utenti"] ) ) {
			$lookupTableLinks["hostname.utenti"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.utenti"]["r_utente_area.cf_utente"] )) {
			$lookupTableLinks["hostname.utenti"]["r_utente_area.cf_utente"] = array();
		}
		$lookupTableLinks["hostname.utenti"]["r_utente_area.cf_utente"]["edit"] = array("table" => "hostname.r_utente_area", "field" => "cf_utente", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.area"] ) ) {
			$lookupTableLinks["hostname.area"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.area"]["r_utente_area.id_area"] )) {
			$lookupTableLinks["hostname.area"]["r_utente_area.id_area"] = array();
		}
		$lookupTableLinks["hostname.area"]["r_utente_area.id_area"]["edit"] = array("table" => "hostname.r_utente_area", "field" => "id_area", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.utenti"] ) ) {
			$lookupTableLinks["hostname.utenti"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.utenti"]["r_utente_ente.cf_utente"] )) {
			$lookupTableLinks["hostname.utenti"]["r_utente_ente.cf_utente"] = array();
		}
		$lookupTableLinks["hostname.utenti"]["r_utente_ente.cf_utente"]["edit"] = array("table" => "hostname.r_utente_ente", "field" => "cf_utente", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.ente"] ) ) {
			$lookupTableLinks["hostname.ente"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.ente"]["r_utente_ente.id_ente"] )) {
			$lookupTableLinks["hostname.ente"]["r_utente_ente.id_ente"] = array();
		}
		$lookupTableLinks["hostname.ente"]["r_utente_ente.id_ente"]["edit"] = array("table" => "hostname.r_utente_ente", "field" => "id_ente", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.utenti"] ) ) {
			$lookupTableLinks["hostname.utenti"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.utenti"]["r_utente_profilo.cf_utente"] )) {
			$lookupTableLinks["hostname.utenti"]["r_utente_profilo.cf_utente"] = array();
		}
		$lookupTableLinks["hostname.utenti"]["r_utente_profilo.cf_utente"]["edit"] = array("table" => "hostname.r_utente_profilo", "field" => "cf_utente", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.profilo"] ) ) {
			$lookupTableLinks["hostname.profilo"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.profilo"]["r_utente_profilo.id_profilo"] )) {
			$lookupTableLinks["hostname.profilo"]["r_utente_profilo.id_profilo"] = array();
		}
		$lookupTableLinks["hostname.profilo"]["r_utente_profilo.id_profilo"]["edit"] = array("table" => "hostname.r_utente_profilo", "field" => "id_profilo", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.utenti"] ) ) {
			$lookupTableLinks["hostname.utenti"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.utenti"]["r_utente_struttura.cf_utente"] )) {
			$lookupTableLinks["hostname.utenti"]["r_utente_struttura.cf_utente"] = array();
		}
		$lookupTableLinks["hostname.utenti"]["r_utente_struttura.cf_utente"]["edit"] = array("table" => "hostname.r_utente_struttura", "field" => "cf_utente", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.struttura"] ) ) {
			$lookupTableLinks["hostname.struttura"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.struttura"]["r_utente_struttura.id_struttura"] )) {
			$lookupTableLinks["hostname.struttura"]["r_utente_struttura.id_struttura"] = array();
		}
		$lookupTableLinks["hostname.struttura"]["r_utente_struttura.id_struttura"]["edit"] = array("table" => "hostname.r_utente_struttura", "field" => "id_struttura", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.covidhr_t_fabbisogno"] ) ) {
			$lookupTableLinks["hostname.covidhr_t_fabbisogno"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.covidhr_t_fabbisogno"]["covidhr_t_fabbisogno_det.fab_id"] )) {
			$lookupTableLinks["hostname.covidhr_t_fabbisogno"]["covidhr_t_fabbisogno_det.fab_id"] = array();
		}
		$lookupTableLinks["hostname.covidhr_t_fabbisogno"]["covidhr_t_fabbisogno_det.fab_id"]["edit"] = array("table" => "hostname.covidhr_t_fabbisogno_det", "field" => "fab_id", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.covidhr_d_fabbisogno_personale_tipo"] ) ) {
			$lookupTableLinks["hostname.covidhr_d_fabbisogno_personale_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.covidhr_d_fabbisogno_personale_tipo"]["covidhr_t_fabbisogno_det.fabpers_tipo_id"] )) {
			$lookupTableLinks["hostname.covidhr_d_fabbisogno_personale_tipo"]["covidhr_t_fabbisogno_det.fabpers_tipo_id"] = array();
		}
		$lookupTableLinks["hostname.covidhr_d_fabbisogno_personale_tipo"]["covidhr_t_fabbisogno_det.fabpers_tipo_id"]["edit"] = array("table" => "hostname.covidhr_t_fabbisogno_det", "field" => "fabpers_tipo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"] ) ) {
			$lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"] = array();
		}
		if( !isset( $lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"]["covidhr_t_fabbisogno_det.fab_stato_id"] )) {
			$lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"]["covidhr_t_fabbisogno_det.fab_stato_id"] = array();
		}
		$lookupTableLinks["hostname.covidhr_d_fabbisogno_stato"]["covidhr_t_fabbisogno_det.fab_stato_id"]["edit"] = array("table" => "hostname.covidhr_t_fabbisogno_det", "field" => "fab_stato_id", "page" => "edit");
}

?>