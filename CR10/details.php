<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM big_library WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $isbn = $data['isbn'];
        $description = $data['short_description'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publish_date = $data['publish_date'];
        $status = $data['status'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}

?>


<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            } 
            th{
                width:50%;
            }
            tr{
                width:50%;
            }    
        </style>
    </head>
    <body>
    <?php require_once 'components/nav.php'?>
        
         
            <fieldset class="">  
                <h1 class="text-center my-5"> Media Details </h1>
                <table class="table">
                    <tr>
                        <th>Image</th>
                        <td><img src="<?php echo $image ?>" style="height:150px; width:150px" class="rounded-circle border border-5 border-warning"> </td>
                    
                    <tr>
                        <th>Title</th>
                        <td><?php echo $title ?></td>
                    </tr>    

                    <tr>
                        <th>ISBN</th>
                        <td><?php echo $isbn ?></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><?php echo $description ?></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        
                        <td><?php echo $type ?></td>
                       
                    </tr>    
                    <tr>
                        <th>Author First Name</th>
                        <td><?php echo $author_first_name ?></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><?php echo $author_last_name ?></td>
                    </tr>    
                    <tr>
                        <th>Publisher Name</th>
                        <td><?php echo $publisher_name ?></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><?php echo $publisher_address ?></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><?php echo $publish_date ?></td>
                    </tr>    
                    <tr>
                        <th>Status</th>
                        <td><?php echo $status ?></td>
                       
                    </tr>  
                    <tr>
                        <td><a href= "index.php"><button class="btn btn-outline-warning btn-sm" type="button"><i class="fas fa-step-backward"></i> back</button></a></td>
                    </tr>
                </table>
            </fieldset>
           
     
    </body>
</html>