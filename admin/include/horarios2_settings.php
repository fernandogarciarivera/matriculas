<?php



$tdatahorarios2 = array();
$tdatahorarios2[".searchableFields"] = array();
$tdatahorarios2[".ShortName"] = "horarios2";
$tdatahorarios2[".OwnerID"] = "";
$tdatahorarios2[".OriginalTable"] = "horarios";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatahorarios2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahorarios2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahorarios2[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelshorarios2 = array();
$fieldToolTipshorarios2 = array();
$pageTitleshorarios2 = array();
$placeHoldershorarios2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshorarios2["Spanish"] = array();
	$fieldToolTipshorarios2["Spanish"] = array();
	$placeHoldershorarios2["Spanish"] = array();
	$pageTitleshorarios2["Spanish"] = array();
	$fieldLabelshorarios2["Spanish"]["IdHorario"] = "Id Horario";
	$fieldToolTipshorarios2["Spanish"]["IdHorario"] = "";
	$placeHoldershorarios2["Spanish"]["IdHorario"] = "";
	$fieldLabelshorarios2["Spanish"]["idCursoDicta"] = "Id Curso Dicta";
	$fieldToolTipshorarios2["Spanish"]["idCursoDicta"] = "";
	$placeHoldershorarios2["Spanish"]["idCursoDicta"] = "";
	$fieldLabelshorarios2["Spanish"]["idProfesor"] = "Id Profesor";
	$fieldToolTipshorarios2["Spanish"]["idProfesor"] = "";
	$placeHoldershorarios2["Spanish"]["idProfesor"] = "";
	$fieldLabelshorarios2["Spanish"]["idCurso"] = "Id Curso";
	$fieldToolTipshorarios2["Spanish"]["idCurso"] = "";
	$placeHoldershorarios2["Spanish"]["idCurso"] = "";
	$fieldLabelshorarios2["Spanish"]["numDia"] = "Num Dia";
	$fieldToolTipshorarios2["Spanish"]["numDia"] = "";
	$placeHoldershorarios2["Spanish"]["numDia"] = "";
	$fieldLabelshorarios2["Spanish"]["txtDia"] = "Txt Dia";
	$fieldToolTipshorarios2["Spanish"]["txtDia"] = "";
	$placeHoldershorarios2["Spanish"]["txtDia"] = "";
	$fieldLabelshorarios2["Spanish"]["HorIni"] = "Hor Ini";
	$fieldToolTipshorarios2["Spanish"]["HorIni"] = "";
	$placeHoldershorarios2["Spanish"]["HorIni"] = "";
	$fieldLabelshorarios2["Spanish"]["HorFin"] = "Hor Fin";
	$fieldToolTipshorarios2["Spanish"]["HorFin"] = "";
	$placeHoldershorarios2["Spanish"]["HorFin"] = "";
	if (count($fieldToolTipshorarios2["Spanish"]))
		$tdatahorarios2[".isUseToolTips"] = true;
}


	$tdatahorarios2[".NCSearch"] = true;



$tdatahorarios2[".shortTableName"] = "horarios2";
$tdatahorarios2[".nSecOptions"] = 0;

$tdatahorarios2[".mainTableOwnerID"] = "";
$tdatahorarios2[".entityType"] = 1;

$tdatahorarios2[".strOriginalTableName"] = "horarios";

	



$tdatahorarios2[".showAddInPopup"] = false;

$tdatahorarios2[".showEditInPopup"] = false;

$tdatahorarios2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahorarios2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahorarios2[".listAjax"] = false;
//	temporary
$tdatahorarios2[".listAjax"] = false;

	$tdatahorarios2[".audit"] = false;

	$tdatahorarios2[".locking"] = false;


$pages = $tdatahorarios2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahorarios2[".edit"] = true;
	$tdatahorarios2[".afterEditAction"] = 1;
	$tdatahorarios2[".closePopupAfterEdit"] = 1;
	$tdatahorarios2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahorarios2[".add"] = true;
