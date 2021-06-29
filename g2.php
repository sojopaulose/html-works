<html>
    <head>
        <style>
            body{
                background-color: orange;
                font-size:15px;

            }
            h1{
                font-family: arial;
                background-color: yellow;

            }
            table{
                font-size:20px;
                
            }</style>
            <script type="text/javascript">
                function validation()
        {
            itemcode=document.getElementById("itemcode").value;
                        itemname=document.getElementById("itemname").value;
                       
        
         if(!itemcode.match(/^[0-9]+$/))
            {
            alert("enter valid itemcode");
            return false;
            
            }
                        
            if(!itemname.match(/^[a-z A-Z]+$/))
            {
            alert("enter valid itemname");
            return false;
           
            }
            
            return true;
        }
            </script>
            </head>
            <body><center><h1><u>RESTURANT</u></h1>
                <form action="g3.php" method="POST" name="form2" onSubmit="return validation()"><table border="1" height="50%" width="50%">
                   <tr><th>
                    Id:</th><th><input type="text" name="itemcode" id="itemcode" required></th></tr>
                    <tr><th>
                    Item name:</th><th><input type="text" name="itemname" id="itemname" required></th></tr>
                    <tr><th>
                    Item type:</th><th><select name="itype"><option name="itype" id="itype">drinks</option><option name="itype">veg</option><option name="itype">non veg</option></select></th></tr>
                    <tr><th>
                    Available quantity:</th><th><input type="text" name="available quantity" id="available quantity" required></th></tr><tr><th>
                    price:</th><th><input type="text name="price" id="price" required></th></tr>
                    <tr><th>
                    <input type="submit" name="s1" value="save"></th><th>
                    <input type="submit" name="s2" value="show details"></th></tr>
                </center>
        </form>
        </body>
        </html>