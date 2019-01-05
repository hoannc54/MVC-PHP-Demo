<h1>Danh sách user</h1>

<?php
foreach ($users as $key => $user){
    echo 'User ' . ($key + 1) . ': ' . $user['name'];
}
?>