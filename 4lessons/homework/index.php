<?php 
include_once 'models/users.php';

?>
<h1> hello world </h1>
<pre>
<?php 

$allUsers = new Users(); // 4 
$userListNew = new Users(); // 4 


$allUsers->getUsers(); //4
$userListNew->getUsers(); //4
echo '<hr>';
$allUsers->setUser(
	["levy"=>[
        "id"=> 6,
        "status"=> "Active",
        "age"=> 33
		]
	]
	);
$allUsers->getUsers(); // 5 Levy 
echo '<hr>';


$userListNew->setUser(
	["Avner"=>[
        "id"=> 7,
        "status"=> "Active",
		]
	]
	);
$userListNew->getUsers(); // 5 Avner

// 50 sec
