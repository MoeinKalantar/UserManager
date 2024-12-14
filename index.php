<?php

require_once "./user.php";


$users = [];


function setInformation(&$users) { 


    $numberOfUsers = readline("Number of users: "); # Get number of names

    for ($i = 0; $i < $numberOfUsers ; $i++) { 

        echo("User" . ($i + 1) . PHP_EOL);

        $user = new user();

        $user->setName(readline("Enter the name: ".PHP_EOL));  # Get names

        $user->setBirthDay(readline("Enter the birthday: ".PHP_EOL)); # Get birthday

        $user->setGender(readline("Enter the gender: ".PHP_EOL));  # Get gender

        $user->setCity(readline("Enter the city: ".PHP_EOL)); # Get city

        $users[] = $user;

    };

}

setInformation($users);

function search_names($users){

    $totalCount = 0;

    $CharacterSelection = readline("Select character: "); # Get the character 

    foreach($users as $user){

        # Search for the number of characters in the name
        $stringCount = substr_count($user->getName(), $CharacterSelection);

        $totalCount += $stringCount;  # Total number of characters

    }

    return $totalCount;

};

define("Name_lenght", 1);
define("Number_Of_Users", 2);
define("Number_Of_Character", 3);
define("Users_Info", 4);

echo("Show name lenght: 1" . PHP_EOL);
echo("Show number of name: 2" . PHP_EOL);
echo("Show number of character in names: 3" . PHP_EOL);
echo("Show users information : 4" . PHP_EOL . PHP_EOL);

$selected = readline("Selected: ");  # Get user selection

# Show users information
if($selected == Users_Info){ 

    foreach($users as $index => $user){

        echo("User" . ($index + 1) . PHP_EOL);

        echo("Name: ".  $user->getName(). PHP_EOL);

        echo("Birthday: ".  $user->getBirthday(). PHP_EOL);

        echo("Gender: ".  $user->getGender(). PHP_EOL);

        echo("City: ".  $user->getCity(). PHP_EOL);

        echo("Age: ".  $user->getAge(). PHP_EOL. PHP_EOL);

    }

}

# Show name lenght
if($selected == Name_lenght){ 

    foreach($users as $user){

        echo($user->getName() . ": (" . strlen($user->getName()) . ")\n");

    }

}

# Show number of names
if($selected == Number_Of_Users){ 

   echo("Number of users: ". count($users) . PHP_EOL);
   
}

# Show number of chracter in names
if($selected == Number_Of_Character){

   $totalCount = search_names($users);

   echo("Number of character: " . $totalCount . PHP_EOL);

}

?>