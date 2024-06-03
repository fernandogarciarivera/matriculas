<?php
$dalTablecurso = array();
$dalTablecurso["idCurso"] = array("type"=>3,"varname"=>"idCurso", "name" => "idCurso");
$dalTablecurso["NombreCurso"] = array("type"=>200,"varname"=>"NombreCurso", "name" => "NombreCurso");
$dalTablecurso["Seccion"] = array("type"=>200,"varname"=>"Seccion", "name" => "Seccion");
$dalTablecurso["NRC"] = array("type"=>200,"varname"=>"NRC", "name" => "NRC");
$dalTablecurso["Academia"] = array("type"=>200,"varname"=>"Academia", "name" => "Academia");
$dalTablecurso["DiasClase"] = array("type"=>3,"varname"=>"DiasClase", "name" => "DiasClase");
$dalTablecurso["HorasClase"] = array("type"=>3,"varname"=>"HorasClase", "name" => "HorasClase");
$dalTablecurso["idCicloEscolar"] = array("type"=>200,"varname"=>"idCicloEscolar", "name" => "idCicloEscolar");
	$dalTablecurso["idCurso"]["key"]=true;

$dal_info["matriculas_at_127_0_0_1__curso"] = &$dalTablecurso;
?>