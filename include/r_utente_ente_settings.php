<?php



$tdatar_utente_ente = array();
$tdatar_utente_ente[".searchableFields"] = array();
$tdatar_utente_ente[".ShortName"] = "r_utente_ente";
$tdatar_utente_ente[".OwnerID"] = "";
$tdatar_utente_ente[".OriginalTable"] = "hostname.r_utente_ente";


$tdatar_utente_ente[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatar_utente_ente[".originalPagesByType"] = $tdatar_utente_ente[".pagesByType"];
$tdatar_utente_ente[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatar_utente_ente[".originalPages"] = $tdatar_utente_ente[".pages"];
$tdatar_utente_ente[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatar_utente_ente[".originalDefaultPages"] = $tdatar_utente_ente[".defaultPages"];

//	field labels
$fieldLabelsr_utente_ente = array();
$fieldToolTipsr_utente_ente = array();
$pageTitlesr_utente_ente = array();
$placeHoldersr_utente_ente = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsr_utente_ente["Italian"] = array();
	$fieldToolTipsr_utente_ente["Italian"] = array();
	$placeHoldersr_utente_ente["Italian"] = array();
	$pageTitlesr_utente_ente["Italian"] = array();
	$fieldLabelsr_utente_ente["Italian"]["cf_utente"] = "Cf Utente";
	$fieldToolTipsr_utente_ente["Italian"]["cf_utente"] = "";
	$placeHoldersr_utente_ente["Italian"]["cf_utente"] = "";
	$fieldLabelsr_utente_ente["Italian"]["id_ente"] = "Id Ente";
	$fieldToolTipsr_utente_ente["Italian"]["id_ente"] = "";
	$placeHoldersr_utente_ente["Italian"]["id_ente"] = "";
	$fieldLabelsr_utente_ente["Italian"]["id_area"] = "Id Area";
	$fieldToolTipsr_utente_ente["Italian"]["id_area"] = "";
	$placeHoldersr_utente_ente["Italian"]["id_area"] = "";
	$fieldLabelsr_utente_ente["Italian"]["nome"] = "Nome";
	$fieldToolTipsr_utente_ente["Italian"]["nome"] = "";
	$placeHoldersr_utente_ente["Italian"]["nome"] = "";
	$fieldLabelsr_utente_ente["Italian"]["id_d_area"] = "Id D Area";
	$fieldToolTipsr_utente_ente["Italian"]["id_d_area"] = "";
	$placeHoldersr_utente_ente["Italian"]["id_d_area"] = "";
	if (count($fieldToolTipsr_utente_ente["Italian"]))
		$tdatar_utente_ente[".isUseToolTips"] = true;
}


	$tdatar_utente_ente[".NCSearch"] = true;



$tdatar_utente_ente[".shortTableName"] = "r_utente_ente";
$tdatar_utente_ente[".nSecOptions"] = 0;

$tdatar_utente_ente[".mainTableOwnerID"] = "";
$tdatar_utente_ente[".entityType"] = 0;

$tdatar_utente_ente[".strOriginalTableName"] = "hostname.r_utente_ente";

	



$tdatar_utente_ente[".showAddInPopup"] = false;

$tdatar_utente_ente[".showEditInPopup"] = false;

$tdatar_utente_ente[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatar_utente_ente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatar_utente_ente[".listAjax"] = false;
//	temporary
$tdatar_utente_ente[".listAjax"] = false;

	$tdatar_utente_ente[".audit"] = false;

	$tdatar_utente_ente[".locking"] = false;


$pages = $tdatar_utente_ente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatar_utente_ente[".edit"] = true;
	$tdatar_utente_ente[".afterEditAction"] = 1;
	$tdatar_utente_ente[".closePopupAfterEdit"] = 1;
	$tdatar_utente_ente[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatar_utente_ente[".add"] = true;
$tdatar_utente_ente[".afterAddAction"] = 1;
$tdatar_utente_ente[".closePopupAfterAdd"] = 1;
$tdatar_utente_ente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatar_utente_ente[".list"] = true;
}



$tdatar_utente_ente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatar_utente_ente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatar_utente_ente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatar_utente_ente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatar_utente_ente[".printFriendly"] = true;
}



$tdatar_utente_ente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatar_utente_ente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatar_utente_ente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatar_utente_ente[".isUseAjaxSuggest"] = true;

$tdatar_utente_ente[".rowHighlite"] = true;



																		

$tdatar_utente_ente[".ajaxCodeSnippetAdded"] = false;

$tdatar_utente_ente[".buttonsAdded"] = false;

$tdatar_utente_ente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatar_utente_ente[".isUseTimeForSearch"] = false;


$tdatar_utente_ente[".badgeColor"] = "6493EA";


$tdatar_utente_ente[".allSearchFields"] = array();
$tdatar_utente_ente[".filterFields"] = array();
$tdatar_utente_ente[".requiredSearchFields"] = array();

$tdatar_utente_ente[".googleLikeFields"] = array();
$tdatar_utente_ente[".googleLikeFields"][] = "cf_utente";
$tdatar_utente_ente[".googleLikeFields"][] = "id_ente";
$tdatar_utente_ente[".googleLikeFields"][] = "id_area";
$tdatar_utente_ente[".googleLikeFields"][] = "nome";
$tdatar_utente_ente[".googleLikeFields"][] = "id_d_area";



$tdatar_utente_ente[".tableType"] = "list";

$tdatar_utente_ente[".printerPageOrientation"] = 0;
$tdatar_utente_ente[".nPrinterPageScale"] = 100;

$tdatar_utente_ente[".nPrinterSplitRecords"] = 40;

$tdatar_utente_ente[".geocodingEnabled"] = false;










$tdatar_utente_ente[".pageSize"] = 20;

$tdatar_utente_ente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatar_utente_ente[".strOrderBy"] = $tstrOrderBy;

$tdatar_utente_ente[".orderindexes"] = array();

$tdatar_utente_ente[".sqlHead"] = "SELECT hostname.r_utente_ente.cf_utente,  hostname.r_utente_ente.id_ente,  hostname.r_utente_area.id_area,  hostname.struttura.nome,  hostname.area.id_d_area";
$tdatar_utente_ente[".sqlFrom"] = "FROM hostname.r_utente_ente  INNER JOIN hostname.ente ON hostname.r_utente_ente.id_ente = hostname.ente.id_ente  INNER JOIN hostname.r_utente_area ON hostname.r_utente_ente.cf_utente = hostname.r_utente_area.cf_utente  INNER JOIN hostname.struttura ON hostname.ente.id_ente = hostname.struttura.id_ente  INNER JOIN hostname.area ON hostname.r_utente_area.id_area = hostname.area.id_area";
$tdatar_utente_ente[".sqlWhereExpr"] = "";
$tdatar_utente_ente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatar_utente_ente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatar_utente_ente[".arrGroupsPerPage"] = $arrGPP;

$tdatar_utente_ente[".highlightSearchResults"] = true;

$tableKeysr_utente_ente = array();
$tableKeysr_utente_ente[] = "cf_utente";
$tableKeysr_utente_ente[] = "id_ente";
$tdatar_utente_ente[".Keys"] = $tableKeysr_utente_ente;


$tdatar_utente_ente[".hideMobileList"] = array();




//	cf_utente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cf_utente";
	$fdata["GoodName"] = "cf_utente";
	$fdata["ownerTable"] = "hostname.r_utente_ente";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_ente","cf_utente");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cf_utente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.r_utente_ente.cf_utente";

	
	
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


	$tdatar_utente_ente["cf_utente"] = $fdata;
		$tdatar_utente_ente[".searchableFields"][] = "cf_utente";
//	id_ente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_ente";
	$fdata["GoodName"] = "id_ente";
	$fdata["ownerTable"] = "hostname.r_utente_ente";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_ente","id_ente");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_ente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.r_utente_ente.id_ente";

	
	
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


	$tdatar_utente_ente["id_ente"] = $fdata;
		$tdatar_utente_ente[".searchableFields"][] = "id_ente";
//	id_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_area";
	$fdata["GoodName"] = "id_area";
	$fdata["ownerTable"] = "hostname.r_utente_area";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_ente","id_area");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.r_utente_area.id_area";

	
	
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


	$tdatar_utente_ente["id_area"] = $fdata;
		$tdatar_utente_ente[".searchableFields"][] = "id_area";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "hostname.struttura";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_ente","nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.struttura.nome";

	
	
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


	$tdatar_utente_ente["nome"] = $fdata;
		$tdatar_utente_ente[".searchableFields"][] = "nome";
//	id_d_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_d_area";
	$fdata["GoodName"] = "id_d_area";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_r_utente_ente","id_d_area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_d_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname.area.id_d_area";

	
	
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


	$tdatar_utente_ente["id_d_area"] = $fdata;
		$tdatar_utente_ente[".searchableFields"][] = "id_d_area";


$tables_data["hostname.r_utente_ente"]=&$tdatar_utente_ente;
$field_labels["hostname_r_utente_ente"] = &$fieldLabelsr_utente_ente;
$fieldToolTips["hostname_r_utente_ente"] = &$fieldToolTipsr_utente_ente;
$placeHolders["hostname_r_utente_ente"] = &$placeHoldersr_utente_ente;
$page_titles["hostname_r_utente_ente"] = &$pageTitlesr_utente_ente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.r_utente_ente"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hostname.r_utente_ente"] = array();



	
				$strOriginalDetailsTable="hostname.ente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.ente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.r_utente_ente"][0] = $masterParams;
				$masterTablesData["hostname.r_utente_ente"][0]["masterKeys"] = array();
	$masterTablesData["hostname.r_utente_ente"][0]["masterKeys"][]="id_ente";
				$masterTablesData["hostname.r_utente_ente"][0]["detailKeys"] = array();
	$masterTablesData["hostname.r_utente_ente"][0]["detailKeys"][]="id_ente";
		
	
				$strOriginalDetailsTable="hostname.utenti";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.utenti";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "utenti";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.r_utente_ente"][1] = $masterParams;
				$masterTablesData["hostname.r_utente_ente"][1]["masterKeys"] = array();
	$masterTablesData["hostname.r_utente_ente"][1]["masterKeys"][]="cf_utente";
				$masterTablesData["hostname.r_utente_ente"][1]["detailKeys"] = array();
	$masterTablesData["hostname.r_utente_ente"][1]["detailKeys"][]="cf_utente";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_r_utente_ente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hostname.r_utente_ente.cf_utente,  hostname.r_utente_ente.id_ente,  hostname.r_utente_area.id_area,  hostname.struttura.nome,  hostname.area.id_d_area";
