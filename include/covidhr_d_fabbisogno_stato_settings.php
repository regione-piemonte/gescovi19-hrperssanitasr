<?php



$tdatacovidhr_d_fabbisogno_stato = array();
$tdatacovidhr_d_fabbisogno_stato[".searchableFields"] = array();
$tdatacovidhr_d_fabbisogno_stato[".ShortName"] = "covidhr_d_fabbisogno_stato";
$tdatacovidhr_d_fabbisogno_stato[".OwnerID"] = "";
$tdatacovidhr_d_fabbisogno_stato[".OriginalTable"] = "hostname.covidhr_d_fabbisogno_stato";


$tdatacovidhr_d_fabbisogno_stato[".pagesByType"] = my_json_decode( "{}" );
$tdatacovidhr_d_fabbisogno_stato[".originalPagesByType"] = $tdatacovidhr_d_fabbisogno_stato[".pagesByType"];
$tdatacovidhr_d_fabbisogno_stato[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacovidhr_d_fabbisogno_stato[".originalPages"] = $tdatacovidhr_d_fabbisogno_stato[".pages"];
$tdatacovidhr_d_fabbisogno_stato[".defaultPages"] = my_json_decode( "{}" );
$tdatacovidhr_d_fabbisogno_stato[".originalDefaultPages"] = $tdatacovidhr_d_fabbisogno_stato[".defaultPages"];

//	field labels
$fieldLabelscovidhr_d_fabbisogno_stato = array();
$fieldToolTipscovidhr_d_fabbisogno_stato = array();
$pageTitlescovidhr_d_fabbisogno_stato = array();
$placeHolderscovidhr_d_fabbisogno_stato = array();

if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"] = array();
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"] = array();
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"] = array();
	$pageTitlescovidhr_d_fabbisogno_stato["Italian"] = array();
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_id"] = "Fab Stato Id";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_id"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_id"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_code"] = "Fab Stato Code";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_code"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_code"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_desc"] = "Fab Stato Desc";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_desc"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["fab_stato_desc"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["validita_inizio"] = "Validita Inizio";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["validita_inizio"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["validita_inizio"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["validita_fine"] = "Validita Fine";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["validita_fine"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["validita_fine"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["data_creazione"] = "Data Creazione";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["data_creazione"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["data_creazione"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["data_modifica"] = "Data Modifica";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["data_modifica"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["data_modifica"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["data_cancellazione"] = "Data Cancellazione";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["data_cancellazione"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["data_cancellazione"] = "";
	$fieldLabelscovidhr_d_fabbisogno_stato["Italian"]["utente_operazione"] = "Utente Operazione";
	$fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]["utente_operazione"] = "";
	$placeHolderscovidhr_d_fabbisogno_stato["Italian"]["utente_operazione"] = "";
	if (count($fieldToolTipscovidhr_d_fabbisogno_stato["Italian"]))
		$tdatacovidhr_d_fabbisogno_stato[".isUseToolTips"] = true;
}


	$tdatacovidhr_d_fabbisogno_stato[".NCSearch"] = true;



$tdatacovidhr_d_fabbisogno_stato[".shortTableName"] = "covidhr_d_fabbisogno_stato";
$tdatacovidhr_d_fabbisogno_stato[".nSecOptions"] = 0;

$tdatacovidhr_d_fabbisogno_stato[".mainTableOwnerID"] = "";
$tdatacovidhr_d_fabbisogno_stato[".entityType"] = 0;

$tdatacovidhr_d_fabbisogno_stato[".strOriginalTableName"] = "hostname.covidhr_d_fabbisogno_stato";

	



$tdatacovidhr_d_fabbisogno_stato[".showAddInPopup"] = false;

$tdatacovidhr_d_fabbisogno_stato[".showEditInPopup"] = false;

$tdatacovidhr_d_fabbisogno_stato[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacovidhr_d_fabbisogno_stato[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacovidhr_d_fabbisogno_stato[".listAjax"] = false;
//	temporary
$tdatacovidhr_d_fabbisogno_stato[".listAjax"] = false;

	$tdatacovidhr_d_fabbisogno_stato[".audit"] = false;

	$tdatacovidhr_d_fabbisogno_stato[".locking"] = false;


$pages = $tdatacovidhr_d_fabbisogno_stato[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacovidhr_d_fabbisogno_stato[".edit"] = true;
	$tdatacovidhr_d_fabbisogno_stato[".afterEditAction"] = 1;
	$tdatacovidhr_d_fabbisogno_stato[".closePopupAfterEdit"] = 1;
	$tdatacovidhr_d_fabbisogno_stato[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacovidhr_d_fabbisogno_stato[".add"] = true;
$tdatacovidhr_d_fabbisogno_stato[".afterAddAction"] = 1;
$tdatacovidhr_d_fabbisogno_stato[".closePopupAfterAdd"] = 1;
$tdatacovidhr_d_fabbisogno_stato[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacovidhr_d_fabbisogno_stato[".list"] = true;
}



$tdatacovidhr_d_fabbisogno_stato[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacovidhr_d_fabbisogno_stato[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacovidhr_d_fabbisogno_stato[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacovidhr_d_fabbisogno_stato[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacovidhr_d_fabbisogno_stato[".printFriendly"] = true;
}



$tdatacovidhr_d_fabbisogno_stato[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacovidhr_d_fabbisogno_stato[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacovidhr_d_fabbisogno_stato[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacovidhr_d_fabbisogno_stato[".isUseAjaxSuggest"] = true;

$tdatacovidhr_d_fabbisogno_stato[".rowHighlite"] = true;



						

$tdatacovidhr_d_fabbisogno_stato[".ajaxCodeSnippetAdded"] = false;

$tdatacovidhr_d_fabbisogno_stato[".buttonsAdded"] = false;

$tdatacovidhr_d_fabbisogno_stato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacovidhr_d_fabbisogno_stato[".isUseTimeForSearch"] = false;


$tdatacovidhr_d_fabbisogno_stato[".badgeColor"] = "D2691E";


$tdatacovidhr_d_fabbisogno_stato[".allSearchFields"] = array();
$tdatacovidhr_d_fabbisogno_stato[".filterFields"] = array();
$tdatacovidhr_d_fabbisogno_stato[".requiredSearchFields"] = array();

$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"] = array();
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "fab_stato_id";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "fab_stato_code";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "fab_stato_desc";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "validita_inizio";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "validita_fine";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "data_creazione";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "data_modifica";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "data_cancellazione";
$tdatacovidhr_d_fabbisogno_stato[".googleLikeFields"][] = "utente_operazione";



$tdatacovidhr_d_fabbisogno_stato[".tableType"] = "list";

$tdatacovidhr_d_fabbisogno_stato[".printerPageOrientation"] = 0;
$tdatacovidhr_d_fabbisogno_stato[".nPrinterPageScale"] = 100;

$tdatacovidhr_d_fabbisogno_stato[".nPrinterSplitRecords"] = 40;

$tdatacovidhr_d_fabbisogno_stato[".geocodingEnabled"] = false;










$tdatacovidhr_d_fabbisogno_stato[".pageSize"] = 20;

$tdatacovidhr_d_fabbisogno_stato[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacovidhr_d_fabbisogno_stato[".strOrderBy"] = $tstrOrderBy;

$tdatacovidhr_d_fabbisogno_stato[".orderindexes"] = array();

$tdatacovidhr_d_fabbisogno_stato[".sqlHead"] = "SELECT fab_stato_id,  	fab_stato_code,  	fab_stato_desc,  	validita_inizio,  	validita_fine,  	data_creazione,  	data_modifica,  	data_cancellazione,  	utente_operazione";
$tdatacovidhr_d_fabbisogno_stato[".sqlFrom"] = "FROM hostname.covidhr_d_fabbisogno_stato";
$tdatacovidhr_d_fabbisogno_stato[".sqlWhereExpr"] = "";
$tdatacovidhr_d_fabbisogno_stato[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacovidhr_d_fabbisogno_stato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacovidhr_d_fabbisogno_stato[".arrGroupsPerPage"] = $arrGPP;

$tdatacovidhr_d_fabbisogno_stato[".highlightSearchResults"] = true;

$tableKeyscovidhr_d_fabbisogno_stato = array();
$tableKeyscovidhr_d_fabbisogno_stato[] = "fab_stato_id";
$tdatacovidhr_d_fabbisogno_stato[".Keys"] = $tableKeyscovidhr_d_fabbisogno_stato;


$tdatacovidhr_d_fabbisogno_stato[".hideMobileList"] = array();




//	fab_stato_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fab_stato_id";
	$fdata["GoodName"] = "fab_stato_id";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","fab_stato_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "fab_stato_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fab_stato_id";

	
	
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


	$tdatacovidhr_d_fabbisogno_stato["fab_stato_id"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "fab_stato_id";
//	fab_stato_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fab_stato_code";
	$fdata["GoodName"] = "fab_stato_code";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","fab_stato_code");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "fab_stato_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fab_stato_code";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacovidhr_d_fabbisogno_stato["fab_stato_code"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "fab_stato_code";
//	fab_stato_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fab_stato_desc";
	$fdata["GoodName"] = "fab_stato_desc";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","fab_stato_desc");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "fab_stato_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fab_stato_desc";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacovidhr_d_fabbisogno_stato["fab_stato_desc"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "fab_stato_desc";
//	validita_inizio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "validita_inizio";
	$fdata["GoodName"] = "validita_inizio";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","validita_inizio");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "validita_inizio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "validita_inizio";

	
	
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


	$tdatacovidhr_d_fabbisogno_stato["validita_inizio"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "validita_inizio";
//	validita_fine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "validita_fine";
	$fdata["GoodName"] = "validita_fine";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","validita_fine");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "validita_fine";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "validita_fine";

	
	
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


	$tdatacovidhr_d_fabbisogno_stato["validita_fine"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "validita_fine";
//	data_creazione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data_creazione";
	$fdata["GoodName"] = "data_creazione";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","data_creazione");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "data_creazione";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_creazione";

	
	
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


	$tdatacovidhr_d_fabbisogno_stato["data_creazione"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "data_creazione";
//	data_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "data_modifica";
	$fdata["GoodName"] = "data_modifica";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","data_modifica");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "data_modifica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_modifica";

	
	
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


	$tdatacovidhr_d_fabbisogno_stato["data_modifica"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "data_modifica";
//	data_cancellazione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "data_cancellazione";
	$fdata["GoodName"] = "data_cancellazione";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","data_cancellazione");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "data_cancellazione";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_cancellazione";

	
	
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


	$tdatacovidhr_d_fabbisogno_stato["data_cancellazione"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "data_cancellazione";
//	utente_operazione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "utente_operazione";
	$fdata["GoodName"] = "utente_operazione";
	$fdata["ownerTable"] = "hostname.covidhr_d_fabbisogno_stato";
	$fdata["Label"] = GetFieldLabel("hostname_covidhr_d_fabbisogno_stato","utente_operazione");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "utente_operazione";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "utente_operazione";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacovidhr_d_fabbisogno_stato["utente_operazione"] = $fdata;
		$tdatacovidhr_d_fabbisogno_stato[".searchableFields"][] = "utente_operazione";


$tables_data["hostname.covidhr_d_fabbisogno_stato"]=&$tdatacovidhr_d_fabbisogno_stato;
$field_labels["hostname_covidhr_d_fabbisogno_stato"] = &$fieldLabelscovidhr_d_fabbisogno_stato;
$fieldToolTips["hostname_covidhr_d_fabbisogno_stato"] = &$fieldToolTipscovidhr_d_fabbisogno_stato;
$placeHolders["hostname_covidhr_d_fabbisogno_stato"] = &$placeHolderscovidhr_d_fabbisogno_stato;
$page_titles["hostname_covidhr_d_fabbisogno_stato"] = &$pageTitlescovidhr_d_fabbisogno_stato;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hostname.covidhr_d_fabbisogno_stato"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hostname.covidhr_d_fabbisogno_stato"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_covidhr_d_fabbisogno_stato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fab_stato_id,  	fab_stato_code,  	fab_stato_desc,  	validita_inizio,  	validita_fine,  	data_creazione,  	data_modifica,  	data_cancellazione,  	utente_operazione";
$proto0["m_strFrom"] = "FROM hostname.covidhr_d_fabbisogno_stato";
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
	"m_strName" => "fab_stato_id",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto6["m_sql"] = "fab_stato_id";
$proto6["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fab_stato_code",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto8["m_sql"] = "fab_stato_code";
$proto8["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fab_stato_desc",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto10["m_sql"] = "fab_stato_desc";
$proto10["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "validita_inizio",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto12["m_sql"] = "validita_inizio";
$proto12["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "validita_fine",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto14["m_sql"] = "validita_fine";
$proto14["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "data_creazione",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto16["m_sql"] = "data_creazione";
$proto16["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "data_modifica",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto18["m_sql"] = "data_modifica";
$proto18["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "data_cancellazione",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto20["m_sql"] = "data_cancellazione";
$proto20["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "utente_operazione",
	"m_strTable" => "hostname.covidhr_d_fabbisogno_stato",
	"m_srcTableName" => "hostname.covidhr_d_fabbisogno_stato"
));

$proto22["m_sql"] = "utente_operazione";
$proto22["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto25["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "fab_stato_id";
$proto25["m_columns"][] = "fab_stato_code";
$proto25["m_columns"][] = "fab_stato_desc";
$proto25["m_columns"][] = "validita_inizio";
$proto25["m_columns"][] = "validita_fine";
$proto25["m_columns"][] = "data_creazione";
$proto25["m_columns"][] = "data_modifica";
$proto25["m_columns"][] = "data_cancellazione";
$proto25["m_columns"][] = "utente_operazione";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "hostname.covidhr_d_fabbisogno_stato";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "hostname.covidhr_d_fabbisogno_stato";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hostname.covidhr_d_fabbisogno_stato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_covidhr_d_fabbisogno_stato = createSqlQuery_covidhr_d_fabbisogno_stato();


	
		;

									

$tdatacovidhr_d_fabbisogno_stato[".sqlquery"] = $queryData_covidhr_d_fabbisogno_stato;

$tableEvents["hostname.covidhr_d_fabbisogno_stato"] = new eventsBase;
$tdatacovidhr_d_fabbisogno_stato[".hasEvents"] = false;

?>