<html>
    <body>
        <table width="100%" border="1px solid black" style="text-align:center">
            <tr>
                <td>full_name</td>
                <td>email</td>
                <td>address</td>
                <td>contact_no</td>
                <td>Quantity</td>

        
                </tr>

                <?php
                $con=mysqli_connect("localhost","root","","agriculture_db");
                $sql="SELECT * FROM p_reg";
                $result=mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                    extract($row);
                8
                    echo"
                    <tr>
    
                        <td>$full_name</td>
                        <td>$email</td>
                        <td>$address</td>
                        <td>$contact_no</td>          
                        <td>$Quantity</td>          

                    </tr>";
                }
                ?>

            </table>

            
    </body>
    </html>