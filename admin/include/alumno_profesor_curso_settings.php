<?php



$tdataalumno_profesor_curso = array();
$tdataalumno_profesor_curso[".searchableFields"] = array();
$tdataalumno_profesor_curso[".ShortName"] = "alumno_profesor_curso";
$tdataalumno_profesor_curso[".OwnerID"] = "";
$tdataalumno_profesor_curso[".OriginalTable"] = "alumno_profesor_curso";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataalumno_profesor_curso[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalumno_profesor_curso[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalumno_profesor_curso[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsalumno_profesor_curso = array();
$fieldToolTipsalumno_profesor_curso = array();
$pageTitlesalumno_profesor_curso = array();
$placeHoldersalumno_profesor_curso = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalumno_profesor_curso["Spanish"] = array();
	$fieldToolTipsalumno_profesor_curso["Spanish"] = array();
	$placeHoldersalumno_profesor_curso["Spanish"] = array();
	$pageTitlesalumno_profesor_curso["Spanish"] = array();
	$fieldLabelsalumno_profesor_curso["Spanish"]["IdmatriculaCab"] = "Idmatricula Cab";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["IdmatriculaCab"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["IdmatriculaCab"] = "";
	$fieldLabelsalumno_profesor_curso["Spanish"]["idMatricula"] = "Id Matricula";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["idMatricula"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["idMatricula"] = "";
	$fieldLabelsalumno_profesor_curso["Spanish"]["idAlumno"] = "Id Alumno";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["idAlumno"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["idAlumno"] = "";
	$fieldLabelsalumno_profesor_curso["Spanish"]["idCursoDicta"] = "Id Curso Dicta";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["idCursoDicta"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["idCursoDicta"] = "";
	$fieldLabelsalumno_profesor_curso["Spanish"]["idCurso"] = "Curso";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["idCurso"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["idCurso"] = "";
	$fieldLabelsalumno_profesor_curso["Spanish"]["idProfesor"] = "Profesor";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["idProfesor"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["idProfesor"] = "";
	$fieldLabelsalumno_profesor_curso["Spanish"]["estadoCurso"] = "Estado Curso";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["estadoCurso"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["estadoCurso"] = "";
	$fieldLabelsalumno_profesor_curso["Spanish"]["estadoMatricula"] = "Estado Matricula";
	$fieldToolTipsalumno_profesor_curso["Spanish"]["estadoMatricula"] = "";
	$placeHoldersalumno_profesor_curso["Spanish"]["estadoMatricula"] = "";
	if (count($fieldToolTipsalumno_profesor_curso["Spanish"]))
		$tdataalumno_profesor_curso[".isUseToolTips"] = true;
}


	$tdataalumno_profesor_curso[".NCSearch"] = true;



$tdataalumno_profesor_curso[".shortTableName"] = "alumno_profesor_curso";
$tdataalumno_profesor_curso[".nSecOptions"] = 0;

$tdataalumno_profesor_curso[".mainTableOwnerID"] = "";
$tdataalumno_profesor_curso[".entityType"] = 0;

$tdataalumno_profesor_curso[".strOriginalTableName"] = "alumno_profesor_curso";

	



$tdataalumno_profesor_curso[".showAddInPopup"] = false;

$tdataalumno_profesor_curso[".showEditInPopup"] = false;

$tdataalumno_profesor_curso[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataalumno_profesor_curso[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataalumno_profesor_curso[".listAjax"] = false;
//	temporary
$tdataalumno_profesor_curso[".listAjax"] = false;

	$tdataalumno_profesor_curso[".audit"] = false;

	$tdataalumno_profesor_curso[".locking"] = false;


$pages = $tdataalumno_profesor_curso[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalumno_profesor_curso[".edit"] = true;
	$tdataalumno_profesor_curso[".afterEditAction"] = 1;
	$tdataalumno_profesor_curso[".closePopupAfterEdit"] = 1;
	$tdataalumno_profesor_curso[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalumno_profesor_curso[".add"] = true;
$tdataalumno_profesor_curso[".afterAddAction"] = 1;
$tdataalumno_profesor_curso[".closePopupAfterAdd"] = 1;
$tdataalumno_profesor_curso[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalumno_profesor_curso[".list"] = true;
}



$tdataalumno_profesor_curso[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalumno_profesor_curso[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalumno_profesor_curso[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalumno_profesor_curso[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalumno_profesor_curso[".printFriendly"] = true;
}



$tdataalumno_profesor_curso[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalumno_profesor_curso[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalumno_profesor_curso[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalumno_profesor_curso[".isUseAjaxSuggest"] = true;

$tdataalumno_profesor_curso[".rowHighlite"] = true;





$tdataalumno_profesor_curso[".ajaxCodeSnippetAdded"] = false;

$tdataalumno_profesor_curso[".buttonsAdded"] = false;

$tdataalumno_profesor_curso[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalumno_profesor_curso[".isUseTimeForSearch"] = false;


$tdataalumno_profesor_curso[".badgeColor"] = "6493ea";


$tdataalumno_profesor_curso[".allSearchFields"] = array();
$tdataalumno_profesor_curso[".filterFields"] = array();
$tdataalumno_profesor_curso[".requiredSearchFields"] = array();

$tdataalumno_profesor_curso[".googleLikeFields"] = array();
$tdataalumno_profesor_curso[".googleLikeFields"][] = "idCurso";
$tdataalumno_profesor_curso[".googleLikeFields"][] = "idProfesor";
$tdataalumno_profesor_curso[".googleLikeFields"][] = "estadoCurso";
$tdataalumno_profesor_curso[".googleLikeFields"][] = "estadoMatricula";



$tdataalumno_profesor_curso[".tableType"] = "list";

$tdataalumno_profesor_curso[".printerPageOrientation"] = 0;
$tdataalumno_profesor_curso[".nPrinterPageScale"] = 100;

$tdataalumno_profesor_curso[".nPrinterSplitRecords"] = 40;

$tdataalumno_profesor_curso[".geocodingEnabled"] = false;










$tdataalumno_profesor_curso[".pageSize"] = 20;

$tdataalumno_profesor_curso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataalumno_profesor_curso[".strOrderBy"] = $tstrOrderBy;

$tdataalumno_profesor_curso[".orderindexes"] = array();

$tdataalumno_profesor_curso[".sqlHead"] = "SELECT IdmatriculaCab,  	idMatricula,  	idAlumno,  	idCursoDicta,  	idCurso,  	idProfesor,  	estadoCurso,  	estadoMatricula";
$tdataalumno_profesor_curso[".sqlFrom"] = "FROM alumno_profesor_curso";
$tdataalumno_profesor_curso[".sqlWhereExpr"] = "";
$tdataalumno_profesor_curso[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalumno_profesor_curso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalumno_profesor_curso[".arrGroupsPerPage"] = $arrGPP;

$tdataalumno_profesor_curso[".highlightSearchResults"] = true;

$tableKeysalumno_profesor_curso = array();
$tableKeysalumno_profesor_curso[] = "idMatricula";
$tableKeysalumno_profesor_curso[] = "idAlumno";
$tdataalumno_profesor_curso[".Keys"] = $tableKeysalumno_profesor_curso;


$tdataalumno_profesor_curso[".hideMobileList"] = array();




//	IdmatriculaCab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdmatriculaCab";
	$fdata["GoodName"] = "IdmatriculaCab";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","IdmatriculaCab");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdmatriculaCab";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdmatriculaCab";

	
	
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
	$edata["LookupTable"] = "matriculacab";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdmatriculaCab";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "IdmatriculaCab";

	

	
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


	$tdataalumno_profesor_curso["IdmatriculaCab"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "IdmatriculaCab";
//	idMatricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idMatricula";
	$fdata["GoodName"] = "idMatricula";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","idMatricula");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idMatricula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idMatricula";

	
	
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


	$tdataalumno_profesor_curso["idMatricula"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "idMatricula";
//	idAlumno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idAlumno";
	$fdata["GoodName"] = "idAlumno";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","idAlumno");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idAlumno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idAlumno";

	
	
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
	$edata["LookupTable"] = "alumno";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idAlumno";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idAlumno";

	

	
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


	$tdataalumno_profesor_curso["idAlumno"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "idAlumno";
//	idCursoDicta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCursoDicta";
	$fdata["GoodName"] = "idCursoDicta";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","idCursoDicta");
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


	$tdataalumno_profesor_curso["idCursoDicta"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "idCursoDicta";
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","idCurso");
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
	$edata["LookupTable"] = "curso";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idCurso";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(NombreCurso,' - ',idCicloEscolar)";

	

		$edata["CustomDisplay"] = "true";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "IdmatriculaCab";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalumno_profesor_curso["idCurso"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "idCurso";
//	idProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "idProfesor";
	$fdata["GoodName"] = "idProfesor";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","idProfesor");
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
	$edata["LookupTable"] = "profesor";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idProfesor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(NomProfesor,' ', ApellidosProfesor)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "ApellidosProfesor";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataalumno_profesor_curso["idProfesor"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "idProfesor";
//	estadoCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estadoCurso";
	$fdata["GoodName"] = "estadoCurso";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","estadoCurso");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "estadoCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoCurso";

	
	
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


	$tdataalumno_profesor_curso["estadoCurso"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "estadoCurso";
//	estadoMatricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estadoMatricula";
	$fdata["GoodName"] = "estadoMatricula";
	$fdata["ownerTable"] = "alumno_profesor_curso";
	$fdata["Label"] = GetFieldLabel("alumno_profesor_curso","estadoMatricula");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "estadoMatricula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoMatricula";

	
	
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


	$tdataalumno_profesor_curso["estadoMatricula"] = $fdata;
		$tdataalumno_profesor_curso[".searchableFields"][] = "estadoMatricula";


$tables_data["alumno_profesor_curso"]=&$tdataalumno_profesor_curso;
$field_labels["alumno_profesor_curso"] = &$fieldLabelsalumno_profesor_curso;
$fieldToolTips["alumno_profesor_curso"] = &$fieldToolTipsalumno_profesor_curso;
$placeHolders["alumno_profesor_curso"] = &$placeHoldersalumno_profesor_curso;
$page_titles["alumno_profesor_curso"] = &$pageTitlesalumno_profesor_curso;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["alumno_profesor_curso"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["alumno_profesor_curso"] = array();



	
				$strOriginalDetailsTable="matriculacab";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="matriculacab";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "matriculacab";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["alumno_profesor_curso"][0] = $masterParams;
				$masterTablesData["alumno_profesor_curso"][0]["masterKeys"] = array();
	$masterTablesData["alumno_profesor_curso"][0]["masterKeys"][]="IdmatriculaCab";
				$masterTablesData["alumno_profesor_curso"][0]["detailKeys"] = array();
	$masterTablesData["alumno_profesor_curso"][0]["detailKeys"][]="IdmatriculaCab";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_alumno_profesor_curso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdmatriculaCab,  	idMatricula,  	idAlumno,  	idCursoDicta,  	idCurso,  	idProfesor,  	estadoCurso,  	estadoMatricula";
$proto0["m_strFrom"] = "FROM alumno_profesor_curso";
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
	"m_strName" => "IdmatriculaCab",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto6["m_sql"] = "IdmatriculaCab";
$proto6["m_srcTableName"] = "alumno_profesor_curso";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idMatricula",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto8["m_sql"] = "idMatricula";
$proto8["m_srcTableName"] = "alumno_profesor_curso";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idAlumno",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto10["m_sql"] = "idAlumno";
$proto10["m_srcTableName"] = "alumno_profesor_curso";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idCursoDicta",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto12["m_sql"] = "idCursoDicta";
$proto12["m_srcTableName"] = "alumno_profesor_curso";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto14["m_sql"] = "idCurso";
$proto14["m_srcTableName"] = "alumno_profesor_curso";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto16["m_sql"] = "idProfesor";
$proto16["m_srcTableName"] = "alumno_profesor_curso";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoCurso",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto18["m_sql"] = "estadoCurso";
$proto18["m_srcTableName"] = "alumno_profesor_curso";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoMatricula",
	"m_strTable" => "alumno_profesor_curso",
	"m_srcTableName" => "alumno_profesor_curso"
));

$proto20["m_sql"] = "estadoMatricula";
$proto20["m_srcTableName"] = "alumno_profesor_curso";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "alumno_profesor_curso";
$proto23["m_srcTableName"] = "alumno_profesor_curso";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IdmatriculaCab";
$proto23["m_columns"][] = "idMatricula";
$proto23["m_columns"][] = "idAlumno";
$proto23["m_columns"][] = "idCursoDicta";
$proto23["m_columns"][] = "idCurso";
$proto23["m_columns"][] = "idProfesor";
$proto23["m_columns"][] = "estadoCurso";
$proto23["m_columns"][] = "estadoMatricula";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "alumno_profesor_curso";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "alumno_profesor_curso";
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
$proto0["m_srcTableName"]="alumno_profesor_curso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alumno_profesor_curso = createSqlQuery_alumno_profesor_curso();


	
		;

								

$tdataalumno_profesor_curso[".sqlquery"] = $queryData_alumno_profesor_curso;

$tableEvents["alumno_profesor_curso"] = new eventsBase;
$tdataalumno_profesor_curso[".hasEvents"] = false;

?>