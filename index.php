<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="col-9">Online Library</h2>
            <!-- trigger button for add book modal -->
            <button type="button" class="col-3 btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#add_modal">Add</button>
        </div>
        <div>
            <table class="table table-bordered">
                <thead class="bg-warning">
                    <tr>
                        <th>Title</th>
                        <th>ISBN</th>
                        <th>AUTHOR</th>
                        <th>PUBLISHER</th>
                        <th>YEAR PUBLISHED</th>
                        <th>CATEGORY</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody id="table">
                    <!-- Data from the database -->
                </tbody>
                
            </table>
        </div>
        <!-- Add new book modal -->
        <div class="modal fade" id="add_modal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h5>Add New Book</h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <!-- form -->
                        <form>
                            <label>Title:</label>
                            <input type="text" name="add_title" id="add_title" class="form-control" required>
                            <label>ISBN:</label>
                            <input type="text" name="add_isbn" id="add_isbn" class="form-control" required>
                            <label>Author:</label>
                            <input type="text" name="add_author" id="add_author" class="form-control" required>
                            <label>Publisher:</label>
                            <input type="text" name="add_pub" id="add_pub" class="form-control" required>
                            <label>Year published:</label>
                            <input type="text" name="add_year" id="add_year" class="form-control" required>
                            <label>Category:</label>
                            <input type="text" name="add_category" id="add_category" class="form-control" required>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="add_save" id="add_save">Save</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- End new book modal -->
    </div>
</body>
</html>
<?php include "ajax.php" ?>