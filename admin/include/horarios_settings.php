<?php



$tdatahorarios = array();
$tdatahorarios[".searchableFields"] = array();
$tdatahorarios[".ShortName"] = "horarios";
$tdatahorarios[".OwnerID"] = "";
$tdatahorarios[".OriginalTable"] = "horarios";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatahorarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahorarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahorarios[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelshorarios = array();
$fieldToolTipshorarios = array();
$pageTitleshorarios = array();
$placeHoldershorarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshorarios["Spanish"] = array();
	$fieldToolTipshorarios["Spanish"] = array();
	$placeHoldershorarios["Spanish"] = array();
	$pageTitleshorarios["Spanish"] = array();
	$fieldLabelshorarios["Spanish"]["IdHorario"] = "Id Horario";
	$fieldToolTipshorarios["Spanish"]["IdHorario"] = "";
	$placeHoldershorarios["Spanish"]["IdHorario"] = "";
	$fieldLabelshorarios["Spanish"]["idCursoDicta"] = "Id Curso Dicta";
	$fieldToolTipshorarios["Spanish"]["idCursoDicta"] = "";
	$placeHoldershorarios["Spanish"]["idCursoDicta"] = "";
	$fieldLabelshorarios["Spanish"]["idProfesor"] = "Id Profesor";
	$fieldToolTipshorarios["Spanish"]["idProfesor"] = "";
	$placeHoldershorarios["Spanish"]["idProfesor"] = "";
	$fieldLabelshorarios["Spanish"]["idCurso"] = "Id Curso";
	$fieldToolTipshorarios["Spanish"]["idCurso"] = "";
	$placeHoldershorarios["Spanish"]["idCurso"] = "";
	$fieldLabelshorarios["Spanish"]["numDia"] = "Num Dia";
	$fieldToolTipshorarios["Spanish"]["numDia"] = "";
	$placeHoldershorarios["Spanish"]["numDia"] = "";
	$fieldLabelshorarios["Spanish"]["txtDia"] = "Txt Dia";
	$fieldToolTipshorarios["Spanish"]["txtDia"] = "";
	$placeHoldershorarios["Spanish"]["txtDia"] = "";
	$fieldLabelshorarios["Spanish"]["HorIni"] = "Hor Ini";
	$fieldToolTipshorarios["Spanish"]["HorIni"] = "";
	$placeHoldershorarios["Spanish"]["HorIni"] = "";
	$fieldLabelshorarios["Spanish"]["HorFin"] = "Hor Fin";
	$fieldToolTipshorarios["Spanish"]["HorFin"] = "";
	$placeHoldershorarios["Spanish"]["HorFin"] = "";
	if (count($fieldToolTipshorarios["Spanish"]))
		$tdatahorarios[".isUseToolTips"] = true;
}


	$tdatahorarios[".NCSearch"] = true;



$tdatahorarios[".shortTableName"] = "horarios";
$tdatahorarios[".nSecOptions"] = 0;

$tdatahorarios[".mainTableOwnerID"] = "";
$tdatahorarios[".entityType"] = 0;

$tdatahorarios[".strOriginalTableName"] = "horarios";

	



$tdatahorarios[".showAddInPopup"] = false;

$tdatahorarios[".showEditInPopup"] = false;

$tdatahorarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahorarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahorarios[".listAjax"] = false;
//	temporary
$tdatahorarios[".listAjax"] = false;

	$tdatahorarios[".audit"] = false;

	$tdatahorarios[".locking"] = false;


$pages = $tdatahorarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahorarios[".edit"] = true;
	$tdatahorarios[".afterEditAction"] = 0;
	$tdatahorarios[".closePopupAfterEdit"] = 1;
	$tdatahorarios[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatahorarios[".add"] = true;
$tdatahorarios[".afterAddAction"] = 0;
$tdatahorarios[".closePopupAfterAdd"] = 1;
$tdatahorarios[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatahorarios[".list"] = true;
}



$tdatahorarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahorarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahorarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahorarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahorarios[".printFriendly"] = true;
}



$tdatahorarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahorarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahorarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahorarios[".isUseAjaxSuggest"] = true;

$tdatahorarios[".rowHighlite"] = true;





$tdatahorarios[".ajaxCodeSnippetAdded"] = false;

$tdatahorarios[".buttonsAdded"] = false;

$tdatahorarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahorarios[".isUseTimeForSearch"] = false;


$tdatahorarios[".badgeColor"] = "3cb371";


$tdatahorarios[".allSearchFields"] = array();
$tdatahorarios[".filterFields"] = array();
$tdatahorarios[".requiredSearchFields"] = array();




$tdatahorarios[".tableType"] = "list";

$tdatahorarios[".printerPageOrientation"] = 0;
$tdatahorarios[".nPrinterPageScale"] = 100;

$tdatahorarios[".nPrinterSplitRecords"] = 40;

$tdatahorarios[".geocodingEnabled"] = false;










