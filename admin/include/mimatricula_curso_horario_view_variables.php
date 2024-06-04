<?php
$strTableName="mimatricula_curso_horario_view";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mimatricula_curso_horario_view";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mimatricula_curso_horario_view");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mimatricula_curso_horario_view"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>