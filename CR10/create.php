<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Big Library  |  Add Media</title>
        <style>
            fieldset {
                margin: auto;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
    <?php require_once 'components/nav.php'?>
        <fieldset>
            <legend class='h3 fw-light text-center my-5'>Insert Your Data ..</legend>
            <form action="actions/a_create.php" method= "post">
                <table class='table'>
                  <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Product Title" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name= "image" placeholder="Image URL" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="isbn"  placeholder="ISBN" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "short_description" placeholder="Description" /></td>
                    </tr>
                    <tr>
                     
                    <th>Type: </th >
                            <td>
                                <select class="form-select" name="type" aria-label="Default select example">
                                    <option value="" disabled selected hidden">Choose Media Type</option>
                                    <option value="Book">Book</option>
                                    <option value="CD">CD</option>
                                    <option value="DVD">DVD</option>
                                </select>
                            </td>
                   </tr>


                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "author_first_name" placeholder="Author First Name" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name="author_last_name"  placeholder="Author Last Name" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "publisher_name" placeholder="Publisher Name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "publisher_address" placeholder="Publisher Address" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control ' type="date" name="publish_date"  placeholder="Publish Date" /></td>
                    </tr>    
                    <tr>
                        <th>Status</th>
                        <td>
                                <select class="form-select " name="status" aria-label="Default select example">
                                    <option value="" disabled selected hidden" >Choose Status</option>
                                    <option value="1">Available</option>
                                    <option value="0">Reserved</option>
                                </select>
                            </td>
                    </tr>  
                    
                    <tr>
                        <td><button class='btn btn-outline-success btn-sm' type="submit">Insert Media</button></td>
                        <td><a href="index.php"><button class='btn btn-outline-warning btn-sm' type="button"><i class="fas fa-step-backward"> back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>