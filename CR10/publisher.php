<?php
require_once 'actions/db_connect.php';
$publisher_name = $_GET['publisher_name'];
$sql = "SELECT * FROM big_library WHERE publisher_name = '$publisher_name'";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        $publisher = $row['publisher_name'];        
        $tbody .= "
            <tr>
                <td>" .$row['title']."</td>
                <td><img class='img-thumbnail' src='".$row['image']."'</td>
                <td>" .$row['isbn']."</td>
                <td>" .$row['short_description']."</td>
                <td>" .$row['type']."</td>
                <td>" .$row['author_first_name']."</td>
                <td>" .$row['author_last_name']."</td>
                <td>" .$row['publisher_name']."</td>
                <td>" .$row['publisher_address']." </td>
                <td>" .$row['publish_date']."</td>
                <td>" .$row['status']."</td> 
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Library</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
            
        </style>
    </head>
    <body>
        <?php require_once 'components/nav.php'?>
        <div class="manageProduct w-75 mt-3">    
           
            <p class='h4 fw-light my-5'>Publisher: <?=$publisher?></p>
            <table class='table  table-striped '>
                <thead class=''>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>ISBN</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Author</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Publisher</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody; ?>
                </tbody>
            </table>
            <a href= "index.php"><button class="btn  btn-outline-warning btn-sm" type="button" mb-3><i class="fas fa-step-backward"> back</i></button></a>
        </div>
    </body>
