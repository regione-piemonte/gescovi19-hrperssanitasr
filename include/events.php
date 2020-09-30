<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events


//	onscreen events
		$this->events["hostname_covidhr_t_fabbisogno_snippet"] = true;


		$this->events["IsRecordEditable"]["hostname.covidhr_t_fabbisogno_det"] = true;

		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_hostname_covidhr_t_fabbisogno_snippet(&$params)
	{
	// Put your code here.
echo $_SESSION["ente"], "&nbsp;&nbsp; - ", date('d/m/Y') . "&nbsp;&nbsp;<b>Utente:</b>&nbsp;" . $_SESSION['utente'];
	;
}




	function IsRecordEditable($values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "hostname.covidhr_t_fabbisogno_det")
		{
			//echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa' . $values['fab_stato_id'];


if ( $values['fab_stato_id']<>3)
return false;
else
return true;


// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		return $isEditable;
	}
}
?>
