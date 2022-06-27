<?php
class Movie {
    public $title;
    public $genre;
    public $direction;
    public $oscar;

    public function __construct($_title, $_genre, $_direction, $_oscar)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->direction = $_direction;
        $this->oscar = $_oscar;
    }

    public function getTitle() {
        return $this->title;
    }
}

$movies = [
    new Movie('Back to the Future', 'Comedy/Sci-fi', 'Robert Zemeckis', true),
    new Movie('The Blues Brothers', 'Comedy', 'John Landis', false)
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies OOP</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
        <li>
            <h3><?php echo $movie->title; ?></h3>
            <h4><?php echo $movie->genre; ?></h4>
            <h4><?php echo $movie->direction; ?></h4>
            <?php if($movie->oscar) { ?>
            <h3>Ha vinto un oscar</h3>
            <?php } ?>
        </li>
        <?php } ?>
    </ul>
</body>
</html>