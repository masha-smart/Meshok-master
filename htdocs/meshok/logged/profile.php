<?php
$qqq = "SELECT id, login, created_at, fname, lname, email, address, phone, rating FROM users
						  WHERE  id = " . $_SESSION['user_id'];

//print $qqq;

$query = mysqli_query($link, $qqq);


$row = mysqli_fetch_array($query)

?>
<div class="parent">
    <div class="block-center">
        <div class="profile_info">

        </div>
        <div class="profile_list">
            <table class="simple-little-table" cellspacing='0'>
                <tr>
                    <th>Group ID</th>
                    <th>Name</th>
                    <th>Created_at</th>
                </tr><!-- Table Header -->

                 <tr>
                    <td>Генетический алгоритм</td>
                    <td>100%</td>
                    <td>Да</td>
                </tr><!-- Table Row -->

                <tr>
                    <td>Муравьиный алгоритм</td>
                    <td>100%</td>
                    <td>Да</td>
                </tr><!-- Darker Table Row -->

                <tr>
                    <td>Метод Ньютона</td>
                    <td>20%</td>
                    <td>Нет</td>
                </tr>

                <tr>
                    <td>Дифференциальный алгоритм</td>
                    <td>80%</td>
                    <td>Нет</td>
                </tr>

                <tr>
                    <td>Метод наискорейшего пуска</td>
                    <td>100%</td>
                    <td>Да</td>
                </tr>

                <tr>
                    <td>Случайный поиск</td>
                    <td>23%</td>
                    <td>Да</td>
                </tr>

                <tr>
                    <td><a href="blog.harrix.org">Гиперссылка</a></td>
                    <td>80%</td>
                    <td><a href="blog.harrix.org">Да</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>