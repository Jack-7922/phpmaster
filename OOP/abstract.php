<?
// Создание абстрактного класса
abstract class HouseAbstract {
    public $model = "";
    public $square;
    public $floors;

    function __construct($model, $square = 0, $floors = 1){
        if(!$model){
            throw new Exception("Ошибка! Укажите модель");
            $this->model = $model;
            $this->square = $square;
            $this->floors = $floors;
        }

        function startProgect() {
            
        }
    }
}