<?php



$tdataente = array();
$tdataente[".searchableFields"] = array();
$tdataente[".ShortName"] = "ente";
$tdataente[".OwnerID"] = "";
$tdataente[".OriginalTable"] = "hostname.ente";


$tdataente[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataente[".originalPagesByType"] = $tdataente[".pagesByType"];
$tdataente[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataente[".originalPages"] = $tdataente[".pages"];
$tdataente[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataente[".originalDefaultPages"] = $tdataente[".defaultPages"];

//	field labels
$fieldLabelsente = array();
$fieldToolTipsente = array();
$pageTitlesente = array();
$placeHoldersente = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsente["Italian"] = array();
	$fieldToolTipsente["Italian"] = array();
	$placeHoldersente["Italian"] = array();
	$pageTitlesente["Italian"] = array();
	$fieldLabelsente["Italian"]["id_ente"] = "Id Ente";
	$fieldToolTipsente["Italian"]["id_ente"] = "";
	$placeHoldersente["Italian"]["id_ente"] = "";
	$fieldLabelsente["Italian"]["nome"] = "Nome";
	$fieldToolTipsente["Italian"]["nome"] = "";
	$placeHoldersente["Italian"]["nome"] = "";
	$fieldLabelsente["Italian"]["tot_posti_target"] = "Tot Posti Target";
	$fieldToolTipsente["Italian"]["tot_posti_target"] = "";
	$placeHoldersente["Italian"]["tot_posti_target"] = "";
	if (count($fieldToolTipsente["Italian"]))
		$tdataente[".isUseToolTips"] = true;
}


	$tdataente[".NCSearch"] = true;



$tdataente[".shortTableName"] = "ente";
$tdataente[".nSecOptions"] = 0;

$tdataente[".mainTableOwnerID"] = "";
$tdataente[".entityType"] = 0;

$tdataente[".strOriginalTableName"] = "hostname.ente";

	



$tdataente[".showAddInPopup"] = false;

$tdataente[".showEditInPopup"] = false;

$tdataente[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataente[".listAjax"] = false;
//	temporary
$tdataente[".listAjax"] = false;

	$tdataente[".audit"] = false;

	$tdataente[".locking"] = false;


$pages = $tdataente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataente[".edit"] = true;
	$tdataente[".afterEditAction"] = 1;
	$tdataente[".closePopupAfterEdit"] = 1;
	$tdataente[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataente[".add"] = true;
$tdataente[".afterAddAction"] = 1;
$tdataente[".closePopupAfterAdd"] = 1;
$tdataente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataente[".list"] = true;
}



$tdataente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataente[".printFriendly"] = true;
}



$tdataente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataente[".isUseAjaxSuggest"] = true;

$tdataente[".rowHighlite"] = true;



						

$tdataente[".ajaxCodeSnippetAdded"] = false;

$tdataente[".buttonsAdded"] = false;

$tdataente[".addPageEvents"] = false;

// use timepicker for search panel
$tdataente[".isUseTimeForSearch"] = false;


$tdataente[".badgeColor"] = "D2AF80";


$tdataente[".allSearchFields"] = array();
$tdataente[".filterFields"] = array();
$tdataente[".requiredSearchFields"] = array();

$tdataente[".googleLikeFields"] = array();
$tdataente[".googleLikeFields"][] = "id_ente";
$tdataente[".googleLikeFields"][] = "nome";
$tdataente[".googleLikeFields"][] = "tot_posti_target";



$tdataente[".tableType"] = "list";

$tdataente[".printerPageOrientation"] = 0;
$tdataente[".nPrinterPageScale"] = 100;

$tdataente[".nPrinterSplitRecords"] = 40;

$tdataente[".geocodingEnabled"] = false;










$tdataente[".pageSize"] = 20;

$tdataente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataente[".strOrderBy"] = $tstrOrderBy;

$tdataente[".orderindexes"] = array();

$tdataente[".sqlHead"] = "SELECT id_ente,  	nome,  	tot_posti_target";
$tdataente[".sqlFrom"] = "FROM hostname.ente";
$tdataente[".sqlWhereExpr"] = "";
$tdataente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataente[".arrGroupsPerPage"] = $arrGPP;

$tdataente[".highlightSearchResults"] = true;

$tableKeysente = array();
$tableKeysente[] = "id_ente";
$tdataente[".Keys"] = $tableKeysente;


$tdataente[".hideMobileList"] = array();




//	id_ente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ente";
	$fdata["GoodName"] = "id_ente";
	$fdata["ownerTable"] = "hostname.ente";
	$fdata["Label"] = GetFieldLabel("hostname_ente","id_ente");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_ente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ente";

	
	
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


	$tdataente["id_ente"] = $fdata;
		$tdataente[".searchableFields"][] = "id_ente";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "hostname.ente";
	$fdata["Label"] = GetFieldLabel("hostname_ente","nome");
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


	$tdataente["nome"] = $fdata;
		$tdataente[".searchableFields"][] = "nome";
//	tot_posti_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tot_posti_target";
	$fdata["GoodName"] = "tot_posti_target";
	$fdata["ownerTable"] = "hostname.ente";
	$fdata["Label"] = GetFieldLabel("hostname_ente","tot_posti_target");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "tot_posti_target";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tot_posti_target";

	
	
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


	$tdataente["tot_posti_target"] = $fdata;
		$tdataente[".searchableFields"][] = "tot_posti_target";


$tables_data["hostname.ente"]=&$tdataente;
$field_labels["hostname_ente"] = &$fieldLabelsente;
$fieldToolTips["hostname_ente"] = &$fieldToolTipsente;
$placeHolders["hostname_ente"] = &$placeHoldersente;
$page_titles["hostname_ente"] = &$pageTitlesente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.ente"] = array();
//	hostname.covidhr_t_fabbisogno
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hostname.covidhr_t_fabbisogno";
		$detailsParam["dOriginalTable"] = "hostname.covidhr_t_fabbisogno";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "covidhr_t_fabbisogno";
	$detailsParam["dCaptionTable"] = GetTableCaption("hostname_covidhr_t_fabbisogno");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hostname.ente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.ente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.ente"][$dIndex]["masterKeys"][]="id_ente";

				$detailsTablesData["hostname.ente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.ente"][$dIndex]["detailKeys"][]="id_ente";
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


		
	$detailsTablesData["hostname.ente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.ente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.ente"][$dIndex]["masterKeys"][]="id_ente";

				$detailsTablesData["hostname.ente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.ente"][$dIndex]["detailKeys"][]="id_ente";

// tables which are master tables for current table (detail)
$masterTablesData["hostname.ente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ente,  	nome,  	tot_posti_target";
$proto0["m_strFrom"] = "FROM hostname.ente";
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
	"m_strName" => "id_ente",
	"m_strTable" => "hostname.ente",
	"m_srcTableName" => "hostname.ente"
));

$proto6["m_sql"] = "id_ente";
$proto6["m_srcTableName"] = "hostname.ente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "hostname.ente",
	"m_srcTableName" => "hostname.ente"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "hostname.ente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tot_posti_target",
	"m_strTable" => "hostname.ente",
	"m_srcTableName" => "hostname.ente"
));

$proto10["m_sql"] = "tot_posti_target";
$proto10["m_srcTableName"] = "hostname.ente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "hostname.ente";
$proto13["m_srcTableName"] = "hostname.ente";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_ente";
$proto13["m_columns"][] = "nome";
$proto13["m_columns"][] = "tot_posti_target";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "hostname.ente";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "hostname.ente";
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
$proto0["m_srcTableName"]="hostname.ente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ente = createSqlQuery_ente();


	
		;

			

$tdataente[".sqlquery"] = $queryData_ente;

$tableEvents["hostname.ente"] = new eventsBase;
$tdataente[".hasEvents"] = false;

?>