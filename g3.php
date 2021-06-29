<html>
    <head>
        <style>
            body{
                
                font-size:15px;
            }
            table{
                font-size:20px;
            }</style>
            </head>
            <body></body>
        </html>
<?php
$cc=mysqli_connect("localhost","root","","purchase");
if($cc->connect_error)
    echo "connection failed";
else
{
  if(isset($_POST['s1']))
    {
        $v=($_POST['itemcode']);
        $w=($_POST['itemname']);
        $x=($_POST['itype']);
        $y=($_POST['available quantity']);
        $z=($_POST['price']);
        $q="INSERT INTO billsss values('$v','$w','$x','$y','$z');";
        if($cc->query($q))
        {
            echo "details saved";
        } 
        else
        {
            echo"invalid entry";
        }

    }
    if(isset($_POST['s2']))
    {
        $sum=0;
        $sql="select * from billsss";
        $result = $cc->query($sql);
        echo "<center><br><br><br>";
        echo "<table border='1'><caption>LIST OF ENTRIES</caption><tr>
	    <td>itemcode</td>
	    <td>itemname</td>
        <td>type</td>
        <td>available quantity</td>
	    <td>price</td>
	    </tr>";
        while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td> " . $row['itemcode']. "</td><td>" . $row['itemname']. "</td><td>" . $row['itype']. "</td><td>" .$row['available quantity']."</td><td>". "</td><td>".$row['price']."</td></tr>";
                $sum+=$row['price'];
            }
        
        echo"<tr><td colspan=3>Total</td><td>".$sum."</td><tr>";

        echo "</table>";
        echo "</center>";
    }
    else
    {

    }
}
$cc->close();
?>