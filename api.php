<?

	$FIO = $_POST['FIO'];
	$score = $_POST['score'];
	$ball = $_POST['ball'];
	$dbh = new PDO('mysql:host=localhost;dbname=cj33580_tbdp', 'cj33580TBDP', 'tz8OsLR3rWur');
	$stmt = $dbh->prepare("INSERT INTO `order_tbdp`(`date`, FIO, score, ball)
		VALUES (NOW(), :FIO, :score, :ball)");
	$stmt->bindParam(':FIO', $FIO);
	$stmt->bindParam(':score', $score);
	$stmt->bindParam(':ball', $ball);
	$stmt->execute();	
	echo '1';