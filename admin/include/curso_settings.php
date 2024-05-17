<?php



$tdatacurso = array();
$tdatacurso[".searchableFields"] = array();
$tdatacurso[".ShortName"] = "curso";
$tdatacurso[".OwnerID"] = "";
$tdatacurso[".OriginalTable"] = "curso";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacurso[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacurso[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacurso[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscurso = array();
$fieldToolTipscurso = array();
$pageTitlescurso = array();
$placeHolderscurso = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscurso["Spanish"] = array();
	$fieldToolTipscurso["Spanish"] = array();
	$placeHolderscurso["Spanish"] = array();
	$pageTitlescurso["Spanish"] = array();
	$fieldLabelscurso["Spanish"]["idCurso"] = "Id Curso";
	$fieldToolTipscurso["Spanish"]["idCurso"] = "";
	$placeHolderscurso["Spanish"]["idCurso"] = "";
	$fieldLabelscurso["Spanish"]["NombreCurso"] = "Nombre Curso";
	$fieldToolTipscurso["Spanish"]["NombreCurso"] = "";
	$placeHolderscurso["Spanish"]["NombreCurso"] = "";
	$fieldLabelscurso["Spanish"]["Seccion"] = "Seccion";
	$fieldToolTipscurso["Spanish"]["Seccion"] = "";
	$placeHolderscurso["Spanish"]["Seccion"] = "";
	$fieldLabelscurso["Spanish"]["NRC"] = "NRC";
	$fieldToolTipscurso["Spanish"]["NRC"] = "";
	$placeHolderscurso["Spanish"]["NRC"] = "";
	$fieldLabelscurso["Spanish"]["Academia"] = "Academia";
	$fieldToolTipscurso["Spanish"]["Academia"] = "";
	$placeHolderscurso["Spanish"]["Academia"] = "";
	$fieldLabelscurso["Spanish"]["DiasClase"] = "Dias Clase";
	$fieldToolTipscurso["Spanish"]["DiasClase"] = "";
	$placeHolderscurso["Spanish"]["DiasClase"] = "";
	$fieldLabelscurso["Spanish"]["HorasClase"] = "Horas Clase";
	$fieldToolTipscurso["Spanish"]["HorasClase"] = "";
	$placeHolderscurso["Spanish"]["HorasClase"] = "";
	$fieldLabelscurso["Spanish"]["idCicloEscolar"] = "Id Ciclo Escolar";
	$fieldToolTipscurso["Spanish"]["idCicloEscolar"] = "";
	$placeHolderscurso["Spanish"]["idCicloEscolar"] = "";
	if (count($fieldToolTipscurso["Spanish"]))
		$tdatacurso[".isUseToolTips"] = true;
}


	$tdatacurso[".NCSearch"] = true;



$tdatacurso[".shortTableName"] = "curso";
$tdatacurso[".nSecOptions"] = 0;

$tdatacurso[".mainTableOwnerID"] = "";
$tdatacurso[".entityType"] = 0;

$tdatacurso[".strOriginalTableName"] = "curso";

	



$tdatacurso[".showAddInPopup"] = false;

$tdatacurso[".showEditInPopup"] = false;

$tdatacurso[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacurso[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacurso[".listAjax"] = false;
//	temporary
$tdatacurso[".listAjax"] = false;

	$tdatacurso[".audit"] = false;

	$tdatacurso[".locking"] = false;


$pages = $tdatacurso[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacurso[".edit"] = true;
	$tdatacurso[".afterEditAction"] = 1;
	$tdatacurso[".closePopupAfterEdit"] = 1;
	$tdatacurso[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacurso[".add"] = true;
$tdatacurso[".afterAddAction"] = 1;
$tdatacurso[".closePopupAfterAdd"] = 1;
$tdatacurso[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacurso[".list"] = true;
}



$tdatacurso[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacurso[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacurso[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacurso[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacurso[".printFriendly"] = true;
}



$tdatacurso[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacurso[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacurso[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacurso[".isUseAjaxSuggest"] = true;

$tdatacurso[".rowHighlite"] = true;





$tdatacurso[".ajaxCodeSnippetAdded"] = false;

$tdatacurso[".buttonsAdded"] = false;

$tdatacurso[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacurso[".isUseTimeForSearch"] = false;


$tdatacurso[".badgeColor"] = "3CB371";


$tdatacurso[".allSearchFields"] = array();
$tdatacurso[".filterFields"] = array();
$tdatacurso[".requiredSearchFields"] = array();

$tdatacurso[".googleLikeFields"] = array();
$tdatacurso[".googleLikeFields"][] = "idCurso";
$tdatacurso[".googleLikeFields"][] = "NombreCurso";
$tdatacurso[".googleLikeFields"][] = "Seccion";
$tdatacurso[".googleLikeFields"][] = "NRC";
$tdatacurso[".googleLikeFields"][] = "Academia";
$tdatacurso[".googleLikeFields"][] = "DiasClase";
$tdatacurso[".googleLikeFields"][] = "HorasClase";
$tdatacurso[".googleLikeFields"][] = "idCicloEscolar";



$tdatacurso[".tableType"] = "list";

$tdatacurso[".printerPageOrientation"] = 0;
$tdatacurso[".nPrinterPageScale"] = 100;

$tdatacurso[".nPrinterSplitRecords"] = 40;

$tdatacurso[".geocodingEnabled"] = false;










$tdatacurso[".pageSize"] = 20;

$tdatacurso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacurso[".strOrderBy"] = $tstrOrderBy;

$tdatacurso[".orderindexes"] = array();

$tdatacurso[".sqlHead"] = "SELECT idCurso,  	NombreCurso,  	Seccion,  	NRC,  	Academia,  	DiasClase,  	HorasClase,  	idCicloEscolar";
$tdatacurso[".sqlFrom"] = "FROM curso";
$tdatacurso[".sqlWhereExpr"] = "";
$tdatacurso[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacurso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacurso[".arrGroupsPerPage"] = $arrGPP;

$tdatacurso[".highlightSearchResults"] = true;

$tableKeyscurso = array();
$tableKeyscurso[] = "idCurso";
$tdatacurso[".Keys"] = $tableKeyscurso;


$tdatacurso[".hideMobileList"] = array();




//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","idCurso");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCurso";

	
	
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


	$tdatacurso["idCurso"] = $fdata;
		$tdatacurso[".searchableFields"][] = "idCurso";
//	NombreCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NombreCurso";
	$fdata["GoodName"] = "NombreCurso";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","NombreCurso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NombreCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NombreCurso";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatacurso["NombreCurso"] = $fdata;
		$tdatacurso[".searchableFields"][] = "NombreCurso";
//	Seccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Seccion";
	$fdata["GoodName"] = "Seccion";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","Seccion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Seccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Seccion";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdatacurso["Seccion"] = $fdata;
		$tdatacurso[".searchableFields"][] = "Seccion";
//	NRC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NRC";
	$fdata["GoodName"] = "NRC";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","NRC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NRC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NRC";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdatacurso["NRC"] = $fdata;
		$tdatacurso[".searchableFields"][] = "NRC";
//	Academia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Academia";
	$fdata["GoodName"] = "Academia";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","Academia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Academia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Academia";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatacurso["Academia"] = $fdata;
		$tdatacurso[".searchableFields"][] = "Academia";
//	DiasClase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DiasClase";
	$fdata["GoodName"] = "DiasClase";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","DiasClase");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "DiasClase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DiasClase";

	
	
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


	$tdatacurso["DiasClase"] = $fdata;
		$tdatacurso[".searchableFields"][] = "DiasClase";
//	HorasClase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "HorasClase";
	$fdata["GoodName"] = "HorasClase";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","HorasClase");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "HorasClase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HorasClase";

	
	
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


	$tdatacurso["HorasClase"] = $fdata;
		$tdatacurso[".searchableFields"][] = "HorasClase";
//	idCicloEscolar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idCicloEscolar";
	$fdata["GoodName"] = "idCicloEscolar";
	$fdata["ownerTable"] = "curso";
	$fdata["Label"] = GetFieldLabel("curso","idCicloEscolar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "idCicloEscolar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCicloEscolar";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatacurso["idCicloEscolar"] = $fdata;
		$tdatacurso[".searchableFields"][] = "idCicloEscolar";


$tables_data["curso"]=&$tdatacurso;
$field_labels["curso"] = &$fieldLabelscurso;
$fieldToolTips["curso"] = &$fieldToolTipscurso;
$placeHolders["curso"] = &$placeHolderscurso;
$page_titles["curso"] = &$pageTitlescurso;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["curso"] = array();
//	profesor_curso
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="profesor_curso";
		$detailsParam["dOriginalTable"] = "profesor_curso";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "profesor_curso";
	$detailsParam["dCaptionTable"] = GetTableCaption("profesor_curso");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["curso"][$dIndex] = $detailsParam;

	
		$detailsTablesData["curso"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["curso"][$dIndex]["masterKeys"][]="idCurso";

				$detailsTablesData["curso"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["curso"][$dIndex]["detailKeys"][]="idCurso";

// tables which are master tables for current table (detail)
$masterTablesData["curso"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_curso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCurso,  	NombreCurso,  	Seccion,  	NRC,  	Academia,  	DiasClase,  	HorasClase,  	idCicloEscolar";
$proto0["m_strFrom"] = "FROM curso";
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
	"m_strName" => "idCurso",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto6["m_sql"] = "idCurso";
$proto6["m_srcTableName"] = "curso";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreCurso",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto8["m_sql"] = "NombreCurso";
$proto8["m_srcTableName"] = "curso";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccion",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto10["m_sql"] = "Seccion";
$proto10["m_srcTableName"] = "curso";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NRC",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto12["m_sql"] = "NRC";
$proto12["m_srcTableName"] = "curso";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Academia",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto14["m_sql"] = "Academia";
$proto14["m_srcTableName"] = "curso";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DiasClase",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto16["m_sql"] = "DiasClase";
$proto16["m_srcTableName"] = "curso";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "HorasClase",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto18["m_sql"] = "HorasClase";
$proto18["m_srcTableName"] = "curso";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "idCicloEscolar",
	"m_strTable" => "curso",
	"m_srcTableName" => "curso"
));

$proto20["m_sql"] = "idCicloEscolar";
$proto20["m_srcTableName"] = "curso";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "curso";
$proto23["m_srcTableName"] = "curso";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idCurso";
$proto23["m_columns"][] = "NombreCurso";
$proto23["m_columns"][] = "Seccion";
$proto23["m_columns"][] = "NRC";
$proto23["m_columns"][] = "Academia";
$proto23["m_columns"][] = "DiasClase";
$proto23["m_columns"][] = "HorasClase";
$proto23["m_columns"][] = "idCicloEscolar";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "curso";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "curso";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="curso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_curso = createSqlQuery_curso();


	
		;

								

$tdatacurso[".sqlquery"] = $queryData_curso;

$tableEvents["curso"] = new eventsBase;
$tdatacurso[".hasEvents"] = false;

?>