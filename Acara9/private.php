<?php
class food
{
    private $food;
    function set_food($new_food)
    {
        $this->food = $new_food;
    }
    function get_food()
    {
        return $this->food;
    }
}
?> 

<?php
$food1 = new food();

echo "Aku suka " . $food1->set_food('Rawon');
echo "<hr>";
echo $food1->get_food();
?>