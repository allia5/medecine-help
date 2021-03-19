
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border:2px solid black;
        width:50%;
       text-align:center;
       color:white;
    }
    td{
        border:2px solid black;
        width:100px;
        
    }
    #bn{
        margin-left:50%;
        margin-top:-23px;
        position:absolute;
        
    }
    fieldset{
        margin-left:50%;
        margin-top:-5%;
        position:absolute; 
        width:46%;
        height:100px;
        
    }
    body{
        background:rgb(94, 72, 40);
    }
</style>
<body>
<table>
                <tr>
                <td><input type="text" style="width:100%; " placeholder="recherche..."></td>
                <td><input type="text" style="width:100%;" placeholder="recherche..."></td>
                <td><input type="text" style="width:100%;" placeholder="recherche..."></td>
                <td><input type="text" style="width:100%;" placeholder="recherche..."></td>
                <td><input type="text" style="width:100%;" placeholder="recherche..."></td>
                <td></td>
                </tr>
                </table>


<table>
                <tr>
                <td>livre:</td>
                <td>id:</td>
                <td>auteur:</td>
                <td>page:</td>
                <td>anne</td>
                <td><input type='checkbox'></td>
                </tr>
                </table>

                <fieldset>
        descript: 
    </fieldset>
</body>
</html>


<?php 
if(isset($_POST['btn1'])){


    $con=mysqli_connect('localhost','root','','beb');

    if($con){
        $user=$_POST['usr'];
        $pw=$_POST['pws'];

        $inst="select * from user";
        $tab=$con->query($inst);
        while($row=($tab->fetch_assoc())){
            
            if($row['username']==$user){

                $inst1="select * from livre";
                $tab1=$con->query($inst1);
                while($row1=($tab1->fetch_assoc())){

                echo"     
                 

               <table>
                <tr>
                <td>$row1[name] </td> 
                <td>$row1[id] </td>
                <td>$row1[auteur] </td>
                <td>$row1[page] </td>
                <td>$row1[anne] </td>
                <td><input type='checkbox'></td>
                </tr>
                </table>

                ";
                }
                echo"
                <button onclick=resp.php  name=bh1 id=bn style=width:650px; value=$row1[id]>commender</button>
                ";

            }

        }

    }
}


?>