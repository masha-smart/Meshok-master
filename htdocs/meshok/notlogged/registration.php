<script>
    function check() {
        var pass = document.getElementById("n_pass");
        if (pass.type == "password") {
            pass.type = "text";
        } else {
            pass.type = "password";
        }
    }
</script>
<div class="parent">
    <div class="block-center">
        <form action="?act=reg" method="post">
            Login:       <input type="text" name="n_login" placeholder="Login"><br>
            Password:   <input type="password" id="n_pass" name="n_pass" placeholder=""><br>
            <input type="checkbox" name="ckeck" onchange="check()"> Show Password<br>
            Имя:        <input type="text" name="n_fname" placeholder="Введите свое имя"><br>
            Фамилия:    <input type="text" name="n_lname" placeholder="Введите свою фамилию"><br>
            E-mail:     <input type="text" name="n_email" placeholder="Введите сво email"><br>
            Адрес:      <input type="text" name="n_address" placeholder="Введите свой адресс"><br>
            Телефон: +7 <input type="text" name="n_phone" placeholder="Введите свой телефон"><br>
                        <input type="radio" name="n_user_type" value="1"> Продавец <br>
                        <input type="radio" name="n_user_type" value="2"> Покупатель <br>
            <input type="submit" value="Go!">
        </form>
    </div>

</div>
