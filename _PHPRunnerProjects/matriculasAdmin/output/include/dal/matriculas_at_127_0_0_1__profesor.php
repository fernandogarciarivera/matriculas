<?php
$dalTableprofesor = array();
$dalTableprofesor["idProfesor"] = array("type"=>3,"varname"=>"idProfesor", "name" => "idProfesor");
$dalTableprofesor["NomProfesor"] = array("type"=>200,"varname"=>"NomProfesor", "name" => "NomProfesor");
$dalTableprofesor["ApellidosProfesor"] = array("type"=>200,"varname"=>"ApellidosProfesor", "name" => "ApellidosProfesor");
$dalTableprofesor["bitacora"] = array("type"=>201,"varname"=>"bitacora", "name" => "bitacora");
	$dalTableprofesor["idProfesor"]["key"]=true;

$dal_info["matriculas_at_127_0_0_1__profesor"] = &$dalTableprofesor;
?>