<?php



$tdatar_utente_struttura = array();
$tdatar_utente_struttura[".searchableFields"] = array();
$tdatar_utente_struttura[".ShortName"] = "r_utente_struttura";
$tdatar_utente_struttura[".OwnerID"] = "";
$tdatar_utente_struttura[".OriginalTable"] = "hostname.r_utente_struttura";


$tdatar_utente_struttura[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatar_utente_struttura[".originalPagesByType"] = $tdatar_utente_struttura[".pagesByType"];
$tdatar_utente_struttura[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatar_utente_struttura[".originalPages"] = $tdatar_utente_struttura[".pages"];
$tdatar_utente_struttura[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatar_utente_struttura[".originalDefaultPages"] = $tdatar_utente_struttura[".defaultPages"];

//	field labels
$fieldLabelsr_utente_struttura = array();
$fieldToolTipsr_utente_struttura = array();
$pageTitlesr_utente_struttura = array();
$placeHoldersr_utente_struttura = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsr_utente_struttura["Italian"] = array();
	$fieldToolTipsr_utente_struttura["Italian"] = array();
	$placeHoldersr_utente_struttura["Italian"] = array();
	$pageTitlesr_utente_struttura["Italian"] = array();
	$fieldLabelsr_utente_struttura["Italian"]["cf_utente"] = "Cf Utente";
	$fieldToolTipsr_utente_struttura["Italian"]["cf_utente"] = "";
	$placeHoldersr_utente_struttura["Italian"]["cf_utente"] = "";
	$fieldLabelsr_utente_struttura["Italian"]["id_struttura"] = "Id Struttura";
	$fieldToolTipsr_utente_struttura["Italian"]["id_struttura"] = "";
	$placeHoldersr_utente_struttura["Italian"]["id_struttura"] = "";
	if (count($fieldToolTipsr_utente_struttura["Italian"]))
		$tdatar_utente_struttura[".isUseToolTips"] = true;
}


	$tdatar_utente_struttura[".NCSearch"] = true;



$tdatar_utente_struttura[".shortTableName"] = "r_utente_struttura";
$tdatar_utente_struttura[".nSecOptions"] = 0;

$tdatar_utente_struttura[".mainTableOwnerID"] = "";
$tdatar_utente_struttura[".entityType"] = 0;

$tdatar_utente_struttura[".strOriginalTableName"] = "hostname.r_utente_struttura";

	



$tdatar_utente_struttura[".showAddInPopup"] = false;

$tdatar_utente_struttura[".showEditInPopup"] = false;

$tdatar_utente_struttura[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatar_utente_struttura[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatar_utente_struttura[".listAjax"] = false;
//	temporary
$tdatar_utente_struttura[".listAjax"] = false;

	$tdatar_utente_struttura[".audit"] = false;

	$tdatar_utente_struttura[".locking"] = false;


$pages = $tdatar_utente_struttura[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatar_utente_struttura[".edit"] = true;
	$tdatar_utente_struttura[".afterEditAction"] = 1;
	$tdatar_utente_struttura[".closePopupAfterEdit"] = 1;
	$tdatar_utente_struttura[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatar_utente_struttura[".add"] = true;
$tdatar_utente_struttura[".afterAddAction"] = 1;
$tdatar_utente_struttura[".closePopupAfterAdd"] = 1;
$tdatar_utente_struttura[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatar_utente_struttura[".list"] = true;
}



$tdatar_utente_struttura[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatar_utente_struttura[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatar_utente_struttura[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatar_utente_struttura[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatar_utente_struttura[".printFriendly"] = true;
}



$tdatar_utente_struttura[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatar_utente_struttura[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatar_utente_struttura[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatar_utente_struttura[".isUseAjaxSuggest"] = true;

$tdatar_utente_struttura[".rowHighlite"] = true;



												

$tdatar_utente_struttura[".ajaxCodeSnippetAdded"] = false;

$tdatar_utente_struttura[".buttonsAdded"] = false;

$tdatar_utente_struttura[".addPageEvents"] = false;

// use timepicker for search panel
$tdatar_utente_struttura[".isUseTimeForSearch"] = false;


$tdatar_utente_struttura[".badgeColor"] = "008B8B";


$tdatar_utente_struttura[".allSearchFields"] = array();
$tdatar_utente_struttura[".filterFields"] = array();
$tdatar_utente_struttura[".requiredSearchFields"] = array();

$tdatar_utente_struttura[".googleLikeFields"] = array();
$tdatar_utente_struttura[".googleLikeFields"][] = "cf_utente";
$tdatar_utente_struttura[".googleLikeFields"][] = "id_struttura";



$tdatar_utente_struttura[".tableType"] = "list";

$tdatar_utente_struttura[".printerPageOrientation"] = 0;
$tdatar_utente_struttura[".nPrinterPageScale"] = 100;

$tdatar_utente_struttura[".nPrinterSplitRecords"] = 40;

$tdatar_utente_struttura[".geocodingEnabled"] = false;










$tdatar_utente_struttura[".pageSize"] = 20;

$tdatar_utente_struttura[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatar_utente_struttura[".strOrderBy"] = $tstrOrderBy;

$tdatar_utente_struttura[".orderindexes"] = array();

$tdatar_utente_struttura[".sqlHead"] = "SELECT cf_utente,  	id_struttura";
$tdatar_utente_struttura[".sqlFrom"] = "FROM hostname.r_utente_struttura";
$tdatar_utente_struttura[".sqlWhereExpr"] = "";
$tdatar_utente_struttura[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatar_utente_struttura[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatar_utente_struttura[".arrGroupsPerPage"] = $arrGPP;

$tdatar_utente_struttura[".highlightSearchResults"] = true;

$tableKeysr_utente_struttura = array();
$tableKeysr_utente_struttura[] = "cf_utente";
$tdatar_utente_struttura[".Keys"] = $tableKeysr_utente_struttura;


$tdatar_utente_struttura[".hideMobileList"] = array();




//	cf_utente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cf_utente";
	$fdata["GoodName"] = "cf_utente";
	$fdata["ownerTable"] = "hostname.r_utente_struttura";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_struttura","cf_utente");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hostname.utenti";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cf_utente";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "cf_utente";

	

	
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


	$tdatar_utente_struttura["cf_utente"] = $fdata;
		$tdatar_utente_struttura[".searchableFields"][] = "cf_utente";
//	id_struttura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_struttura";
	$fdata["GoodName"] = "id_struttura";
	$fdata["ownerTable"] = "hostname.r_utente_struttura";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_struttura","id_struttura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_struttura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_struttura";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "hostname.struttura";
	$edata["LookupConnId"] = "schemaname_at_hostname";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_struttura";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "id_struttura";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatar_utente_struttura["id_struttura"] = $fdata;
		$tdatar_utente_struttura[".searchableFields"][] = "id_struttura";


$tables_data["hostname.r_utente_struttura"]=&$tdatar_utente_struttura;
$field_labels["hostname_r_utente_struttura"] = &$fieldLabelsr_utente_struttura;
$fieldToolTips["hostname_r_utente_struttura"] = &$fieldToolTipsr_utente_struttura;
$placeHolders["hostname_r_utente_struttura"] = &$placeHoldersr_utente_struttura;
$page_titles["hostname_r_utente_struttura"] = &$pageTitlesr_utente_struttura;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.r_utente_struttura"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hostname.r_utente_struttura"] = array();



	
				$strOriginalDetailsTable="hostname.utenti";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.utenti";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "utenti";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.r_utente_struttura"][0] = $masterParams;
				$masterTablesData["hostname.r_utente_struttura"][0]["masterKeys"] = array();
	$masterTablesData["hostname.r_utente_struttura"][0]["masterKeys"][]="cf_utente";
				$masterTablesData["hostname.r_utente_struttura"][0]["detailKeys"] = array();
	$masterTablesData["hostname.r_utente_struttura"][0]["detailKeys"][]="cf_utente";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_r_utente_struttura()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cf_utente,  	id_struttura";
$proto0["m_strFrom"] = "FROM hostname.r_utente_struttura";
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
	"m_strTable" => "hostname.r_utente_struttura",
	"m_srcTableName" => "hostname.r_utente_struttura"
));

$proto6["m_sql"] = "cf_utente";
$proto6["m_srcTableName"] = "hostname.r_utente_struttura";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_struttura",
	"m_strTable" => "hostname.r_utente_struttura",
	"m_srcTableName" => "hostname.r_utente_struttura"
));

$proto8["m_sql"] = "id_struttura";
$proto8["m_srcTableName"] = "hostname.r_utente_struttura";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hostname.r_utente_struttura";
$proto11["m_srcTableName"] = "hostname.r_utente_struttura";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cf_utente";
$proto11["m_columns"][] = "id_struttura";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hostname.r_utente_struttura";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hostname.r_utente_struttura";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hostname.r_utente_struttura";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_r_utente_struttura = createSqlQuery_r_utente_struttura();


	
		;

		

$tdatar_utente_struttura[".sqlquery"] = $queryData_r_utente_struttura;

$tableEvents["hostname.r_utente_struttura"] = new eventsBase;
$tdatar_utente_struttura[".hasEvents"] = false;

?>