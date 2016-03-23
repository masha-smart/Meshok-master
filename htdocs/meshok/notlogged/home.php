<?php
if(isset($_GET['error'])){
    if($_GET['error']==1){
        print "<b style = 'color:red;'>Incorrect login!!!</b>";
    }
}
?>
<div class="parent">
    <div class="block-center">
<form action="?act=login" method="post" >

    Login : <input type = "text" name = "l_login"><br>
    Password : <input type = "password" name = "l_pass"><br>
    <a href="?page=registration">Registration</a><input type = "submit" value = "sign in"><br>
</form>
    </div>
</div>
