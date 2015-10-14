<?php

/**
 * Базовый абстрактный класс для фигур
 * В данной реализации позволяет получать png-изображения фигуры бинарном виде
 * Параметры можно передавать в конструкторе
 */
abstract class Figure {

	public $backgroundColor;
	public $figureColor;

	protected $_image;

	/**
	 * @param array $params Параметры записываются в public свойства фигуры
	 */
	public function __construct(array $params = []) {
		if (!empty($params) && is_array($params)) {
			foreach ($params as $name => $value) {
				if ((new ReflectionProperty($this, $name))->isPublic()) {
					$this->{$name} = $value;
				}
			}
		}
	}

	/**
	 * Создаение GD-ресурса изображения и заливка его фоном
	 */
	public function prepareImage() {
		$dimensions = $this->_getImageDimensions();
		$this->_image = imagecreatetruecolor($dimensions->width, $dimensions->height);
		imagefill($this->_image, 0, 0, imagecolorallocate($this->_image, $this->backgroundColor[0], $this->backgroundColor[1], $this->backgroundColor[2]));
	}

	/**
	 * @return string Бинарные данные png-изображение фигуры
	 */
	protected function _getImageData() {
		ob_start();
		imagepng($this->_image);
		imagedestroy($this->_image);
		return ob_get_clean();
	}

	/**
	 * @return int Индекс цвета фигуры
	 */
	protected function _getFigureColor() {
		return imagecolorallocate($this->_image, $this->figureColor[0], $this->figureColor[1], $this->figureColor[2]);
	}

	/**
	 * @return stdClass Объект с полями width и height, указывающими необходимые размеры изображения
	 */
	abstract protected function _getImageDimensions();

	/**
	 * @return string Бинарные данные png-изображение фигуры
	 */
	public function getImage() {
		$this->prepareImage();
		$this->_drawFigure();
		return $this->_getImageData();
	}

	/**
	 * Отрисовка самой фигуры
	 */
	abstract protected function _drawFigure();

}