<?php
//a page that controlls group links 


function groupId(){
    return uniqid(); // to return the uniqe identifier

}

//genarating a group link

function group_link($group_name){
    $group_id = groupId(); // genarating a unique id for a group
    $encode_goupname = urldecode($group_name); // encoding group name

    //construct the group link

    $link ="https://example.com/groups.php?group_name =$encode_groupname&groupId =$group_Id";
    return $link;

}

$group_name = "Money";
$link = group_link($group_name);

echo "$group_name <br>";
echo "Link: < a href ='$link'>$link</a>";

?>