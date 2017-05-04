<?php 


class Rectangle {

	private $width;
	private $height;

	public function __construct($width, $height) {
		// Self encapsulation
		$this->setHeight($height);
		$this->setWidth($width);
	}

	protected function setHeight($height) {
		$this->height = $height;
	}

	protected function setWidth($width) {
		$this->width = $width;
	}

	public function getHeight() {
		return $this->height;
	}

	public function getWidth() {
		return $this->width;
	}

	public function area() {
		return ($this->width * $this->height);
	}

	public function perimeter() {
		return ($this->height * 2) + ($this->width * 2);
	}



}









?>