$proto0["m_strFrom"] = "FROM hostname.r_utente_ente  INNER JOIN hostname.ente ON hostname.r_utente_ente.id_ente = hostname.ente.id_ente  INNER JOIN hostname.r_utente_area ON hostname.r_utente_ente.cf_utente = hostname.r_utente_area.cf_utente  INNER JOIN hostname.struttura ON hostname.ente.id_ente = hostname.struttura.id_ente  INNER JOIN hostname.area ON hostname.r_utente_area.id_area = hostname.area.id_area";
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
	"m_strTable" => "hostname.r_utente_ente",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto6["m_sql"] = "hostname.r_utente_ente.cf_utente";
$proto6["m_srcTableName"] = "hostname.r_utente_ente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ente",
	"m_strTable" => "hostname.r_utente_ente",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto8["m_sql"] = "hostname.r_utente_ente.id_ente";
$proto8["m_srcTableName"] = "hostname.r_utente_ente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_area",
	"m_strTable" => "hostname.r_utente_area",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto10["m_sql"] = "hostname.r_utente_area.id_area";
$proto10["m_srcTableName"] = "hostname.r_utente_ente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "hostname.struttura",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto12["m_sql"] = "hostname.struttura.nome";
$proto12["m_srcTableName"] = "hostname.r_utente_ente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_d_area",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto14["m_sql"] = "hostname.area.id_d_area";
$proto14["m_srcTableName"] = "hostname.r_utente_ente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "hostname.r_utente_ente";
$proto17["m_srcTableName"] = "hostname.r_utente_ente";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cf_utente";
$proto17["m_columns"][] = "id_ente";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "hostname.r_utente_ente";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "hostname.r_utente_ente";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "hostname.ente";
$proto21["m_srcTableName"] = "hostname.r_utente_ente";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_ente";
$proto21["m_columns"][] = "nome";
$proto21["m_columns"][] = "tot_posti_target";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN hostname.ente ON hostname.r_utente_ente.id_ente = hostname.ente.id_ente";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "hostname.r_utente_ente";
$proto22=array();
$proto22["m_sql"] = "hostname.r_utente_ente.id_ente = hostname.ente.id_ente";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ente",
	"m_strTable" => "hostname.r_utente_ente",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= hostname.ente.id_ente";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "hostname.r_utente_area";
