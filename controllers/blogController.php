<?php 

	/**
	* 
	*/
	class blogController extends Controller
	{
		public function indexAction()
		{
			$this -> view -> generate('blog','blog.html');
		}
	}

 ?>