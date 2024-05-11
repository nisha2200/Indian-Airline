<?php
require_once "config.php";
$query = "SELECT * FROM client";
$stmt = $con->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>workshop</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body {
                background-color: #e6e6e6;
            }
            .feat {
                background-color: #fff;
                padding: 5%;
                margin-bottom: 50px;
            }
            a {
                margin-bottom: 20px !important;
                display: inline-block;

            }
        </style>
    </head>
    <body>
        <section>
            <div class="container">
            <div class="row">
            <?php
                if (isset($_GET['do']) && $_GET['do'] === 'done') {
                    echo "<h1 class='alert alert-success'><b>Success</b></h1>";
                }
                ?>
            </div>
                <div class="row">
                <?php
                foreach ($users as $k => $v) {?>
                    <div class="box col-sm-3">
                        <div class="feat">
                            <img src="<?=(IMG . $v['image'])?>" class="img-responsive"/>
                            <h3>Name : <?=($v['username'])?></h3>
                            <h4>Email : <?=($v['email'])?></h4>
                            <h5>Password : <?=($v['password'])?></h5>
                            <h6>Gender : <?=($v['gender'])?></h6>
                            <a href="edituser.php?id=<?=($v['id'])?>" class="btn btn-success form-control">Update</a>
                            <form action="phpscript.php" method="POST">
                                <input type="hidden" name="id" value="<?=($v['id'])?>">
                                <input type="submit" name="del" value="DELETE" class="btn btn-danger form-control">
                            </form>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </section>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>