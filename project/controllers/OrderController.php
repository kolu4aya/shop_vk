<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class OrderController extends Controller
	{
		public function index() {
			//Страница заказов пользователя
		}
		public function create() {
			//страница оформления заказа
		}
		public function get_datetime() {
			//Получение свободных дней и времени для доставки
		}
		public function store() {
			//Сохранение данных о заказе и отправка данных в сторонний сервис
		}
		public function get_status($params) {
			//Получение статуса заказа
		}
	}
