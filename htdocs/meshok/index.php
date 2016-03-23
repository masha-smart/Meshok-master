<?php

session_start();
include 'db/db.php';

$logged = false;

if (isset($_SESSION['user_id'])) {
    $logged = true;
}

if ($logged) {

    if (isset($_GET['act'])) {
        if ($_GET['act'] == 'logout') {

            unset($_SESSION['user_id']);
            unset($_SESSION['user_login']);
            unset($_SESSION['user_type']);


            header("Location:?page=home");
            

        }
        /*if ($_GET['act'] == 'blog') {
            $title = $_POST['title'];
            $text = $_POST['text'];
            $uid = $_SESSION['user_id'];
            $q = mysql_query("INSERT into blog values(NULL, '$title', '$text', SYSDATE(), 0, '$uid')");

        }
        if ($_GET['act'] == 'send_message') {

            $login = $_POST['login'];
            $text = $_POST['text'];

            $query = mysql_query("SELECT * FROM users WHERE login = \"" . $login . "\" LIMIT 1");
            if ($row = mysql_fetch_array($query)) {

                $uid = $row['id'];
                $sid = $_SESSION['user_id'];

                $sss = "INSERT INTO inbox VALUES (NULL,$uid,$sid,\"" . $text . "\",SYSDATE(),0,0,0)";
                mysql_query($sss);

                header("Location:?page=messages");

            } else {

                header("Location:?page=messages&error=1");

            }

        }
        if ($_GET['act'] == 'delete_inbox') {

            $mid = $_GET['mid'];

            mysql_query(" UPDATE inbox SET i_deleted = 1 WHERE id = " . $mid);

            header("Location:?page=inbox");
        }
        if ($_GET['act'] == 'delete_outbox') {

            $mid = $_GET['mid'];

            mysql_query(" UPDATE inbox SET o_deleted = 1 WHERE id = " . $mid);

            header("Location:?page=outbox");
        }*/
    }
} else {
    if (isset($_GET['act'])) {
        if ($_GET['act'] == 'login') {

            $login = $_POST['l_login'];
            $pass = $_POST['l_pass'];

            $qqq = "SELECT * FROM users WHERE login = \"" . $login . "\" AND password = \"" . $pass . "\" LIMIT 1";
            //print $qqq;
            $query = mysqli_query($link, $qqq);

            if ($row = mysqli_fetch_array($query)) {

                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_login'] = $row['login'];
                $_SESSION['user_type'] = $row['role'];

                header("Location:?page=profile");

            } else {

                header("Location:?error=1");

            }

        }
        if ($_GET['act'] == 'reg'){

            $login = $_POST['n_login'];
            $pass = $_POST['n_pass'];
            $fname = $_POST['n_fname'];
            $lname = $_POST['n_lname'];
            $email = $_POST['n_email'];
            $address = $_POST['n_address'];
            $phone = $_POST['n_phone'];
            $user_type = $_POST['n_user_type'];

            $qqq2 = "insert into users values (NULL, '$login', '$pass', $user_type, SYSDATE(), '$fname', '$lname', '$email', '$address', '$phone', 0, 0)";
            
            mysqli_query($link, $qqq2);
            header("Location:?page=home");

        }
    }

}

////////////////////////////////////////////////

$page = null;

if ($logged) {

    $page = "profile";

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'profile') {
            $page = $_GET['page'];
        }/* else if ($_GET['page'] == 'messages') {
            $page = $_GET['page'];
        } else if ($_GET['page'] == 'inbox') {
            $page = $_GET['page'];
        } else if ($_GET['page'] == 'read_inbox') {
            $page = $_GET['page'];
        } else if ($_GET['page'] == 'outbox') {
            $page = $_GET['page'];
        } else if ($_GET['page'] == 'read_outbox') {
            $page = $_GET['page'];
        }*/

    }

    /*$m_counter = 0;

    $query = mysql_query(" SELECT COUNT(id) r_size FROM inbox WHERE readen = 0 AND u_id = " . $_SESSION['user_id'] . " AND i_deleted = 0");

    if ($row = mysql_fetch_array($query)) {
        $m_counter = $row['r_size'];
    }*/


} else {

    $page = "home";

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'home') {
            $page = $_GET['page'];
        } else if ($_GET['page'] == 'registration') {
            $page = $_GET['page'];
        }
    }

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Heartlys - Place Your Company Name Here</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="top_bar_black">
    <div id="logo_container">
        <a href = "<?php print ($logged?"?page=profile":"?page=home"); ?>"><div id="logo_image"></div></a>
        <div id="nav_block">
            <a href ="?page=registration"><div class="nav_button">Home </div></a>
            <div class="nav_button"> Contact</div>
            <div class="nav_button"> About</div>
            <div class="nav_button"> Links</div>
            <a href ="?act=logout"><div class="nav_button">Выход</div></a>
        </div>
    </div>
</div>

<div id="content_container">
    <!-- BODY HERE!! -->
    <?php
        include ($logged ?"logged":"notlogged")."/".$page.".php";
    ?>
</div>


<div id="bottom_bar_black">
    <div id="main_container">
        <div id="header_lower">
            <div id="header_content_lowerline">Contact
                <div id="header_content_lowerboxcontent">148 Blackways Street<br/>
                    Hargary<br/>
                    Lingvillage<br/>
                    HG43 9HA <BR/>
                    info@domainhappy.com<br/>
                    www.domainhappy.com<br/>
                    01982 698 621<BR/>
                </div>
            </div>
        </div>

        <div id="header_lower">
            <div id="header_content_lowerline">Info
                <div id="header_content_lowerboxcontent">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est
                </div>
            </div>
        </div>


    </div>
</div>
<div id="copywriteblock"> Designed by <a href="http://www.pixelateddesign.co.uk/">www.pixelateddesign.co.uk </a></div>

</body>
</html>
