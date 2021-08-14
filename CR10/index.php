<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM big_library";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "
        <div class='col'>
            <div class='card h-100 border-0 bg-light shadow rounded-3'>
                <img src='".$row['image']."' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <table class='table '>
                        <tr>
                        <th>Title</th>
                        <td>" .$row['title']."</td>
                        </tr>
                        <th>ISBN</th>
                        <td>" .$row['isbn']."</td>
                        </tr>
                        <tr>
                        <th>Description</th>
                        <td>" .$row['short_description']."</td>
                        </tr>
                        <tr>
                        <th>Type</th>
                        <td>" .$row['type']."</td>
                        </tr>
                        <tr>
                        <th>Author first name</th>
                        <td>" .$row['author_first_name']."</td>
                        </tr>
                        <tr>
                        <th>Author last name</th>
                        <td>" .$row['author_last_name']."</td>
                        </tr>
                        <tr>
                        <th>Publisher</th>
                        <td><a href='publisher.php?publisher_name=".$row['publisher_name']."'>" .$row['publisher_name']."</a></td>
                        </tr>
                        <tr>
                        <th>Publisher address</th>
                        <td>" .$row['publisher_address']." </td>
                        </tr>
                        <tr>
                        <th>Publish date</th>
                        <td>" .$row['publish_date']."</td>
                        </tr>
                        <tr>
                        <th>Status</th>
                        <td>" .$row['status']."</td>
                        </tr>
                    </table>
                </div>
            
                <div class='card-footer d-flex  justify-content-center'>
                    <a href='update.php?id=" .$row['id']."'><button class='btn btn-outline-warning btn-sm me-2' type='button'><i class='far fa-edit'></i></button></a>
                    <a href='delete.php?id=" .$row['id']."'><button class='btn btn-outline-danger btn-sm me-2' type='button'><i class='far fa-trash-alt'></i></button></a>
                    <a href='details.php?id=" .$row['id']."'><button class='btn btn-outline-success btn-sm' type='button'><i class='fas fa-info-circle'></i></button></a>
                </div>
            </div>   
        </div>   
           
           ";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Library</title>
        <?php require_once 'components/boot.php'?>
    </head>
    <body class="">
        <?php require_once 'components/nav.php'?>
        <div>
            <img src="pictures/pic.jpeg" class="img-fluid shadow" >
        </div>
        <div class="container">   
            <p class='h3  text-center my-5'>Our Assortiment</p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 my-3">
                <?= $tbody;?>
            </div>
        </div>
    </body>
</html>