$proto25["m_srcTableName"] = "hostname.r_utente_ente";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cf_utente";
$proto25["m_columns"][] = "id_area";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN hostname.r_utente_area ON hostname.r_utente_ente.cf_utente = hostname.r_utente_area.cf_utente";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "hostname.r_utente_ente";
$proto26=array();
$proto26["m_sql"] = "hostname.r_utente_ente.cf_utente = hostname.r_utente_area.cf_utente";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cf_utente",
	"m_strTable" => "hostname.r_utente_ente",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= hostname.r_utente_area.cf_utente";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "hostname.struttura";
$proto29["m_srcTableName"] = "hostname.r_utente_ente";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id_struttura";
$proto29["m_columns"][] = "id_ente";
$proto29["m_columns"][] = "nome";
$proto29["m_columns"][] = "natura";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN hostname.struttura ON hostname.ente.id_ente = hostname.struttura.id_ente";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "hostname.r_utente_ente";
$proto30=array();
$proto30["m_sql"] = "hostname.ente.id_ente = hostname.struttura.id_ente";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ente",
	"m_strTable" => "hostname.ente",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= hostname.struttura.id_ente";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "hostname.area";
$proto33["m_srcTableName"] = "hostname.r_utente_ente";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_area";
$proto33["m_columns"][] = "id_struttura";
$proto33["m_columns"][] = "id_d_area";
$proto33["m_columns"][] = "nome";
$proto33["m_columns"][] = "responsabile";
$proto33["m_columns"][] = "riferimento";
$proto33["m_columns"][] = "stato_validita";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN hostname.area ON hostname.r_utente_area.id_area = hostname.area.id_area";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "hostname.r_utente_ente";
$proto34=array();
$proto34["m_sql"] = "hostname.r_utente_area.id_area = hostname.area.id_area";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_area",
	"m_strTable" => "hostname.r_utente_area",
	"m_srcTableName" => "hostname.r_utente_ente"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= hostname.area.id_area";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hostname.r_utente_ente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_r_utente_ente = createSqlQuery_r_utente_ente();


	
		;

					

$tdatar_utente_ente[".sqlquery"] = $queryData_r_utente_ente;

$tableEvents["hostname.r_utente_ente"] = new eventsBase;
$tdatar_utente_ente[".hasEvents"] = false;

?>