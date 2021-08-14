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

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Media</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            } 
              
        </style>
    </head>
    <body>
        <?php require_once 'components/nav.php'?>
        <fieldset>
            
            <form action="actions/a_update.php"  method="post">
                <table class="table my-5">
                    <tr>
                        <th class='h3 fw-light'>Update request </th>
                        <td><img class='img-thumbnail rounded-circle border-warning' src='<?php echo $image ?>' alt='<?php echo $title ?>'></td>
                    </tr>  
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  value="<?php echo $title ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name= "image" value="<?php echo $image ?>" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="isbn"  value="<?php echo $isbn ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "short_description" value="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                            <select class="form-select" name="type" aria-label="Default select example" >
                                <option selected ><?php echo $type ?></option>
                                <option value="Book">Book</option>
                                <option value="CD">CD</option>
                                <option value="DVD">DVD</option>
                            </select>
                        </td>
                    </tr>    
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "author_first_name" value="<?php echo $author_first_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name="author_last_name"  value="<?php echo $author_last_name ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "publisher_name" value="<?php echo $publisher_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "publisher_address" value="<?php echo $publisher_address ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name="publish_date"  value="<?php echo $publish_date ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Status</th>
                        <td>
                            <select class="form-select" name="status" aria-label="Default select example" >
                                <option selected><?php echo $status ?></option>
                                <option value="available">Available</option>
                                <option value="reserved">Reserved</option>
                            </select>
                        </td>
                    </tr>  
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn  btn-outline-success btn-sm" type= "submit"><i class="far fa-save"></i> update</button></td>
                        <td><a href= "index.php"><button class="btn  btn-outline-warning btn-sm" type="button"><i class="fas fa-step-backward"> back</i></button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>