$tdatahorarios[".pageSize"] = 20;

$tdatahorarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahorarios[".strOrderBy"] = $tstrOrderBy;

$tdatahorarios[".orderindexes"] = array();

$tdatahorarios[".sqlHead"] = "SELECT IdHorario,  	idCursoDicta,  	idProfesor,  	idCurso,  	numDia,  	txtDia,  	HorIni,  	HorFin";
$tdatahorarios[".sqlFrom"] = "FROM horarios";
$tdatahorarios[".sqlWhereExpr"] = "";
$tdatahorarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahorarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahorarios[".arrGroupsPerPage"] = $arrGPP;

$tdatahorarios[".highlightSearchResults"] = true;

$tableKeyshorarios = array();
$tableKeyshorarios[] = "IdHorario";
$tdatahorarios[".Keys"] = $tableKeyshorarios;


$tdatahorarios[".hideMobileList"] = array();




//	IdHorario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdHorario";
	$fdata["GoodName"] = "IdHorario";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","IdHorario");
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


	$tdatahorarios["IdHorario"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "IdHorario";
//	idCursoDicta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idCursoDicta";
	$fdata["GoodName"] = "idCursoDicta";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","idCursoDicta");
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


	$tdatahorarios["idCursoDicta"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "idCursoDicta";
//	idProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idProfesor";
	$fdata["GoodName"] = "idProfesor";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","idProfesor");
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


	$tdatahorarios["idProfesor"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "idProfesor";
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","idCurso");
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


	$tdatahorarios["idCurso"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "idCurso";
//	numDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "numDia";
	$fdata["GoodName"] = "numDia";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","numDia");
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


	$tdatahorarios["numDia"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "numDia";
//	txtDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "txtDia";
	$fdata["GoodName"] = "txtDia";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","txtDia");
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


	$tdatahorarios["txtDia"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "txtDia";
//	HorIni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "HorIni";
	$fdata["GoodName"] = "HorIni";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","HorIni");
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


	$tdatahorarios["HorIni"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "HorIni";
//	HorFin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "HorFin";
	$fdata["GoodName"] = "HorFin";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("horarios","HorFin");
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


	$tdatahorarios["HorFin"] = $fdata;
		$tdatahorarios[".searchableFields"][] = "HorFin";


$tables_data["horarios"]=&$tdatahorarios;
$field_labels["horarios"] = &$fieldLabelshorarios;
$fieldToolTips["horarios"] = &$fieldToolTipshorarios;
$placeHolders["horarios"] = &$placeHoldershorarios;
$page_titles["horarios"] = &$pageTitleshorarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["horarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["horarios"] = array();



	
				$strOriginalDetailsTable="profesor_curso";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="profesor_curso";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "profesor_curso";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["horarios"][0] = $masterParams;
				$masterTablesData["horarios"][0]["masterKeys"] = array();
	$masterTablesData["horarios"][0]["masterKeys"][]="idCursoDicta";
				$masterTablesData["horarios"][0]["masterKeys"][]="idProfesor";
				$masterTablesData["horarios"][0]["masterKeys"][]="idCurso";
				$masterTablesData["horarios"][0]["detailKeys"] = array();
	$masterTablesData["horarios"][0]["detailKeys"][]="idCursoDicta";
				$masterTablesData["horarios"][0]["detailKeys"][]="idProfesor";
				$masterTablesData["horarios"][0]["detailKeys"][]="idCurso";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_horarios()
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
	"m_srcTableName" => "horarios"
));

$proto6["m_sql"] = "IdHorario";
$proto6["m_srcTableName"] = "horarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idCursoDicta",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios"
));

$proto8["m_sql"] = "idCursoDicta";
$proto8["m_srcTableName"] = "horarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios"
));

$proto10["m_sql"] = "idProfesor";
$proto10["m_srcTableName"] = "horarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios"
));

$proto12["m_sql"] = "idCurso";
$proto12["m_srcTableName"] = "horarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "numDia",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios"
));

$proto14["m_sql"] = "numDia";
$proto14["m_srcTableName"] = "horarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "txtDia",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios"
));

$proto16["m_sql"] = "txtDia";
$proto16["m_srcTableName"] = "horarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "HorIni",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios"
));

$proto18["m_sql"] = "HorIni";
$proto18["m_srcTableName"] = "horarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "HorFin",
	"m_strTable" => "horarios",
	"m_srcTableName" => "horarios"
));

$proto20["m_sql"] = "HorFin";
$proto20["m_srcTableName"] = "horarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "horarios";
$proto23["m_srcTableName"] = "horarios";
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
$proto22["m_srcTableName"] = "horarios";
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
$proto0["m_srcTableName"]="horarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_horarios = createSqlQuery_horarios();


	
		;

								

$tdatahorarios[".sqlquery"] = $queryData_horarios;

$tableEvents["horarios"] = new eventsBase;
$tdatahorarios[".hasEvents"] = false;

?>