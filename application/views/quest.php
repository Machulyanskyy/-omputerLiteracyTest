
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
            <?php foreach($list as $row_qu):?>
                <?php if($row_qu['LEVEL'] == 1): ?>
                    <div class="questions" >
                        <h3><?php echo $row_qu['QA_TEXT']?></h3>
                        <div class="answers" >
                            <?php foreach($list as $row_ans):?>
                                <?php if($row_ans['QA_QUESTION_ID'] == $row_qu['QA_ID']): ?>
                                    <input name="answer<?php echo $row_ans['QA_QUESTION_ID']?>[]" type="radio" value="<?php echo $row_ans['QA_ID']?>"/>
                                    <p><?php echo $row_ans['QA_TEXT']?></p><br /> 
                                <?php endif?>
                            <?php endforeach?>
                        </div>
                    </div>
                <?php endif?>
            <?php endforeach?>
            <p><input type="submit" id="submit" value="Завершити тестування"></p>
        </form>
        
        <footer>
            <script src="/application/scripts/jquery-2.2.3.min.js"></script>
            
            <script src="/application/scripts/questions.js"></script>
        </footer>
    </body>
</html>
