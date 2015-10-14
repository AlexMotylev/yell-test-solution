<?php
/**
 * Класс для рисования квадрата
 */

class Square extends Figure {

	public $size;

	protected function _getImageDimensions() {
		$dimensions = new stdClass();
		$dimensions->width = $dimensions->height = $this->size;
		return $dimensions;
	}

	protected function _drawFigure() {
		if($this->size > 0.0){
			imagefill($this->_image, 0, 0, $this->_getFigureColor());
		}else{
			throw new Exception('Размер должен быть положительным');
		}
	}
}