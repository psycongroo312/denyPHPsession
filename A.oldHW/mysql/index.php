<!-- <?php 

$myConnect = mysqli_connect(hostname:'localhost', username:'root', password: 'SAAAy_312', database: 'BOOKS');



$author = $_POST['author'];
$book = $_POST['book'];
$pages = $_POST['pages'];

$q = 'INSERT INTO BOOKS(name, authpor, pages) VALUES ("' . $author . $book . $pages . '")';


$result = mysqli_prepare($myConnect, $q);


mysqli_execute($result);


$query = "SELECT * FROM BOOKS";

$stmt = mysqli_prepare($myConnect, $query   );

$result = mysqli_query($myConnect, $query);

while($row = mysqli_fetch_assoc($result)){
    echo $row['author'] . '<br>';
}







