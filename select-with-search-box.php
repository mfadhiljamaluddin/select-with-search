<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Fetch data in list with search box using select 2 plugin</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <label>List</label>
                                <select class="js-example-basic-multiple form-control mb-3">
                                    <?php
                                     $con = mysqli_connect('localhost', "root", "", "demo");

                                     $query = "SELECT * FROM list";
                                     $qRun = mysqli_query($con, $query);

                                     if(mysqli_num_rows($qRun) > 0)
                                     {
                                        foreach($qRun as $row){
                                            ?>
                                            <option value="<?=$row['id']; ?>"><?=$row['name']; ?></option>
                                            <?php
                                        }
                                     }else{
                                        ?>
                                        <option value="">NO RECORD</option>
                                        <?php
                                     }
                                    ?>
                                    <option value="">Value</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
  </body>
</html>