<?php



$tdataprofesor = array();
$tdataprofesor[".searchableFields"] = array();
$tdataprofesor[".ShortName"] = "profesor";
$tdataprofesor[".OwnerID"] = "";
$tdataprofesor[".OriginalTable"] = "profesor";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataprofesor[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataprofesor[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataprofesor[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsprofesor = array();
$fieldToolTipsprofesor = array();
$pageTitlesprofesor = array();
$placeHoldersprofesor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsprofesor["Spanish"] = array();
	$fieldToolTipsprofesor["Spanish"] = array();
	$placeHoldersprofesor["Spanish"] = array();
	$pageTitlesprofesor["Spanish"] = array();
	$fieldLabelsprofesor["Spanish"]["idProfesor"] = "Id Profesor";
	$fieldToolTipsprofesor["Spanish"]["idProfesor"] = "";
	$placeHoldersprofesor["Spanish"]["idProfesor"] = "";
	$fieldLabelsprofesor["Spanish"]["NomProfesor"] = "Nombres";
	$fieldToolTipsprofesor["Spanish"]["NomProfesor"] = "";
	$placeHoldersprofesor["Spanish"]["NomProfesor"] = "";
	$fieldLabelsprofesor["Spanish"]["ApellidosProfesor"] = "Apellidos";
	$fieldToolTipsprofesor["Spanish"]["ApellidosProfesor"] = "";
	$placeHoldersprofesor["Spanish"]["ApellidosProfesor"] = "";
	$fieldLabelsprofesor["Spanish"]["bitacora"] = "Bitacora";
	$fieldToolTipsprofesor["Spanish"]["bitacora"] = "";
	$placeHoldersprofesor["Spanish"]["bitacora"] = "";
	$fieldLabelsprofesor["Spanish"]["miFoto"] = "Mi Foto";
	$fieldToolTipsprofesor["Spanish"]["miFoto"] = "";
	$placeHoldersprofesor["Spanish"]["miFoto"] = "";
	$fieldLabelsprofesor["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsprofesor["Spanish"]["sexo"] = "";
	$placeHoldersprofesor["Spanish"]["sexo"] = "";
	$pageTitlesprofesor["Spanish"]["edit"] = "Editar Profesor, [{%NomProfesor} {%ApellidosProfesor}]";
	$pageTitlesprofesor["Spanish"]["add"] = "Añadir nuevo";
	if (count($fieldToolTipsprofesor["Spanish"]))
		$tdataprofesor[".isUseToolTips"] = true;
}


	$tdataprofesor[".NCSearch"] = true;



$tdataprofesor[".shortTableName"] = "profesor";
$tdataprofesor[".nSecOptions"] = 0;

$tdataprofesor[".mainTableOwnerID"] = "";
$tdataprofesor[".entityType"] = 0;

$tdataprofesor[".strOriginalTableName"] = "profesor";

	



$tdataprofesor[".showAddInPopup"] = false;

$tdataprofesor[".showEditInPopup"] = false;

$tdataprofesor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprofesor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprofesor[".listAjax"] = false;
//	temporary
$tdataprofesor[".listAjax"] = false;

	$tdataprofesor[".audit"] = false;

	$tdataprofesor[".locking"] = false;


$pages = $tdataprofesor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprofesor[".edit"] = true;
	$tdataprofesor[".afterEditAction"] = 0;
	$tdataprofesor[".closePopupAfterEdit"] = 1;
	$tdataprofesor[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataprofesor[".add"] = true;
$tdataprofesor[".afterAddAction"] = 0;
$tdataprofesor[".closePopupAfterAdd"] = 1;
$tdataprofesor[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataprofesor[".list"] = true;
}



$tdataprofesor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprofesor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprofesor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprofesor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprofesor[".printFriendly"] = true;
}



$tdataprofesor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprofesor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprofesor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprofesor[".isUseAjaxSuggest"] = true;

$tdataprofesor[".rowHighlite"] = true;





$tdataprofesor[".ajaxCodeSnippetAdded"] = false;

$tdataprofesor[".buttonsAdded"] = false;

$tdataprofesor[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprofesor[".isUseTimeForSearch"] = false;


$tdataprofesor[".badgeColor"] = "EDCA00";


$tdataprofesor[".allSearchFields"] = array();
$tdataprofesor[".filterFields"] = array();
$tdataprofesor[".requiredSearchFields"] = array();

$tdataprofesor[".googleLikeFields"] = array();
$tdataprofesor[".googleLikeFields"][] = "NomProfesor";
$tdataprofesor[".googleLikeFields"][] = "ApellidosProfesor";
$tdataprofesor[".googleLikeFields"][] = "miFoto";
$tdataprofesor[".googleLikeFields"][] = "sexo";



$tdataprofesor[".tableType"] = "list";

$tdataprofesor[".printerPageOrientation"] = 0;
$tdataprofesor[".nPrinterPageScale"] = 100;

$tdataprofesor[".nPrinterSplitRecords"] = 40;

$tdataprofesor[".geocodingEnabled"] = false;










$tdataprofesor[".pageSize"] = 20;

$tdataprofesor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprofesor[".strOrderBy"] = $tstrOrderBy;

$tdataprofesor[".orderindexes"] = array();

$tdataprofesor[".sqlHead"] = "SELECT idProfesor,  	NomProfesor,  	ApellidosProfesor,  	miFoto,  	sexo,  	bitacora";
$tdataprofesor[".sqlFrom"] = "FROM profesor";
$tdataprofesor[".sqlWhereExpr"] = "";
$tdataprofesor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprofesor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprofesor[".arrGroupsPerPage"] = $arrGPP;

$tdataprofesor[".highlightSearchResults"] = true;

$tableKeysprofesor = array();
$tableKeysprofesor[] = "idProfesor";
$tdataprofesor[".Keys"] = $tableKeysprofesor;


$tdataprofesor[".hideMobileList"] = array();




//	idProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idProfesor";
	$fdata["GoodName"] = "idProfesor";
	$fdata["ownerTable"] = "profesor";
	$fdata["Label"] = GetFieldLabel("profesor","idProfesor");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataprofesor["idProfesor"] = $fdata;
		$tdataprofesor[".searchableFields"][] = "idProfesor";
//	NomProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NomProfesor";
	$fdata["GoodName"] = "NomProfesor";
	$fdata["ownerTable"] = "profesor";
	$fdata["Label"] = GetFieldLabel("profesor","NomProfesor");
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


	$tdataprofesor["NomProfesor"] = $fdata;
		$tdataprofesor[".searchableFields"][] = "NomProfesor";
//	ApellidosProfesor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ApellidosProfesor";
	$fdata["GoodName"] = "ApellidosProfesor";
	$fdata["ownerTable"] = "profesor";
	$fdata["Label"] = GetFieldLabel("profesor","ApellidosProfesor");
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


	$tdataprofesor["ApellidosProfesor"] = $fdata;
		$tdataprofesor[".searchableFields"][] = "ApellidosProfesor";
//	miFoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "miFoto";
	$fdata["GoodName"] = "miFoto";
	$fdata["ownerTable"] = "profesor";
	$fdata["Label"] = GetFieldLabel("profesor","miFoto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "miFoto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "miFoto";

	
	
				$fdata["UploadFolder"] = "img/files/profesor";

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


	$tdataprofesor["miFoto"] = $fdata;
		$tdataprofesor[".searchableFields"][] = "miFoto";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "profesor";
	$fdata["Label"] = GetFieldLabel("profesor","sexo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdataprofesor["sexo"] = $fdata;
		$tdataprofesor[".searchableFields"][] = "sexo";
//	bitacora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bitacora";
	$fdata["GoodName"] = "bitacora";
	$fdata["ownerTable"] = "profesor";
	$fdata["Label"] = GetFieldLabel("profesor","bitacora");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "bitacora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bitacora";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataprofesor["bitacora"] = $fdata;
		$tdataprofesor[".searchableFields"][] = "bitacora";


$tables_data["profesor"]=&$tdataprofesor;
$field_labels["profesor"] = &$fieldLabelsprofesor;
$fieldToolTips["profesor"] = &$fieldToolTipsprofesor;
$placeHolders["profesor"] = &$placeHoldersprofesor;
$page_titles["profesor"] = &$pageTitlesprofesor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["profesor"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["profesor"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_profesor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idProfesor,  	NomProfesor,  	ApellidosProfesor,  	miFoto,  	sexo,  	bitacora";
$proto0["m_strFrom"] = "FROM profesor";
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
	"m_strName" => "idProfesor",
	"m_strTable" => "profesor",
	"m_srcTableName" => "profesor"
));

$proto6["m_sql"] = "idProfesor";
$proto6["m_srcTableName"] = "profesor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NomProfesor",
	"m_strTable" => "profesor",
	"m_srcTableName" => "profesor"
));

$proto8["m_sql"] = "NomProfesor";
$proto8["m_srcTableName"] = "profesor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ApellidosProfesor",
	"m_strTable" => "profesor",
	"m_srcTableName" => "profesor"
));

$proto10["m_sql"] = "ApellidosProfesor";
$proto10["m_srcTableName"] = "profesor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "miFoto",
	"m_strTable" => "profesor",
	"m_srcTableName" => "profesor"
));

$proto12["m_sql"] = "miFoto";
$proto12["m_srcTableName"] = "profesor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "profesor",
	"m_srcTableName" => "profesor"
));

$proto14["m_sql"] = "sexo";
$proto14["m_srcTableName"] = "profesor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "bitacora",
	"m_strTable" => "profesor",
	"m_srcTableName" => "profesor"
));

$proto16["m_sql"] = "bitacora";
$proto16["m_srcTableName"] = "profesor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "profesor";
$proto19["m_srcTableName"] = "profesor";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idProfesor";
$proto19["m_columns"][] = "NomProfesor";
$proto19["m_columns"][] = "ApellidosProfesor";
$proto19["m_columns"][] = "miFoto";
$proto19["m_columns"][] = "sexo";
$proto19["m_columns"][] = "bitacora";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "profesor";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "profesor";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="profesor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_profesor = createSqlQuery_profesor();


	
		;

						

$tdataprofesor[".sqlquery"] = $queryData_profesor;

$tableEvents["profesor"] = new eventsBase;
$tdataprofesor[".hasEvents"] = false;

?>