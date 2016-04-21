<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link href='/application/style/dashboard.css' rel="stylesheet">
        <!-- <link href='/application/style/bootstrap.min.css' rel="stylesheet"> -->
    </head>
    <body>
        
        
        <form id="create-test">
            <input type="text" name="quest"/>
            <input type='submit' name='add-quest' value="Додати запитання"/>
            <input type='button' id='add-answ' value="Додати відповідь"/>
            <ul id="answ-list"></ul>
        </form>
        
        <!--<table>
            <tr>
                <th> Вага</th>
                <th> Запитання</th>
                <th> Редагувати</th>
                <th> Видалити</th>
            </tr>
            <?//php foreach($list as $row):?>
                <?//php if($row['LEVEL'] == 1): ?>
                <tr class='questions' data-id="<?//php echo $row['QA_ID']>?>">
                   <td><?//php echo $row['QA_WEIGHT']?></td>
                   <td><?//php echo $row['QA_TEXT']?></td>
                   <td> <button onclick='change_qa(this)'> Редагувати </button>  </td>
                   <td> <button onclick='del_qa(this)'> Видалити </button>  </td>
                </tr>
                <?//php else: ?>
                <tr class='answers' data-id="<?//php echo $row['QA_QUESTION_ID']?>">
                   <td> <input type='checkbox' <?// if($row['QA_ANSWER_TRUE'] == 1) echo "checked"; ?>><input type='hidden' name='check[]' value='0' /></td>
                   <td><?//php echo $row['QA_TEXT']?></td>
                   <td> <button onclick='change_qa(this)'> Редагувати </button>  </td>
                   <td> <button onclick='del_qa(this)'> Видалити </button>  </td>
                </tr>
                <?//php endif?>
            <?//php endforeach?>
        </table> -->
        
        <?php foreach($list as $row):?>
            <?php if($row['LEVEL'] == 1): ?>
                <div class="questions" data-q-id="<?php echo $row['QA_ID']?>">
                    <input type='number' name='weight_q' value="<?php echo $row['QA_WEIGHT']?>" disabled>
                    <p><?php echo $row['QA_TEXT']?></p>
                    <input type='text' name='edit_qa' style='width: 600px' required>
                    <input type="button" onclick='change_qa(this)' name='change_qa' class='smth' value="Редагувати">
                    <input type="button" onclick="cancel_change(this)" name="cancel_change" value="Відмінити">
                    <input type="button" onclick="add_answer(this)" name="add_answ" value="Додати відповідь">
                    <input type="button" onclick='del_question(this)' name='del_qa' value="Видалити">
                </div>
            <?php else: ?>
                <div class="answers" data-q-id="<?php echo $row['QA_QUESTION_ID']?>" data-a-id="<?php echo $row['QA_ID']?>">
                    <input type='checkbox' <?php if($row['QA_ANSWER_TRUE'] == 1) echo "checked"; ?> onclick='change_check(this)' disabled/>
                    <input type='hidden' name='check' value='<?php ($row["QA_ANSWER_TRUE"] == 1) ? print("1"): print("0"); ?>'/>
                    <p><?php echo $row['QA_TEXT']?></p> 
                    <input type='text' name='edit_qa' style='width: 600px' required>
                    <input type="button" onclick='change_qa(this)' name='change_qa' value="Редагувати">
                    <input type="button" onclick="cancel_change(this)" name="cancel_change" value="Відмінити">
                    <input type="button" onclick='del_answer(this)' name='del_qa' value="Видалити">
                </div>
            <?php endif?>
        <?php endforeach?>
        
    </body>
    <footer>
        <script src="/application/scripts/jquery-2.2.3.min.js"></script>
        <script src="/application/scripts/dashboard.js"></script>
    </footer>
</html>
