<?php include('header.php'); ?>

<!-- Left Menu -->
<div class="container-fluid">
    <div class="content_with_margin">
        <div class="row">
            <div class="container">
                <h1 class="sub-header">Client List</h1>
                <div class="col-md-7">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Clients</h3>
                    </div>
                    <table class="table">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>

                <?php
                $dbhost = 'localhost';
                $dbname = 'clientman';
                $dbuser = 'clientman';
                $dbpass = '123123';
                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                if(! $conn )
                {
                    die('Could not connect: ' . mysql_error());
                }
                $sql = 'SELECT fname, lname, email, phone FROM client';

                mysql_select_db('clientman');
                $retval = mysql_query( $sql, $conn );
                if(! $retval )
                {
                    die('Could not get data: ' . mysql_error());
                }
                while($row = mysql_fetch_array($retval, MYSQL_NUM))
                {
                    echo "<tr><td>{$row[0]}</td>".
                        "<td>{$row[1]}</td>".
                        "<td>{$row[2]}</td>".
                        "<td>{$row[3]}</td></tr>";
                }
                mysql_close($conn);
                ?>
                </tbody>
                </table>
            </div></div>
        </div>
    </div>
</div>
</div>
</div>

<?php include('footer.php'); ?>

 