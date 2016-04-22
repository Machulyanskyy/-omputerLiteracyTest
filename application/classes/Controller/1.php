<?php 

ini_set("display_errors", 1);
error_reporting(-1);
//require_once 'Questions.php';

// список тестиров

function get_tests(){

        $results = $connection->query('SELECT * FROM QUESTANS 
            START WITH QA_ID<1000 
            connect by prior QA_ID = QA_QUESTION_ID 
            ORDER SIBLINGS BY QA_ID  ');
	if(!$results) return false;
	$data = array();
	while($row = mysqli_fetch_assoc($results)){
		$data[] = $row;
	}
	return $data;
}
$tests = get_tests();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Система тестирования</title>
	
</head>
<body>
	
<div class="wrap">
	
<?php if( $tests ): ?>
	<h3>Варианты тестов</h3>
	<?php foreach($tests as $test): ?>
		<p><a href="?test=<?=$test['QA_ID']?>"><?=$test['QA_TEXT']?></a></p>
	<?php endforeach; ?>

	<br><hr><br>
<div class="content">
	Вопросы выбранного теста
</div>

<?php else: // $tests ?>
	<h3>Нет тестов</h3>
<?php endif; // $tests ?>

</div> <!-- .wrap -->

</body>
</html>