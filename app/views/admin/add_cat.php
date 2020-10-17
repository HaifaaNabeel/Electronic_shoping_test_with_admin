<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Haifaa Nabeel</title>
    <style>

    </style>

</head>

<body>
    <header></header>
    <main> </main>
    <footer>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-3  mb-3" style="padding: 25px; margin:30px">
                    <form action="admin_cat/add" class="was-validated " id="form_id" method="POST" >
                        <div class="form-group ">
                            <label for="uname">category name:</label>
                            <input type="text" class="form-control " id="category_name" placeholder="" name="category_name" required>
                            <div class="valid-feedback" id="valid_feedbackN" >Valid.</div>
                            <div class="invalid-feedback" id="invalid_feedbackN">category name</div>
                        </div>
                        <div class="form-group">
                            <label for="uactive">category active:</label>
                            <input type="number" class="form-control" id="category_is_active" placeholder="" name="category_is_active" required>
                            <div class="valid-feedback" id="valid_feedbackE">Valid.</div>
                            <div class="invalid-feedback" id="invalid_feedbackE">The category active filed is required.</div>
                        </div>
                        <div class="form-group">
                            <label for="cat_parnt">is main catogry or sub category:</label>
                            <select class="form-control" id="category_parent" placeholder="" name="category_parent" required>
                            <option value=0>parent</opiton>
                             <?php
                              $rows=$data['categories'];
        
                              foreach($rows as $row){
                                 echo "
            
                                 <option value=$row->category_id>$row->category_name</option>
                                       ";
                                }
                            ?>

                            </select>
                            <div class="valid-feedback" id="valid_feedbackP"> </div>
                            <div class="invalid-feedback" id="invalid_feedbackP"> The category parent filed is required.</div>
                        </div>
                        <div class="form-group">
                            <!--<label for="dateb">Date of add:</label>-->
                            <input type="text" class="form-control" id="date_added" placeholder="" name="date_added" hidden="hidden" readonly required value="<?php echo date('y-m-d'); ?>">
                            <div class="valid-feedback" id="valid_feedbackB">Valid.</div>
                            <div class="invalid-feedback" id="invalid_feedbackB">The date filed is required.</div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="background-color: green;" id="SubmitId">Submit</button>


                    </form>



                </div>
            </div>
        </div>
    </footer>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>