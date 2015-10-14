<?php
/**
 * Фабрика для создания эксземпляров классов фигур
 */

class FigureFactory {

	/**
	 * @param $type
	 * @param array $params
	 * @return Figure
	 */
	static public function createFigure($type, $params = []){
		return new $type($params);
	}

}