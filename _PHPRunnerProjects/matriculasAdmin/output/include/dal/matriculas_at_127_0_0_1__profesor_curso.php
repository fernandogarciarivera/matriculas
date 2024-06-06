<?php
$dalTableprofesor_curso = array();
$dalTableprofesor_curso["idCursoDicta"] = array("type"=>3,"varname"=>"idCursoDicta", "name" => "idCursoDicta");
$dalTableprofesor_curso["idProfesor"] = array("type"=>3,"varname"=>"idProfesor", "name" => "idProfesor");
$dalTableprofesor_curso["idCurso"] = array("type"=>3,"varname"=>"idCurso", "name" => "idCurso");
$dalTableprofesor_curso["fechaIni"] = array("type"=>7,"varname"=>"fechaIni", "name" => "fechaIni");
$dalTableprofesor_curso["fehaFin"] = array("type"=>7,"varname"=>"fehaFin", "name" => "fehaFin");
	$dalTableprofesor_curso["idCursoDicta"]["key"]=true;
	$dalTableprofesor_curso["idProfesor"]["key"]=true;
	$dalTableprofesor_curso["idCurso"]["key"]=true;

$dal_info["matriculas_at_127_0_0_1__profesor_curso"] = &$dalTableprofesor_curso;
?>