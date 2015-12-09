<?php
	class Controller
	{
		
		function __constructController()
		{
			$model = new Model();
			$data = $model -> __constructModel();
			$view = new View();
			$view->__constructView($data);
		}
	}
?>