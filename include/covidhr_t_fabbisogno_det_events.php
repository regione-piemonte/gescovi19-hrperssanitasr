<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_covidhr_t_fabbisogno_det  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["IsRecordEditable"]=true;

		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		global $conn;
$sql="select 'SI' from covidhr_t_fabbisogno_det where fabpers_tipo_id=".$values['fabpers_tipo_id'] . " and fab_id= " .$values['fab_id'];
$rs_data=pg_query($conn,$sql);
$row=pg_fetch_row($rs_data);
if ($row[0]=='SI')
{
  $message=' Record già presente ';
  return false;

}

$values['fab_stato_id']=3;
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		//echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa' . $values['fab_stato_id'];


if ( $values['fab_stato_id']<>3)
return false;
else
return true;


// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		global $conn; 
$sql=' select distinct fab_stato_id from covidhr_t_fabbisogno where id_ente=' . $_SESSION['id_ente'];   
 $rs_data=pg_query($conn,$sql);
 $row = pg_fetch_row($rs_data);

 if ($row[0]<>3)
   $xt->assign("add_link",false);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
