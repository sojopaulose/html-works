<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Personal Information</h1>
    <form action="">
  66
        Name : <input type="text" id="name"><br>
        Gender : <input type="radio" name="gender" id="male"> Male
        <input type="radio" name="gender" id="female">female
         <br>
        DOB : <input type="date" id="dob"><br>
        Address : <textarea name="address" id="add" cols="30" rows="4">Enter address here</textarea><br>
        Phone : <input type="text" id="ph"> <br>
        Gurdian : <input type="text"><br>
        Course : <input type="text"><br>
        Passing year : <input type="date" min="2020-01-01" max="2025-12-31" ><br>
        Hobbies : <input type="checkbox"> cricket
        <input type="checkbox"> Computer game <input type="checkbox"> Reading <br>
        Extra curricular activities : <input type="text" name="" id=""><br>
        <button onclick="validation()">Submit</button>



        
    </form>
    <script>
        function validation(){
            var name =document.getElementById("name");
            var letters = /^[A-Za-z]+$/;
            var ph = document.getElementById("ph").value;
            var dob = document.getElementById("dob").value;
            var phone = /^\d{10}$/;
           var gender = document.getElementsByName("gender");
           var genderValid = false;
           var i= 0;
           while(!genderValid && i < gender.length){
               if(gender[i].checked) genderValid = true;
               i++;
           }
           if(!genderValid){
               alert("must gender");
           }

            if (name.value.match(letters) )
            {
                
                
            }
            else{
                window.alert("please enter valid  name");
                
            }
            if(phone.test(ph)){
                    

            }
            else{

                window.alert("please enter valid phone number ");

            }
             
        }


    </script>
</body>
</html>