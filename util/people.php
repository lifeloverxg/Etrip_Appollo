<?php
	class PeopleDAO
	{
		/*
		 --------------------------------
		   Core API
		 --------------------------------
		 */
		
		public static function get_people_basic_pid($pid) 
		{
			// #1 default value
			$person = array(
							'url' => '',
							'alt' => '',
							'title' => ''
			);
			
			// #2 get person basic info
			$mysqli = MysqlInterface::get_connection();
			$stmt = $mysqli->stmt_init();
			$stmt->prepare('SELECT name FROM people WHERE pid=? LIMIT 1;');
			$stmt->bind_param('i', $pid);
			$stmt->execute();
			$result = $stmt->get_result();
			if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$person['url'] = 'people?pid='.$pid;
				$person['alt']   = strip_tags($row['name']);
				$person['title'] = strip_tags($row['name']);
			}
			$stmt->close();
			return $person;
		}
	}

?>