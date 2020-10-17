<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../app/assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../app/assets/admin/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../app/assets/admin/libs/css/style.css">
    <link rel="stylesheet" href="../../app/assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../app/assets/admin/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../../app/assets/admin/vendor/inputmask/css/inputmask.css" />
</head>
  <body>
<div class="container">
<h1>add category to database</h1>
  <!--<form method='post' action='admin_cat/add'>
        <div class="form-group">
                <label for="cat_name" class="col-form-label">Category Name : </label>
               <input id="cat_name" type="text" class="form-control" name='cat_name'>
        </div>

           <label class="custom-control custom-checkbox"></label>
          <input type="checkbox" checked="" class="custom-control-input" name='is_active' value=0><span class="custom-control-label">is Active</span>
                
                                            

        <div class="form-group">
            <label for="input-select">parent</label>
            <select class="form-control" id="input-select" name='parent'>
            <option value=0>parent</opiton>
            <?php

             $rows=$data['categories'];
                                                   
                foreach($rows as $row){
                    echo "
                                                       
                     <option value=$row->cat_id>$row->cat_name</option>
                    ";
                    }
            ?>

            foreach($items['categories'] as $c){
                                echo "<li><a href='./$c->category_name'>$c->category_name</a></li>";
                            }
                </select>
        </div>
        <div>
<br><br>
            <input type='submit' value='add category' class='btn btn-primary'>
        </div>
    </form>
</div>-->

<?php

             $rows=$data['categories'];
                                                   
                foreach($rows as $row){
                    echo "
                                                       
                    <li><a href='./$row->category_name'>$row->category_name</a></li>
                    ";
                    }
            ?>



<div class="form-group">
<a href='./add_cat'><button class='btn btn-primary' value='add category '>add</button></a>
</div>
<div class="form-group">
<a href='./update_cat'><button class='btn btn-primary' value='add category '>update</button></a>
</div>
<div class="form-group">
<a href='./delete_cat'><button class='btn btn-primary' value='add category '>delete</button></a>
</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>