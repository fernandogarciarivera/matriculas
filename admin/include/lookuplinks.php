<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["profesor"] ) ) {
			$lookupTableLinks["profesor"] = array();
		}
		if( !isset( $lookupTableLinks["profesor"]["profesor_curso.idProfesor"] )) {
			$lookupTableLinks["profesor"]["profesor_curso.idProfesor"] = array();
		}
		$lookupTableLinks["profesor"]["profesor_curso.idProfesor"]["edit"] = array("table" => "profesor_curso", "field" => "idProfesor", "page" => "edit");
		if( !isset( $lookupTableLinks["curso"] ) ) {
			$lookupTableLinks["curso"] = array();
		}
		if( !isset( $lookupTableLinks["curso"]["profesor_curso.idCurso"] )) {
			$lookupTableLinks["curso"]["profesor_curso.idCurso"] = array();
		}
		$lookupTableLinks["curso"]["profesor_curso.idCurso"]["edit"] = array("table" => "profesor_curso", "field" => "idCurso", "page" => "edit");
		if( !isset( $lookupTableLinks["profesor_curso"] ) ) {
			$lookupTableLinks["profesor_curso"] = array();
		}
		if( !isset( $lookupTableLinks["profesor_curso"]["horarios.idCursoDicta"] )) {
			$lookupTableLinks["profesor_curso"]["horarios.idCursoDicta"] = array();
		}
		$lookupTableLinks["profesor_curso"]["horarios.idCursoDicta"]["edit"] = array("table" => "horarios", "field" => "idCursoDicta", "page" => "edit");
		if( !isset( $lookupTableLinks["profesor_curso"] ) ) {
			$lookupTableLinks["profesor_curso"] = array();
		}
		if( !isset( $lookupTableLinks["profesor_curso"]["horarios.idProfesor"] )) {
			$lookupTableLinks["profesor_curso"]["horarios.idProfesor"] = array();
		}
		$lookupTableLinks["profesor_curso"]["horarios.idProfesor"]["edit"] = array("table" => "horarios", "field" => "idProfesor", "page" => "edit");
		if( !isset( $lookupTableLinks["profesor_curso"] ) ) {
			$lookupTableLinks["profesor_curso"] = array();
		}
		if( !isset( $lookupTableLinks["profesor_curso"]["horarios.idCurso"] )) {
			$lookupTableLinks["profesor_curso"]["horarios.idCurso"] = array();
		}
		$lookupTableLinks["profesor_curso"]["horarios.idCurso"]["edit"] = array("table" => "horarios", "field" => "idCurso", "page" => "edit");
		if( !isset( $lookupTableLinks["alumno"] ) ) {
			$lookupTableLinks["alumno"] = array();
		}
		if( !isset( $lookupTableLinks["alumno"]["matriculacab.idAlumno"] )) {
			$lookupTableLinks["alumno"]["matriculacab.idAlumno"] = array();
		}
		$lookupTableLinks["alumno"]["matriculacab.idAlumno"]["edit"] = array("table" => "matriculacab", "field" => "idAlumno", "page" => "edit");
		if( !isset( $lookupTableLinks["matriculacab"] ) ) {
			$lookupTableLinks["matriculacab"] = array();
		}
		if( !isset( $lookupTableLinks["matriculacab"]["alumno_profesor_curso.IdmatriculaCab"] )) {
			$lookupTableLinks["matriculacab"]["alumno_profesor_curso.IdmatriculaCab"] = array();
		}
		$lookupTableLinks["matriculacab"]["alumno_profesor_curso.IdmatriculaCab"]["edit"] = array("table" => "alumno_profesor_curso", "field" => "IdmatriculaCab", "page" => "edit");
		if( !isset( $lookupTableLinks["alumno"] ) ) {
			$lookupTableLinks["alumno"] = array();
		}
		if( !isset( $lookupTableLinks["alumno"]["alumno_profesor_curso.idAlumno"] )) {
			$lookupTableLinks["alumno"]["alumno_profesor_curso.idAlumno"] = array();
		}
		$lookupTableLinks["alumno"]["alumno_profesor_curso.idAlumno"]["edit"] = array("table" => "alumno_profesor_curso", "field" => "idAlumno", "page" => "edit");
		if( !isset( $lookupTableLinks["profesor_curso"] ) ) {
			$lookupTableLinks["profesor_curso"] = array();
		}
		if( !isset( $lookupTableLinks["profesor_curso"]["alumno_profesor_curso.idCursoDicta"] )) {
			$lookupTableLinks["profesor_curso"]["alumno_profesor_curso.idCursoDicta"] = array();
		}
		$lookupTableLinks["profesor_curso"]["alumno_profesor_curso.idCursoDicta"]["edit"] = array("table" => "alumno_profesor_curso", "field" => "idCursoDicta", "page" => "edit");
		if( !isset( $lookupTableLinks["curso"] ) ) {
			$lookupTableLinks["curso"] = array();
		}
		if( !isset( $lookupTableLinks["curso"]["alumno_profesor_curso.idCurso"] )) {
			$lookupTableLinks["curso"]["alumno_profesor_curso.idCurso"] = array();
		}
		$lookupTableLinks["curso"]["alumno_profesor_curso.idCurso"]["edit"] = array("table" => "alumno_profesor_curso", "field" => "idCurso", "page" => "edit");
		if( !isset( $lookupTableLinks["profesor"] ) ) {
			$lookupTableLinks["profesor"] = array();
		}
		if( !isset( $lookupTableLinks["profesor"]["alumno_profesor_curso.idProfesor"] )) {
			$lookupTableLinks["profesor"]["alumno_profesor_curso.idProfesor"] = array();
		}
		$lookupTableLinks["profesor"]["alumno_profesor_curso.idProfesor"]["edit"] = array("table" => "alumno_profesor_curso", "field" => "idProfesor", "page" => "edit");
}

?>