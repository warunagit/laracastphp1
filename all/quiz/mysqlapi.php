<?php
	$conn = mysqli_connect("localhost","root","1234","quizdb");
	$stmt = $conn->prepare("SELECT `question`, `option1`, `option2`, `option3`, `option4`, `correct_option` FROM `math_table`");

	//execute
	$stmt->execute();

	//bind results to query
	$stmt->bind_result($question ,$option1 ,$option2 ,$option3 ,$option4 ,$correct_option);

	$questions_array = array();
	while($stmt->fetch()){
		$temp=array();
		$temp['question']=$question;
		$temp['$option1']=$option1;
		$temp['$option2']=$option2;
		$temp['$option3']=$option3;
		$temp['$option4']=$option4;
		$temp['$correct_option']=$correct_option;

		array_push($questions_array,$temp);
	}

	echo json_encode($questions_array);
?>
	