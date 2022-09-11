<?php
class Movie{
    public $title;
    public $year;
    public $language;

    public function __construct($title, $year, $language){
        $this->$title = $title;
        $this->$year = $year;
        $this->$language= $language;

    }

    public function getFullInfo(){
        return "$this->$title $this->$year $this->$language";
    }
}

$movie1 = new Movie('Star Wars','2005','en' );
$movie2 = new Movie('Il Signore degli Anelli','2003','en');

?>



