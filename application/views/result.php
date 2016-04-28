<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <h1>Результат тестирования</h1><br>
       Ваш результат: <?php echo $result;?>%<br>
       Общее количество вопросов: <?php echo $count;?><br>
       Количество неправильных вопросов: <?php echo $wrong_answers_count;?><br>
       <br>
       <h2>Список неправильных ответов: </h2><br>
       
       <?php foreach($text_question as $row):
            echo $row['TEXT'].'<br>';
            echo 'Ваш ответ: '.$row['ATEXT'].'<br><br>';
       endforeach?>
    </body>
</html>
