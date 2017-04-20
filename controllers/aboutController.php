<?php 

	/**
	* 
	*/
	class aboutController extends Controller
	{
		public function indexAction()
		{
			$this -> view -> generate('about', 'about-page.html');
		}
	}

 ?>