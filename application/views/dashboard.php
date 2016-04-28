<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link href='/application/style/dashboard.css' rel="stylesheet">
        <!-- <link href='/application/style/bootstrap.min.css' rel="stylesheet"> -->
    </head>
    <body>
        
        <input type="button" onclick="show_tests()" name="" value="Керування тестами">
        <input type="button" onclick="show_users()" name="" value="Керування користувачами">
        
        <section id="test_manage">
            <form id="create-test">
                <p id='qa-status'></p>
                <input type="text" name="quest" required minlength="5" maxlength="512"/>
                <input type='button' id='add-answ' value="Додати відповідь"/>
                <input type='submit' name='add-quest' value="Зберегти запитання"/>          
                <ul id="answ-list">
                    <li>
                        <input type='radio' name='choose-answ[]' required>
                        <input type='hidden' name='check-answ[]' value='0'/>
                        <input type='text' name='answer[]' required>
                        <input type='button' onclick='del_answ(this)' value='Видалити відповідь'>
                    </li>
                    
                </ul>
            </form>

            <?php foreach($list as $row):?>
                <?php if($row['LEVEL'] == 1): ?>
                    <div class="questions" data-q-id="<?php echo trim($row['QA_ID'])?>">
                        <input type='number' name='weight_q' value="<?php echo trim($row['QA_WEIGHT'])?>" disabled>
                        <p><?php echo trim($row['QA_TEXT'])?></p>
                        <input type='text' name='edit_qa' style='width: 600px' required>
                        <input type="button" onclick='change_qa(this)' name='change_qa' class='smth' value="Редагувати">
                        <input type="button" onclick="cancel_change(this)" name="cancel_change" value="Відмінити">
                        <input type="button" onclick="add_answer(this)" name="add_answ" value="Додати відповідь">
                        <input type="button" onclick='del_question(this)' name='del_qa' value="Видалити">
                    </div>
                <?php else: ?>
                    <div class="answers" data-q-id="<?php echo trim($row['QA_QUESTION_ID'])?>" data-a-id="<?php echo trim($row['QA_ID'])?>">
                        <input type='radio' name='check<?php echo trim($row['QA_QUESTION_ID'])?>[]' <?php if($row['QA_ANSWER_TRUE'] == 1) echo "checked"; ?> onclick='change_check(this)' disabled/>
                        <input type='hidden' name='check' value='<?php ($row["QA_ANSWER_TRUE"] == 1) ? print("1"): print("0"); ?>'/>
                        <p><?php echo trim($row['QA_TEXT'])?></p> 
                        <input type='text' name='edit_qa' style='width: 600px' required>
                        <input type="button" onclick='change_qa(this)' name='change_qa' value="Редагувати">
                        <input type="button" onclick="cancel_change(this)" name="cancel_change" value="Відмінити">
                        <input type="button" onclick='del_answer(this)' name='del_qa' value="Видалити">
                    </div>
                <?php endif?>
            <?php endforeach?>
        </section>
        
        <section id="user_manage">
            <?php foreach($users as $user):?>
            <div class='user' data-id='<?php echo trim($user['U_ID'])?>'>
                <input type='number' name='u_role' value="<?php echo trim($user['U_ROLE'])?>" disabled>
                <input type='text' class='edit_u' name='edit_name' style='width: 300px' required>
                <input type='text' class='edit_u' name='edit_email' style='width: 300px' required>
                <p class='u_name' onclick='view_stat(this)'><?php echo trim($user['U_NAME'])?></p> 
                <p class='u_email' onclick='view_stat(this)'><?php echo trim($user['U_EMAIL'])?></p> 
                <input type="button" onclick='change_u(this)' name='change_u' value="Редагувати">
                <input type="button" onclick="cancel_u_change(this)" name="cancel_u_change" value="Відмінити">
                <input type="button" onclick='del_u(this)' name='del_u' value="Видалити">
                <div class='user-status'>
                    <input type="button" name="test_open" onclick="test_open(this)" value="Відкрити тест">
                    <p class="test-date">Дата проходження тестування: <?php echo date("d.m.y",strtotime($user['U_DATE']))?></p>
                    <p class="all_answers"></p>
                    <p class="wrong_answers"></p>
                    <p class="test-result"></p>
                </div>
            </div>
            <?php endforeach?>
        </section>
    </body>
    <footer>
        <script src="/application/scripts/jquery-2.2.3.min.js"></script>
        <script src="/application/scripts/dashboard.js"></script>
    </footer>
</html>