$tdatahorarios2[".afterAddAction"] = 1;
$tdatahorarios2[".closePopupAfterAdd"] = 1;
$tdatahorarios2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahorarios2[".list"] = true;
}



$tdatahorarios2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahorarios2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahorarios2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahorarios2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahorarios2[".printFriendly"] = true;
}



$tdatahorarios2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahorarios2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahorarios2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahorarios2[".isUseAjaxSuggest"] = true;

$tdatahorarios2[".rowHighlite"] = true;





$tdatahorarios2[".ajaxCodeSnippetAdded"] = false;

$tdatahorarios2[".buttonsAdded"] = false;

$tdatahorarios2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahorarios2[".isUseTimeForSearch"] = false;


$tdatahorarios2[".badgeColor"] = "8fbc8b";


$tdatahorarios2[".allSearchFields"] = array();
$tdatahorarios2[".filterFields"] = array();
$tdatahorarios2[".requiredSearchFields"] = array();

$tdatahorarios2[".googleLikeFields"] = array();
$tdatahorarios2[".googleLikeFields"][] = "IdHorario";
$tdatahorarios2[".googleLikeFields"][] = "idCursoDicta";
$tdatahorarios2[".googleLikeFields"][] = "idProfesor";
$tdatahorarios2[".googleLikeFields"][] = "idCurso";
$tdatahorarios2[".googleLikeFields"][] = "numDia";
$tdatahorarios2[".googleLikeFields"][] = "txtDia";
$tdatahorarios2[".googleLikeFields"][] = "HorIni";
$tdatahorarios2[".googleLikeFields"][] = "HorFin";



$tdatahorarios2[".tableType"] = "list";

$tdatahorarios2[".printerPageOrientation"] = 0;
$tdatahorarios2[".nPrinterPageScale"] = 100;

$tdatahorarios2[".nPrinterSplitRecords"] = 40;

$tdatahorarios2[".geocodingEnabled"] = false;










$tdatahorarios2[".pageSize"] = 20;

$tdatahorarios2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahorarios2[".strOrderBy"] = $tstrOrderBy;

$tdatahorarios2[".orderindexes"] = array();

$tdatahorarios2[".sqlHead"] = "SELECT IdHorario,  	idCursoDicta,  	idProfesor,  	idCurso,  	numDia,  	txtDia,  	HorIni,  	HorFin";
$tdatahorarios2[".sqlFrom"] = "FROM horarios";
$tdatahorarios2[".sqlWhereExpr"] = "";
$tdatahorarios2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahorarios2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahorarios2[".arrGroupsPerPage"] = $arrGPP;

$tdatahorarios2[".highlightSearchResults"] = true;

$tableKeyshorarios2 = array();
$tableKeyshorarios2[] = "IdHorario";
$tdatahorarios2[".Keys"] = $tableKeyshorarios2;


$tdatahorarios2[".hideMobileList"] = array();




