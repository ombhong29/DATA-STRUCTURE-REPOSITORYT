<html>
    <body>
        <table width="100%" border="1px solid black" style="text-align:center">
            <tr>
                        <td>full_name</td>
                        <td>email</td>
                        <td>address</td>
                        <td>contact_no</td>
                        <td>Quantity</td>
                
                <td>Action</td>
                <td>Action</td>

                </tr>

                <?php
                $con= mysqli_connect("localhost","root","","agriculture_db");
                 $sql="SELECT * FROM p_db";
                $result=mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                    extract($row);
                
                    echo"
                    <tr>
                        <td>$full_name</td>
                        <td>$email</td>
                        <td>$address</td>
                        <td>$contact_no</td>
                        <td>$Quantity</td>


                        <td><input type='button' name='' value='Delete' onclick='location.href=\"process_student_tb_delete.php?id=$stud_id\"'></td>
                        <td><input type='button' name='' value='Edit' onclick='location.href=\"process_student_tb_edit.php?id=$stud_id\"'></td>

                    </tr>";
                }
                ?>

            </table>

            
    </body>
    </html>