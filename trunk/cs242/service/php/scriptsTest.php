<?php
/**
 * Scripts file for all DB functionality for the services team
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */

/** IMPORTANT NOTES 
  * This current version:
    * is not tested!! queries have not been tested
	* the select statements are retrieved in an indexed array but nothing is being done with those results
	* puts a fake/constant userId since the cookie is not finished
	* does not do permission checking; this will also be done once the login + cookie scheme is complete
	* does not check correct execution for updates and inserts
  *
  * This the functionality that this implements so far:
		General
		- Read information from cookie; use it to determine Id and Role 

		Customer
		- View all tickets that he created or that have been created for him
		- View all actions for any of the above tickets
		- Create a new ticket 
		- rate a worker who handled a certain action of a ticket created by/for the customer(maybe not for this week).

		Worker 
		- View all tickets that have been assigned to him 
		- View all actions for any of the above tickets
		- View all actions assigned to him (from all tickets or without tickets)
		- Create new ticket on behalf of a customer
		- Create new action without a ticket
		- Create new action for a ticket that is already assigned to him 
		- Edit action details(change status, percentage)

		Dispatcher
		- View all tickets
		- View all actions
		- View all actions for a specific ticket
		- Create a new action for a ticket
		- Assign actions to workers (or skills)
*/

 
#region include
include_once '../../config.php';
#endregion include
		

	// prepare database variable
	$db = new Database();
	
//$userId=$_COOKIE["basic"]["user_id"];
$userId=1;
echo "test begins<br/>";
echo $userId;
workerViewTickets($db,$userId);
echo '<br/>';

echo "done";

/*
 * ** CUSTOMER functions follow ** 
 */

/** 
  * Customer creates a ticket for himself
  */   
