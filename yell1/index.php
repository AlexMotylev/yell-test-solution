<?php
/**
 * Демонстрация использования контроллера
 */

include 'init.php';

FigureController::actionGetImages([
	[
		'type' => 'circle',
		'params' => [
			'radius' => 30,
			'backgroundColor' => [0, 255, 0],
			'figureColor' => [255, 255, 0]
		]
	],
	[
		'type' => 'circle',
		'params' => [
			'radius' => 20,
			'backgroundColor' => [255, 255, 255],
			'figureColor' => [255, 0, 0]
		]
	],
	[
		'type' => 'square',
		'params' => [
			'size' => 50,
			'figureColor' => [0, 0, 255]
		]
	],
]);
