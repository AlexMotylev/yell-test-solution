<?php
/**
 * Класс для рисования круга
 */

class Circle extends Figure {

	public $radius = 0;

	protected function _drawFigure(){
		if($this->radius > 0.0){
			imagefilledellipse($this->_image, $this->radius, $this->radius, $this->radius * 2.0, $this->radius * 2.0, $this->_getFigureColor());
		}else{
			throw new Exception('Радиус должен быть положительным');
		}
	}

	protected function _getImageDimensions(){
		$dimensions = new stdClass();
		$dimensions->width = $dimensions->height = $this->radius * 2.0;
		return $dimensions;
	}

}