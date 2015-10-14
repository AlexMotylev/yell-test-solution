<?php
/**
 * Контроллер для работы с фигурами
 */

class FigureController {

	/**
	 * Получение html-кода с запрошенными фигурами
	 * @param array $shapes Массив с описанием фигур вида: [['type' => 'circle', 'params' => [...], ...]
	 */
	static function actionGetImages(array $shapes){
		foreach ($shapes as $shape) {
			$imgData = FigureFactory::createFigure($shape['type'], $shape['params'])->getImage();
			echo '<img src="data:image/png;base64,' . base64_encode($imgData) . '">';
		}
	}

}