<?php



$tdatacovidhr_t_fabbisogno = array();
$tdatacovidhr_t_fabbisogno[".searchableFields"] = array();
$tdatacovidhr_t_fabbisogno[".ShortName"] = "covidhr_t_fabbisogno";
$tdatacovidhr_t_fabbisogno[".OwnerID"] = "";
$tdatacovidhr_t_fabbisogno[".OriginalTable"] = "hostname.covidhr_t_fabbisogno";


$tdatacovidhr_t_fabbisogno[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacovidhr_t_fabbisogno[".originalPagesByType"] = $tdatacovidhr_t_fabbisogno[".pagesByType"];
$tdatacovidhr_t_fabbisogno[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacovidhr_t_fabbisogno[".originalPages"] = $tdatacovidhr_t_fabbisogno[".pages"];
$tdatacovidhr_t_fabbisogno[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacovidhr_t_fabbisogno[".originalDefaultPages"] = $tdatacovidhr_t_fabbisogno[".defaultPages"];

//	field labels
$fieldLabelscovidhr_t_fabbisogno = array();
$fieldToolTipscovidhr_t_fabbisogno = array();
$pageTitlescovidhr_t_fabbisogno = array();
$placeHolderscovidhr_t_fabbisogno = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscovidhr_t_fabbisogno["Italian"] = array();
	$fieldToolTipscovidhr_t_fabbisogno["Italian"] = array();
	$placeHolderscovidhr_t_fabbisogno["Italian"] = array();
	$pageTitlescovidhr_t_fabbisogno["Italian"] = array();
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["fab_id"] = "Fab Id";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["fab_id"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["fab_id"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["id_ente"] = "Id Ente";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["id_ente"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["id_ente"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["id_d_area"] = "Id D Area";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["id_d_area"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["id_d_area"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d1_id"] = "D1 Id";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d1_id"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d1_id"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["med_specialisti"] = "Modici COVID";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["med_specialisti"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["med_specialisti"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["medspecialisti_appr"] = "Medici COVID approvati";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["medspecialisti_appr"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["medspecialisti_appr"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d1_stato"] = "D1 Stato";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d1_stato"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d1_stato"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d2_id"] = "D2 Id";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d2_id"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d2_id"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["medici"] = "Medici <br> Richiesti";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["medici"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["medici"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["medici_appr"] = "Medici <br> Approvati";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["medici_appr"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["medici_appr"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d2_stato"] = "D2 Stato";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d2_stato"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d2_stato"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d3_id"] = "D3 Id";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d3_id"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d3_id"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["infermieri"] = "Infermieri<br>  Richiesti";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["infermieri"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["infermieri"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["infermieri_appr"] = "Infermieri <br> Approvati";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["infermieri_appr"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["infermieri_appr"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d3_stato"] = "D3 Stato";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d3_stato"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d3_stato"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d4_id"] = "D4 Id";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d4_id"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d4_id"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["specializandi"] = "OSS <br> Richiesti";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["specializandi"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["specializandi"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["specializzandi_appr"] = "OSS <br> Approvati";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["specializzandi_appr"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["specializzandi_appr"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d4_stato"] = "D4 Stato";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d4_stato"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d4_stato"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d5_id"] = "D5 Id";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d5_id"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d5_id"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["altri"] = "Altri <br> Richiesti";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["altri"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["altri"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["altri_appr"] = "Altri <br> Approvati";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["altri_appr"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["altri_appr"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["d5_stato"] = "D5 Stato";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["d5_stato"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["d5_stato"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["data_richiesta"] = "Data <br>Richiesta";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["data_richiesta"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["data_richiesta"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["nome"] = "AREA";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["nome"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["nome"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["nome1"] = "ENTE";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["nome1"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["nome1"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["minimo_posti_rich"] = "Numero minimo posti <br> letto richiesti";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["minimo_posti_rich"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["minimo_posti_rich"] = "";
	$fieldLabelscovidhr_t_fabbisogno["Italian"]["fab_stato_id"] = "Stato <br>richiesta";
	$fieldToolTipscovidhr_t_fabbisogno["Italian"]["fab_stato_id"] = "";
	$placeHolderscovidhr_t_fabbisogno["Italian"]["fab_stato_id"] = "";
	if (count($fieldToolTipscovidhr_t_fabbisogno["Italian"]))
		$tdatacovidhr_t_fabbisogno[".isUseToolTips"] = true;
}


	$tdatacovidhr_t_fabbisogno[".NCSearch"] = true;



$tdatacovidhr_t_fabbisogno[".shortTableName"] = "covidhr_t_fabbisogno";
$tdatacovidhr_t_fabbisogno[".nSecOptions"] = 0;

$tdatacovidhr_t_fabbisogno[".mainTableOwnerID"] = "";
$tdatacovidhr_t_fabbisogno[".entityType"] = 0;

$tdatacovidhr_t_fabbisogno[".strOriginalTableName"] = "hostname.covidhr_t_fabbisogno";

	



$tdatacovidhr_t_fabbisogno[".showAddInPopup"] = false;

$tdatacovidhr_t_fabbisogno[".showEditInPopup"] = false;

$tdatacovidhr_t_fabbisogno[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacovidhr_t_fabbisogno[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatacovidhr_t_fabbisogno[".listAjax"] = true;
//	temporary
$tdatacovidhr_t_fabbisogno[".listAjax"] = false;

	$tdatacovidhr_t_fabbisogno[".audit"] = false;

	$tdatacovidhr_t_fabbisogno[".locking"] = false;


$pages = $tdatacovidhr_t_fabbisogno[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacovidhr_t_fabbisogno[".edit"] = true;
	$tdatacovidhr_t_fabbisogno[".afterEditAction"] = 1;
	$tdatacovidhr_t_fabbisogno[".closePopupAfterEdit"] = 1;
	$tdatacovidhr_t_fabbisogno[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacovidhr_t_fabbisogno[".add"] = true;
$tdatacovidhr_t_fabbisogno[".afterAddAction"] = 1;
$tdatacovidhr_t_fabbisogno[".closePopupAfterAdd"] = 1;
$tdatacovidhr_t_fabbisogno[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacovidhr_t_fabbisogno[".list"] = true;
}



$tdatacovidhr_t_fabbisogno[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacovidhr_t_fabbisogno[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacovidhr_t_fabbisogno[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacovidhr_t_fabbisogno[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacovidhr_t_fabbisogno[".printFriendly"] = true;
}



$tdatacovidhr_t_fabbisogno[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacovidhr_t_fabbisogno[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacovidhr_t_fabbisogno[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacovidhr_t_fabbisogno[".isUseAjaxSuggest"] = true;

$tdatacovidhr_t_fabbisogno[".rowHighlite"] = true;



												

$tdatacovidhr_t_fabbisogno[".ajaxCodeSnippetAdded"] = false;

$tdatacovidhr_t_fabbisogno[".buttonsAdded"] = false;

$tdatacovidhr_t_fabbisogno[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacovidhr_t_fabbisogno[".isUseTimeForSearch"] = false;


$tdatacovidhr_t_fabbisogno[".badgeColor"] = "7B68EE";


$tdatacovidhr_t_fabbisogno[".allSearchFields"] = array();
$tdatacovidhr_t_fabbisogno[".filterFields"] = array();
$tdatacovidhr_t_fabbisogno[".requiredSearchFields"] = array();

$tdatacovidhr_t_fabbisogno[".googleLikeFields"] = array();
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "fab_id";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "id_ente";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "id_d_area";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d1_id";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "med_specialisti";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "medspecialisti_appr";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d1_stato";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d2_id";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "medici";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "medici_appr";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d2_stato";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d3_id";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "infermieri";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "infermieri_appr";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d3_stato";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d4_id";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "specializandi";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "specializzandi_appr";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d4_stato";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d5_id";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "altri";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "altri_appr";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "d5_stato";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "data_richiesta";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "nome";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "minimo_posti_rich";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "nome1";
$tdatacovidhr_t_fabbisogno[".googleLikeFields"][] = "fab_stato_id";



$tdatacovidhr_t_fabbisogno[".tableType"] = "list";

$tdatacovidhr_t_fabbisogno[".printerPageOrientation"] = 0;
$tdatacovidhr_t_fabbisogno[".nPrinterPageScale"] = 100;

$tdatacovidhr_t_fabbisogno[".nPrinterSplitRecords"] = 40;

$tdatacovidhr_t_fabbisogno[".geocodingEnabled"] = false;










$tdatacovidhr_t_fabbisogno[".pageSize"] = 10;

$tdatacovidhr_t_fabbisogno[".warnLeavingPages"] = true;



$tstrOrderBy = "order by hostname.d_area.nome asc";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacovidhr_t_fabbisogno[".strOrderBy"] = $tstrOrderBy;

$tdatacovidhr_t_fabbisogno[".orderindexes"] = array();
	$tdatacovidhr_t_fabbisogno[".orderindexes"][] = array(25, (1 ? "ASC" : "DESC"), "hostname.d_area.nome");


$tdatacovidhr_t_fabbisogno[".sqlHead"] = "SELECT hostname.covidhr_v_dettaglio_fabbisogni.fab_id,  hostname.covidhr_v_dettaglio_fabbisogni.id_ente,  hostname.covidhr_v_dettaglio_fabbisogni.id_d_area,  hostname.covidhr_v_dettaglio_fabbisogni.d1_id,  hostname.covidhr_v_dettaglio_fabbisogni.med_specialisti,  hostname.covidhr_v_dettaglio_fabbisogni.medspecialisti_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d1_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d2_id,  hostname.covidhr_v_dettaglio_fabbisogni.medici,  hostname.covidhr_v_dettaglio_fabbisogni.medici_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d2_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d3_id,  hostname.covidhr_v_dettaglio_fabbisogni.infermieri,  hostname.covidhr_v_dettaglio_fabbisogni.infermieri_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d3_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d4_id,  hostname.covidhr_v_dettaglio_fabbisogni.specializandi,  hostname.covidhr_v_dettaglio_fabbisogni.specializzandi_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d4_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d5_id,  hostname.covidhr_v_dettaglio_fabbisogni.altri,  hostname.covidhr_v_dettaglio_fabbisogni.altri_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d5_stato,  hostname.covidhr_v_dettaglio_fabbisogni.data_richiesta,  hostname.d_area.nome,  '' as minimo_posti_rich,  hostname.ente.nome AS nome1,  hostname.covidhr_v_dettaglio_fabbisogni.fab_stato_id";
$tdatacovidhr_t_fabbisogno[".sqlFrom"] = "FROM hostname.covidhr_v_dettaglio_fabbisogni  inner JOIN hostname.d_area ON hostname.covidhr_v_dettaglio_fabbisogni.id_d_area = hostname.d_area.id_d_area  inner JOIN hostname.ente ON hostname.covidhr_v_dettaglio_fabbisogni.id_ente = hostname.ente.id_ente";
$tdatacovidhr_t_fabbisogno[".sqlWhereExpr"] = "";
$tdatacovidhr_t_fabbisogno[".sqlTail"] = "";











//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacovidhr_t_fabbisogno[".arrGroupsPerPage"] = $arrGPP;

$tdatacovidhr_t_fabbisogno[".highlightSearchResults"] = true;

$tableKeyscovidhr_t_fabbisogno = array();
$tdatacovidhr_t_fabbisogno[".Keys"] = $tableKeyscovidhr_t_fabbisogno;


$tdatacovidhr_t_fabbisogno[".hideMobileList"] = array();




//	fab_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fab_id";
	$fdata["GoodName"] = "fab_id";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","fab_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "fab_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.fab_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["fab_id"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "fab_id";
//	id_ente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_ente";
	$fdata["GoodName"] = "id_ente";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","id_ente");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_ente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.id_ente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hostname.ente";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_ente";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_ente";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["id_ente"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "id_ente";
//	id_d_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_d_area";
	$fdata["GoodName"] = "id_d_area";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","id_d_area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_d_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.id_d_area";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hostname.d_area";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_d_area";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "id_d_area";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["id_d_area"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "id_d_area";
//	d1_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "d1_id";
	$fdata["GoodName"] = "d1_id";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d1_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d1_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d1_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d1_id"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d1_id";
//	med_specialisti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "med_specialisti";
	$fdata["GoodName"] = "med_specialisti";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","med_specialisti");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "med_specialisti";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.med_specialisti";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["med_specialisti"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "med_specialisti";
//	medspecialisti_appr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "medspecialisti_appr";
	$fdata["GoodName"] = "medspecialisti_appr";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","medspecialisti_appr");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "medspecialisti_appr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.medspecialisti_appr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["medspecialisti_appr"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "medspecialisti_appr";
//	d1_stato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "d1_stato";
	$fdata["GoodName"] = "d1_stato";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d1_stato");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d1_stato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d1_stato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d1_stato"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d1_stato";
//	d2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "d2_id";
	$fdata["GoodName"] = "d2_id";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d2_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d2_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d2_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d2_id"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d2_id";
//	medici
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "medici";
	$fdata["GoodName"] = "medici";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","medici");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "medici";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.medici";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["medici"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "medici";
//	medici_appr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "medici_appr";
	$fdata["GoodName"] = "medici_appr";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","medici_appr");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "medici_appr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.medici_appr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["medici_appr"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "medici_appr";
//	d2_stato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "d2_stato";
	$fdata["GoodName"] = "d2_stato";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d2_stato");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d2_stato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d2_stato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d2_stato"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d2_stato";
//	d3_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "d3_id";
	$fdata["GoodName"] = "d3_id";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d3_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d3_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d3_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d3_id"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d3_id";
//	infermieri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "infermieri";
	$fdata["GoodName"] = "infermieri";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","infermieri");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "infermieri";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.infermieri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["infermieri"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "infermieri";
//	infermieri_appr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "infermieri_appr";
	$fdata["GoodName"] = "infermieri_appr";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","infermieri_appr");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "infermieri_appr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.infermieri_appr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["infermieri_appr"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "infermieri_appr";
//	d3_stato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "d3_stato";
	$fdata["GoodName"] = "d3_stato";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d3_stato");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d3_stato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d3_stato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d3_stato"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d3_stato";
//	d4_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "d4_id";
	$fdata["GoodName"] = "d4_id";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d4_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d4_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d4_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d4_id"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d4_id";
//	specializandi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "specializandi";
	$fdata["GoodName"] = "specializandi";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","specializandi");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "specializandi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.specializandi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["specializandi"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "specializandi";
//	specializzandi_appr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "specializzandi_appr";
	$fdata["GoodName"] = "specializzandi_appr";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","specializzandi_appr");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "specializzandi_appr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.specializzandi_appr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["specializzandi_appr"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "specializzandi_appr";
//	d4_stato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "d4_stato";
	$fdata["GoodName"] = "d4_stato";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d4_stato");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d4_stato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d4_stato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d4_stato"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d4_stato";
//	d5_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "d5_id";
	$fdata["GoodName"] = "d5_id";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d5_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d5_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d5_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d5_id"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d5_id";
//	altri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "altri";
	$fdata["GoodName"] = "altri";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","altri");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "altri";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.altri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["altri"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "altri";
//	altri_appr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "altri_appr";
	$fdata["GoodName"] = "altri_appr";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","altri_appr");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "altri_appr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.altri_appr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["altri_appr"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "altri_appr";
//	d5_stato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "d5_stato";
	$fdata["GoodName"] = "d5_stato";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","d5_stato");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "d5_stato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.d5_stato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["d5_stato"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "d5_stato";
//	data_richiesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "data_richiesta";
	$fdata["GoodName"] = "data_richiesta";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","data_richiesta");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "data_richiesta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.data_richiesta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["data_richiesta"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "data_richiesta";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "hostname.d_area";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.d_area.nome";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["nome"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "nome";
//	minimo_posti_rich
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "minimo_posti_rich";
	$fdata["GoodName"] = "minimo_posti_rich";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","minimo_posti_rich");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "minimo_posti_rich";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["minimo_posti_rich"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "minimo_posti_rich";
//	nome1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nome1";
	$fdata["GoodName"] = "nome1";
	$fdata["ownerTable"] = "hostname.ente";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","nome1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.ente.nome";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["nome1"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "nome1";
//	fab_stato_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "fab_stato_id";
	$fdata["GoodName"] = "fab_stato_id";
	$fdata["ownerTable"] = "hostname.covidhr_v_dettaglio_fabbisogni";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_t_fabbisogno","fab_stato_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "fab_stato_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.covidhr_v_dettaglio_fabbisogni.fab_stato_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hostname.covidhr_d_fabbisogno_stato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "fab_stato_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fab_stato_desc";

	

	
	$edata["LookupOrderBy"] = "fab_stato_desc";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacovidhr_t_fabbisogno["fab_stato_id"] = $fdata;
		$tdatacovidhr_t_fabbisogno[".searchableFields"][] = "fab_stato_id";


$tables_data["hostname.covidhr_t_fabbisogno"]=&$tdatacovidhr_t_fabbisogno;
$field_labels["hostname_covidhr_t_fabbisogno"] = &$fieldLabelscovidhr_t_fabbisogno;
$fieldToolTips["hostname_covidhr_t_fabbisogno"] = &$fieldToolTipscovidhr_t_fabbisogno;
$placeHolders["hostname_covidhr_t_fabbisogno"] = &$placeHolderscovidhr_t_fabbisogno;
$page_titles["hostname_covidhr_t_fabbisogno"] = &$pageTitlescovidhr_t_fabbisogno;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.covidhr_t_fabbisogno"] = array();
//	hostname.covidhr_t_fabbisogno_det
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hostname.covidhr_t_fabbisogno_det";
		$detailsParam["dOriginalTable"] = "hostname.covidhr_t_fabbisogno_det";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "covidhr_t_fabbisogno_det";
	$detailsParam["dCaptionTable"] = GetTableCaption("hostname_covidhr_t_fabbisogno_det");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostname.covidhr_t_fabbisogno"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.covidhr_t_fabbisogno"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.covidhr_t_fabbisogno"][$dIndex]["masterKeys"][]="fab_id";

				$detailsTablesData["hostname.covidhr_t_fabbisogno"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.covidhr_t_fabbisogno"][$dIndex]["detailKeys"][]="fab_id";

// tables which are master tables for current table (detail)
$masterTablesData["hostname.covidhr_t_fabbisogno"] = array();



	
				$strOriginalDetailsTable="hostname.ente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.ente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.covidhr_t_fabbisogno"][0] = $masterParams;
				$masterTablesData["hostname.covidhr_t_fabbisogno"][0]["masterKeys"] = array();
	$masterTablesData["hostname.covidhr_t_fabbisogno"][0]["masterKeys"][]="id_ente";
				$masterTablesData["hostname.covidhr_t_fabbisogno"][0]["detailKeys"] = array();
	$masterTablesData["hostname.covidhr_t_fabbisogno"][0]["detailKeys"][]="id_ente";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_covidhr_t_fabbisogno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hostname.covidhr_v_dettaglio_fabbisogni.fab_id,  hostname.covidhr_v_dettaglio_fabbisogni.id_ente,  hostname.covidhr_v_dettaglio_fabbisogni.id_d_area,  hostname.covidhr_v_dettaglio_fabbisogni.d1_id,  hostname.covidhr_v_dettaglio_fabbisogni.med_specialisti,  hostname.covidhr_v_dettaglio_fabbisogni.medspecialisti_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d1_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d2_id,  hostname.covidhr_v_dettaglio_fabbisogni.medici,  hostname.covidhr_v_dettaglio_fabbisogni.medici_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d2_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d3_id,  hostname.covidhr_v_dettaglio_fabbisogni.infermieri,  hostname.covidhr_v_dettaglio_fabbisogni.infermieri_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d3_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d4_id,  hostname.covidhr_v_dettaglio_fabbisogni.specializandi,  hostname.covidhr_v_dettaglio_fabbisogni.specializzandi_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d4_stato,  hostname.covidhr_v_dettaglio_fabbisogni.d5_id,  hostname.covidhr_v_dettaglio_fabbisogni.altri,  hostname.covidhr_v_dettaglio_fabbisogni.altri_appr,  hostname.covidhr_v_dettaglio_fabbisogni.d5_stato,  hostname.covidhr_v_dettaglio_fabbisogni.data_richiesta,  hostname.d_area.nome,  '' as minimo_posti_rich,  hostname.ente.nome AS nome1,  hostname.covidhr_v_dettaglio_fabbisogni.fab_stato_id";
$proto0["m_strFrom"] = "FROM hostname.covidhr_v_dettaglio_fabbisogni  inner JOIN hostname.d_area ON hostname.covidhr_v_dettaglio_fabbisogni.id_d_area = hostname.d_area.id_d_area  inner JOIN hostname.ente ON hostname.covidhr_v_dettaglio_fabbisogni.id_ente = hostname.ente.id_ente";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by hostname.d_area.nome asc";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "fab_id",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto6["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.fab_id";
$proto6["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ente",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto8["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.id_ente";
$proto8["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_d_area",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto10["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.id_d_area";
$proto10["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "d1_id",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto12["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d1_id";
$proto12["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "med_specialisti",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto14["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.med_specialisti";
$proto14["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "medspecialisti_appr",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto16["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.medspecialisti_appr";
$proto16["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "d1_stato",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto18["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d1_stato";
$proto18["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "d2_id",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto20["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d2_id";
$proto20["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "medici",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto22["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.medici";
$proto22["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "medici_appr",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto24["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.medici_appr";
$proto24["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "d2_stato",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto26["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d2_stato";
$proto26["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "d3_id",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto28["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d3_id";
$proto28["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "infermieri",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto30["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.infermieri";
$proto30["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "infermieri_appr",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto32["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.infermieri_appr";
$proto32["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "d3_stato",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto34["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d3_stato";
$proto34["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "d4_id",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto36["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d4_id";
$proto36["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "specializandi",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto38["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.specializandi";
$proto38["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "specializzandi_appr",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto40["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.specializzandi_appr";
$proto40["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "d4_stato",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto42["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d4_stato";
$proto42["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "d5_id",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto44["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d5_id";
$proto44["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "altri",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto46["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.altri";
$proto46["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "altri_appr",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto48["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.altri_appr";
$proto48["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "d5_stato",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto50["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.d5_stato";
$proto50["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "data_richiesta",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto52["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.data_richiesta";
$proto52["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "hostname.d_area",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto54["m_sql"] = "hostname.d_area.nome";
$proto54["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto56["m_sql"] = "''";
$proto56["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "minimo_posti_rich";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "hostname.ente",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto58["m_sql"] = "hostname.ente.nome";
$proto58["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "nome1";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "fab_stato_id",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto60["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.fab_stato_id";
$proto60["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "hostname.covidhr_v_dettaglio_fabbisogni";
$proto63["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "fab_id";
$proto63["m_columns"][] = "id_ente";
$proto63["m_columns"][] = "id_d_area";
$proto63["m_columns"][] = "d1_id";
$proto63["m_columns"][] = "med_specialisti";
$proto63["m_columns"][] = "medspecialisti_appr";
$proto63["m_columns"][] = "d1_stato";
$proto63["m_columns"][] = "d2_id";
$proto63["m_columns"][] = "medici";
$proto63["m_columns"][] = "medici_appr";
$proto63["m_columns"][] = "d2_stato";
$proto63["m_columns"][] = "d3_id";
$proto63["m_columns"][] = "infermieri";
$proto63["m_columns"][] = "infermieri_appr";
$proto63["m_columns"][] = "d3_stato";
$proto63["m_columns"][] = "d4_id";
$proto63["m_columns"][] = "specializandi";
$proto63["m_columns"][] = "specializzandi_appr";
$proto63["m_columns"][] = "d4_stato";
$proto63["m_columns"][] = "d5_id";
$proto63["m_columns"][] = "altri";
$proto63["m_columns"][] = "altri_appr";
$proto63["m_columns"][] = "d5_stato";
$proto63["m_columns"][] = "data_richiesta";
$proto63["m_columns"][] = "fab_stato_id";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_INNERJOIN";
			$proto67=array();
$proto67["m_strName"] = "hostname.d_area";
$proto67["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id_d_area";
$proto67["m_columns"][] = "nome";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "inner JOIN hostname.d_area ON hostname.covidhr_v_dettaglio_fabbisogni.id_d_area = hostname.d_area.id_d_area";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto68=array();
$proto68["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.id_d_area = hostname.d_area.id_d_area";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_d_area",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= hostname.d_area.id_d_area";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_INNERJOIN";
			$proto71=array();
$proto71["m_strName"] = "hostname.ente";
$proto71["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "id_ente";
$proto71["m_columns"][] = "nome";
$proto71["m_columns"][] = "tot_posti_target";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "inner JOIN hostname.ente ON hostname.covidhr_v_dettaglio_fabbisogni.id_ente = hostname.ente.id_ente";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "hostname.covidhr_t_fabbisogno";
$proto72=array();
$proto72["m_sql"] = "hostname.covidhr_v_dettaglio_fabbisogni.id_ente = hostname.ente.id_ente";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ente",
	"m_strTable" => "hostname.covidhr_v_dettaglio_fabbisogni",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= hostname.ente.id_ente";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "hostname.d_area",
	"m_srcTableName" => "hostname.covidhr_t_fabbisogno"
));

$proto74["m_column"]=$obj;
$proto74["m_bAsc"] = 1;
$proto74["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto74);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hostname.covidhr_t_fabbisogno";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_covidhr_t_fabbisogno = createSqlQuery_covidhr_t_fabbisogno();


	
		;

																												

$tdatacovidhr_t_fabbisogno[".sqlquery"] = $queryData_covidhr_t_fabbisogno;

include_once(getabspath("include/covidhr_t_fabbisogno_events.php"));
$tableEvents["hostname.covidhr_t_fabbisogno"] = new eventclass_covidhr_t_fabbisogno;
$tdatacovidhr_t_fabbisogno[".hasEvents"] = true;

$query = &$queryData_covidhr_t_fabbisogno;
$table = "hostname.covidhr_t_fabbisogno";
// here goes EVENT_INIT_TABLE event

// Place event code here.
// Use "Add Action" button to add code snippets.

global  $conn;
// DE Recupero ente di appartenenza id e descrizione e lo mentto in due variabili
$sql_ente="select
	hostname.ente.id_ente,
	hostname.ente.nome
from
	hostname.r_utente_ente
inner join hostname.utenti on
	hostname.utenti.cf_utente = hostname.r_utente_ente.cf_utente
inner join hostname.ente on
	hostname.ente.id_ente = hostname.r_utente_ente.id_ente 
	where utenti.cf_utente = '" . $_SESSION['utente'] ."'";
$rs_data=pg_query($conn,$sql_ente);
$row=pg_fetch_row($rs_data);
// dovrebbe esserci sempre solo un record e prendo la seconda colonna (descrizione) e la prima (id) mi serve poi da mettere su tutte le queries successive
$_SESSION["id_ente"] = $row[0];
$_SESSION["ente"] = $row[1];


// FILTRO SULL ENTE DELLA QUERY PRINCIPALE CON UNO DEI VALORI TROVATI
$query->addWhere("ente.id_ente ='".$_SESSION["id_ente"]."'");
;
unset($query);
?>