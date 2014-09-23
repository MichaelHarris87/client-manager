
<?php include('header.php'); ?>

<!-- Left Menu -->
<div class="container-fluid">
    <div class="content_with_margin">
        <div class="row">
            <div class="container">
                <h1 class="sub-header">New Client</h1>

                <?php
                if(isset($_POST['add'])) {

                    $dbhost = 'localhost';
                    $dbname = 'clientman';
                    $dbuser = 'clientman';
                    $dbpass = '123123';
                    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                    if(! $conn )
                    {
                        die('Could not connect: ' . mysql_error());
                    }

                    if(! get_magic_quotes_gpc() )
                    {
                        $fname = addslashes ($_POST['fname']);
                        $lname = addslashes ($_POST['lname']);
                        $email = addslashes ($_POST['email']);
                        $phone = addslashes ($_POST['phone']);
                    }
                    else
                    {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                    }

                    $sql = "INSERT INTO client " . "(fname, lname, email, phone) " . "VALUES('$fname','$lname','$email','$phone')";

                    mysql_select_db('clientman');

                    $retval = mysql_query($sql, $conn);

                    if (!$retval) {
                        die('Could not enter data: ' . mysql_error());
                    }
                    echo "<h2>Entered data successfully\n</h2>";
                    mysql_close($conn);
                } else {
                ?>

                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                        <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="post">
                            <fieldset>
                                <legend class="text-center">New Client</legend>

                                <!-- First name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="fname">First Name</label>
                                    <div class="col-md-9">
                                        <input id="fname" name="fname" type="text" placeholder="First name" class="form-control">
                                    </div>
                                </div>
                                <!-- Last name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="lname">Last Name</label>
                                    <div class="col-md-9">
                                        <input id="lname" name="lname" type="text" placeholder="Last name" class="form-control">
                                    </div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                    </div>
                                </div>
                                <!-- Phone input -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="phone">Phone</label>
                                    <div class="col-md-9">
                                        <input id="phone" name="phone" type="text" placeholder="Phone number" class="form-control">
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-success btn-lg" name="add">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form><?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>