<script>
    function check() {
        var pass = document.getElementById("n_pass");
        if (pass.type == "password") {
            pass.type = "text";
        } else {
            pass.type = "password";
        }
    }
    var countOfFields = 0; // Текущее число полей
    var curFieldNameId = 0; // Уникальное значение для атрибута name
    var maxFieldLimit = 9; // Максимальное число возможных полей
    function deleteField(a) {
        // Получаем доступ к ДИВу, содержащему поле
        var contDiv = a.parentNode;
        // Удаляем этот ДИВ из DOM-дерева
        contDiv.parentNode.removeChild(contDiv);
        // Уменьшаем значение текущего числа полей
        countOfFields--;

        // Возвращаем false, чтобы не было перехода по сслыке
        return false;
    }
    function addField() {
        // Проверяем, не достигло ли число полей максимума
        if (countOfFields >= maxFieldLimit) {
            alert("Число полей достигло своего максимума = " + maxFieldLimit);
            return false;
        }
        // Увеличиваем текущее значение числа полей
        countOfFields++;
        // Увеличиваем ID
        curFieldNameId++;
        // Создаем элемент ДИВ
        var div = document.createElement("div");
        // Добавляем HTML-контент с пом. свойства innerHTML
        div.innerHTML = "<input name=\"name_" + curFieldNameId + "\" type=\"text\" placeholder=\"type user login\" /> <a onclick=\"return deleteField(this)\" href=\"#\">[X]</a>";
        // Добавляем новый узел в конец списка полей
        document.getElementById("parentId").appendChild(div);
        // Возвращаем false, чтобы не было перехода по сслыке
        return false;
    }
</script>

<div class="parent">
    <div class="block-center">
        <form action="?act=addGroup" method="post">
            Name of the group: <input type="text" id="createGroupLogin" name="cg_name"
                                      placeholder="for example: Group 22"><br>
            <div id="parentId">
                <!--fields create here!-->
            </div>
            <a onclick="return addField()" id="addButton" href="#">+</a><br>
            <input id="createGroupCreateButton" type="submit" value="Create Group">
        </form>


    </div>
