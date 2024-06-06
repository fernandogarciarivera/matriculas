<?php



$tdataalumno = array();
$tdataalumno[".searchableFields"] = array();
$tdataalumno[".ShortName"] = "alumno";
$tdataalumno[".OwnerID"] = "";
$tdataalumno[".OriginalTable"] = "alumno";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataalumno[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataalumno[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataalumno[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsalumno = array();
$fieldToolTipsalumno = array();
$pageTitlesalumno = array();
$placeHoldersalumno = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalumno["Spanish"] = array();
	$fieldToolTipsalumno["Spanish"] = array();
	$placeHoldersalumno["Spanish"] = array();
	$pageTitlesalumno["Spanish"] = array();
	$fieldLabelsalumno["Spanish"]["idAlumno"] = "Id Alumno";
	$fieldToolTipsalumno["Spanish"]["idAlumno"] = "";
	$placeHoldersalumno["Spanish"]["idAlumno"] = "";
	$fieldLabelsalumno["Spanish"]["Nombres"] = "Nombres";
	$fieldToolTipsalumno["Spanish"]["Nombres"] = "";
	$placeHoldersalumno["Spanish"]["Nombres"] = "";
	$fieldLabelsalumno["Spanish"]["Apellidos"] = "Apellidos";
	$fieldToolTipsalumno["Spanish"]["Apellidos"] = "";
	$placeHoldersalumno["Spanish"]["Apellidos"] = "";
	$fieldLabelsalumno["Spanish"]["Carrera"] = "Carrera";
	$fieldToolTipsalumno["Spanish"]["Carrera"] = "";
	$placeHoldersalumno["Spanish"]["Carrera"] = "";
	$fieldLabelsalumno["Spanish"]["Email"] = "Email";
	$fieldToolTipsalumno["Spanish"]["Email"] = "";
	$placeHoldersalumno["Spanish"]["Email"] = "";
	$fieldLabelsalumno["Spanish"]["Celular"] = "Celular";
	$fieldToolTipsalumno["Spanish"]["Celular"] = "";
	$placeHoldersalumno["Spanish"]["Celular"] = "";
	$fieldLabelsalumno["Spanish"]["Gthub"] = "Gthub";
	$fieldToolTipsalumno["Spanish"]["Gthub"] = "";
	$placeHoldersalumno["Spanish"]["Gthub"] = "";
	$fieldLabelsalumno["Spanish"]["Web"] = "Web";
	$fieldToolTipsalumno["Spanish"]["Web"] = "";
	$placeHoldersalumno["Spanish"]["Web"] = "";
	$fieldLabelsalumno["Spanish"]["Password"] = "Password";
	$fieldToolTipsalumno["Spanish"]["Password"] = "";
	$placeHoldersalumno["Spanish"]["Password"] = "";
	$fieldLabelsalumno["Spanish"]["miFoto"] = "Mi Foto";
	$fieldToolTipsalumno["Spanish"]["miFoto"] = "";
	$placeHoldersalumno["Spanish"]["miFoto"] = "";
	$pageTitlesalumno["Spanish"]["edit"] = "Editar Alumno, [{%Nombres} {%Apellidos}]";
	$pageTitlesalumno["Spanish"]["add"] = "Añadir nuevo";
	if (count($fieldToolTipsalumno["Spanish"]))
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
	$tdataalumno[".afterEditAction"] = 0;
	$tdataalumno[".closePopupAfterEdit"] = 1;
	$tdataalumno[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataalumno[".add"] = true;
$tdataalumno[".afterAddAction"] = 0;
$tdataalumno[".closePopupAfterAdd"] = 1;
$tdataalumno[".afterAddActionDetTable"] = "Detail tables not found!";
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
$tdataalumno[".googleLikeFields"][] = "Nombres";
$tdataalumno[".googleLikeFields"][] = "Apellidos";
$tdataalumno[".googleLikeFields"][] = "miFoto";
$tdataalumno[".googleLikeFields"][] = "Carrera";
$tdataalumno[".googleLikeFields"][] = "Email";
$tdataalumno[".googleLikeFields"][] = "Celular";



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

$tdataalumno[".sqlHead"] = "SELECT idAlumno,  	Nombres,  	Apellidos,  	miFoto,  	Carrera,  	Email,  	Celular,  	Gthub,  	Web,  	Password";
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
//	miFoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "miFoto";
	$fdata["GoodName"] = "miFoto";
	$fdata["ownerTable"] = "alumno";
	$fdata["Label"] = GetFieldLabel("alumno","miFoto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "miFoto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "miFoto";

	
	
				$fdata["UploadFolder"] = "img/files/alumnos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 100;
	$vdata["ThumbHeight"] = 50;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 3;
	$vdata["maxImages"] = 1;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "jpg";
			$edata["acceptFileTypesHtml"] = ".jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
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


	$tdataalumno["miFoto"] = $fdata;
		$tdataalumno[".searchableFields"][] = "miFoto";
//	Carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
	$fdata["Index"] = 6;
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
	$fdata["Index"] = 7;
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
	$fdata["Index"] = 8;
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
	$fdata["Index"] = 9;
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
	$fdata["Index"] = 10;
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
$proto0["m_strFieldList"] = "idAlumno,  	Nombres,  	Apellidos,  	miFoto,  	Carrera,  	Email,  	Celular,  	Gthub,  	Web,  	Password";
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
	"m_strName" => "miFoto",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto12["m_sql"] = "miFoto";
$proto12["m_srcTableName"] = "alumno";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Carrera",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto14["m_sql"] = "Carrera";
$proto14["m_srcTableName"] = "alumno";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "alumno";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto18["m_sql"] = "Celular";
$proto18["m_srcTableName"] = "alumno";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Gthub",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto20["m_sql"] = "Gthub";
$proto20["m_srcTableName"] = "alumno";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Web",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto22["m_sql"] = "Web";
$proto22["m_srcTableName"] = "alumno";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "alumno",
	"m_srcTableName" => "alumno"
));

$proto24["m_sql"] = "Password";
$proto24["m_srcTableName"] = "alumno";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "alumno";
$proto27["m_srcTableName"] = "alumno";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "idAlumno";
$proto27["m_columns"][] = "Nombres";
$proto27["m_columns"][] = "Apellidos";
$proto27["m_columns"][] = "miFoto";
$proto27["m_columns"][] = "Carrera";
$proto27["m_columns"][] = "Email";
$proto27["m_columns"][] = "Celular";
$proto27["m_columns"][] = "Gthub";
$proto27["m_columns"][] = "Web";
$proto27["m_columns"][] = "Password";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "alumno";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "alumno";
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