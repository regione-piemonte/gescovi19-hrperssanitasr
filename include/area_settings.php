<?php



$tdataarea = array();
$tdataarea[".searchableFields"] = array();
$tdataarea[".ShortName"] = "area";
$tdataarea[".OwnerID"] = "";
$tdataarea[".OriginalTable"] = "hostname.area";


$tdataarea[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataarea[".originalPagesByType"] = $tdataarea[".pagesByType"];
$tdataarea[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataarea[".originalPages"] = $tdataarea[".pages"];
$tdataarea[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataarea[".originalDefaultPages"] = $tdataarea[".defaultPages"];

//	field labels
$fieldLabelsarea = array();
$fieldToolTipsarea = array();
$pageTitlesarea = array();
$placeHoldersarea = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsarea["Italian"] = array();
	$fieldToolTipsarea["Italian"] = array();
	$placeHoldersarea["Italian"] = array();
	$pageTitlesarea["Italian"] = array();
	$fieldLabelsarea["Italian"]["id_area"] = "Id Area";
	$fieldToolTipsarea["Italian"]["id_area"] = "";
	$placeHoldersarea["Italian"]["id_area"] = "";
	$fieldLabelsarea["Italian"]["id_struttura"] = "Id Struttura";
	$fieldToolTipsarea["Italian"]["id_struttura"] = "";
	$placeHoldersarea["Italian"]["id_struttura"] = "";
	$fieldLabelsarea["Italian"]["id_d_area"] = "Id D Area";
	$fieldToolTipsarea["Italian"]["id_d_area"] = "";
	$placeHoldersarea["Italian"]["id_d_area"] = "";
	$fieldLabelsarea["Italian"]["nome"] = "AREA";
	$fieldToolTipsarea["Italian"]["nome"] = "";
	$placeHoldersarea["Italian"]["nome"] = "";
	$fieldLabelsarea["Italian"]["responsabile"] = "Responsabile";
	$fieldToolTipsarea["Italian"]["responsabile"] = "";
	$placeHoldersarea["Italian"]["responsabile"] = "";
	$fieldLabelsarea["Italian"]["riferimento"] = "Riferimento";
	$fieldToolTipsarea["Italian"]["riferimento"] = "";
	$placeHoldersarea["Italian"]["riferimento"] = "";
	$fieldLabelsarea["Italian"]["stato_validita"] = "Stato Validita";
	$fieldToolTipsarea["Italian"]["stato_validita"] = "";
	$placeHoldersarea["Italian"]["stato_validita"] = "";
	if (count($fieldToolTipsarea["Italian"]))
		$tdataarea[".isUseToolTips"] = true;
}


	$tdataarea[".NCSearch"] = true;



$tdataarea[".shortTableName"] = "area";
$tdataarea[".nSecOptions"] = 0;

$tdataarea[".mainTableOwnerID"] = "";
$tdataarea[".entityType"] = 0;

$tdataarea[".strOriginalTableName"] = "hostname.area";

	



$tdataarea[".showAddInPopup"] = false;

$tdataarea[".showEditInPopup"] = false;

$tdataarea[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataarea[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataarea[".listAjax"] = false;
//	temporary
$tdataarea[".listAjax"] = false;

	$tdataarea[".audit"] = false;

	$tdataarea[".locking"] = false;


$pages = $tdataarea[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataarea[".edit"] = true;
	$tdataarea[".afterEditAction"] = 1;
	$tdataarea[".closePopupAfterEdit"] = 1;
	$tdataarea[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataarea[".add"] = true;
$tdataarea[".afterAddAction"] = 1;
$tdataarea[".closePopupAfterAdd"] = 1;
$tdataarea[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataarea[".list"] = true;
}



$tdataarea[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataarea[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataarea[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataarea[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataarea[".printFriendly"] = true;
}



$tdataarea[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataarea[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataarea[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataarea[".isUseAjaxSuggest"] = true;

$tdataarea[".rowHighlite"] = true;



												

$tdataarea[".ajaxCodeSnippetAdded"] = false;

$tdataarea[".buttonsAdded"] = false;

$tdataarea[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarea[".isUseTimeForSearch"] = false;


$tdataarea[".badgeColor"] = "7b68ee";


$tdataarea[".allSearchFields"] = array();
$tdataarea[".filterFields"] = array();
$tdataarea[".requiredSearchFields"] = array();

$tdataarea[".googleLikeFields"] = array();
$tdataarea[".googleLikeFields"][] = "id_area";
$tdataarea[".googleLikeFields"][] = "id_struttura";
$tdataarea[".googleLikeFields"][] = "id_d_area";
$tdataarea[".googleLikeFields"][] = "nome";
$tdataarea[".googleLikeFields"][] = "responsabile";
$tdataarea[".googleLikeFields"][] = "riferimento";
$tdataarea[".googleLikeFields"][] = "stato_validita";



$tdataarea[".tableType"] = "list";

$tdataarea[".printerPageOrientation"] = 0;
$tdataarea[".nPrinterPageScale"] = 100;

$tdataarea[".nPrinterSplitRecords"] = 40;

$tdataarea[".geocodingEnabled"] = false;










$tdataarea[".pageSize"] = 20;

$tdataarea[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataarea[".strOrderBy"] = $tstrOrderBy;

$tdataarea[".orderindexes"] = array();

$tdataarea[".sqlHead"] = "SELECT id_area,  	id_struttura,  	id_d_area,  	nome,  	responsabile,  	riferimento,  	stato_validita";
$tdataarea[".sqlFrom"] = "FROM hostname.area";
$tdataarea[".sqlWhereExpr"] = "";
$tdataarea[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarea[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarea[".arrGroupsPerPage"] = $arrGPP;

$tdataarea[".highlightSearchResults"] = true;

$tableKeysarea = array();
$tableKeysarea[] = "id_area";
$tdataarea[".Keys"] = $tableKeysarea;


$tdataarea[".hideMobileList"] = array();




//	id_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_area";
	$fdata["GoodName"] = "id_area";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_area","id_area");
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


	$tdataarea["id_area"] = $fdata;
		$tdataarea[".searchableFields"][] = "id_area";
//	id_struttura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_struttura";
	$fdata["GoodName"] = "id_struttura";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_area","id_struttura");
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


	$tdataarea["id_struttura"] = $fdata;
		$tdataarea[".searchableFields"][] = "id_struttura";
//	id_d_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_d_area";
	$fdata["GoodName"] = "id_d_area";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_area","id_d_area");
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


	$tdataarea["id_d_area"] = $fdata;
		$tdataarea[".searchableFields"][] = "id_d_area";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_area","nome");
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


	$tdataarea["nome"] = $fdata;
		$tdataarea[".searchableFields"][] = "nome";
//	responsabile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "responsabile";
	$fdata["GoodName"] = "responsabile";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_area","responsabile");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "responsabile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsabile";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataarea["responsabile"] = $fdata;
		$tdataarea[".searchableFields"][] = "responsabile";
//	riferimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "riferimento";
	$fdata["GoodName"] = "riferimento";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_area","riferimento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "riferimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "riferimento";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataarea["riferimento"] = $fdata;
		$tdataarea[".searchableFields"][] = "riferimento";
//	stato_validita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "stato_validita";
	$fdata["GoodName"] = "stato_validita";
	$fdata["ownerTable"] = "hostname.area";
	$fdata["Label"] = GetFieldLabel("hostname_area","stato_validita");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "stato_validita";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stato_validita";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataarea["stato_validita"] = $fdata;
		$tdataarea[".searchableFields"][] = "stato_validita";


$tables_data["hostname.area"]=&$tdataarea;
$field_labels["hostname_area"] = &$fieldLabelsarea;
$fieldToolTips["hostname_area"] = &$fieldToolTipsarea;
$placeHolders["hostname_area"] = &$placeHoldersarea;
$page_titles["hostname_area"] = &$pageTitlesarea;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.area"] = array();
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


		
	$detailsTablesData["hostname.area"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hostname.area"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hostname.area"][$dIndex]["masterKeys"][]="id_area";

				$detailsTablesData["hostname.area"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hostname.area"][$dIndex]["detailKeys"][]="id_area";

// tables which are master tables for current table (detail)
$masterTablesData["hostname.area"] = array();



	
				$strOriginalDetailsTable="hostname.d_area";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hostname.d_area";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "d_area";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hostname.area"][0] = $masterParams;
				$masterTablesData["hostname.area"][0]["masterKeys"] = array();
	$masterTablesData["hostname.area"][0]["masterKeys"][]="id_d_area";
				$masterTablesData["hostname.area"][0]["detailKeys"] = array();
	$masterTablesData["hostname.area"][0]["detailKeys"][]="id_d_area";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_area()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_area,  	id_struttura,  	id_d_area,  	nome,  	responsabile,  	riferimento,  	stato_validita";
$proto0["m_strFrom"] = "FROM hostname.area";
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
	"m_strName" => "id_area",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.area"
));

$proto6["m_sql"] = "id_area";
$proto6["m_srcTableName"] = "hostname.area";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_struttura",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.area"
));

$proto8["m_sql"] = "id_struttura";
$proto8["m_srcTableName"] = "hostname.area";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_d_area",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.area"
));

$proto10["m_sql"] = "id_d_area";
$proto10["m_srcTableName"] = "hostname.area";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.area"
));

$proto12["m_sql"] = "nome";
$proto12["m_srcTableName"] = "hostname.area";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "responsabile",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.area"
));

$proto14["m_sql"] = "responsabile";
$proto14["m_srcTableName"] = "hostname.area";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "riferimento",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.area"
));

$proto16["m_sql"] = "riferimento";
$proto16["m_srcTableName"] = "hostname.area";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "stato_validita",
	"m_strTable" => "hostname.area",
	"m_srcTableName" => "hostname.area"
));

$proto18["m_sql"] = "stato_validita";
$proto18["m_srcTableName"] = "hostname.area";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "hostname.area";
$proto21["m_srcTableName"] = "hostname.area";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_area";
$proto21["m_columns"][] = "id_struttura";
$proto21["m_columns"][] = "id_d_area";
$proto21["m_columns"][] = "nome";
$proto21["m_columns"][] = "responsabile";
$proto21["m_columns"][] = "riferimento";
$proto21["m_columns"][] = "stato_validita";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "hostname.area";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "hostname.area";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hostname.area";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_area = createSqlQuery_area();


	
		;

							

$tdataarea[".sqlquery"] = $queryData_area;

$tableEvents["hostname.area"] = new eventsBase;
$tdataarea[".hasEvents"] = false;

?>