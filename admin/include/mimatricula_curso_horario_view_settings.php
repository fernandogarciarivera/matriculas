<?php



$tdatamimatricula_curso_horario_view = array();
$tdatamimatricula_curso_horario_view[".searchableFields"] = array();
$tdatamimatricula_curso_horario_view[".ShortName"] = "mimatricula_curso_horario_view";
$tdatamimatricula_curso_horario_view[".OwnerID"] = "";
$tdatamimatricula_curso_horario_view[".OriginalTable"] = "mimatricula_curso_horario_view";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );

$tdatamimatricula_curso_horario_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatamimatricula_curso_horario_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatamimatricula_curso_horario_view[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmimatricula_curso_horario_view = array();
$fieldToolTipsmimatricula_curso_horario_view = array();
$pageTitlesmimatricula_curso_horario_view = array();
$placeHoldersmimatricula_curso_horario_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmimatricula_curso_horario_view["Spanish"] = array();
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"] = array();
	$placeHoldersmimatricula_curso_horario_view["Spanish"] = array();
	$pageTitlesmimatricula_curso_horario_view["Spanish"] = array();
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["IdmatriculaCab"] = "Idmatricula Cab";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["IdmatriculaCab"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["IdmatriculaCab"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["idMatricula"] = "Id Matricula";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["idMatricula"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["idMatricula"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["idAlumno"] = "Id Alumno";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["idAlumno"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["idAlumno"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["idCursoDicta"] = "Id Curso Dicta";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["idCursoDicta"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["idCursoDicta"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["idCurso"] = "Id Curso";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["idCurso"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["idCurso"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["idProfesor"] = "Id Profesor";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["idProfesor"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["idProfesor"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["IdHorario"] = "Id Horario";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["IdHorario"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["IdHorario"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["estadoCurso"] = "Estado Curso";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["estadoCurso"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["estadoCurso"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["estadoMatricula"] = "Estado Matricula";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["estadoMatricula"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["estadoMatricula"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["Docente"] = "Docente";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["Docente"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["Docente"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["NombreCurso"] = "Nombre Curso";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["NombreCurso"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["NombreCurso"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["Seccion"] = "Seccion";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["Seccion"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["Seccion"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["NRC"] = "NRC";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["NRC"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["NRC"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["Academia"] = "Academia";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["Academia"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["Academia"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["idCicloEscolar"] = "Id Ciclo Escolar";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["idCicloEscolar"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["idCicloEscolar"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["numDia"] = "Num Dia";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["numDia"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["numDia"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["txtDia"] = "Txt Dia";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["txtDia"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["txtDia"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["HorIni"] = "Hor Ini";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["HorIni"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["HorIni"] = "";
	$fieldLabelsmimatricula_curso_horario_view["Spanish"]["HorFin"] = "Hor Fin";
	$fieldToolTipsmimatricula_curso_horario_view["Spanish"]["HorFin"] = "";
	$placeHoldersmimatricula_curso_horario_view["Spanish"]["HorFin"] = "";
	$pageTitlesmimatricula_curso_horario_view["Spanish"]["add"] = "Añadir nuevo";
	$pageTitlesmimatricula_curso_horario_view["Spanish"]["edit"] = "Editar";
	if (count($fieldToolTipsmimatricula_curso_horario_view["Spanish"]))
		$tdatamimatricula_curso_horario_view[".isUseToolTips"] = true;
}


	$tdatamimatricula_curso_horario_view[".NCSearch"] = true;



$tdatamimatricula_curso_horario_view[".shortTableName"] = "mimatricula_curso_horario_view";
$tdatamimatricula_curso_horario_view[".nSecOptions"] = 0;

$tdatamimatricula_curso_horario_view[".mainTableOwnerID"] = "";
$tdatamimatricula_curso_horario_view[".entityType"] = 0;

$tdatamimatricula_curso_horario_view[".strOriginalTableName"] = "mimatricula_curso_horario_view";

	



$tdatamimatricula_curso_horario_view[".showAddInPopup"] = false;

$tdatamimatricula_curso_horario_view[".showEditInPopup"] = false;

$tdatamimatricula_curso_horario_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamimatricula_curso_horario_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamimatricula_curso_horario_view[".listAjax"] = false;
//	temporary
$tdatamimatricula_curso_horario_view[".listAjax"] = false;

	$tdatamimatricula_curso_horario_view[".audit"] = false;

	$tdatamimatricula_curso_horario_view[".locking"] = false;


$pages = $tdatamimatricula_curso_horario_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamimatricula_curso_horario_view[".edit"] = true;
	$tdatamimatricula_curso_horario_view[".afterEditAction"] = 0;
	$tdatamimatricula_curso_horario_view[".closePopupAfterEdit"] = 1;
	$tdatamimatricula_curso_horario_view[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamimatricula_curso_horario_view[".add"] = true;
$tdatamimatricula_curso_horario_view[".afterAddAction"] = 0;
$tdatamimatricula_curso_horario_view[".closePopupAfterAdd"] = 1;
$tdatamimatricula_curso_horario_view[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatamimatricula_curso_horario_view[".list"] = true;
}



$tdatamimatricula_curso_horario_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamimatricula_curso_horario_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamimatricula_curso_horario_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamimatricula_curso_horario_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamimatricula_curso_horario_view[".printFriendly"] = true;
}



$tdatamimatricula_curso_horario_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamimatricula_curso_horario_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamimatricula_curso_horario_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamimatricula_curso_horario_view[".isUseAjaxSuggest"] = true;

$tdatamimatricula_curso_horario_view[".rowHighlite"] = true;





$tdatamimatricula_curso_horario_view[".ajaxCodeSnippetAdded"] = false;

$tdatamimatricula_curso_horario_view[".buttonsAdded"] = false;

$tdatamimatricula_curso_horario_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamimatricula_curso_horario_view[".isUseTimeForSearch"] = false;


$tdatamimatricula_curso_horario_view[".badgeColor"] = "e07878";


$tdatamimatricula_curso_horario_view[".allSearchFields"] = array();
$tdatamimatricula_curso_horario_view[".filterFields"] = array();
$tdatamimatricula_curso_horario_view[".requiredSearchFields"] = array();

$tdatamimatricula_curso_horario_view[".googleLikeFields"] = array();
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "Docente";
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "NombreCurso";
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "Seccion";
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "Academia";
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "idCicloEscolar";
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "txtDia";
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "HorIni";
$tdatamimatricula_curso_horario_view[".googleLikeFields"][] = "HorFin";



$tdatamimatricula_curso_horario_view[".tableType"] = "list";

$tdatamimatricula_curso_horario_view[".printerPageOrientation"] = 0;
$tdatamimatricula_curso_horario_view[".nPrinterPageScale"] = 100;

$tdatamimatricula_curso_horario_view[".nPrinterSplitRecords"] = 40;

$tdatamimatricula_curso_horario_view[".geocodingEnabled"] = false;










$tdatamimatricula_curso_horario_view[".pageSize"] = 20;

$tdatamimatricula_curso_horario_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamimatricula_curso_horario_view[".strOrderBy"] = $tstrOrderBy;

$tdatamimatricula_curso_horario_view[".orderindexes"] = array();

$tdatamimatricula_curso_horario_view[".sqlHead"] = "SELECT IdmatriculaCab,  	idMatricula,  	idAlumno,  	idCursoDicta,  	idCurso,  	idProfesor,  	IdHorario,  	estadoCurso,  	estadoMatricula,  	Docente,  	NombreCurso,  	Seccion,  	NRC,  	Academia,  	idCicloEscolar,  	numDia,  	txtDia,  	HorIni,  	HorFin";
$tdatamimatricula_curso_horario_view[".sqlFrom"] = "FROM mimatricula_curso_horario_view";
$tdatamimatricula_curso_horario_view[".sqlWhereExpr"] = "";
$tdatamimatricula_curso_horario_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamimatricula_curso_horario_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamimatricula_curso_horario_view[".arrGroupsPerPage"] = $arrGPP;

$tdatamimatricula_curso_horario_view[".highlightSearchResults"] = true;

$tableKeysmimatricula_curso_horario_view = array();
$tableKeysmimatricula_curso_horario_view[] = "IdmatriculaCab";
$tableKeysmimatricula_curso_horario_view[] = "idMatricula";
$tableKeysmimatricula_curso_horario_view[] = "idAlumno";
$tableKeysmimatricula_curso_horario_view[] = "idCursoDicta";
$tableKeysmimatricula_curso_horario_view[] = "idCurso";
$tableKeysmimatricula_curso_horario_view[] = "idProfesor";
$tableKeysmimatricula_curso_horario_view[] = "IdHorario";
$tdatamimatricula_curso_horario_view[".Keys"] = $tableKeysmimatricula_curso_horario_view;


$tdatamimatricula_curso_horario_view[".hideMobileList"] = array();




//	IdmatriculaCab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdmatriculaCab";
	$fdata["GoodName"] = "IdmatriculaCab";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","IdmatriculaCab");
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


	$tdatamimatricula_curso_horario_view["IdmatriculaCab"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "IdmatriculaCab";
//	idMatricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idMatricula";
	$fdata["GoodName"] = "idMatricula";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","idMatricula");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatamimatricula_curso_horario_view["idMatricula"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "idMatricula";
//	idAlumno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idAlumno";
	$fdata["GoodName"] = "idAlumno";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","idAlumno");
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


	$tdatamimatricula_curso_horario_view["idAlumno"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "idAlumno";
//	idCursoDicta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idCursoDicta";
	$fdata["GoodName"] = "idCursoDicta";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","idCursoDicta");
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


	$tdatamimatricula_curso_horario_view["idCursoDicta"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "idCursoDicta";
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","idCurso");
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


	$tdatamimatricula_curso_horario_view["idCurso"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "idCurso";
//	idProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "idProfesor";
	$fdata["GoodName"] = "idProfesor";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","idProfesor");
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


	$tdatamimatricula_curso_horario_view["idProfesor"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "idProfesor";
//	IdHorario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IdHorario";
	$fdata["GoodName"] = "IdHorario";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","IdHorario");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatamimatricula_curso_horario_view["IdHorario"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "IdHorario";
//	estadoCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estadoCurso";
	$fdata["GoodName"] = "estadoCurso";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","estadoCurso");
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


	$tdatamimatricula_curso_horario_view["estadoCurso"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "estadoCurso";
//	estadoMatricula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "estadoMatricula";
	$fdata["GoodName"] = "estadoMatricula";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","estadoMatricula");
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


	$tdatamimatricula_curso_horario_view["estadoMatricula"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "estadoMatricula";
//	Docente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Docente";
	$fdata["GoodName"] = "Docente";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","Docente");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Docente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Docente";

	
	
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
			$edata["EditParams"].= " maxlength=91";

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


	$tdatamimatricula_curso_horario_view["Docente"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "Docente";
//	NombreCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "NombreCurso";
	$fdata["GoodName"] = "NombreCurso";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","NombreCurso");
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


	$tdatamimatricula_curso_horario_view["NombreCurso"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "NombreCurso";
//	Seccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Seccion";
	$fdata["GoodName"] = "Seccion";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","Seccion");
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


	$tdatamimatricula_curso_horario_view["Seccion"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "Seccion";
//	NRC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NRC";
	$fdata["GoodName"] = "NRC";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","NRC");
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


	$tdatamimatricula_curso_horario_view["NRC"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "NRC";
//	Academia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Academia";
	$fdata["GoodName"] = "Academia";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","Academia");
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


	$tdatamimatricula_curso_horario_view["Academia"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "Academia";
//	idCicloEscolar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "idCicloEscolar";
	$fdata["GoodName"] = "idCicloEscolar";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","idCicloEscolar");
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


	$tdatamimatricula_curso_horario_view["idCicloEscolar"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "idCicloEscolar";
//	numDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "numDia";
	$fdata["GoodName"] = "numDia";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","numDia");
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


	$tdatamimatricula_curso_horario_view["numDia"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "numDia";
//	txtDia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "txtDia";
	$fdata["GoodName"] = "txtDia";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","txtDia");
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


	$tdatamimatricula_curso_horario_view["txtDia"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "txtDia";
//	HorIni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "HorIni";
	$fdata["GoodName"] = "HorIni";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","HorIni");
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


	$tdatamimatricula_curso_horario_view["HorIni"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "HorIni";
//	HorFin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "HorFin";
	$fdata["GoodName"] = "HorFin";
	$fdata["ownerTable"] = "mimatricula_curso_horario_view";
	$fdata["Label"] = GetFieldLabel("mimatricula_curso_horario_view","HorFin");
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


	$tdatamimatricula_curso_horario_view["HorFin"] = $fdata;
		$tdatamimatricula_curso_horario_view[".searchableFields"][] = "HorFin";


$tables_data["mimatricula_curso_horario_view"]=&$tdatamimatricula_curso_horario_view;
$field_labels["mimatricula_curso_horario_view"] = &$fieldLabelsmimatricula_curso_horario_view;
$fieldToolTips["mimatricula_curso_horario_view"] = &$fieldToolTipsmimatricula_curso_horario_view;
$placeHolders["mimatricula_curso_horario_view"] = &$placeHoldersmimatricula_curso_horario_view;
$page_titles["mimatricula_curso_horario_view"] = &$pageTitlesmimatricula_curso_horario_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mimatricula_curso_horario_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mimatricula_curso_horario_view"] = array();



	
				$strOriginalDetailsTable="matriculacab";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="matriculacab";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "matriculacab";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["mimatricula_curso_horario_view"][0] = $masterParams;
				$masterTablesData["mimatricula_curso_horario_view"][0]["masterKeys"] = array();
	$masterTablesData["mimatricula_curso_horario_view"][0]["masterKeys"][]="IdmatriculaCab";
				$masterTablesData["mimatricula_curso_horario_view"][0]["masterKeys"][]="idAlumno";
				$masterTablesData["mimatricula_curso_horario_view"][0]["detailKeys"] = array();
	$masterTablesData["mimatricula_curso_horario_view"][0]["detailKeys"][]="IdmatriculaCab";
				$masterTablesData["mimatricula_curso_horario_view"][0]["detailKeys"][]="idAlumno";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_mimatricula_curso_horario_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdmatriculaCab,  	idMatricula,  	idAlumno,  	idCursoDicta,  	idCurso,  	idProfesor,  	IdHorario,  	estadoCurso,  	estadoMatricula,  	Docente,  	NombreCurso,  	Seccion,  	NRC,  	Academia,  	idCicloEscolar,  	numDia,  	txtDia,  	HorIni,  	HorFin";
$proto0["m_strFrom"] = "FROM mimatricula_curso_horario_view";
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
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto6["m_sql"] = "IdmatriculaCab";
$proto6["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idMatricula",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto8["m_sql"] = "idMatricula";
$proto8["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idAlumno",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto10["m_sql"] = "idAlumno";
$proto10["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idCursoDicta",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto12["m_sql"] = "idCursoDicta";
$proto12["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto14["m_sql"] = "idCurso";
$proto14["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto16["m_sql"] = "idProfesor";
$proto16["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IdHorario",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto18["m_sql"] = "IdHorario";
$proto18["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoCurso",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto20["m_sql"] = "estadoCurso";
$proto20["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoMatricula",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto22["m_sql"] = "estadoMatricula";
$proto22["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Docente",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto24["m_sql"] = "Docente";
$proto24["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreCurso",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto26["m_sql"] = "NombreCurso";
$proto26["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Seccion",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto28["m_sql"] = "Seccion";
$proto28["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NRC",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto30["m_sql"] = "NRC";
$proto30["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Academia",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto32["m_sql"] = "Academia";
$proto32["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "idCicloEscolar",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto34["m_sql"] = "idCicloEscolar";
$proto34["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "numDia",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto36["m_sql"] = "numDia";
$proto36["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "txtDia",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto38["m_sql"] = "txtDia";
$proto38["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "HorIni",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto40["m_sql"] = "HorIni";
$proto40["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "HorFin",
	"m_strTable" => "mimatricula_curso_horario_view",
	"m_srcTableName" => "mimatricula_curso_horario_view"
));

$proto42["m_sql"] = "HorFin";
$proto42["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "mimatricula_curso_horario_view";
$proto45["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "IdmatriculaCab";
$proto45["m_columns"][] = "idMatricula";
$proto45["m_columns"][] = "idAlumno";
$proto45["m_columns"][] = "idCursoDicta";
$proto45["m_columns"][] = "idCurso";
$proto45["m_columns"][] = "idProfesor";
$proto45["m_columns"][] = "IdHorario";
$proto45["m_columns"][] = "estadoCurso";
$proto45["m_columns"][] = "estadoMatricula";
$proto45["m_columns"][] = "Docente";
$proto45["m_columns"][] = "NombreCurso";
$proto45["m_columns"][] = "Seccion";
$proto45["m_columns"][] = "NRC";
$proto45["m_columns"][] = "Academia";
$proto45["m_columns"][] = "idCicloEscolar";
$proto45["m_columns"][] = "numDia";
$proto45["m_columns"][] = "txtDia";
$proto45["m_columns"][] = "HorIni";
$proto45["m_columns"][] = "HorFin";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "mimatricula_curso_horario_view";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "mimatricula_curso_horario_view";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mimatricula_curso_horario_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mimatricula_curso_horario_view = createSqlQuery_mimatricula_curso_horario_view();


	
		;

																			

$tdatamimatricula_curso_horario_view[".sqlquery"] = $queryData_mimatricula_curso_horario_view;

include_once(getabspath("include/mimatricula_curso_horario_view_events.php"));
$tableEvents["mimatricula_curso_horario_view"] = new eventclass_mimatricula_curso_horario_view;
$tdatamimatricula_curso_horario_view[".hasEvents"] = true;

?>