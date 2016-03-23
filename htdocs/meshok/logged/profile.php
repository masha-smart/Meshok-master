<?php
$qqq = "SELECT id, login, created_at, fname, lname, email, address, phone, rating FROM users
						  WHERE  id = " . $_SESSION['user_id'];

//print $qqq;

$query = mysqli_query($link, $qqq);

while ($row = mysqli_fetch_array($query)){

?>
<div class="parent">
    <div class="block-center">
        мой логин: <?php echo $row['login'];
        } ?>
    </div>
</div>