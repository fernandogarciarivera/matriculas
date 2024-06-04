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
	$fieldLabelsprofesor_curso_view["Spanish"]["Docente"] = "Docente";
	$fieldToolTipsprofesor_curso_view["Spanish"]["Docente"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["Docente"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["IdHorario"] = "Id Horario";
	$fieldToolTipsprofesor_curso_view["Spanish"]["IdHorario"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["IdHorario"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["numDia"] = "Num Dia";
	$fieldToolTipsprofesor_curso_view["Spanish"]["numDia"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["numDia"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["txtDia"] = "Txt Dia";
	$fieldToolTipsprofesor_curso_view["Spanish"]["txtDia"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["txtDia"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["HorIni"] = "Hor Ini";
	$fieldToolTipsprofesor_curso_view["Spanish"]["HorIni"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["HorIni"] = "";
	$fieldLabelsprofesor_curso_view["Spanish"]["HorFin"] = "Hor Fin";
	$fieldToolTipsprofesor_curso_view["Spanish"]["HorFin"] = "";
	$placeHoldersprofesor_curso_view["Spanish"]["HorFin"] = "";
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
	$tdataprofesor_curso_view[".afterEditAction"] = 1;
	$tdataprofesor_curso_view[".closePopupAfterEdit"] = 1;
	$tdataprofesor_curso_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprofesor_curso_view[".add"] = true;
$tdataprofesor_curso_view[".afterAddAction"] = 1;
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
$tdataprofesor_curso_view[".googleLikeFields"][] = "Docente";
$tdataprofesor_curso_view[".googleLikeFields"][] = "idCurso";
$tdataprofesor_curso_view[".googleLikeFields"][] = "NombreCurso";
$tdataprofesor_curso_view[".googleLikeFields"][] = "Seccion";
$tdataprofesor_curso_view[".googleLikeFields"][] = "NRC";
$tdataprofesor_curso_view[".googleLikeFields"][] = "Academia";
$tdataprofesor_curso_view[".googleLikeFields"][] = "idCicloEscolar";
$tdataprofesor_curso_view[".googleLikeFields"][] = "IdHorario";
$tdataprofesor_curso_view[".googleLikeFields"][] = "numDia";
$tdataprofesor_curso_view[".googleLikeFields"][] = "txtDia";
$tdataprofesor_curso_view[".googleLikeFields"][] = "HorIni";
$tdataprofesor_curso_view[".googleLikeFields"][] = "HorFin";



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

$tdataprofesor_curso_view[".sqlHead"] = "SELECT pc.idCursoDicta,      pc.idProfesor,      CONCAT(pc.NomProfesor, '', pc.ApellidosProfesor) AS Docente,      pc.idCurso,      pc.NombreCurso,      pc.Seccion,      pc.NRC,      pc.Academia,      pc.idCicloEscolar,      c.IdHorario, c.numDia, c.txtDia, c.HorIni, c.HorFin";
$tdataprofesor_curso_view[".sqlFrom"] = "FROM      matriculas.profesor_curso_view AS pc          LEFT JOIN      matriculas.horarios AS c ON c.idCursoDicta = pc.idCursoDicta          AND c.idProfesor = pc.idProfesor          AND c.idCurso = pc.idCurso";
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
	$fdata["FullName"] = "pc.idCursoDicta";

	
	
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
	$fdata["FullName"] = "pc.idProfesor";

	
	
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
//	Docente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Docente";
	$fdata["GoodName"] = "Docente";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","Docente");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Docente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(pc.NomProfesor, '', pc.ApellidosProfesor)";

	
	
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


	$tdataprofesor_curso_view["Docente"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "Docente";
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","idCurso");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc.idCurso";

	
	
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
	$fdata["Index"] = 5;
	$fdata["strName"] = "NombreCurso";
	$fdata["GoodName"] = "NombreCurso";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","NombreCurso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NombreCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc.NombreCurso";

	
	
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
	$fdata["Index"] = 6;
	$fdata["strName"] = "Seccion";
	$fdata["GoodName"] = "Seccion";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","Seccion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Seccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc.Seccion";

	
	
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
	$fdata["Index"] = 7;
	$fdata["strName"] = "NRC";
	$fdata["GoodName"] = "NRC";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","NRC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NRC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc.NRC";

	
	
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
	$fdata["Index"] = 8;
	$fdata["strName"] = "Academia";
	$fdata["GoodName"] = "Academia";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","Academia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Academia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc.Academia";

	
	
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
	$fdata["Index"] = 9;
	$fdata["strName"] = "idCicloEscolar";
	$fdata["GoodName"] = "idCicloEscolar";
	$fdata["ownerTable"] = "profesor_curso_view";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","idCicloEscolar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "idCicloEscolar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc.idCicloEscolar";

	
	
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
//	IdHorario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "IdHorario";
	$fdata["GoodName"] = "IdHorario";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","IdHorario");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdHorario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.IdHorario";

	
	
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


	$tdataprofesor_curso_view["IdHorario"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "IdHorario";
//	numDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "numDia";
	$fdata["GoodName"] = "numDia";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","numDia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "numDia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.numDia";

	
	
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


	$tdataprofesor_curso_view["numDia"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "numDia";
//	txtDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "txtDia";
	$fdata["GoodName"] = "txtDia";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","txtDia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "txtDia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.txtDia";

	
	
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


	$tdataprofesor_curso_view["txtDia"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "txtDia";
//	HorIni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "HorIni";
	$fdata["GoodName"] = "HorIni";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","HorIni");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "HorIni";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.HorIni";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprofesor_curso_view["HorIni"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "HorIni";
//	HorFin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HorFin";
	$fdata["GoodName"] = "HorFin";
	$fdata["ownerTable"] = "horarios";
	$fdata["Label"] = GetFieldLabel("profesor_curso_view","HorFin");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "HorFin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.HorFin";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataprofesor_curso_view["HorFin"] = $fdata;
		$tdataprofesor_curso_view[".searchableFields"][] = "HorFin";


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
$proto0["m_strFieldList"] = "pc.idCursoDicta,      pc.idProfesor,      CONCAT(pc.NomProfesor, '', pc.ApellidosProfesor) AS Docente,      pc.idCurso,      pc.NombreCurso,      pc.Seccion,      pc.NRC,      pc.Academia,      pc.idCicloEscolar,      c.IdHorario, c.numDia, c.txtDia, c.HorIni, c.HorFin";
$proto0["m_strFrom"] = "FROM      matriculas.profesor_curso_view AS pc          LEFT JOIN      matriculas.horarios AS c ON c.idCursoDicta = pc.idCursoDicta          AND c.idProfesor = pc.idProfesor          AND c.idCurso = pc.idCurso";
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
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto6["m_sql"] = "pc.idCursoDicta";
$proto6["m_srcTableName"] = "profesor_curso_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto8["m_sql"] = "pc.idProfesor";
$proto8["m_srcTableName"] = "profesor_curso_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "pc.NomProfesor"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "pc.ApellidosProfesor"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "CONCAT(pc.NomProfesor, '', pc.ApellidosProfesor)";
$proto10["m_srcTableName"] = "profesor_curso_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Docente";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto15["m_sql"] = "pc.idCurso";
$proto15["m_srcTableName"] = "profesor_curso_view";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreCurso",
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto17["m_sql"] = "pc.NombreCurso";
$proto17["m_srcTableName"] = "profesor_curso_view";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccion",
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto19["m_sql"] = "pc.Seccion";
$proto19["m_srcTableName"] = "profesor_curso_view";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "NRC",
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto21["m_sql"] = "pc.NRC";
$proto21["m_srcTableName"] = "profesor_curso_view";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Academia",
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto23["m_sql"] = "pc.Academia";
$proto23["m_srcTableName"] = "profesor_curso_view";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "idCicloEscolar",
	"m_strTable" => "pc",
	"m_srcTableName" => "profesor_curso_view"
));

$proto25["m_sql"] = "pc.idCicloEscolar";
$proto25["m_srcTableName"] = "profesor_curso_view";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "IdHorario",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto27["m_sql"] = "c.IdHorario";
$proto27["m_srcTableName"] = "profesor_curso_view";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "numDia",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto29["m_sql"] = "c.numDia";
$proto29["m_srcTableName"] = "profesor_curso_view";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "txtDia",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto31["m_sql"] = "c.txtDia";
$proto31["m_srcTableName"] = "profesor_curso_view";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "HorIni",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto33["m_sql"] = "c.HorIni";
$proto33["m_srcTableName"] = "profesor_curso_view";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "HorFin",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto35["m_sql"] = "c.HorFin";
$proto35["m_srcTableName"] = "profesor_curso_view";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "profesor_curso_view";
$proto38["m_srcTableName"] = "profesor_curso_view";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "idCursoDicta";
$proto38["m_columns"][] = "idProfesor";
$proto38["m_columns"][] = "NomProfesor";
$proto38["m_columns"][] = "ApellidosProfesor";
$proto38["m_columns"][] = "idCurso";
$proto38["m_columns"][] = "NombreCurso";
$proto38["m_columns"][] = "Seccion";
$proto38["m_columns"][] = "NRC";
$proto38["m_columns"][] = "Academia";
$proto38["m_columns"][] = "idCicloEscolar";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "matriculas.profesor_curso_view AS pc";
$proto37["m_alias"] = "pc";
$proto37["m_srcTableName"] = "profesor_curso_view";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_LEFTJOIN";
			$proto42=array();
$proto42["m_strName"] = "horarios";
$proto42["m_srcTableName"] = "profesor_curso_view";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "IdHorario";
$proto42["m_columns"][] = "idCursoDicta";
$proto42["m_columns"][] = "idProfesor";
$proto42["m_columns"][] = "idCurso";
$proto42["m_columns"][] = "numDia";
$proto42["m_columns"][] = "txtDia";
$proto42["m_columns"][] = "HorIni";
$proto42["m_columns"][] = "HorFin";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT JOIN      matriculas.horarios AS c ON c.idCursoDicta = pc.idCursoDicta          AND c.idProfesor = pc.idProfesor          AND c.idCurso = pc.idCurso";
$proto41["m_alias"] = "c";
$proto41["m_srcTableName"] = "profesor_curso_view";
$proto43=array();
$proto43["m_sql"] = "c.idCursoDicta = pc.idCursoDicta          AND c.idProfesor = pc.idProfesor          AND c.idCurso = pc.idCurso";
$proto43["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "c.idCursoDicta = pc.idCursoDicta          AND c.idProfesor = pc.idProfesor          AND c.idCurso = pc.idCurso"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
						$proto45=array();
$proto45["m_sql"] = "c.idCursoDicta = pc.idCursoDicta";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idCursoDicta",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= pc.idCursoDicta";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

			$proto43["m_contained"][]=$obj;
						$proto47=array();
$proto47["m_sql"] = "c.idProfesor = pc.idProfesor";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= pc.idProfesor";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

			$proto43["m_contained"][]=$obj;
						$proto49=array();
$proto49["m_sql"] = "c.idCurso = pc.idCurso";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "c",
	"m_srcTableName" => "profesor_curso_view"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= pc.idCurso";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

			$proto43["m_contained"][]=$obj;
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

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