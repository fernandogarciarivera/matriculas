<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_mimatricula_curso_horario_view  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
$master = $pageObject->getMasterRecord();
	if ($master != Null or $master !="") {
		$pageObject->hideItem("delete");
		$pageObject->hideItem("add");
		//code to hide buttons
	}
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
