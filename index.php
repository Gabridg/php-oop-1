<?php
class Movie{
    public $title;
    public $year;
    public $language;

    public function __construct($title, $year, $language)
    {
        $this->title = $title;
        $this->year = $year;
        $this->language= $language;
        $this->getFullInfo();
    }

    public function getFullInfo(){
        $this->fullinfo = "$this->title $this->year $this->language";
    }
}

$movie1 = new Movie('Star Wars','2005','en' );
$movie2 = new Movie('Il Signore degli Anelli','2003','en');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Movies</h2>
    <ul>
        <li><?= $movie1->fullinfo?></li>
        <li><?= $movie2->fullinfo?></li>
    </ul>

</body>
</html>

