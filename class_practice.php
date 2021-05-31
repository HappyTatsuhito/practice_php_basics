<?php
	class Animal{
		public $cry = "bowbow!";

		function bow(){
			echo $this->cry . PHP_EOL;
		}
	}
	
	class Dog extends Animal{
		public $cry = "わんわん！";
	}

	class Cat extends Animal{
		public $cry = "にゃー！";
	}

	$animal_1 = new Animal();
	$animal_1->bow();

	$dog_1 = new Dog();
	$dog_1->bow();

	$cat_1 = new Cat();
	$cat_1->bow();
?>
