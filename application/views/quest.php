<html>
    <head>
        <meta charset="UTF-8">
        <title>Questions</title>
        <link href='/application/style/questions.css' rel="stylesheet">
        <!-- <link href='/application/style/bootstrap.min.css' rel="stylesheet"> -->
    </head>
    <body>
        <h1>Проходження тесту</h1>
        
        <form id="testing" action="/questions/result" method="POST"> 
            <?php foreach($list as $row):?>
            <?php if($row['LEVEL'] == 1): ?>
                <div class="questions" >
                    <p><?php echo $row['QA_TEXT']?></p> 
                </div>
            <?php else: ?>
                <div class="answers" >
                    <input name="answer<?php echo $row['QA_QUESTION_ID']?>[]" type='radio' value="<?php echo $row['QA_ID']?>" required/>
                    <p><?php echo $row['QA_TEXT']?></p> 
                </div>
            <?php endif?>
        <?php endforeach?>
        <input type="submit" value="Завершити тестування">
        </form>
        
        <footer>
            <script src="/application/scripts/jquery-2.2.3.min.js"></script>
            <script src="/application/scripts/questions.js"></script>
        </footer>
    </body>
</html>
