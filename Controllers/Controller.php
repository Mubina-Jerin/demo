<?php 
class Controller{

	var $vars=[];
	var $layout="landing";
	function set($d){
	$this->vars=array_merge($this->vars,$d);
	  
  //  echo "<br/>";
//	var_dump($this->vars);

	}
	function render($filename){
		extract($this->vars);
		ob_start();
		require(ROOT."Views/".$filename.'.php');
		$content_for_layout=ob_get_clean();
		if($this->layout==false){
			$content_for_layout;
		}
		else{
			require(ROOT."Views/".$this->layout.'.php');
		}

	}
}
?>