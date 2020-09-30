<?php



$tdatad_area = array();
$tdatad_area[".searchableFields"] = array();
$tdatad_area[".ShortName"] = "d_area";
$tdatad_area[".OwnerID"] = "";
$tdatad_area[".OriginalTable"] = "hostname.d_area";


$tdatad_area[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatad_area[".originalPagesByType"] = $tdatad_area[".pagesByType"];
$tdatad_area[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatad_area[".originalPages"] = $tdatad_area[".pages"];
$tdatad_area[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatad_area[".originalDefaultPages"] = $tdatad_area[".defaultPages"];

//	field labels
$fieldLabelsd_area = array();
$fieldToolTipsd_area = array();
$pageTitlesd_area = array();
$placeHoldersd_area = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsd_area["Italian"] = array();
	$fieldToolTipsd_area["Italian"] = array();
	$placeHoldersd_area["Italian"] = array();
	$pageTitlesd_area["Italian"] = array();
	$fieldLabelsd_area["Italian"]["id_d_area"] = "Id D Area";
	$fieldToolTipsd_area["Italian"]["id_d_area"] = "";
	$placeHoldersd_area["Italian"]["id_d_area"] = "";
	$fieldLabelsd_area["Italian"]["nome"] = "Nome";
	$fieldToolTipsd_area["Italian"]["nome"] = "";
	$placeHoldersd_area["Italian"]["nome"] = "";
	if (count($fieldToolTipsd_area["Italian"]))
		$tdatad_area[".isUseToolTips"] = true;
}


	$tdatad_area[".NCSearch"] = true;



$tdatad_area[".shortTableName"] = "d_area";
$tdatad_area[".nSecOptions"] = 0;

$tdatad_area[".mainTableOwnerID"] = "";
$tdatad_area[".entityType"] = 0;

$tdatad_area[".strOriginalTableName"] = "hostname.d_area";

	



$tdatad_area[".showAddInPopup"] = false;

$tdatad_area[".showEditInPopup"] = false;

$tdatad_area[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatad_area[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatad_area[".listAjax"] = false;
//	temporary
$tdatad_area[".listAjax"] = false;

	$tdatad_area[".audit"] = false;

	$tdatad_area[".locking"] = false;


$pages = $tdatad_area[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatad_area[".edit"] = true;
	$tdatad_area[".afterEditAction"] = 1;
	$tdatad_area[".closePopupAfterEdit"] = 1;
	$tdatad_area[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatad_area[".add"] = true;
$tdatad_area[".afterAddAction"] = 1;
$tdatad_area[".closePopupAfterAdd"] = 1;
$tdatad_area[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatad_area[".list"] = true;
}



$tdatad_area[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatad_area[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatad_area[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatad_area[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatad_area[".printFriendly"] = true;
}



$tdatad_area[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatad_area[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatad_area[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatad_area[".isUseAjaxSuggest"] = true;

$tdatad_area[".rowHighlite"] = true;



						

$tdatad_area[".ajaxCodeSnippetAdded"] = false;

$tdatad_area[".buttonsAdded"] = false;

$tdatad_area[".addPageEvents"] = false;

// use timepicker for search panel
$tdatad_area[".isUseTimeForSearch"] = false;


$tdatad_area[".badgeColor"] = "D2AF80";


$tdatad_area[".allSearchFields"] = array();
$tdatad_area[".filterFields"] = array();
$tdatad_area[".requiredSearchFields"] = array();

$tdatad_area[".googleLikeFields"] = array();
$tdatad_area[".googleLikeFields"][] = "id_d_area";
$tdatad_area[".googleLikeFields"][] = "nome";



$tdatad_area[".tableType"] = "list";

$tdatad_area[".printerPageOrientation"] = 0;
$tdatad_area[".nPrinterPageScale"] = 100;

$tdatad_area[".nPrinterSplitRecords"] = 40;

$tdatad_area[".geocodingEnabled"] = false;










$tdatad_area[".pageSize"] = 20;

$tdatad_area[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatad_area[".strOrderBy"] = $tstrOrderBy;

$tdatad_area[".orderindexes"] = array();

$tdatad_area[".sqlHead"] = "SELECT id_d_area,  	nome";
$tdatad_area[".sqlFrom"] = "FROM hostname.d_area";
$tdatad_area[".sqlWhereExpr"] = "";
$tdatad_area[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatad_area[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatad_area[".arrGroupsPerPage"] = $arrGPP;

$tdatad_area[".highlightSearchResults"] = true;

$tableKeysd_area = array();
$tableKeysd_area[] = "id_d_area";
$tdatad_area[".Keys"] = $tableKeysd_area;


$tdatad_area[".hideMobileList"] = array();




//	id_d_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_d_area";
	$fdata["GoodName"] = "id_d_area";
	$fdata["ownerTable"] = "hostname.d_area";
	$fdata["Label"] = GetFieldLabel("hostname_d_area","id_d_area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_d_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_d_area";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatad_area["id_d_area"] = $fdata;
		$tdatad_area[".searchableFields"][] = "id_d_area";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "hostname.d_area";
	$fdata["Label"] = GetFieldLabel("hostname_d_area","nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatad_area["nome"] = $fdata;
		$tdatad_area[".searchableFields"][] = "nome";


$tables_data["hostname.d_area"]=&$tdatad_area;
$field_labels["hostname_d_area"] = &$fieldLabelsd_area;
$fieldToolTips["hostname_d_area"] = &$fieldToolTipsd_area;
$placeHolders["hostname_d_area"] = &$placeHoldersd_area;
$page_titles["hostname_d_area"] = &$pageTitlesd_area;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.d_area"] = array();
//	hostname.area
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hostname.area";
		$detailsParam["dOriginalTable"] = "hostname.area";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "area";
	$detailsParam["dCaptionTable"] = GetTableCaption("hostname_area");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostname.d_area"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.d_area"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.d_area"][$dIndex]["masterKeys"][]="id_d_area";

				$detailsTablesData["hostname.d_area"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.d_area"][$dIndex]["detailKeys"][]="id_d_area";

// tables which are master tables for current table (detail)
$masterTablesData["hostname.d_area"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_d_area()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_d_area,  	nome";
$proto0["m_strFrom"] = "FROM hostname.d_area";
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
	"m_strName" => "id_d_area",
	"m_strTable" => "hostname.d_area",
	"m_srcTableName" => "hostname.d_area"
));

$proto6["m_sql"] = "id_d_area";
$proto6["m_srcTableName"] = "hostname.d_area";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "hostname.d_area",
	"m_srcTableName" => "hostname.d_area"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "hostname.d_area";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hostname.d_area";
$proto11["m_srcTableName"] = "hostname.d_area";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_d_area";
$proto11["m_columns"][] = "nome";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hostname.d_area";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hostname.d_area";
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
$proto0["m_srcTableName"]="hostname.d_area";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_d_area = createSqlQuery_d_area();


	
		;

		

$tdatad_area[".sqlquery"] = $queryData_d_area;

$tableEvents["hostname.d_area"] = new eventsBase;
$tdatad_area[".hasEvents"] = false;

?>