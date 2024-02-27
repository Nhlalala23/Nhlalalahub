<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "webBd";

$conn = new mysqli($servername,$username,$password,$database);

//check connection
 
if($conn->connect_error)
{
    die("Connection error: " .$conn->connect_error);
}
echo"Connected <br>";
//a page that controlls group links 


function groupId(){
    return uniqid(); // to return the uniqe identifier

}

//genarating a group link

function group_link($group_name){
    $group_id = groupId(); // genarating a unique id for a group
    $encode_groupname = urlencode($group_name); // encoding group name

    //construct the group link

    $link = "https://example.com/groups.php?group_name=$encode_groupname&groupId=$group_id";    return $link;

}

$group_name = $_POST['groupName'];
$link = group_link($group_name);

echo "$group_name <br>";
echo "Link:  a href '$link'$link</a>";

?>