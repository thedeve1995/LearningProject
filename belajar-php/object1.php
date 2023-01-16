
<?php
class computer {
    public $ramSize;
    public $diskType;
    public $processor;
    public function __construct($ramSize,$diskType,$processor) {
        $this->ramsize = $ramSize;
        $this->disktype = $diskType;
        $this->processor = $processor;
    }

    public function message() {
        return "I have a " . $this->ramsize . "GB RAM, ". $this->disktype . "," .$this->processor . "super computer !";
    }
}

$myComputer = new computer("16", "SSD", "AMD ");
echo $myComputer -> message();

?>

