<?php

global $connect;
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
    <link href="./admin.css" rel="stylesheet" />
</head>
<body>
<!-- <form>
  <select id="fruits" name="fruits" onchange="handleFruitChange()">
    <option value="add">Добавить</option>
    <option value="indiv">Индивидуальное</option>
    <option value="group">Група1</option>
  </select>
</form> -->
    <div id="t1">
        <h2>Заявки</h2>
        <table id="table">
            <tr>
                <th>Имя</th>
                <th>Почта</th>
                <th>Телефон</th>
                <th>Тип занятия</th>
            </tr>

            <?php
                $users = mysqli_query($connect, "SELECT * FROM `users_singup` ");
                $users = mysqli_fetch_all($users);
                foreach ($users as $user){
                    ?>
                    <tr>
                        <td><?=$user[1] ?></td>
                        <td><?=$user[2] ?></td>
                        <td><?=$user[3] ?></td>
                        <td><?=$user[4] ?></td>
                        <td><button class="btn" id="update" onclick="window.location.href='../schedule/index.php?id=<?=$user[0] ?>'">Записать</button></td>
                        <td><button class="btn" id="delete" onclick="window.location.href='vendor/add.php?id=<?=$user[0] ?>'"><form>
                                                                                                                                <select id="adds" name="adds">
                                                                                                                                    <option value="add">Добавить</option>
                                                                                                                                    <option value="indiv">Индивидуальное</option>
                                                                                                                                    <option value="group">Группа1</option>
                                                                                                                                    <option value='pair1'>Пара1</option>
                                                                                                                                </select>
                                                                                                                                </form></button></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <form id="search_form" method="POST" action="">
                <input type="text" name="search" id="search">
                <button type="submit" class="btn">Поиск</button>
        </form>
    </div>
    

    <div id="t2">
        <h2>Ученики</h2>
        <table id="table2">
            <tr>
                <th>Имя</th>
                <th>Почта</th>
                <th>Телефон</th>
                <th>Тип занятия</th>
                <th>Учитель</th>
            </tr>

            <?php
                $users2 = mysqli_query($connect, "SELECT * FROM `students`");
                $users2 = mysqli_fetch_all($users2);
                foreach ($users2 as $user2){
                    ?>
                    <tr>
                        <td><?=$user2[1] ?></td>
                        <td><?=$user2[2] ?></td>
                        <td><?=$user2[3] ?></td>
                        <td><?=$user2[4] ?></td>
                        <td><?=$user2[5] ?></td>
                        <td><button class="btn" id="update" onclick="window.location.href='update.php?id=<?=$user2[6] ?>'">Изменить</button></td>
                        <td><button class="btn" id="delete" onclick="window.location.href='vendor/delete.php?id=<?=$user2[6] ?>'">Удалить</button></td>
                        <td><button class="btn" id="schedule" onclick="window.location.href='../schedule/index.php?id=<?=$user2[6] ?>'">Расписание</button></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <form id="search_form2" method="POST" action="">
            <input type="text" name="search2" id="search2">
            <button type="submit" class="btn">Поиск</button>
        </form>
    </div>


    <div id="g1">
        <h2>Группа1<button class="btn" id="lesson" onclick="window.location.href='../schedule/index.php?id=999'">Расписание</button></h2>
        <table id="table3">
            <tr>
                <th>Имя</th>
                <th>Почта</th>
                <th>Телефон</th>
                <th>Тип занятия</th>
                <th>Учитель</th>
            </tr>

            <?php
                $users3 = mysqli_query($connect, "SELECT * FROM `groups1` ");
                $users3 = mysqli_fetch_all($users3);
                foreach ($users3 as $user3){
                    ?>
                    <tr>
                        <td><?=$user3[1] ?></td>
                        <td><?=$user3[2] ?></td>
                        <td><?=$user3[3] ?></td>
                        <td><?=$user3[4] ?></td>
                        <td><?=$user3[5] ?></td>
                        <td><button class="btn" id="update" onclick="window.location.href='update.php?id=<?=$user3[6] ?>'">Изменить</button></td>
                        <td><button class="btn" id="delete" onclick="window.location.href='vendor/delete_group1.php?id=<?=$user3[6] ?>'">Удалить</button></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <form id="search_form3" method="POST" action="">
                <input type="text" name="search3" id="search3">
                <button type="submit" class="btn">Поиск</button>
        </form>
    </div>


    <div id="p1">
        <h2>Пара1<button class="btn" id="lesson" onclick="window.location.href='../schedule/index.php?id=1001'">Расписание</button></h2>
        <table id="table4">
            <tr>
                <th>Имя</th>
                <th>Почта</th>
                <th>Телефон</th>
                <th>Тип занятия</th>
                <th>Учитель</th>
            </tr>

            <?php
                $users4 = mysqli_query($connect, "SELECT * FROM `pair1` ");
                $users4 = mysqli_fetch_all($users4);
                foreach ($users4 as $user4){
                    ?>
                    <tr>
                        <td><?=$user4[1] ?></td>
                        <td><?=$user4[2] ?></td>
                        <td><?=$user4[3] ?></td>
                        <td><?=$user4[4] ?></td>
                        <td><?=$user4[5] ?></td>
                        <td><button class="btn" id="update" onclick="window.location.href='update_pair1.php?id=<?=$user4[6] ?>'">Изменить</button></td>
                        <td><button class="btn" id="delete" onclick="window.location.href='vendor/delete_pair1.php?id=<?=$user4[6] ?>'">Удалить</button></td>
                    </tr>
                    <?php
                }
            ?>
        </table>


    <button class="btn" style="margin-top: 10px;" onclick="window.location.href = '../schedule/index.php'">Общее расписание</button>

    <form action="/../authorization/src/actions/logout.php" method="post" id="out">
            <button role="button" id="logout" class="btn">Выйти из аккаунта</button>
        </form>
    <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
                $search = $_POST['search'];
                $users = mysqli_query($connect, "SELECT * FROM `users_singup` WHERE `users_singup`.`name` LIKE '%$search%'");
                $users = mysqli_fetch_all($users);
            }else{
                $search="";
                $users = mysqli_query($connect, "SELECT * FROM `users_singup` WHERE `users_singup`.`name` LIKE '%$search%'");
                $users = mysqli_fetch_all($users);
            }


            if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search2'])) {
                $search2 = $_POST['search2'];
                $users2 = mysqli_query($connect, "SELECT * FROM `students` WHERE `students`.`name` LIKE '%$search2%'");
                $users2 = mysqli_fetch_all($users2);
            }else{
                $search2 = "";
                $users2 = mysqli_query($connect, "SELECT * FROM `students` WHERE `students`.`name` LIKE '%$search2%'");
                $users2 = mysqli_fetch_all($users2);
            }

            if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search3'])) {
                $search3 = $_POST['search3'];
                $users3 = mysqli_query($connect, "SELECT * FROM `groups1` WHERE `groups1`.`name` LIKE '%$search3%'");
                $users3 = mysqli_fetch_all($users3);
            }else{
                $search3 = "";
                $users3 = mysqli_query($connect, "SELECT * FROM `groups1` WHERE `groups1`.`name` LIKE '%$search3%'");
                $users3 = mysqli_fetch_all($users3);
            }
        ?>
    <script>
        var newContent = "";
        var users = <?php echo json_encode($users); ?>; 
        newContent += "<tr>";
        newContent += "<th>Имя</th>";
        newContent += "<th>Почта</th>";
        newContent += "<th>Телефон</th>";
        newContent += "<th>Тип занятия</th>";
        newContent += "</tr>";
        for (var i = 0; i < users.length; i++) {
            newContent += "<tr>";
            newContent += "<td>" + users[i][1] + "</td>";
            newContent += "<td>" + users[i][2] + "</td>";
            newContent += "<td>" + users[i][3] + "</td>";
            newContent += "<td>" + users[i][4] + "</td>";
            newContent += "<td><button class='btn' id='update' onclick=\"window.location.href='../schedule/index.php?id=" + users[i][0] + "'\">Записать</button></td>";
            // newContent += "<td><button id='delete' onclick=\"window.location.href='vendor/add.php?id=" + users[i][0] + "'\"><form><select id='adds' name='adds' onchange='handleFruitChange()'><option value='add'>Добавить</option><option value='indiv'>Индивидуальное</option><option value='group'>Група1</option></select></form></button></td>";
            newContent += "<td><form id='add_form' method='POST' action=\"vendor/add.php?id="+ users[i][0] + "\"><select id='adds' name='adds'><option value='add'>Добавить</option><option value='indiv'>Индивидуальное</option> <option value='group1'>Группа1</option> <option value='pair1'>Пара1</option></select></form></td>";
            newContent += "</tr>";
        }
        document.getElementById("table").innerHTML = newContent;

        document.getElementById("adds").onchange = function() {
            document.getElementById("add_form").submit();
        };

        var newContent2 = "";
        var users2 = <?php echo json_encode($users2); ?>; 
        newContent2 += "<tr>";
        newContent2 += "<th>Имя</th>";
        newContent2 += "<th>Почта</th>";
        newContent2 += "<th>Телефон</th>";
        newContent2 += "<th>Тип занятия</th>";
        newContent2 += "<th>Учитель</th>";
        newContent2 += "</tr>";
        for (var i = 0; i < users2.length; i++) {
            newContent2 += "<tr>";
            newContent2 += "<td>" + users2[i][1] + "</td>";
            newContent2 += "<td>" + users2[i][2] + "</td>";
            newContent2 += "<td>" + users2[i][3] + "</td>";
            newContent2 += "<td>" + users2[i][4] + "</td>";
            newContent2 += "<td>" + users2[i][5] + "</td>";
            newContent2 += "<td><button class='btn' id='update' onclick=\"window.location.href='update.php?id=" + users2[i][6] + "'\">Изменить</button></td>";
            newContent2 += "<td><button class='btn' id='delete' onclick=\"window.location.href='vendor/delete.php?id=" + users2[i][6] + "'\">Удалить</button></td>";
            newContent2 += "<td><button class='btn' id='schedule' onclick=\"window.location.href='../schedule/index.php?id="+users2[i][6] +"'\">Расписание</button></td>";
            newContent2 += "</tr>";
        }
        document.getElementById("table2").innerHTML = newContent2;


        var newContent3 = "";
        var users3 = <?php echo json_encode($users3); ?>; 
        newContent3 += "<tr>";
        newContent3 += "<th>Имя</th>";
        newContent3 += "<th>Почта</th>";
        newContent3 += "<th>Телефон</th>";
        newContent3 += "<th>Тип занятия</th>";
        newContent3 += "<th>Учитель</th>";
        newContent3 += "</tr>";
        for (var i = 0; i < users3.length; i++) {
            newContent3 += "<tr>";
            newContent3 += "<td>" + users3[i][1] + "</td>";
            newContent3 += "<td>" + users3[i][2] + "</td>";
            newContent3 += "<td>" + users3[i][3] + "</td>";
            newContent3 += "<td>" + users3[i][4] + "</td>";
            newContent3 += "<td>" + users3[i][5] + "</td>";
            newContent3 += "<td><button class='btn' id='update' onclick=\"window.location.href='update_group1.php?id=" + users3[i][6] + "'\">Изменить</button></td>";
            newContent3 += "<td><button class='btn' id='delete' onclick=\"window.location.href='vendor/delete_group1.php?id=" + users3[i][6] + "'\">Удалить</button></td>";
            newContent3 += "</tr>";
        }
        document.getElementById("table3").innerHTML = newContent3;


        var newContent4= "";
        var users4 = <?php echo json_encode($users4); ?>; 
        newContent4 += "<tr>";
        newContent4 += "<th>Имя</th>";
        newContent4 += "<th>Почта</th>";
        newContent4 += "<th>Телефон</th>";
        newContent4 += "<th>Тип занятия</th>";
        newContent4 += "<th>Учитель</th>";
        newContent4 += "</tr>";
        for (var i = 0; i < users4.length; i++) {
            newContent4 += "<tr>";
            newContent4 += "<td>" + users4[i][1] + "</td>";
            newContent4 += "<td>" + users4[i][2] + "</td>";
            newContent4 += "<td>" + users4[i][3] + "</td>";
            newContent4 += "<td>" + users4[i][4] + "</td>";
            newContent4 += "<td>" + users4[i][5] + "</td>";
            newContent4 += "<td><button class='btn' id='update' onclick=\"window.location.href='update_pair1.php?id=" + users4[i][6] + "'\">Изменить</button></td>";
            newContent4 += "<td><button class='btn' id='delete' onclick=\"window.location.href='vendor/delete_pair1.php?id=" + users4[i][6] + "'\">Удалить</button></td>";
            newContent4 += "</tr>";
        }
        document.getElementById("table4").innerHTML = newContent4;

    </script>
</body>
</html>

