<?php
class beverage {
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function get_color() {
        return $this->color;
    }
    function get_price() {
        return $this->price;
    }
    function get_temperature() {
        return $this->temperature;
    }
}

function getInfo($beverage) {
    return "This beverage is " .$beverage->temperature. " and the color is "  .$beverage->color. ". Its price is " .$beverage->price. " euros.";
} 

$cola = new beverage("black", 2);

echo getInfo($cola);
echo "<br>";
echo "The temperature is: " . $cola->get_temperature();
?>