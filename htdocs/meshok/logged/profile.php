<?php
$qqq = "SELECT g.id as group_id, g.created_user_id, g.name, g.created_at, u.id, u.login FROM groups g, users u
						  WHERE g.created_user_id=u.id and g.created_user_id = " . $_SESSION['user_id'];

//print $qqq;

$query = mysqli_query($link, $qqq);




?>
<div class="parent">
    <div class="block-center-profile">
        <div class="profile_info">

        </div>
        <div class="profile_list">
            <p>My GROUPS</p>
            <table class="simple-little-table" cellspacing='0'>

                <tr>
                    <th>Название</th>
                    <th>Создана</th>
                    <th>Группа</th>
                    <th>Заказы</th>
                    <th>Создать заказ</th>
                </tr><!-- Table Header -->

                <?php while($row = mysqli_fetch_array($query)){
                            $qqq2 = "SELECT id, group_id, user_id, user_login FROM users_in_groups
						        WHERE group_id = ". $row['group_id'];
                            $query2 = mysqli_query($link, $qqq2);

                    ?>

                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td><?php while($row2 = mysqli_fetch_array($query2)){
                                    if($row2['user_login'] != $_SESSION['user_login']){
                                        echo $row2['user_login']." ";
                                    }
                            }?></td>
                    <td></td>
                    <td> <a id="addOrderButton" href="?page=addOrder&mid=<?php print $row['group_id'];?>">+</a></td>
                </tr><!-- Table Row -->
                <?php
                        }
                ?>
            </table>
        </div>
    </div>
</div>