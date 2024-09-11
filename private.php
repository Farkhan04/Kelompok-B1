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
// properti bisa di akses secara langsung 
echo "Aku suka " . $food1->set_food('Rawon');

//echo "Hai " . $person1->get_name(); 
echo "<hr>";
// methob tidak bisa di akses secara langsung 
echo $food1->get_food();
?>