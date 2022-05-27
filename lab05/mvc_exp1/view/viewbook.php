<html>
 <head></head>
<body>

<?php
include_once ("model/Book.php");
$model = new Model();
$book = $this->model->getBook($_GET['book']);
echo 'Title:' . $book->title . '<br/>';
echo 'Author:' . $book->author . '<br/>';
echo 'Description:' . $book->description . '<br/>';

?>

</body>
</html>