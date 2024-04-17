<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="j1" >
    <div>
        <div class="container"style="background-color:brown; border:8px solid black">
            <div class="row">
                <div class=" text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEgGB8P3yy1dOlliMhK6mgFLUdKYnOFuXexfid9zSKemq7ybPPF2LIQNoyTAs2qKyJZQ8&usqp=CAU" alt="" class="logo">
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container" style="background-color: red;margin-top:50px;">
            <div class="row">
            <div class=" heading text-center" style="color: white;
    background-color:brown;
    border: 6px solid black;">
                <h2>BANARAS HINDU  UNIVERSITY</h2>
                <h6> CBSE BOARD </h6>
                <h4>ANNUAL Examination - (2024-2025)</h4>
                <h5>Email: <a href="#" class="text-decoration-none"style="color: blue;">WWW.BANARAS HINDU UNIVERSITY.in</a></h5>
            </div>
            </div>
        </div>
    </div>
<?php
function card($name,$class, $grades) {
    echo "<h1>Report Card for $name</h1>";
    echo "<table border='6'>";
    echo"<h1>$class</h1>";
    echo "<tr><th>Subject</th><th>Grade</th></tr>";
    
    $total_subjects = count($grades);
    $total_marks = array_sum($grades);
    $average_marks = $total_marks / $total_subjects;
    $percentage =($total_marks/500)*100;
    
    foreach($grades as $subject => $grade) {
        echo "<tr><td>$subject</td><td>$grade</td></tr>";
    }
    
    echo "</table>";
    
    echo "<p>Total Subjects: $total_subjects</p>";
    echo "<p>Total Marks: $total_marks</p>";
    echo "<p>Average Marks: $average_marks</p>";
    echo "<p>Percentage: $percentage %</p>";
IF($percentage<=33){
echo"FAILED";
}else {echo "<h1>PASSED</h1>";}
    
}


card("Bhuvnesh", "10th standard",
array(
"Math" => 10,
"Science" => 30,
"History" => 35,
"English" => 17,
"Hindi"=>16));

?>
 <section style="padding:30px">
        <div class="container text-center" > 
            <div class="row">
                <div class="col-6">
                    <div class="info"style="width: 34%;
    padding: 25px;
    height: 180px;
    text-align: left;"  >
                <h6>ATTENDEDENCE:-78%</h6>
                <h6>ABSENT:-22%</h6>
                <h6>TEACHER'S SIGNATURE:-</h6>

                    </div>
                </div>
                <div class="col-6" style="margin-top: -208px;">
                    <div class="comment" style="margin-top: -21px;
    width: 40%;
    border: 2px solid black;
    height: 171px;
    margin-left: 700px;">
                        <h6>TEACHER'S REMARKS :-GOOD</h6>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container"style="color:white;
    background-color: #123660;
    border: 8px solid black;">
            <div class="row">
            <h1>" EDUCATION IS THE KEY OF SUCCESS "</h1>
            </div>
        </div>
    </section>
</section>
</section>

<style>
    body{
        padding:50px;
        text-align:center;
        background-color:white;
    }
    table{
        width: 100%;
    text-align: center;
    padding:30px;
    background-color:yellow;
    }
    tr{
    height:40px;
    }
    .heading{
        border:2px solid black;
    }
    .logo{
        height:200px;
        width:200px;
        padding: 20px;
        text-shadow: 2px 2px 5px black;
        border-radius:5rem;
    }
    .j1{
        border:5px solid black;
        padding:
        20px;
        background-image:url(https://png.pngtree.com/background/20210710/original/pngtree-summer-vacation-results-high-class-alarm-clock-literary-texture-white-background-picture-image_1023905.jpg)
    }.logo{
  width: 100px; 
  height: 100px; 
  animation: logoAnimation 2s ease-in-out infinite alternate; 
}

@keyframes logoAnimation {
  0% {
    transform: translateX(0) scale(1);
  }
  100% {
    transform: translateX(10px) scale(1.5); 
  }
}

    
</style>
</body>
</html>