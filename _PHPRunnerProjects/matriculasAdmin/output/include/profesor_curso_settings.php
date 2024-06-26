<?php



$tdataprofesor_curso = array();
$tdataprofesor_curso[".searchableFields"] = array();
$tdataprofesor_curso[".ShortName"] = "profesor_curso";
$tdataprofesor_curso[".OwnerID"] = "";
$tdataprofesor_curso[".OriginalTable"] = "profesor_curso";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataprofesor_curso[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprofesor_curso[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprofesor_curso[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsprofesor_curso = array();
$fieldToolTipsprofesor_curso = array();
$pageTitlesprofesor_curso = array();
$placeHoldersprofesor_curso = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprofesor_curso["English"] = array();
	$fieldToolTipsprofesor_curso["English"] = array();
	$placeHoldersprofesor_curso["English"] = array();
	$pageTitlesprofesor_curso["English"] = array();
	$fieldLabelsprofesor_curso["English"]["idCursoDicta"] = "Id Curso Dicta";
	$fieldToolTipsprofesor_curso["English"]["idCursoDicta"] = "";
	$placeHoldersprofesor_curso["English"]["idCursoDicta"] = "";
	$fieldLabelsprofesor_curso["English"]["idProfesor"] = "Id Profesor";
	$fieldToolTipsprofesor_curso["English"]["idProfesor"] = "";
	$placeHoldersprofesor_curso["English"]["idProfesor"] = "";
	$fieldLabelsprofesor_curso["English"]["idCurso"] = "Id Curso";
	$fieldToolTipsprofesor_curso["English"]["idCurso"] = "";
	$placeHoldersprofesor_curso["English"]["idCurso"] = "";
	$fieldLabelsprofesor_curso["English"]["fechaIni"] = "Fecha Ini";
	$fieldToolTipsprofesor_curso["English"]["fechaIni"] = "";
	$placeHoldersprofesor_curso["English"]["fechaIni"] = "";
	$fieldLabelsprofesor_curso["English"]["fehaFin"] = "Feha Fin";
	$fieldToolTipsprofesor_curso["English"]["fehaFin"] = "";
	$placeHoldersprofesor_curso["English"]["fehaFin"] = "";
	if (count($fieldToolTipsprofesor_curso["English"]))
		$tdataprofesor_curso[".isUseToolTips"] = true;
}


	$tdataprofesor_curso[".NCSearch"] = true;



$tdataprofesor_curso[".shortTableName"] = "profesor_curso";
$tdataprofesor_curso[".nSecOptions"] = 0;

$tdataprofesor_curso[".mainTableOwnerID"] = "";
$tdataprofesor_curso[".entityType"] = 0;

$tdataprofesor_curso[".strOriginalTableName"] = "profesor_curso";

	



$tdataprofesor_curso[".showAddInPopup"] = false;

$tdataprofesor_curso[".showEditInPopup"] = false;

$tdataprofesor_curso[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprofesor_curso[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprofesor_curso[".listAjax"] = false;
//	temporary
$tdataprofesor_curso[".listAjax"] = false;

	$tdataprofesor_curso[".audit"] = false;

	$tdataprofesor_curso[".locking"] = false;


$pages = $tdataprofesor_curso[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprofesor_curso[".edit"] = true;
	$tdataprofesor_curso[".afterEditAction"] = 1;
	$tdataprofesor_curso[".closePopupAfterEdit"] = 1;
	$tdataprofesor_curso[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprofesor_curso[".add"] = true;
$tdataprofesor_curso[".afterAddAction"] = 1;
$tdataprofesor_curso[".closePopupAfterAdd"] = 1;
$tdataprofesor_curso[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprofesor_curso[".list"] = true;
}



$tdataprofesor_curso[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprofesor_curso[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprofesor_curso[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprofesor_curso[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprofesor_curso[".printFriendly"] = true;
}



$tdataprofesor_curso[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprofesor_curso[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprofesor_curso[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprofesor_curso[".isUseAjaxSuggest"] = true;

$tdataprofesor_curso[".rowHighlite"] = true;





$tdataprofesor_curso[".ajaxCodeSnippetAdded"] = false;

$tdataprofesor_curso[".buttonsAdded"] = false;

$tdataprofesor_curso[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprofesor_curso[".isUseTimeForSearch"] = false;


$tdataprofesor_curso[".badgeColor"] = "e8926f";


$tdataprofesor_curso[".allSearchFields"] = array();
$tdataprofesor_curso[".filterFields"] = array();
$tdataprofesor_curso[".requiredSearchFields"] = array();

$tdataprofesor_curso[".googleLikeFields"] = array();
$tdataprofesor_curso[".googleLikeFields"][] = "idCursoDicta";
$tdataprofesor_curso[".googleLikeFields"][] = "idProfesor";
$tdataprofesor_curso[".googleLikeFields"][] = "idCurso";
$tdataprofesor_curso[".googleLikeFields"][] = "fechaIni";
$tdataprofesor_curso[".googleLikeFields"][] = "fehaFin";



$tdataprofesor_curso[".tableType"] = "list";

$tdataprofesor_curso[".printerPageOrientation"] = 0;
$tdataprofesor_curso[".nPrinterPageScale"] = 100;

$tdataprofesor_curso[".nPrinterSplitRecords"] = 40;

$tdataprofesor_curso[".geocodingEnabled"] = false;










$tdataprofesor_curso[".pageSize"] = 20;

$tdataprofesor_curso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprofesor_curso[".strOrderBy"] = $tstrOrderBy;

$tdataprofesor_curso[".orderindexes"] = array();

$tdataprofesor_curso[".sqlHead"] = "SELECT idCursoDicta,  	idProfesor,  	idCurso,  	fechaIni,  	fehaFin";
$tdataprofesor_curso[".sqlFrom"] = "FROM profesor_curso";
$tdataprofesor_curso[".sqlWhereExpr"] = "";
$tdataprofesor_curso[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprofesor_curso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprofesor_curso[".arrGroupsPerPage"] = $arrGPP;

$tdataprofesor_curso[".highlightSearchResults"] = true;

$tableKeysprofesor_curso = array();
$tableKeysprofesor_curso[] = "idCursoDicta";
$tableKeysprofesor_curso[] = "idProfesor";
$tableKeysprofesor_curso[] = "idCurso";
$tdataprofesor_curso[".Keys"] = $tableKeysprofesor_curso;


$tdataprofesor_curso[".hideMobileList"] = array();




//	idCursoDicta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCursoDicta";
	$fdata["GoodName"] = "idCursoDicta";
	$fdata["ownerTable"] = "profesor_curso";
	$fdata["Label"] = GetFieldLabel("profesor_curso","idCursoDicta");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataprofesor_curso["idCursoDicta"] = $fdata;
		$tdataprofesor_curso[".searchableFields"][] = "idCursoDicta";
//	idProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idProfesor";
	$fdata["GoodName"] = "idProfesor";
	$fdata["ownerTable"] = "profesor_curso";
	$fdata["Label"] = GetFieldLabel("profesor_curso","idProfesor");
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


	$tdataprofesor_curso["idProfesor"] = $fdata;
		$tdataprofesor_curso[".searchableFields"][] = "idProfesor";
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "profesor_curso";
	$fdata["Label"] = GetFieldLabel("profesor_curso","idCurso");
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


	$tdataprofesor_curso["idCurso"] = $fdata;
		$tdataprofesor_curso[".searchableFields"][] = "idCurso";
//	fechaIni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fechaIni";
	$fdata["GoodName"] = "fechaIni";
	$fdata["ownerTable"] = "profesor_curso";
	$fdata["Label"] = GetFieldLabel("profesor_curso","fechaIni");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fechaIni";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaIni";

	
	
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


	$tdataprofesor_curso["fechaIni"] = $fdata;
		$tdataprofesor_curso[".searchableFields"][] = "fechaIni";
//	fehaFin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fehaFin";
	$fdata["GoodName"] = "fehaFin";
	$fdata["ownerTable"] = "profesor_curso";
	$fdata["Label"] = GetFieldLabel("profesor_curso","fehaFin");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fehaFin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fehaFin";

	
	
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


	$tdataprofesor_curso["fehaFin"] = $fdata;
		$tdataprofesor_curso[".searchableFields"][] = "fehaFin";


$tables_data["profesor_curso"]=&$tdataprofesor_curso;
$field_labels["profesor_curso"] = &$fieldLabelsprofesor_curso;
$fieldToolTips["profesor_curso"] = &$fieldToolTipsprofesor_curso;
$placeHolders["profesor_curso"] = &$placeHoldersprofesor_curso;
$page_titles["profesor_curso"] = &$pageTitlesprofesor_curso;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["profesor_curso"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["profesor_curso"] = array();



	
				$strOriginalDetailsTable="profesor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="profesor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "profesor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["profesor_curso"][0] = $masterParams;
				$masterTablesData["profesor_curso"][0]["masterKeys"] = array();
	$masterTablesData["profesor_curso"][0]["masterKeys"][]="idProfesor";
				$masterTablesData["profesor_curso"][0]["detailKeys"] = array();
	$masterTablesData["profesor_curso"][0]["detailKeys"][]="idCursoDicta";
		
	
				$strOriginalDetailsTable="curso";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="curso";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "curso";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["profesor_curso"][1] = $masterParams;
				$masterTablesData["profesor_curso"][1]["masterKeys"] = array();
	$masterTablesData["profesor_curso"][1]["masterKeys"][]="idCurso";
				$masterTablesData["profesor_curso"][1]["detailKeys"] = array();
	$masterTablesData["profesor_curso"][1]["detailKeys"][]="idCurso";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_profesor_curso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCursoDicta,  	idProfesor,  	idCurso,  	fechaIni,  	fehaFin";
$proto0["m_strFrom"] = "FROM profesor_curso";
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
	"m_strTable" => "profesor_curso",
	"m_srcTableName" => "profesor_curso"
));

$proto6["m_sql"] = "idCursoDicta";
$proto6["m_srcTableName"] = "profesor_curso";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfesor",
	"m_strTable" => "profesor_curso",
	"m_srcTableName" => "profesor_curso"
));

$proto8["m_sql"] = "idProfesor";
$proto8["m_srcTableName"] = "profesor_curso";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "profesor_curso",
	"m_srcTableName" => "profesor_curso"
));

$proto10["m_sql"] = "idCurso";
$proto10["m_srcTableName"] = "profesor_curso";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaIni",
	"m_strTable" => "profesor_curso",
	"m_srcTableName" => "profesor_curso"
));

$proto12["m_sql"] = "fechaIni";
$proto12["m_srcTableName"] = "profesor_curso";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fehaFin",
	"m_strTable" => "profesor_curso",
	"m_srcTableName" => "profesor_curso"
));

$proto14["m_sql"] = "fehaFin";
$proto14["m_srcTableName"] = "profesor_curso";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "profesor_curso";
$proto17["m_srcTableName"] = "profesor_curso";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idCursoDicta";
$proto17["m_columns"][] = "idProfesor";
$proto17["m_columns"][] = "idCurso";
$proto17["m_columns"][] = "fechaIni";
$proto17["m_columns"][] = "fehaFin";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "profesor_curso";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "profesor_curso";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="profesor_curso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_profesor_curso = createSqlQuery_profesor_curso();


	
		;

					

$tdataprofesor_curso[".sqlquery"] = $queryData_profesor_curso;

$tableEvents["profesor_curso"] = new eventsBase;
$tdataprofesor_curso[".hasEvents"] = false;

?>