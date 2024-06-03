<?php



$tdatamatriculacab = array();
$tdatamatriculacab[".searchableFields"] = array();
$tdatamatriculacab[".ShortName"] = "matriculacab";
$tdatamatriculacab[".OwnerID"] = "";
$tdatamatriculacab[".OriginalTable"] = "matriculacab";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatamatriculacab[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamatriculacab[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamatriculacab[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmatriculacab = array();
$fieldToolTipsmatriculacab = array();
$pageTitlesmatriculacab = array();
$placeHoldersmatriculacab = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmatriculacab["Spanish"] = array();
	$fieldToolTipsmatriculacab["Spanish"] = array();
	$placeHoldersmatriculacab["Spanish"] = array();
	$pageTitlesmatriculacab["Spanish"] = array();
	$fieldLabelsmatriculacab["Spanish"]["IdmatriculaCab"] = "Idmatricula Cab";
	$fieldToolTipsmatriculacab["Spanish"]["IdmatriculaCab"] = "";
	$placeHoldersmatriculacab["Spanish"]["IdmatriculaCab"] = "";
	$fieldLabelsmatriculacab["Spanish"]["documento"] = "Documento Matricula";
	$fieldToolTipsmatriculacab["Spanish"]["documento"] = "";
	$placeHoldersmatriculacab["Spanish"]["documento"] = "";
	$fieldLabelsmatriculacab["Spanish"]["idAlumno"] = "Alumno";
	$fieldToolTipsmatriculacab["Spanish"]["idAlumno"] = "";
	$placeHoldersmatriculacab["Spanish"]["idAlumno"] = "";
	$fieldLabelsmatriculacab["Spanish"]["fechaRegistro"] = "Fecha Registro";
	$fieldToolTipsmatriculacab["Spanish"]["fechaRegistro"] = "";
	$placeHoldersmatriculacab["Spanish"]["fechaRegistro"] = "";
	if (count($fieldToolTipsmatriculacab["Spanish"]))
		$tdatamatriculacab[".isUseToolTips"] = true;
}


	$tdatamatriculacab[".NCSearch"] = true;



$tdatamatriculacab[".shortTableName"] = "matriculacab";
$tdatamatriculacab[".nSecOptions"] = 0;

$tdatamatriculacab[".mainTableOwnerID"] = "";
$tdatamatriculacab[".entityType"] = 0;

$tdatamatriculacab[".strOriginalTableName"] = "matriculacab";

	



$tdatamatriculacab[".showAddInPopup"] = false;

$tdatamatriculacab[".showEditInPopup"] = false;

$tdatamatriculacab[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamatriculacab[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamatriculacab[".listAjax"] = false;
//	temporary
$tdatamatriculacab[".listAjax"] = false;

	$tdatamatriculacab[".audit"] = false;

	$tdatamatriculacab[".locking"] = false;


$pages = $tdatamatriculacab[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamatriculacab[".edit"] = true;
	$tdatamatriculacab[".afterEditAction"] = 1;
	$tdatamatriculacab[".closePopupAfterEdit"] = 1;
	$tdatamatriculacab[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamatriculacab[".add"] = true;
$tdatamatriculacab[".afterAddAction"] = 1;
$tdatamatriculacab[".closePopupAfterAdd"] = 1;
$tdatamatriculacab[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamatriculacab[".list"] = true;
}



$tdatamatriculacab[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamatriculacab[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamatriculacab[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamatriculacab[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamatriculacab[".printFriendly"] = true;
}



$tdatamatriculacab[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamatriculacab[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamatriculacab[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamatriculacab[".isUseAjaxSuggest"] = true;

$tdatamatriculacab[".rowHighlite"] = true;





$tdatamatriculacab[".ajaxCodeSnippetAdded"] = false;

$tdatamatriculacab[".buttonsAdded"] = false;

$tdatamatriculacab[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamatriculacab[".isUseTimeForSearch"] = false;


$tdatamatriculacab[".badgeColor"] = "5F9EA0";


$tdatamatriculacab[".allSearchFields"] = array();
$tdatamatriculacab[".filterFields"] = array();
$tdatamatriculacab[".requiredSearchFields"] = array();

$tdatamatriculacab[".googleLikeFields"] = array();
$tdatamatriculacab[".googleLikeFields"][] = "documento";
$tdatamatriculacab[".googleLikeFields"][] = "idAlumno";
$tdatamatriculacab[".googleLikeFields"][] = "fechaRegistro";



$tdatamatriculacab[".tableType"] = "list";

$tdatamatriculacab[".printerPageOrientation"] = 0;
$tdatamatriculacab[".nPrinterPageScale"] = 100;

$tdatamatriculacab[".nPrinterSplitRecords"] = 40;

$tdatamatriculacab[".geocodingEnabled"] = false;










$tdatamatriculacab[".pageSize"] = 20;

$tdatamatriculacab[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamatriculacab[".strOrderBy"] = $tstrOrderBy;

$tdatamatriculacab[".orderindexes"] = array();

$tdatamatriculacab[".sqlHead"] = "SELECT IdmatriculaCab,  	documento,  	idAlumno,  	fechaRegistro";
$tdatamatriculacab[".sqlFrom"] = "FROM matriculacab";
$tdatamatriculacab[".sqlWhereExpr"] = "";
$tdatamatriculacab[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamatriculacab[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamatriculacab[".arrGroupsPerPage"] = $arrGPP;

$tdatamatriculacab[".highlightSearchResults"] = true;

$tableKeysmatriculacab = array();
$tableKeysmatriculacab[] = "IdmatriculaCab";
$tdatamatriculacab[".Keys"] = $tableKeysmatriculacab;


$tdatamatriculacab[".hideMobileList"] = array();




//	IdmatriculaCab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdmatriculaCab";
	$fdata["GoodName"] = "IdmatriculaCab";
	$fdata["ownerTable"] = "matriculacab";
	$fdata["Label"] = GetFieldLabel("matriculacab","IdmatriculaCab");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatamatriculacab["IdmatriculaCab"] = $fdata;
		$tdatamatriculacab[".searchableFields"][] = "IdmatriculaCab";
//	documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "documento";
	$fdata["GoodName"] = "documento";
	$fdata["ownerTable"] = "matriculacab";
	$fdata["Label"] = GetFieldLabel("matriculacab","documento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatamatriculacab["documento"] = $fdata;
		$tdatamatriculacab[".searchableFields"][] = "documento";
//	idAlumno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idAlumno";
	$fdata["GoodName"] = "idAlumno";
	$fdata["ownerTable"] = "matriculacab";
	$fdata["Label"] = GetFieldLabel("matriculacab","idAlumno");
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
	$edata["DisplayField"] = "concat(Apellidos,' ' ,Nombres)";

	

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


	$tdatamatriculacab["idAlumno"] = $fdata;
		$tdatamatriculacab[".searchableFields"][] = "idAlumno";
//	fechaRegistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fechaRegistro";
	$fdata["GoodName"] = "fechaRegistro";
	$fdata["ownerTable"] = "matriculacab";
	$fdata["Label"] = GetFieldLabel("matriculacab","fechaRegistro");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fechaRegistro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaRegistro";

	
	
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


	$tdatamatriculacab["fechaRegistro"] = $fdata;
		$tdatamatriculacab[".searchableFields"][] = "fechaRegistro";


$tables_data["matriculacab"]=&$tdatamatriculacab;
$field_labels["matriculacab"] = &$fieldLabelsmatriculacab;
$fieldToolTips["matriculacab"] = &$fieldToolTipsmatriculacab;
$placeHolders["matriculacab"] = &$placeHoldersmatriculacab;
$page_titles["matriculacab"] = &$pageTitlesmatriculacab;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["matriculacab"] = array();
//	alumno_profesor_curso
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="alumno_profesor_curso";
		$detailsParam["dOriginalTable"] = "alumno_profesor_curso";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "alumno_profesor_curso";
	$detailsParam["dCaptionTable"] = GetTableCaption("alumno_profesor_curso");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["matriculacab"][$dIndex] = $detailsParam;

	
		$detailsTablesData["matriculacab"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["matriculacab"][$dIndex]["masterKeys"][]="IdmatriculaCab";

				$detailsTablesData["matriculacab"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["matriculacab"][$dIndex]["detailKeys"][]="IdmatriculaCab";

// tables which are master tables for current table (detail)
$masterTablesData["matriculacab"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_matriculacab()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdmatriculaCab,  	documento,  	idAlumno,  	fechaRegistro";
$proto0["m_strFrom"] = "FROM matriculacab";
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
	"m_strTable" => "matriculacab",
	"m_srcTableName" => "matriculacab"
));

$proto6["m_sql"] = "IdmatriculaCab";
$proto6["m_srcTableName"] = "matriculacab";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "documento",
	"m_strTable" => "matriculacab",
	"m_srcTableName" => "matriculacab"
));

$proto8["m_sql"] = "documento";
$proto8["m_srcTableName"] = "matriculacab";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idAlumno",
	"m_strTable" => "matriculacab",
	"m_srcTableName" => "matriculacab"
));

$proto10["m_sql"] = "idAlumno";
$proto10["m_srcTableName"] = "matriculacab";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaRegistro",
	"m_strTable" => "matriculacab",
	"m_srcTableName" => "matriculacab"
));

$proto12["m_sql"] = "fechaRegistro";
$proto12["m_srcTableName"] = "matriculacab";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "matriculacab";
$proto15["m_srcTableName"] = "matriculacab";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IdmatriculaCab";
$proto15["m_columns"][] = "documento";
$proto15["m_columns"][] = "idAlumno";
$proto15["m_columns"][] = "fechaRegistro";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "matriculacab";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "matriculacab";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="matriculacab";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_matriculacab = createSqlQuery_matriculacab();


	
		;

				

$tdatamatriculacab[".sqlquery"] = $queryData_matriculacab;

include_once(getabspath("include/matriculacab_events.php"));
$tableEvents["matriculacab"] = new eventclass_matriculacab;
$tdatamatriculacab[".hasEvents"] = true;

?>