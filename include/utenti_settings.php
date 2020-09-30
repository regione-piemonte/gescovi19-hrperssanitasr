<?php



$tdatautenti = array();
$tdatautenti[".searchableFields"] = array();
$tdatautenti[".ShortName"] = "utenti";
$tdatautenti[".OwnerID"] = "";
$tdatautenti[".OriginalTable"] = "hostname.utenti";


$tdatautenti[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatautenti[".originalPagesByType"] = $tdatautenti[".pagesByType"];
$tdatautenti[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatautenti[".originalPages"] = $tdatautenti[".pages"];
$tdatautenti[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatautenti[".originalDefaultPages"] = $tdatautenti[".defaultPages"];

//	field labels
$fieldLabelsutenti = array();
$fieldToolTipsutenti = array();
$pageTitlesutenti = array();
$placeHoldersutenti = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsutenti["Italian"] = array();
	$fieldToolTipsutenti["Italian"] = array();
	$placeHoldersutenti["Italian"] = array();
	$pageTitlesutenti["Italian"] = array();
	$fieldLabelsutenti["Italian"]["cf_utente"] = "Cf Utente";
	$fieldToolTipsutenti["Italian"]["cf_utente"] = "";
	$placeHoldersutenti["Italian"]["cf_utente"] = "";
	$fieldLabelsutenti["Italian"]["id_asr"] = "Id Asr";
	$fieldToolTipsutenti["Italian"]["id_asr"] = "";
	$placeHoldersutenti["Italian"]["id_asr"] = "";
	$fieldLabelsutenti["Italian"]["id_laboratorio"] = "Id Laboratorio";
	$fieldToolTipsutenti["Italian"]["id_laboratorio"] = "";
	$placeHoldersutenti["Italian"]["id_laboratorio"] = "";
	if (count($fieldToolTipsutenti["Italian"]))
		$tdatautenti[".isUseToolTips"] = true;
}


	$tdatautenti[".NCSearch"] = true;



$tdatautenti[".shortTableName"] = "utenti";
$tdatautenti[".nSecOptions"] = 0;

$tdatautenti[".mainTableOwnerID"] = "";
$tdatautenti[".entityType"] = 0;

$tdatautenti[".strOriginalTableName"] = "hostname.utenti";

	



$tdatautenti[".showAddInPopup"] = false;

$tdatautenti[".showEditInPopup"] = false;

$tdatautenti[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatautenti[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatautenti[".listAjax"] = false;
//	temporary
$tdatautenti[".listAjax"] = false;

	$tdatautenti[".audit"] = false;

	$tdatautenti[".locking"] = false;


$pages = $tdatautenti[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatautenti[".edit"] = true;
	$tdatautenti[".afterEditAction"] = 1;
	$tdatautenti[".closePopupAfterEdit"] = 1;
	$tdatautenti[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatautenti[".add"] = true;
$tdatautenti[".afterAddAction"] = 1;
$tdatautenti[".closePopupAfterAdd"] = 1;
$tdatautenti[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatautenti[".list"] = true;
}



$tdatautenti[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatautenti[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatautenti[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatautenti[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatautenti[".printFriendly"] = true;
}



$tdatautenti[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatautenti[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatautenti[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatautenti[".isUseAjaxSuggest"] = true;

$tdatautenti[".rowHighlite"] = true;



						

$tdatautenti[".ajaxCodeSnippetAdded"] = false;

$tdatautenti[".buttonsAdded"] = false;

$tdatautenti[".addPageEvents"] = false;

// use timepicker for search panel
$tdatautenti[".isUseTimeForSearch"] = false;


$tdatautenti[".badgeColor"] = "00C2C5";


$tdatautenti[".allSearchFields"] = array();
$tdatautenti[".filterFields"] = array();
$tdatautenti[".requiredSearchFields"] = array();

$tdatautenti[".googleLikeFields"] = array();
$tdatautenti[".googleLikeFields"][] = "cf_utente";
$tdatautenti[".googleLikeFields"][] = "id_asr";
$tdatautenti[".googleLikeFields"][] = "id_laboratorio";



$tdatautenti[".tableType"] = "list";

$tdatautenti[".printerPageOrientation"] = 0;
$tdatautenti[".nPrinterPageScale"] = 100;

$tdatautenti[".nPrinterSplitRecords"] = 40;

$tdatautenti[".geocodingEnabled"] = false;










$tdatautenti[".pageSize"] = 20;

$tdatautenti[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatautenti[".strOrderBy"] = $tstrOrderBy;

$tdatautenti[".orderindexes"] = array();

$tdatautenti[".sqlHead"] = "SELECT cf_utente,  	id_asr,  	id_laboratorio";
$tdatautenti[".sqlFrom"] = "FROM hostname.utenti";
$tdatautenti[".sqlWhereExpr"] = "";
$tdatautenti[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatautenti[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatautenti[".arrGroupsPerPage"] = $arrGPP;

$tdatautenti[".highlightSearchResults"] = true;

$tableKeysutenti = array();
$tableKeysutenti[] = "cf_utente";
$tdatautenti[".Keys"] = $tableKeysutenti;


$tdatautenti[".hideMobileList"] = array();




//	cf_utente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cf_utente";
	$fdata["GoodName"] = "cf_utente";
	$fdata["ownerTable"] = "hostname.utenti";
	$fdata["Label"] = GetFieldLabel("hostname_utenti","cf_utente");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cf_utente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cf_utente";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdatautenti["cf_utente"] = $fdata;
		$tdatautenti[".searchableFields"][] = "cf_utente";
//	id_asr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_asr";
	$fdata["GoodName"] = "id_asr";
	$fdata["ownerTable"] = "hostname.utenti";
	$fdata["Label"] = GetFieldLabel("hostname_utenti","id_asr");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_asr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_asr";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatautenti["id_asr"] = $fdata;
		$tdatautenti[".searchableFields"][] = "id_asr";
//	id_laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_laboratorio";
	$fdata["GoodName"] = "id_laboratorio";
	$fdata["ownerTable"] = "hostname.utenti";
	$fdata["Label"] = GetFieldLabel("hostname_utenti","id_laboratorio");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_laboratorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_laboratorio";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatautenti["id_laboratorio"] = $fdata;
		$tdatautenti[".searchableFields"][] = "id_laboratorio";


$tables_data["hostname.utenti"]=&$tdatautenti;
$field_labels["hostname_utenti"] = &$fieldLabelsutenti;
$fieldToolTips["hostname_utenti"] = &$fieldToolTipsutenti;
$placeHolders["hostname_utenti"] = &$placeHoldersutenti;
$page_titles["hostname_utenti"] = &$pageTitlesutenti;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.utenti"] = array();
//	hostname.r_utente_area
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hostname.r_utente_area";
		$detailsParam["dOriginalTable"] = "hostname.r_utente_area";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "r_utente_area";
	$detailsParam["dCaptionTable"] = GetTableCaption("hostname_r_utente_area");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostname.utenti"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"][]="cf_utente";

				$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"][]="cf_utente";
//	hostname.r_utente_ente
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hostname.r_utente_ente";
		$detailsParam["dOriginalTable"] = "hostname.r_utente_ente";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "r_utente_ente";
	$detailsParam["dCaptionTable"] = GetTableCaption("hostname_r_utente_ente");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostname.utenti"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"][]="cf_utente";

				$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"][]="cf_utente";
//	hostname.r_utente_profilo
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hostname.r_utente_profilo";
		$detailsParam["dOriginalTable"] = "hostname.r_utente_profilo";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "r_utente_profilo";
	$detailsParam["dCaptionTable"] = GetTableCaption("hostname_r_utente_profilo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostname.utenti"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"][]="cf_utente";

				$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"][]="cf_utente";
//	hostname.r_utente_struttura
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hostname.r_utente_struttura";
		$detailsParam["dOriginalTable"] = "hostname.r_utente_struttura";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "r_utente_struttura";
	$detailsParam["dCaptionTable"] = GetTableCaption("hostname_r_utente_struttura");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostname.utenti"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["masterKeys"][]="cf_utente";

				$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.utenti"][$dIndex]["detailKeys"][]="cf_utente";

// tables which are master tables for current table (detail)
$masterTablesData["hostname.utenti"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_utenti()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cf_utente,  	id_asr,  	id_laboratorio";
$proto0["m_strFrom"] = "FROM hostname.utenti";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "cf_utente",
	"m_strTable" => "hostname.utenti",
	"m_srcTableName" => "hostname.utenti"
));

$proto6["m_sql"] = "cf_utente";
$proto6["m_srcTableName"] = "hostname.utenti";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_asr",
	"m_strTable" => "hostname.utenti",
	"m_srcTableName" => "hostname.utenti"
));

$proto8["m_sql"] = "id_asr";
$proto8["m_srcTableName"] = "hostname.utenti";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_laboratorio",
	"m_strTable" => "hostname.utenti",
	"m_srcTableName" => "hostname.utenti"
));

$proto10["m_sql"] = "id_laboratorio";
$proto10["m_srcTableName"] = "hostname.utenti";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "hostname.utenti";
$proto13["m_srcTableName"] = "hostname.utenti";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cf_utente";
$proto13["m_columns"][] = "id_asr";
$proto13["m_columns"][] = "id_laboratorio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "hostname.utenti";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "hostname.utenti";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hostname.utenti";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_utenti = createSqlQuery_utenti();


	
		;

			

$tdatautenti[".sqlquery"] = $queryData_utenti;

$tableEvents["hostname.utenti"] = new eventsBase;
$tdatautenti[".hasEvents"] = false;

?>