function customerCreateTicket($db,$userId) {
	// variables in form 
	$description=$_POST['description']; 
	
	// variables you get from system
	$created_date='CURDATE()'; // will automatically insert the current date in the SQL table 
	$applicant=$userId; 
	$applicant_location=1; // ???
	$parent_account_of_Applicant=1; // ???
	
	//empty or default variables
	$ticket_summary='';
	$customer_priority='normal';
	$created_by_worker='NULL';

	//execute statement
	$sql = "INSERT INTO ticket VALUES (NULL, $parent_account_of_Applicant, $applicant, $applicant_location, '$customer_priority', '$ticket_description', '$ticket_summary', $created_date, $created_by_worker);";
	$affectedRows = $db->insert($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
	echo "Number of affected rows is $affectedRows"; 
}

/** 
  * Customer views all tickets created for himself
  */
function customerViewTickets($db, $userId) {
	// variables you get from system
	$applicant=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM ticket WHERE applicant = $applicant";
	$db->select($sql);
	$result = $db->fetchIndexArray();
	print_r($result);
}

/** 
  * Customer views all actions involved with a ticket assigned to him
  */
function customerViewActions($db, $userId) {
	// ** CURRENTLY only shows all actions that are connected with a ticket ** 
	
	// variables you get from system
	$applicant=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM action,ticket WHERE action.parent_ticket=ticket.ticket_id AND ticket.applicant = $applicant";
	echo $sql;
	$db->select($sql);
	$result = $db->fetchIndexArray();
}

/**
  * Customer rates worker that completed an action for him
  */ 
function customerRateWorker($db, $userId) {
	// variables in form 
	$rating=$_POST['rating'];
	$action_id=$_POST['action_id'];
	
	//execute statement
	$sql = "UPDATE action SET worker_rating=$rating WHERE action_id=$action_id;";
echo $sql;
	$affectedRows = $db->update($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
}


/*
 * ** WORKER functions follow ** 
 */
	
/** 
  * Worker creates a ticket on behalf of a customer
  */
function workerCreateTicket($db, $userId) {
	// variables in form 
	$description=$_POST['description']; 
	$applicant=$_POST['applicant'];
	
	// variables you get from system
	$created_date='CURDATE()'; // will automatically insert the current date in the SQL table 
	$created_by_worker=$userId;
	$applicant_location=1; // ???
	$parent_account_of_Applicant=1; // ???
	
	//empty or default variables
	$ticket_summary='';
	$customer_priority='low';
	
	//execute statement
	$sql = "INSERT INTO ticket VALUES (NULL, $parent_account_of_Applicant, $applicant, $applicant_location, '$customer_priority', '$ticket_description', '$ticket_summary', $created_date, $created_by_worker);";
echo $sql;
	$affectedRows = $db->insert($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
}

/**
  * Show all tickets that have at least one action assigned to the current worker
  */ 
function workerViewTickets($db, $userId) {
	// variables you get from system
	$assigned_to_worker=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM ticket WHERE ticket_id = ANY (SELECT parent_ticket FROM action WHERE assigned_to_worker = $assigned_to_worker);";
echo $sql;
	$db->select($sql);
	$result = $db->fetchIndexArray();
}

/**
  * Will select all actions for a given ticket that are assigned to the current worker
  */
function workerViewActionsForTicket($db, $userId) {
	// variables in form 
	$ticket_id=$_POST['ticket_id']; 
	
	// variables you get from system
	$assigned_to_worker=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM action WHERE parent_ticket=$ticked_id AND assigned_to_worker=$assigned_to_worker;";
echo $sql;
	$db->select($sql);
	$result = $db->fetchIndexArray();
}

/**
  * Show all actions assigned to the curent worker
  */
function workerViewAllActions($db, $userId) {
	// variables you get from system
	$assigned_to_worker=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM action WHERE assigned_to_worker=$assigned_to_worker;";
echo $sql;
	$db->select($sql);
	$result = $db->fetchIndexArray();
}

/** 
  * Worker creates an additional action for himself
  */
function workerCreateAction($db, $userId) {
	// variables in form 
	$parent_ticket=$_POST['parent_ticket'];	
	$action_prob_description=$_POST['action_prob_description']; 
	$action_solution_description=$_POST['action_solution_description'];
	$requested_completion_date=$_POST['requested_completion_date'];
	$source_of_action=$_POST['source_of_action']; // this links to communication stuff.. no? 
	
	
	// variables you get from system
	$assigned_to_worker=$userId;
	$action_created_by=$userId;
		
	//empty or default variables
	$assigned_to_skill='NULL';
	$action_status="New"; // ??? 
	$percent_completed=0; 
	$worker_rating='NULL';
	$actual_completion_date='NULL';
	$action_priority='normal';
	
	//execute statement
	$sql = "INSERT INTO action VALUES (NULL, $parent_ticket, $assigned_to_worker, $assigned_to_skill, '$action_status', $action_created_by, '$action_prob_description', '$action_solution_description', 
	$percent_completed, $worker_rating,	'$requested_completion_date', $actual_completion_date, $source_of_action, '$action_priority');";
	echo $sql;
$affectedRows = $db->insert($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
}

/** 
  * Worker edits an action assigned to him (assuming that the form only shows such actions)
  */
function workerEditAction($db, $userId) {
	// variables in form 
	$action_id=$_POST['action_id'];
	
	$action_prob_description=$_POST['action_prob_description']; 
	$action_solution_description=$_POST['action_solution_description'];
	$action_status=$_POST['action_status'];
	$percent_completed=$_POST['percent_completed']; 
	// if actions is completed, put in the current date
	if ($action_status == "COMPLETED")
		$actual_completion_date='CURDATE()'; 
	else
		$actual_competion_date=NULL;
	
	
	//execute statement
	$sql = "UPDATE action SET (action_status='$action_status', action_prob_description='$action_prob_description', action_solution_description='$action_solution_description', 
	percent_completed=$percent_completed, actual_completion_date='$actual_completion_date') WHERE action_id=$action_id;";
echo $sql;	
$affectedRows = $db->update($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
}

/*
 * ** DISPATCHER functions follow ** 
 */
	
/**
  * Dispatcher creates action for a given ticket 
  */ 
function dispatcherCreateAction($db, $userId) {
	// variables in form 
	$parent_ticket=$_POST['parent_ticket'];	
	$action_prob_description=$_POST['action_prob_description']; 
	$action_solution_description=$_POST['action_solution_description'];
	$requested_completion_date=$_POST['requested_completion_date'];
	$source_of_action=$_POST['source_of_action']; // this links to communication stuff.. no? 
	$action_priority=$_POST['action_priority'];
	
	//TODO: figure out a way to determine whether the skill was used or the worker id
	$assigned_to_worker=$_POST['assigned_to_worker'];
	$assigned_to_skill=$_POST['assigned_to_skill'];
	
	// variables you get from system
	$action_created_by=$userId;
		
	//empty or default variables
	$action_status="New"; // ??? 
	$percent_completed=0; 
	$worker_rating='NULL';
	$actual_completion_date='NULL';
	
	/* test variables
	$parent_ticket=3;
	$assigned_to_worker=1;
	$assigned_to_skill='NULL';
	$source_of_action='NULL';
	$action_priority='low';
	*/

	//execute statement
	$sql = "INSERT INTO action VALUES (NULL, $parent_ticket, $assigned_to_worker, $assigned_to_skill, '$action_status', $action_created_by, '$action_prob_description', '$action_solution_description', 
	$percent_completed, $worker_rating,	'$requested_completion_date', '$actual_completion_date', $source_of_action, '$action_priority');";
echo $sql;	
$affectedRows = $db->insert($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem	
}

/**
  * Dispatcher views all tickets 
  */ 
function dispatcherViewTickets() {
	//execute statement
	$sql = "SELECT * FROM ticket;";
echo $sql;
	$db->select($sql);
	$result = $db->fetchIndexArray();
}

/**
  * Dispatcher views all actions
  */ 
function dispatcherViewActions($db, $userId) {
	//execute statement
	$sql = "SELECT * FROM action;";
echo $sql;
	$db->select($sql);
	$result = $db->fetchIndexArray();
}

/**
  * Dispatcher edits an action
  */ 
function dispatcherEditAction($db, $userId) {
	// variables in form 
	$action_id=$_POST['action_id'];
	
	$action_prob_description=$_POST['action_prob_description']; 
	$action_solution_description=$_POST['action_solution_description'];
	$action_status=$_POST['action_status'];
	$percent_completed=$_POST['percent_completed']; 
	$action_priority=$_POST['action_priority'];
	
	//TODO: same problem as with creating it
	$assigned_to_worker=$_POST['assigned_to_worker'];
	$assigned_to_skill=$_POST['assigned_to_skill'];
	
	
	//execute statement
	$sql = "UPDATE action SET (action_status='$action_status', action_prob_description='$action_prob_description', action_solution_description='$action_solution_description', 
	percent_completed=$percent_completed, action_priority='$action_priority', assigned_to_worker='$assigned_to_worker', assigned_to_skill='$assigned_to_skill') WHERE action_id=$action_id;";
echo $sql;
	$affectedRows = $db->update($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem

}

/**
  * Dispatcher edits an action (only changing assignment)
  */ 
function dispatcherAssignActions($db, $userId) {
	// variables in form 
	$action_id=$_POST['action_id'];

	//TODO: same problem as with creating it
	$assigned_to_worker=$_POST['assigned_to_worker'];
	$assigned_to_skill=$_POST['assigned_to_skill'];
	
	//execute statement
	$sql = "UPDATE action SET (assigned_to_worker='$assigned_to_worker', assigned_to_skill='$assigned_to_skill') WHERE action_id=$action_id;";
echo $sql;
	$affectedRows = $db->update($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
}

?>