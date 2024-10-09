<?php

// PHP Hashmap practice

// Create the Object
$UserFunctions = new UserFunctions();

// Add some Users with different grades
$UserFunctions -> AddUserToMap("Alice", 2);
$UserFunctions -> AddUserToMap("Bob", 3);

// Print out the current map
print_r($UserFunctions->GetMapArray());

// Write new User to the map
$UserFunctions -> AddUserToMap("Jack", 4);

// Print the current map
print_r($UserFunctions->GetMapArray());

// Update the degree of Jack forcefully
$UserFunctions -> ForceOverwriteUser("Jack", 6);

print_r($UserFunctions->GetMapArray());

// Remove user Jack from map:

$UserFunctions -> RemoveUserFromMap("Jack");

print_r($UserFunctions->GetMapArray());

// Return all users from map:
$UserFunctions ->ReturnAllUser();

// Calculate the User average:
$UserFunctions ->GetOverAllUserAverage();

// Get the best user:
//UserFunctions ->GetBestUser();

// A class that can be instantiated on its own
class UserFunctions{
	
	private $map_array;
	
	// Create a constructor to initiate a map
	function __construct(){
		$this->map_array = array(); 
	}
	
	// Functions to extend the map
	function AddUserToMap($user, $grade){
	    
	    // Check if user already exists in the map
	    if (isset($this->map_array[$user])) {
	        echo "$user is already part of the array: " . $this->map_array[$user] . "\n";
	    } 
	    else {
	        // Add new student to the map
	        $this->map_array[$user] = $grade;
	        echo "Added new student " . $user . " to array: \n New Map: " . $this->map_array[$user] . "\n";
	    }
	}
	
	// Add or override a user
	function ForceOverwriteUser($user, $grade){
		// No checks, just force
	     $this->map_array[$user] = $grade;
	}
	
	function ReturnAllUser(){
		 foreach($this->map_array as $name => $grade){
	     echo "Found!: " . $name . " with grade: " . $grade . "\n";
	    }
	}
	
	
	function RemoveUserFromMap($user){
		unset($this ->map_array[$user]);
		
	}
	
	function GetOverAllUserAverage()
	{
    $average = array_sum($this->map_array) / count($this->map_array);
    echo "---The overall average equals--- \n" . round($average, 3) . "\n";
	}
	
	
	function GetBestUser()
	{
		// TODO: Get best user's grade (lower is better)
	}
	
	function SortByorder()
	{
		// TODO: Add Bubble Sort algorithm
	}
	function GetMapArray(){
		return $this->map_array;
	}
}

?>