//	IdHorario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdHorario";
	$fdata["GoodName"] = "IdHorario";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","IdHorario");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdHorario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdHorario";

	
	
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


	$tdatahorarios2["IdHorario"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "IdHorario";
//	idCursoDicta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idCursoDicta";
	$fdata["GoodName"] = "idCursoDicta";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","idCursoDicta");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idCursoDicta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCursoDicta";

	
	
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
	$edata["LookupTable"] = "profesor_curso";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idCursoDicta";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idCursoDicta";

	

	
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


	$tdatahorarios2["idCursoDicta"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "idCursoDicta";
//	idProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idProfesor";
	$fdata["GoodName"] = "idProfesor";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","idProfesor");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idProfesor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idProfesor";

	
	
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
	$edata["LookupTable"] = "profesor_curso";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idProfesor";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idProfesor";

	

	
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


	$tdatahorarios2["idProfesor"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "idProfesor";
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","idCurso");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "profesor_curso";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idCurso";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idCurso";

	

	
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


	$tdatahorarios2["idCurso"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "idCurso";
//	numDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "numDia";
	$fdata["GoodName"] = "numDia";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","numDia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "numDia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numDia";

	
	
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


	$tdatahorarios2["numDia"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "numDia";
//	txtDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "txtDia";
	$fdata["GoodName"] = "txtDia";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","txtDia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "txtDia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "txtDia";

	
	
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


	$tdatahorarios2["txtDia"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "txtDia";
//	HorIni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "HorIni";
	$fdata["GoodName"] = "HorIni";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","HorIni");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "HorIni";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HorIni";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatahorarios2["HorIni"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "HorIni";
//	HorFin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "HorFin";
	$fdata["GoodName"] = "HorFin";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios2","HorFin");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "HorFin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HorFin";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatahorarios2["HorFin"] = $fdata;
		$tdatahorarios2[".searchableFields"][] = "HorFin";


$tables_data["horarios2"]=&$tdatahorarios2;
$field_labels["horarios2"] = &$fieldLabelshorarios2;
$fieldToolTips["horarios2"] = &$fieldToolTipshorarios2;
$placeHolders["horarios2"] = &$placeHoldershorarios2;
$page_titles["horarios2"] = &$pageTitleshorarios2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["horarios2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["horarios2"] = array();



	
				$strOriginalDetailsTable="alumno_profesor_curso";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="alumno_profesor_curso";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alumno_profesor_curso";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["horarios2"][0] = $masterParams;
				$masterTablesData["horarios2"][0]["masterKeys"] = array();
	$masterTablesData["horarios2"][0]["masterKeys"][]="idCursoDicta";
				$masterTablesData["horarios2"][0]["masterKeys"][]="idCurso";
				$masterTablesData["horarios2"][0]["masterKeys"][]="idProfesor";
				$masterTablesData["horarios2"][0]["detailKeys"] = array();
	$masterTablesData["horarios2"][0]["detailKeys"][]="idCursoDicta";
				$masterTablesData["horarios2"][0]["detailKeys"][]="idCurso";
				$masterTablesData["horarios2"][0]["detailKeys"][]="idProfesor";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_horarios2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdHorario,  	idCursoDicta,  	idProfesor,  	idCurso,  	numDia,  	txtDia,  	HorIni,  	HorFin";
$proto0["m_strFrom"] = "FROM horarios";
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
	"m_strName" => "IdHorario",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto6["m_sql"] = "IdHorario";
$proto6["m_srcTableName"] = "horarios2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idCursoDicta",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto8["m_sql"] = "idCursoDicta";
$proto8["m_srcTableName"] = "horarios2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto10["m_sql"] = "idProfesor";
$proto10["m_srcTableName"] = "horarios2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto12["m_sql"] = "idCurso";
$proto12["m_srcTableName"] = "horarios2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "numDia",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto14["m_sql"] = "numDia";
$proto14["m_srcTableName"] = "horarios2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "txtDia",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto16["m_sql"] = "txtDia";
$proto16["m_srcTableName"] = "horarios2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "HorIni",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto18["m_sql"] = "HorIni";
$proto18["m_srcTableName"] = "horarios2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "HorFin",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios2"
));

$proto20["m_sql"] = "HorFin";
$proto20["m_srcTableName"] = "horarios2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "horarios";
$proto23["m_srcTableName"] = "horarios2";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IdHorario";
$proto23["m_columns"][] = "idCursoDicta";
$proto23["m_columns"][] = "idProfesor";
$proto23["m_columns"][] = "idCurso";
$proto23["m_columns"][] = "numDia";
$proto23["m_columns"][] = "txtDia";
$proto23["m_columns"][] = "HorIni";
$proto23["m_columns"][] = "HorFin";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "horarios";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "horarios2";
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
$proto0["m_srcTableName"]="horarios2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_horarios2 = createSqlQuery_horarios2();


	
		;

								

$tdatahorarios2[".sqlquery"] = $queryData_horarios2;

$tableEvents["horarios2"] = new eventsBase;
$tdatahorarios2[".hasEvents"] = false;

?>