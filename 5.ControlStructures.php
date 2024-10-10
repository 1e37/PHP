<?php

// PHP Control Structures

// Create the Object
$UserFunctions = new UserFunctions();

// Add some Users with different grades
$UserFunctions->AddUserToMap("Alice", 2);
$UserFunctions->AddUserToMap("Bob", 3);

// Print out the current map
echo "Current Map:\n";
print_r($UserFunctions->GetMapArray());

if (!isset($UserFunctions->GetMapArray()["Bob"])) {
    echo "Bob not found!\n";
    print_r($UserFunctions->GetMapArray());
} else {
    $UserFunctions->RemoveUserFromMap("Bob");
    echo "Updated Map:\n";
    print_r($UserFunctions->GetMapArray());
}

class UserFunctions {
    
    private $map_array;
    
    // Create a constructor to initiate a map
    function __construct() {
        $this->map_array = array(); 
    }
    
    // Functions to extend the map
    function AddUserToMap($user, $value) {
        $this->map_array[$user] = $value;
        echo "Added $user to the map with value $value.\n";
        return $user; // return the key (index) of the newly added element
    }
    
    function RemoveUserFromMap($user) {
        if (isset($this->map_array[$user])) {
            unset($this->map_array[$user]);
            echo "Removed $user from the map.\n";
        } else {
            echo "$user not found in the map.\n";
        }
    }
        
    function GetMapArray() {
        return $this->map_array;
    }
}


?>