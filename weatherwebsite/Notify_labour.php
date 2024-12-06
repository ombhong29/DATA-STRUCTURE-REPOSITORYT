    <html>    
        <head>
            <link rel ="stylesheet" type="text/css" href="assets/css/bootstrap.css">
            <title>Sene message to multiple Labours</title>
        </head>
        <body>                                                              
            <nav class=" navbar-expand-lg navbar-dark bg-primary">
            <div class="row justify-content-between">
            <div class="col-md-8 col-md-offset-2">
                <h3 style="text-transform: uppercase;">Send message to multiple recipients using PHP</h3>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 col-md-offset-4">
            
                <?php if(isset($_POST['submit'])) { ?>
                <div class="alert alert-dismissible alert-success">
                    <p><?php echo $msg; ?></p>
                </div>
            <?php}?>
            <div class="panel-heading" style="background: #ffffff;"><strong>Send Message</strong></div>
                    <div class="panel-body">
                        <form action="index.php" method="POST">
                            <textarea rows="3" cols="43" placeholder="Enter Message" name="message" class="col-md-12" style="margin-bottom: 5px;"></textarea>

                            <table class="table table-border table-dark">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                    </tr>
                                    <?php 
                                    include('config/db.php');
                                    $query = "SELECT * FROM tbl_users";
                                    $data = mysqli_query($conn,$query) or die ('error');
                                    if(mysqli_num_rows($data) > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($data))
                                        {
                                            $id = $row['id'];
                                            $username = $row['username'];
                                            $mobile = $row['mobile'];
                                    ?>
                                    <tr>
                                        <td>
                                        <input class = "checkbox" type="checkbox" name="mobile[]" value=<?php echo $mobile; ?>>
                                        </td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $mobile:?></td>
                                    </tr>
                                    <?php
                                     }
                                    }
                                ?>
                                    </tbody>
                                </table>
                                <input type="submit" class="btn btn-primary" name="submit" style="width: 100%;">
                                </form>
                                </div>
                                <!--ends-->
                                </div>
                                </div>
                                </div>
                                </body>
                                </html>
                                        


    </html>

