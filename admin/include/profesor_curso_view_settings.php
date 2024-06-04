<?php



$tdataprofesor_curso_view = array();
$tdataprofesor_curso_view[".searchableFields"] = array();
$tdataprofesor_curso_view[".ShortName"] = "profesor_curso_view";
$tdataprofesor_curso_view[".OwnerID"] = "";
$tdataprofesor_curso_view[".OriginalTable"] = "profesor_curso_view";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdataprofesor_curso_view[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataprofesor_curso_view[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataprofesor_curso_view[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsprofesor_curso_view = array();
$fieldToolTipsprofesor_curso_view = array();
$pageTitlesprofesor_curso_view = array();
$placeHoldersprofesor_curso_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprofesor_curso_view["Spanish"] = array();
	$fieldToolTipsprofesor_curso_view["Spanish"] = array();
	$placeHoldersprofesor_curso_view["Spanish"] = array();
	$pageTitlesprofesor_curso_view["Spanish"] = array();
	$fieldLabelsprofesor_curso_view["Spanish"]["idCursoDicta"] = "Id Curso Dicta";
	$fieldToolTipsprofesor_curso_view["Spanish"]["idCursoDicta"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["idCursoDicta"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["idProfesor"] = "Id Profesor";
	$fieldToolTipsprofesor_curso_view["Spanish"]["idProfesor"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["idProfesor"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["idCurso"] = "Id Curso";
	$fieldToolTipsprofesor_curso_view["Spanish"]["idCurso"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["idCurso"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["NombreCurso"] = "Nombre Curso";
	$fieldToolTipsprofesor_curso_view["Spanish"]["NombreCurso"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["NombreCurso"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["Seccion"] = "Seccion";
	$fieldToolTipsprofesor_curso_view["Spanish"]["Seccion"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["Seccion"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["NRC"] = "NRC";
	$fieldToolTipsprofesor_curso_view["Spanish"]["NRC"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["NRC"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["Academia"] = "Academia";
	$fieldToolTipsprofesor_curso_view["Spanish"]["Academia"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["Academia"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["idCicloEscolar"] = "Id Ciclo Escolar";
	$fieldToolTipsprofesor_curso_view["Spanish"]["idCicloEscolar"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["idCicloEscolar"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["NomProfesor"] = "Nom Profesor";
	$fieldToolTipsprofesor_curso_view["Spanish"]["NomProfesor"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["NomProfesor"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["ApellidosProfesor"] = "Apellidos Profesor";
	$fieldToolTipsprofesor_curso_view["Spanish"]["ApellidosProfesor"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["ApellidosProfesor"] = "";
	if (count($fieldToolTipsprofesor_curso_view["Spanish"]))
		$tdataprofesor_curso_view[".isUseToolTips"] = true;
}


	$tdataprofesor_curso_view[".NCSearch"] = true;



$tdataprofesor_curso_view[".shortTableName"] = "profesor_curso_view";
$tdataprofesor_curso_view[".nSecOptions"] = 0;

$tdataprofesor_curso_view[".mainTableOwnerID"] = "";
$tdataprofesor_curso_view[".entityType"] = 0;

$tdataprofesor_curso_view[".strOriginalTableName"] = "profesor_curso_view";

	



$tdataprofesor_curso_view[".showAddInPopup"] = false;

$tdataprofesor_curso_view[".showEditInPopup"] = false;

$tdataprofesor_curso_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprofesor_curso_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprofesor_curso_view[".listAjax"] = false;
//	temporary
$tdataprofesor_curso_view[".listAjax"] = false;

	$tdataprofesor_curso_view[".audit"] = false;

	$tdataprofesor_curso_view[".locking"] = false;


$pages = $tdataprofesor_curso_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprofesor_curso_view[".edit"] = true;
	$tdataprofesor_curso_view[".afterEditAction"] = 0;
	$tdataprofesor_curso_view[".closePopupAfterEdit"] = 1;
	$tdataprofesor_curso_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprofesor_curso_view[".add"] = true;
$tdataprofesor_curso_view[".afterAddAction"] = 0;
$tdataprofesor_curso_view[".closePopupAfterAdd"] = 1;
$tdataprofesor_curso_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprofesor_curso_view[".list"] = true;
}



$tdataprofesor_curso_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprofesor_curso_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprofesor_curso_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprofesor_curso_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprofesor_curso_view[".printFriendly"] = true;
}



$tdataprofesor_curso_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprofesor_curso_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprofesor_curso_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprofesor_curso_view[".isUseAjaxSuggest"] = true;

$tdataprofesor_curso_view[".rowHighlite"] = true;





$tdataprofesor_curso_view[".ajaxCodeSnippetAdded"] = false;

$tdataprofesor_curso_view[".buttonsAdded"] = false;

$tdataprofesor_curso_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprofesor_curso_view[".isUseTimeForSearch"] = false;


$tdataprofesor_curso_view[".badgeColor"] = "D2691E";


$tdataprofesor_curso_view[".allSearchFields"] = array();
$tdataprofesor_curso_view[".filterFields"] = array();
$tdataprofesor_curso_view[".requiredSearchFields"] = array();

$tdataprofesor_curso_view[".googleLikeFields"] = array();
$tdataprofesor_curso_view[".googleLikeFields"][] = "idCursoDicta";
$tdataprofesor_curso_view[".googleLikeFields"][] = "idProfesor";
$tdataprofesor_curso_view[".googleLikeFields"][] = "NomProfesor";
$tdataprofesor_curso_view[".googleLikeFields"][] = "ApellidosProfesor";
$tdataprofesor_curso_view[".googleLikeFields"][] = "idCurso";
$tdataprofesor_curso_view[".googleLikeFields"][] = "NombreCurso";
$tdataprofesor_curso_view[".googleLikeFields"][] = "Seccion";
$tdataprofesor_curso_view[".googleLikeFields"][] = "NRC";
$tdataprofesor_curso_view[".googleLikeFields"][] = "Academia";
$tdataprofesor_curso_view[".googleLikeFields"][] = "idCicloEscolar";



$tdataprofesor_curso_view[".tableType"] = "list";

$tdataprofesor_curso_view[".printerPageOrientation"] = 0;
$tdataprofesor_curso_view[".nPrinterPageScale"] = 100;

$tdataprofesor_curso_view[".nPrinterSplitRecords"] = 40;

$tdataprofesor_curso_view[".geocodingEnabled"] = false;










$tdataprofesor_curso_view[".pageSize"] = 20;

$tdataprofesor_curso_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprofesor_curso_view[".strOrderBy"] = $tstrOrderBy;

$tdataprofesor_curso_view[".orderindexes"] = array();

$tdataprofesor_curso_view[".sqlHead"] = "SELECT idCursoDicta,  	idProfesor,  	NomProfesor,  	ApellidosProfesor,  	idCurso,  	NombreCurso,  	Seccion,  	NRC,  	Academia,  	idCicloEscolar";
$tdataprofesor_curso_view[".sqlFrom"] = "FROM profesor_curso_view";
$tdataprofesor_curso_view[".sqlWhereExpr"] = "";
$tdataprofesor_curso_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprofesor_curso_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprofesor_curso_view[".arrGroupsPerPage"] = $arrGPP;

$tdataprofesor_curso_view[".highlightSearchResults"] = true;

$tableKeysprofesor_curso_view = array();
$tdataprofesor_curso_view[".Keys"] = $tableKeysprofesor_curso_view;


$tdataprofesor_curso_view[".hideMobileList"] = array();




//	idCursoDicta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCursoDicta";
	$fdata["GoodName"] = "idCursoDicta";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","idCursoDicta");
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


	$tdataprofesor_curso_view["idCursoDicta"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "idCursoDicta";
//	idProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idProfesor";
	$fdata["GoodName"] = "idProfesor";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","idProfesor");
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


	$tdataprofesor_curso_view["idProfesor"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "idProfesor";
//	NomProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NomProfesor";
	$fdata["GoodName"] = "NomProfesor";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","NomProfesor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NomProfesor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NomProfesor";

	
	
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


	$tdataprofesor_curso_view["NomProfesor"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "NomProfesor";
//	ApellidosProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ApellidosProfesor";
	$fdata["GoodName"] = "ApellidosProfesor";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","ApellidosProfesor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ApellidosProfesor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApellidosProfesor";

	
	
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


	$tdataprofesor_curso_view["ApellidosProfesor"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "ApellidosProfesor";
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","idCurso");
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


	$tdataprofesor_curso_view["idCurso"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "idCurso";
//	NombreCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NombreCurso";
	$fdata["GoodName"] = "NombreCurso";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","NombreCurso");
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


	$tdataprofesor_curso_view["NombreCurso"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "NombreCurso";
//	Seccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Seccion";
	$fdata["GoodName"] = "Seccion";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","Seccion");
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


	$tdataprofesor_curso_view["Seccion"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "Seccion";
//	NRC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NRC";
	$fdata["GoodName"] = "NRC";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","NRC");
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


	$tdataprofesor_curso_view["NRC"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "NRC";
//	Academia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Academia";
	$fdata["GoodName"] = "Academia";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","Academia");
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


	$tdataprofesor_curso_view["Academia"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "Academia";
//	idCicloEscolar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "idCicloEscolar";
	$fdata["GoodName"] = "idCicloEscolar";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","idCicloEscolar");
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


	$tdataprofesor_curso_view["idCicloEscolar"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "idCicloEscolar";


$tables_data["profesor_curso_view"]=&$tdataprofesor_curso_view;
$field_labels["profesor_curso_view"] = &$fieldLabelsprofesor_curso_view;
$fieldToolTips["profesor_curso_view"] = &$fieldToolTipsprofesor_curso_view;
$placeHolders["profesor_curso_view"] = &$placeHoldersprofesor_curso_view;
$page_titles["profesor_curso_view"] = &$pageTitlesprofesor_curso_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["profesor_curso_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["profesor_curso_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_profesor_curso_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCursoDicta,  	idProfesor,  	NomProfesor,  	ApellidosProfesor,  	idCurso,  	NombreCurso,  	Seccion,  	NRC,  	Academia,  	idCicloEscolar";
$proto0["m_strFrom"] = "FROM profesor_curso_view";
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
	"m_strName" => "idCursoDicta",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto6["m_sql"] = "idCursoDicta";
$proto6["m_srcTableName"] = "profesor_curso_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto8["m_sql"] = "idProfesor";
$proto8["m_srcTableName"] = "profesor_curso_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NomProfesor",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto10["m_sql"] = "NomProfesor";
$proto10["m_srcTableName"] = "profesor_curso_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ApellidosProfesor",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto12["m_sql"] = "ApellidosProfesor";
$proto12["m_srcTableName"] = "profesor_curso_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto14["m_sql"] = "idCurso";
$proto14["m_srcTableName"] = "profesor_curso_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreCurso",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto16["m_sql"] = "NombreCurso";
$proto16["m_srcTableName"] = "profesor_curso_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccion",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto18["m_sql"] = "Seccion";
$proto18["m_srcTableName"] = "profesor_curso_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NRC",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto20["m_sql"] = "NRC";
$proto20["m_srcTableName"] = "profesor_curso_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Academia",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto22["m_sql"] = "Academia";
$proto22["m_srcTableName"] = "profesor_curso_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "idCicloEscolar",
	"m_strTable" => "profesor_curso_view",
	"m_srcTableName" => "profesor_curso_view"
));

$proto24["m_sql"] = "idCicloEscolar";
$proto24["m_srcTableName"] = "profesor_curso_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "profesor_curso_view";
$proto27["m_srcTableName"] = "profesor_curso_view";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "idCursoDicta";
$proto27["m_columns"][] = "idProfesor";
$proto27["m_columns"][] = "NomProfesor";
$proto27["m_columns"][] = "ApellidosProfesor";
$proto27["m_columns"][] = "idCurso";
$proto27["m_columns"][] = "NombreCurso";
$proto27["m_columns"][] = "Seccion";
$proto27["m_columns"][] = "NRC";
$proto27["m_columns"][] = "Academia";
$proto27["m_columns"][] = "idCicloEscolar";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "profesor_curso_view";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "profesor_curso_view";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="profesor_curso_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_profesor_curso_view = createSqlQuery_profesor_curso_view();


	
		;

										

$tdataprofesor_curso_view[".sqlquery"] = $queryData_profesor_curso_view;

$tableEvents["profesor_curso_view"] = new eventsBase;
$tdataprofesor_curso_view[".hasEvents"] = false;

?>