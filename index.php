 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbvishal</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .navigation{
           
            text-align: center;   
            background-color:green;
            height: 52px;
            
     }
     ul{
        padding-top:15px;
     }
        a{
            padding: 42px;
            font-size: 22px;
            text-decoration: none;
            color: white;
            margin-top:5px;
           
            
            }
            a:hover{
                text-decoration: underline;
               
            
                 
                color: black;
            }
            
             
            h1{
             padding-top:15px;
                background-color:#F4F3F2 ;
            
                
               text-align:center;
               font-size:52px;
               
               
            }
            .heading{
                display:inline;
            }
             
            
            
            .para{
                font-size:22px;
                text-align: center;
               padding-top:25px;
                
                 top:0px;
               
                 
                
            }
            .container{
                /* border:2px solid black; */
                height: 350px;
                width: 900px;
                 margin-left:300px;
                text-align: center;
                justify-content:center;
                align-items:center;

                
             
                /* background-color:#F4F3F2 ; */
                 
               
            }
             
           
            
            .footer{
                margin-top: 44px;
            height: 30px;
            text-align: center;   
            padding-top:15px;
            font-size:22px;
                background-color:#383b3d;
                color:white;
            }
            #space{
          
    padding-inline-end: 64px;
    font-family: inherit;
    font-size: inherit;
    
     
    position: relative;
    width: 100%;
    height: 100%;
    outline: none;

            }
        .submit{
            background-color :#47cf73;
            font-size:22px;
            text-align:center;
            color:white;
            margin-left:200px;
            margin-top:20px;
            padding:12px;

        }  
        h2{
            font-size:42px;
            margin-left:200px;

            text-align:center;
            color:#006BA6;
        } 

    </style>
</head>
<body>
     
    <nav class="navigation">
   
        <ul> 
        
 
   
            <a class="active" href="index.php">Home</a>
            <!-- <a href="about.php">About</a>
            <a href="more.php">More</a> -->
            <a href="contact.php">Contact</a>
            <a href="homedata.php">Databank</a>
            <a href="login.php">Admin</a>

        </ul>
    </nav> 
      
    <h1>MVcutter</h1><hr>
 
     
   
    
   

    <div class="para"> 
    <p>This tool will take a DNA sequence and find the large, non-overlapping open reading frames using the E.coli genetic code and the sites for all Type II and commercially available Type III restriction enzymes that cut the sequence just once. By default, only enzymes available from NEB are used, but other sets may be chosen. Just enter your sequence and "submit". Further options will appear with the output. The maximum size of the input file is 1 MByte, and the maximum sequence length is 300 KBases. </p>
</div><br><br>
 <div class="container">

 <form action="function.php" method="post"> 
<table>
    <tr>
        <td colspan="2"><h2> Search Here</h2> <br></td>
    </tr>
    <tr>
        <td><br> Genbank Number &nbsp; <br><a  href="homedata.php"style="color:#006BA6">[Browse]</a> <br>            
<br></td>
        <td><input type="text" id="space" name="genbanknumber" required></td>
    </tr>
    <tr>
        <td><br> Name of Sequence &nbsp; <br>(optional)</td>
        <td><input type="text" id="space" name="nameofsequence" ></td> 
    </tr>
    <tr>
        <td><br> Fasta Sequence &nbsp; <br>(optional)<br></td>
        <!-- <td><input type="text" class="space" name="fastasequence" rows="8" cols="70"></td> -->
        <td><br><textarea id="space" name="fastasequence" cols="70" rows="5"></textarea></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" class="submit" name="submit" value="Submit"></td>
    </tr>
</table>
</div> <br>
 <footer class="footer">&#169;&nbsp;Copyright MVCUTTER All Rights Reserved</footer>
</form> 
 
</body>
 </html> 
 
 