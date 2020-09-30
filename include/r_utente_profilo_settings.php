<?php



$tdatar_utente_profilo = array();
$tdatar_utente_profilo[".searchableFields"] = array();
$tdatar_utente_profilo[".ShortName"] = "r_utente_profilo";
$tdatar_utente_profilo[".OwnerID"] = "";
$tdatar_utente_profilo[".OriginalTable"] = "hostname.r_utente_profilo";


$tdatar_utente_profilo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatar_utente_profilo[".originalPagesByType"] = $tdatar_utente_profilo[".pagesByType"];
$tdatar_utente_profilo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatar_utente_profilo[".originalPages"] = $tdatar_utente_profilo[".pages"];
$tdatar_utente_profilo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatar_utente_profilo[".originalDefaultPages"] = $tdatar_utente_profilo[".defaultPages"];

//	field labels
$fieldLabelsr_utente_profilo = array();
$fieldToolTipsr_utente_profilo = array();
$pageTitlesr_utente_profilo = array();
$placeHoldersr_utente_profilo = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsr_utente_profilo["Italian"] = array();
	$fieldToolTipsr_utente_profilo["Italian"] = array();
	$placeHoldersr_utente_profilo["Italian"] = array();
	$pageTitlesr_utente_profilo["Italian"] = array();
	$fieldLabelsr_utente_profilo["Italian"]["cf_utente"] = "Cf Utente";
	$fieldToolTipsr_utente_profilo["Italian"]["cf_utente"] = "";
	$placeHoldersr_utente_profilo["Italian"]["cf_utente"] = "";
	$fieldLabelsr_utente_profilo["Italian"]["id_profilo"] = "Id Profilo";
	$fieldToolTipsr_utente_profilo["Italian"]["id_profilo"] = "";
	$placeHoldersr_utente_profilo["Italian"]["id_profilo"] = "";
	if (count($fieldToolTipsr_utente_profilo["Italian"]))
		$tdatar_utente_profilo[".isUseToolTips"] = true;
}


	$tdatar_utente_profilo[".NCSearch"] = true;



$tdatar_utente_profilo[".shortTableName"] = "r_utente_profilo";
$tdatar_utente_profilo[".nSecOptions"] = 0;

$tdatar_utente_profilo[".mainTableOwnerID"] = "";
$tdatar_utente_profilo[".entityType"] = 0;

$tdatar_utente_profilo[".strOriginalTableName"] = "hostname.r_utente_profilo";

	



$tdatar_utente_profilo[".showAddInPopup"] = false;

$tdatar_utente_profilo[".showEditInPopup"] = false;

$tdatar_utente_profilo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatar_utente_profilo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatar_utente_profilo[".listAjax"] = false;
//	temporary
$tdatar_utente_profilo[".listAjax"] = false;

	$tdatar_utente_profilo[".audit"] = false;

	$tdatar_utente_profilo[".locking"] = false;


$pages = $tdatar_utente_profilo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatar_utente_profilo[".edit"] = true;
	$tdatar_utente_profilo[".afterEditAction"] = 1;
	$tdatar_utente_profilo[".closePopupAfterEdit"] = 1;
	$tdatar_utente_profilo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatar_utente_profilo[".add"] = true;
$tdatar_utente_profilo[".afterAddAction"] = 1;
$tdatar_utente_profilo[".closePopupAfterAdd"] = 1;
$tdatar_utente_profilo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatar_utente_profilo[".list"] = true;
}



$tdatar_utente_profilo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatar_utente_profilo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatar_utente_profilo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatar_utente_profilo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatar_utente_profilo[".printFriendly"] = true;
}



$tdatar_utente_profilo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatar_utente_profilo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatar_utente_profilo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatar_utente_profilo[".isUseAjaxSuggest"] = true;

$tdatar_utente_profilo[".rowHighlite"] = true;



												

$tdatar_utente_profilo[".ajaxCodeSnippetAdded"] = false;

$tdatar_utente_profilo[".buttonsAdded"] = false;

$tdatar_utente_profilo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatar_utente_profilo[".isUseTimeForSearch"] = false;


$tdatar_utente_profilo[".badgeColor"] = "CFAE83";


$tdatar_utente_profilo[".allSearchFields"] = array();
$tdatar_utente_profilo[".filterFields"] = array();
$tdatar_utente_profilo[".requiredSearchFields"] = array();

$tdatar_utente_profilo[".googleLikeFields"] = array();
$tdatar_utente_profilo[".googleLikeFields"][] = "cf_utente";
$tdatar_utente_profilo[".googleLikeFields"][] = "id_profilo";



$tdatar_utente_profilo[".tableType"] = "list";

