<?php



$tdatar_utente_area = array();
$tdatar_utente_area[".searchableFields"] = array();
$tdatar_utente_area[".ShortName"] = "r_utente_area";
$tdatar_utente_area[".OwnerID"] = "";
$tdatar_utente_area[".OriginalTable"] = "hostname.r_utente_area";


$tdatar_utente_area[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatar_utente_area[".originalPagesByType"] = $tdatar_utente_area[".pagesByType"];
$tdatar_utente_area[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatar_utente_area[".originalPages"] = $tdatar_utente_area[".pages"];
$tdatar_utente_area[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatar_utente_area[".originalDefaultPages"] = $tdatar_utente_area[".defaultPages"];

//	field labels
$fieldLabelsr_utente_area = array();
$fieldToolTipsr_utente_area = array();
$pageTitlesr_utente_area = array();
$placeHoldersr_utente_area = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsr_utente_area["Italian"] = array();
	$fieldToolTipsr_utente_area["Italian"] = array();
	$placeHoldersr_utente_area["Italian"] = array();
	$pageTitlesr_utente_area["Italian"] = array();
	$fieldLabelsr_utente_area["Italian"]["cf_utente"] = "Cf Utente";
	$fieldToolTipsr_utente_area["Italian"]["cf_utente"] = "";
	$placeHoldersr_utente_area["Italian"]["cf_utente"] = "";
	$fieldLabelsr_utente_area["Italian"]["id_area"] = "Id Area";
	$fieldToolTipsr_utente_area["Italian"]["id_area"] = "";
	$placeHoldersr_utente_area["Italian"]["id_area"] = "";
	if (count($fieldToolTipsr_utente_area["Italian"]))
		$tdatar_utente_area[".isUseToolTips"] = true;
}


	$tdatar_utente_area[".NCSearch"] = true;



$tdatar_utente_area[".shortTableName"] = "r_utente_area";
$tdatar_utente_area[".nSecOptions"] = 0;

$tdatar_utente_area[".mainTableOwnerID"] = "";
$tdatar_utente_area[".entityType"] = 0;

$tdatar_utente_area[".strOriginalTableName"] = "hostname.r_utente_area";

	



$tdatar_utente_area[".showAddInPopup"] = false;

$tdatar_utente_area[".showEditInPopup"] = false;

$tdatar_utente_area[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatar_utente_area[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatar_utente_area[".listAjax"] = false;
//	temporary
$tdatar_utente_area[".listAjax"] = false;

	$tdatar_utente_area[".audit"] = false;

	$tdatar_utente_area[".locking"] = false;


$pages = $tdatar_utente_area[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatar_utente_area[".edit"] = true;
	$tdatar_utente_area[".afterEditAction"] = 1;
	$tdatar_utente_area[".closePopupAfterEdit"] = 1;
	$tdatar_utente_area[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatar_utente_area[".add"] = true;
$tdatar_utente_area[".afterAddAction"] = 1;
$tdatar_utente_area[".closePopupAfterAdd"] = 1;
$tdatar_utente_area[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatar_utente_area[".list"] = true;
}



$tdatar_utente_area[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatar_utente_area[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatar_utente_area[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatar_utente_area[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatar_utente_area[".printFriendly"] = true;
}



$tdatar_utente_area[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatar_utente_area[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatar_utente_area[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatar_utente_area[".isUseAjaxSuggest"] = true;

$tdatar_utente_area[".rowHighlite"] = true;



																		

$tdatar_utente_area[".ajaxCodeSnippetAdded"] = false;

$tdatar_utente_area[".buttonsAdded"] = false;

$tdatar_utente_area[".addPageEvents"] = false;

// use timepicker for search panel
$tdatar_utente_area[".isUseTimeForSearch"] = false;


$tdatar_utente_area[".badgeColor"] = "EDCA00";


$tdatar_utente_area[".allSearchFields"] = array();
$tdatar_utente_area[".filterFields"] = array();
$tdatar_utente_area[".requiredSearchFields"] = array();

$tdatar_utente_area[".googleLikeFields"] = array();
$tdatar_utente_area[".googleLikeFields"][] = "cf_utente";
$tdatar_utente_area[".googleLikeFields"][] = "id_area";



$tdatar_utente_area[".tableType"] = "list";

$tdatar_utente_area[".printerPageOrientation"] = 0;
$tdatar_utente_area[".nPrinterPageScale"] = 100;

$tdatar_utente_area[".nPrinterSplitRecords"] = 40;

$tdatar_utente_area[".geocodingEnabled"] = false;










$tdatar_utente_area[".pageSize"] = 20;

$tdatar_utente_area[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatar_utente_area[".strOrderBy"] = $tstrOrderBy;

$tdatar_utente_area[".orderindexes"] = array();

$tdatar_utente_area[".sqlHead"] = "SELECT cf_utente,  	id_area";
$tdatar_utente_area[".sqlFrom"] = "FROM hostname.r_utente_area";
$tdatar_utente_area[".sqlWhereExpr"] = "";
$tdatar_utente_area[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatar_utente_area[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatar_utente_area[".arrGroupsPerPage"] = $arrGPP;

$tdatar_utente_area[".highlightSearchResults"] = true;

$tableKeysr_utente_area = array();
$tableKeysr_utente_area[] = "cf_utente";
$tableKeysr_utente_area[] = "id_area";
$tdatar_utente_area[".Keys"] = $tableKeysr_utente_area;


$tdatar_utente_area[".hideMobileList"] = array();




//	cf_utente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cf_utente";
	$fdata["GoodName"] = "cf_utente";
	$fdata["ownerTable"] = "hostname.r_utente_area";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_area","cf_utente");
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


	$tdatar_utente_area["cf_utente"] = $fdata;
		$tdatar_utente_area[".searchableFields"][] = "cf_utente";
//	id_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_area";
	$fdata["GoodName"] = "id_area";
	$fdata["ownerTable"] = "hostname.r_utente_area";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_area","id_area");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_area";

	
	
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
	$edata["LookupTable"] = "hostname.area";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_area";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_area";

	

	
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


	$tdatar_utente_area["id_area"] = $fdata;
		$tdatar_utente_area[".searchableFields"][] = "id_area";


$tables_data["hostname.r_utente_area"]=&$tdatar_utente_area;
$field_labels["hostname_r_utente_area"] = &$fieldLabelsr_utente_area;
$fieldToolTips["hostname_r_utente_area"] = &$fieldToolTipsr_utente_area;
$placeHolders["hostname_r_utente_area"] = &$placeHoldersr_utente_area;
$page_titles["hostname_r_utente_area"] = &$pageTitlesr_utente_area;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.r_utente_area"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hostname.r_utente_area"] = array();



	
				$strOriginalDetailsTable="hostname.area";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.area";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "area";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.r_utente_area"][0] = $masterParams;
				$masterTablesData["hostname.r_utente_area"][0]["masterKeys"] = array();
	$masterTablesData["hostname.r_utente_area"][0]["masterKeys"][]="id_area";
				$masterTablesData["hostname.r_utente_area"][0]["detailKeys"] = array();
	$masterTablesData["hostname.r_utente_area"][0]["detailKeys"][]="id_area";
		
	
				$strOriginalDetailsTable="hostname.utenti";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.utenti";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "utenti";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.r_utente_area"][1] = $masterParams;
				$masterTablesData["hostname.r_utente_area"][1]["masterKeys"] = array();
	$masterTablesData["hostname.r_utente_area"][1]["masterKeys"][]="cf_utente";
				$masterTablesData["hostname.r_utente_area"][1]["detailKeys"] = array();
	$masterTablesData["hostname.r_utente_area"][1]["detailKeys"][]="cf_utente";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_r_utente_area()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cf_utente,  	id_area";
$proto0["m_strFrom"] = "FROM hostname.r_utente_area";
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
	"m_strTable" => "hostname.r_utente_area",
	"m_srcTableName" => "hostname.r_utente_area"
));

$proto6["m_sql"] = "cf_utente";
$proto6["m_srcTableName"] = "hostname.r_utente_area";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_area",
	"m_strTable" => "hostname.r_utente_area",
	"m_srcTableName" => "hostname.r_utente_area"
));

$proto8["m_sql"] = "id_area";
$proto8["m_srcTableName"] = "hostname.r_utente_area";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hostname.r_utente_area";
$proto11["m_srcTableName"] = "hostname.r_utente_area";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cf_utente";
$proto11["m_columns"][] = "id_area";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hostname.r_utente_area";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hostname.r_utente_area";
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
$proto0["m_srcTableName"]="hostname.r_utente_area";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_r_utente_area = createSqlQuery_r_utente_area();


	
		;

		

$tdatar_utente_area[".sqlquery"] = $queryData_r_utente_area;

$tableEvents["hostname.r_utente_area"] = new eventsBase;
$tdatar_utente_area[".hasEvents"] = false;

?>