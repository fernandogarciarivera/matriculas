<?php
$dalTablehorarios = array();
$dalTablehorarios["IdHorario"] = array("type"=>3,"varname"=>"IdHorario", "name" => "IdHorario");
$dalTablehorarios["idCursoDicta"] = array("type"=>3,"varname"=>"idCursoDicta", "name" => "idCursoDicta");
$dalTablehorarios["idProfesor"] = array("type"=>3,"varname"=>"idProfesor", "name" => "idProfesor");
$dalTablehorarios["idCurso"] = array("type"=>3,"varname"=>"idCurso", "name" => "idCurso");
$dalTablehorarios["numDia"] = array("type"=>3,"varname"=>"numDia", "name" => "numDia");
$dalTablehorarios["txtDia"] = array("type"=>200,"varname"=>"txtDia", "name" => "txtDia");
$dalTablehorarios["HorIni"] = array("type"=>134,"varname"=>"HorIni", "name" => "HorIni");
$dalTablehorarios["HorFin"] = array("type"=>134,"varname"=>"HorFin", "name" => "HorFin");
	$dalTablehorarios["IdHorario"]["key"]=true;

$dal_info["matriculas_at_127_0_0_1__horarios"] = &$dalTablehorarios;
?>