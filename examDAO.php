<?php 
	class examDAO{
		public static function getAnswer()
		{
			$sql = mysql_query("SELECT answer FROM question1 ORDER BY question_id");
			$array = array();
			while ($result = mysql_fetch_assoc($sql)){
				$array[] = $result['answer'];

			}
			return $array; 
		}

		public static function compute($answer)
		{
			$correct = self::getAnswer();
			if ($correct === false){
				error_log('answer are not correct!');
				return false;
			}if (count ($correct) != strlen($answer)){
				print( 'invalid answer!!');
				return false;
			}
			$score = 0;
			for ($a=0; $a < 10; $a++) { 
				if ($answer[$a] == $correct[$a]){
					$score++;
				}
			}
			return $score;
		}
	}
 ?>