<?php
		$options = "surname, name, age, gender";
		$info = "Petrov, Ivan, 37, m; Vasyliev, Petr, 22, m; Vasytina, Irina, 28, f";
		$persons = [];
		
		$options_arr = explode(", ", $options);
		$info_arr = explode("; ", $info);

		foreach ($info_arr as $value) {
			$n = explode(", ", $value);
			foreach ($options_arr as $key => $value) {
				$new_persons[$value] = $n[$key];
			}
			$persons[] = $new_persons;
		}

		echo "<pre>";
		print_r($persons);
		echo "</pre>";

	?>
	