$tdatar_utente_profilo[".printerPageOrientation"] = 0;
$tdatar_utente_profilo[".nPrinterPageScale"] = 100;

$tdatar_utente_profilo[".nPrinterSplitRecords"] = 40;

$tdatar_utente_profilo[".geocodingEnabled"] = false;










$tdatar_utente_profilo[".pageSize"] = 20;

$tdatar_utente_profilo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatar_utente_profilo[".strOrderBy"] = $tstrOrderBy;

$tdatar_utente_profilo[".orderindexes"] = array();

$tdatar_utente_profilo[".sqlHead"] = "SELECT cf_utente,  	id_profilo";
$tdatar_utente_profilo[".sqlFrom"] = "FROM hostname.r_utente_profilo";
$tdatar_utente_profilo[".sqlWhereExpr"] = "";
$tdatar_utente_profilo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatar_utente_profilo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatar_utente_profilo[".arrGroupsPerPage"] = $arrGPP;

$tdatar_utente_profilo[".highlightSearchResults"] = true;

$tableKeysr_utente_profilo = array();
$tableKeysr_utente_profilo[] = "cf_utente";
$tableKeysr_utente_profilo[] = "id_profilo";
$tdatar_utente_profilo[".Keys"] = $tableKeysr_utente_profilo;


$tdatar_utente_profilo[".hideMobileList"] = array();




//	cf_utente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cf_utente";
	$fdata["GoodName"] = "cf_utente";
	$fdata["ownerTable"] = "hostname.r_utente_profilo";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_profilo","cf_utente");
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


	$tdatar_utente_profilo["cf_utente"] = $fdata;
		$tdatar_utente_profilo[".searchableFields"][] = "cf_utente";
//	id_profilo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_profilo";
	$fdata["GoodName"] = "id_profilo";
	$fdata["ownerTable"] = "hostname.r_utente_profilo";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_profilo","id_profilo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_profilo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_profilo";

	
	
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
	$edata["LookupTable"] = "hostname.profilo";
	$edata["LookupConnId"] = "schemaname_at_hostname";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_profilo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_profilo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatar_utente_profilo["id_profilo"] = $fdata;
		$tdatar_utente_profilo[".searchableFields"][] = "id_profilo";


$tables_data["hostname.r_utente_profilo"]=&$tdatar_utente_profilo;
$field_labels["hostname_r_utente_profilo"] = &$fieldLabelsr_utente_profilo;
$fieldToolTips["hostname_r_utente_profilo"] = &$fieldToolTipsr_utente_profilo;
$placeHolders["hostname_r_utente_profilo"] = &$placeHoldersr_utente_profilo;
$page_titles["hostname_r_utente_profilo"] = &$pageTitlesr_utente_profilo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.r_utente_profilo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hostname.r_utente_profilo"] = array();



	
				$strOriginalDetailsTable="hostname.utenti";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.utenti";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "utenti";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.r_utente_profilo"][0] = $masterParams;
				$masterTablesData["hostname.r_utente_profilo"][0]["masterKeys"] = array();
	$masterTablesData["hostname.r_utente_profilo"][0]["masterKeys"][]="cf_utente";
				$masterTablesData["hostname.r_utente_profilo"][0]["detailKeys"] = array();
	$masterTablesData["hostname.r_utente_profilo"][0]["detailKeys"][]="cf_utente";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_r_utente_profilo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cf_utente,  	id_profilo";
$proto0["m_strFrom"] = "FROM hostname.r_utente_profilo";
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
	"m_strTable" => "hostname.r_utente_profilo",
	"m_srcTableName" => "hostname.r_utente_profilo"
));

$proto6["m_sql"] = "cf_utente";
$proto6["m_srcTableName"] = "hostname.r_utente_profilo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_profilo",
	"m_strTable" => "hostname.r_utente_profilo",
	"m_srcTableName" => "hostname.r_utente_profilo"
));

$proto8["m_sql"] = "id_profilo";
$proto8["m_srcTableName"] = "hostname.r_utente_profilo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hostname.r_utente_profilo";
$proto11["m_srcTableName"] = "hostname.r_utente_profilo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cf_utente";
$proto11["m_columns"][] = "id_profilo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hostname.r_utente_profilo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hostname.r_utente_profilo";
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
$proto0["m_srcTableName"]="hostname.r_utente_profilo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_r_utente_profilo = createSqlQuery_r_utente_profilo();


	
		;

		

$tdatar_utente_profilo[".sqlquery"] = $queryData_r_utente_profilo;

$tableEvents["hostname.r_utente_profilo"] = new eventsBase;
$tdatar_utente_profilo[".hasEvents"] = false;

?>