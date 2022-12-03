<!doctype html>
<html> 
<body>
<center>   
<?php
               
            $conn = mysqli_connect("localhost", "root", "", "grading");
        
                // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }

            if(isset($_POST['s'])) //checking whether the input element is set or not
            {
                $a1=$_POST['t1']; //accessing value from 1st text box
                $a2=$_POST['t2']; //accessing value from 2nd text field
                $a3=$_POST['t3']; //accessing value from 3rd text field
                $a4=$_POST['t4']; //accessing value from 4th text field
                $a5=$_POST['t5']; //accessing value from 4th text field
                $a6=$_POST['t6']; //accessing value from 4th text field
                $a7=$_POST['t7']; //accessing value from 4th text field

                $sql = "INSERT INTO subject_n VALUES ('$a1','$a2', '$a3', '$a4', '$a5','$a6','$a7')";
                if(mysqli_query($conn, $sql)){
                    echo "<h3>Data Stored in the Database Successfully\n<br><br> The Grade of the student is as following:\n </h3>";
                } else{
                    echo "ERROR! $sql. "
                        . mysqli_error($conn);
                    }
                    $sum=$a2+$a3+$a4+$a5+$a6+$a7; //total marks
                        $avg=$sum/6;
                    if($avg>=0&&$avg<33)
                        $grade="Fail";
                    if($avg>=33&&$avg<=39)
                        $grade="D";
                    if($avg>=40&&$avg<=49)
                        $grade="C";
                    if($avg>=50&&$avg<=59)
                        $grade="B";
                    if($avg>=60&&$avg<=69)
                        $grade="A-";
                    if($avg>=70&&$avg<=79)
                        $grade="A";
                    if($avg>79)
                        $grade="A+";
                    echo "<br>";    
                    echo "<font size=4><center>Student is: ".$a1."</center><br>"; 
                    echo "<font size=4><center>Total marks: ".$sum."</center><br>"; 
                    echo "<font size=4><center>Grade is: ".$grade."</center>"; 
            }
            // Close connection
                        mysqli_close($conn);


        ?>
</center>
</body>
</html>        