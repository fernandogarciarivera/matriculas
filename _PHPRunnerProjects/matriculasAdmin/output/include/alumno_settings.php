<?php



$tdataalumno = array();
$tdataalumno[".searchableFields"] = array();
$tdataalumno[".ShortName"] = "alumno";
$tdataalumno[".OwnerID"] = "";
$tdataalumno[".OriginalTable"] = "alumno";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataalumno[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalumno[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalumno[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsalumno = array();
$fieldToolTipsalumno = array();
$pageTitlesalumno = array();
$placeHoldersalumno = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsalumno["English"] = array();
	$fieldToolTipsalumno["English"] = array();
	$placeHoldersalumno["English"] = array();
	$pageTitlesalumno["English"] = array();
	$fieldLabelsalumno["English"]["idAlumno"] = "Id Alumno";
	$fieldToolTipsalumno["English"]["idAlumno"] = "";
	$placeHoldersalumno["English"]["idAlumno"] = "";
	$fieldLabelsalumno["English"]["Nombres"] = "Nombres";
	$fieldToolTipsalumno["English"]["Nombres"] = "";
	$placeHoldersalumno["English"]["Nombres"] = "";
	$fieldLabelsalumno["English"]["Apellidos"] = "Apellidos";
	$fieldToolTipsalumno["English"]["Apellidos"] = "";
	$placeHoldersalumno["English"]["Apellidos"] = "";
	$fieldLabelsalumno["English"]["Carrera"] = "Carrera";
	$fieldToolTipsalumno["English"]["Carrera"] = "";
	$placeHoldersalumno["English"]["Carrera"] = "";
	$fieldLabelsalumno["English"]["Email"] = "Email";
	$fieldToolTipsalumno["English"]["Email"] = "";
	$placeHoldersalumno["English"]["Email"] = "";
	$fieldLabelsalumno["English"]["Celular"] = "Celular";
	$fieldToolTipsalumno["English"]["Celular"] = "";
	$placeHoldersalumno["English"]["Celular"] = "";
	$fieldLabelsalumno["English"]["Gthub"] = "Gthub";
	$fieldToolTipsalumno["English"]["Gthub"] = "";
	$placeHoldersalumno["English"]["Gthub"] = "";
	$fieldLabelsalumno["English"]["Web"] = "Web";
	$fieldToolTipsalumno["English"]["Web"] = "";
	$placeHoldersalumno["English"]["Web"] = "";
	$fieldLabelsalumno["English"]["Password"] = "Password";
	$fieldToolTipsalumno["English"]["Password"] = "";
	$placeHoldersalumno["English"]["Password"] = "";
	if (count($fieldToolTipsalumno["English"]))
		$tdataalumno[".isUseToolTips"] = true;
}


	$tdataalumno[".NCSearch"] = true;



$tdataalumno[".shortTableName"] = "alumno";
$tdataalumno[".nSecOptions"] = 0;

$tdataalumno[".mainTableOwnerID"] = "";
$tdataalumno[".entityType"] = 0;

$tdataalumno[".strOriginalTableName"] = "alumno";

	



$tdataalumno[".showAddInPopup"] = false;

$tdataalumno[".showEditInPopup"] = false;

$tdataalumno[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataalumno[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataalumno[".listAjax"] = false;
//	temporary
$tdataalumno[".listAjax"] = false;

	$tdataalumno[".audit"] = false;

	$tdataalumno[".locking"] = false;


$pages = $tdataalumno[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalumno[".edit"] = true;
	$tdataalumno[".afterEditAction"] = 1;
	$tdataalumno[".closePopupAfterEdit"] = 1;
	$tdataalumno[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalumno[".add"] = true;
$tdataalumno[".afterAddAction"] = 1;
$tdataalumno[".closePopupAfterAdd"] = 1;
$tdataalumno[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalumno[".list"] = true;
}



$tdataalumno[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalumno[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalumno[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalumno[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalumno[".printFriendly"] = true;
}



$tdataalumno[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalumno[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalumno[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalumno[".isUseAjaxSuggest"] = true;

$tdataalumno[".rowHighlite"] = true;





$tdataalumno[".ajaxCodeSnippetAdded"] = false;

$tdataalumno[".buttonsAdded"] = false;

$tdataalumno[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalumno[".isUseTimeForSearch"] = false;


$tdataalumno[".badgeColor"] = "D2691E";


$tdataalumno[".allSearchFields"] = array();
$tdataalumno[".filterFields"] = array();
$tdataalumno[".requiredSearchFields"] = array();

$tdataalumno[".googleLikeFields"] = array();
$tdataalumno[".googleLikeFields"][] = "idAlumno";
$tdataalumno[".googleLikeFields"][] = "Nombres";
$tdataalumno[".googleLikeFields"][] = "Apellidos";
$tdataalumno[".googleLikeFields"][] = "Carrera";
$tdataalumno[".googleLikeFields"][] = "Email";
$tdataalumno[".googleLikeFields"][] = "Celular";
$tdataalumno[".googleLikeFields"][] = "Gthub";
$tdataalumno[".googleLikeFields"][] = "Web";
$tdataalumno[".googleLikeFields"][] = "Password";



$tdataalumno[".tableType"] = "list";

$tdataalumno[".printerPageOrientation"] = 0;
$tdataalumno[".nPrinterPageScale"] = 100;

$tdataalumno[".nPrinterSplitRecords"] = 40;

$tdataalumno[".geocodingEnabled"] = false;










$tdataalumno[".pageSize"] = 20;

$tdataalumno[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataalumno[".strOrderBy"] = $tstrOrderBy;

$tdataalumno[".orderindexes"] = array();

$tdataalumno[".sqlHead"] = "SELECT idAlumno,  	Nombres,  	Apellidos,  	Carrera,  	Email,  	Celular,  	Gthub,  	Web,  	Password";
$tdataalumno[".sqlFrom"] = "FROM alumno";
$tdataalumno[".sqlWhereExpr"] = "";
$tdataalumno[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalumno[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalumno[".arrGroupsPerPage"] = $arrGPP;

$tdataalumno[".highlightSearchResults"] = true;

$tableKeysalumno = array();
$tableKeysalumno[] = "idAlumno";
$tdataalumno[".Keys"] = $tableKeysalumno;


$tdataalumno[".hideMobileList"] = array();




//	idAlumno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idAlumno";
	$fdata["GoodName"] = "idAlumno";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","idAlumno");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataalumno["idAlumno"] = $fdata;
		$tdataalumno[".searchableFields"][] = "idAlumno";
//	Nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombres";
	$fdata["GoodName"] = "Nombres";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Nombres");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombres";

	
	
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


	$tdataalumno["Nombres"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Nombres";
//	Apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Apellidos";
	$fdata["GoodName"] = "Apellidos";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Apellidos";

	
	
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


	$tdataalumno["Apellidos"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Apellidos";
//	Carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Carrera";
	$fdata["GoodName"] = "Carrera";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Carrera");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Carrera";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Carrera";

	
	
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


	$tdataalumno["Carrera"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Carrera";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdataalumno["Email"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Email";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Celular");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
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


	$tdataalumno["Celular"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Celular";
//	Gthub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Gthub";
	$fdata["GoodName"] = "Gthub";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Gthub");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Gthub";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gthub";

	
	
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


	$tdataalumno["Gthub"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Gthub";
//	Web
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Web";
	$fdata["GoodName"] = "Web";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Web");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Web";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Web";

	
	
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


	$tdataalumno["Web"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Web";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","Password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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


	$tdataalumno["Password"] = $fdata;
		$tdataalumno[".searchableFields"][] = "Password";


$tables_data["alumno"]=&$tdataalumno;
$field_labels["alumno"] = &$fieldLabelsalumno;
$fieldToolTips["alumno"] = &$fieldToolTipsalumno;
$placeHolders["alumno"] = &$placeHoldersalumno;
$page_titles["alumno"] = &$pageTitlesalumno;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["alumno"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["alumno"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_alumno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idAlumno,  	Nombres,  	Apellidos,  	Carrera,  	Email,  	Celular,  	Gthub,  	Web,  	Password";
$proto0["m_strFrom"] = "FROM alumno";
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
	"m_strName" => "idAlumno",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto6["m_sql"] = "idAlumno";
$proto6["m_srcTableName"] = "alumno";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombres",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto8["m_sql"] = "Nombres";
$proto8["m_srcTableName"] = "alumno";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellidos",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto10["m_sql"] = "Apellidos";
$proto10["m_srcTableName"] = "alumno";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Carrera",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto12["m_sql"] = "Carrera";
$proto12["m_srcTableName"] = "alumno";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto14["m_sql"] = "Email";
$proto14["m_srcTableName"] = "alumno";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto16["m_sql"] = "Celular";
$proto16["m_srcTableName"] = "alumno";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Gthub",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto18["m_sql"] = "Gthub";
$proto18["m_srcTableName"] = "alumno";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Web",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto20["m_sql"] = "Web";
$proto20["m_srcTableName"] = "alumno";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto22["m_sql"] = "Password";
$proto22["m_srcTableName"] = "alumno";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "alumno";
$proto25["m_srcTableName"] = "alumno";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idAlumno";
$proto25["m_columns"][] = "Nombres";
$proto25["m_columns"][] = "Apellidos";
$proto25["m_columns"][] = "Carrera";
$proto25["m_columns"][] = "Email";
$proto25["m_columns"][] = "Celular";
$proto25["m_columns"][] = "Gthub";
$proto25["m_columns"][] = "Web";
$proto25["m_columns"][] = "Password";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "alumno";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "alumno";
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
$proto0["m_srcTableName"]="alumno";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alumno = createSqlQuery_alumno();


	
		;

									

$tdataalumno[".sqlquery"] = $queryData_alumno;

$tableEvents["alumno"] = new eventsBase;
$tdataalumno[".hasEvents"] = false;

?>