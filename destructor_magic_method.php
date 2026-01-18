<?php
// when an object is being unset / destroyed it gets called automatically, example is when we want to free memory / clear any log file / unset any file

class fileManager{
	public $filename;

	public function __construct($filename){
          $this->filename = $filename;
          echo "Filemanager initialized with $filename\n"; //NOTE HERE WE HAVEN'T USED $this->filename
	}

	public function doSomething(){
		echo "Doing something with the file: $this->filename\n";
	}

	public function __destruct(){
		echo "Filemanager destructed for file: $this->filename\n";
	}
}
$filemanager1 = new fileManager("example.txt");
$filemanager1->doSomething();
