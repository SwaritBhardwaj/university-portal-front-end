<?php 
$servername = "localhost";  //Host Name
$username = "root";         // Database User Name
$password = "";             // Database User Password
$db="classcon_aryan";       // Database Name

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$roll_no = 9421010002;
//fetching TABLE-student
$roll_no_query = "SELECT student_id, user_id, student_name, batch_id, program_id FROM student WHERE user_id=$roll_no";
$roll_no_connection = $conn->query($roll_no_query);
if ($roll_no_connection->num_rows>0){
  while($id = $roll_no_connection->fetch_assoc()){
    $id_val = $id['user_id'];
    $student_id = $id['student_id'];
    $student_name = $id['student_name'];
    $batch_id = $id['batch_id'];
    $program_id = $id['program_id'];
    
  }
}
//fetching TABLE-batch
$batch_id_query = "SELECT batch FROM batch WHERE batch_id=$batch_id";
$batch_id_connection = $conn->query($batch_id_query);
if ($batch_id_connection->num_rows>0){
  while($row = $batch_id_connection->fetch_assoc()){
    $batch_val = $row['batch'];
  }
}
//fetching TABLE-program
$program_id_query = "SELECT program_name FROM program WHERE program_id=$program_id";
$program_id_connection = $conn->query($program_id_query);
if ($program_id_connection->num_rows>0){
  while($row = $program_id_connection->fetch_assoc()){
    $program_name = $row['program_name'];
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
    <!--tailwind css-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>


    <!--Header-->
    <?php include 'top_header.php';?>
    <!--top section-->
    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-wrap -m-4">
            <div class="container">
      
      <br>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">Student details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#official_records">Official records</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">Academics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">E-portfolio</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
          <div class="card bg-gray-800 bg-opacity-40 mx-auto " style="width:600px">
                    <img class="card-img-top" src="avatar.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $student_name; ?></h4>
                        <p class="card-text">Roll Number: <?php echo $id_val; ?></p>
                        <p class="card-text">Program: <?php echo $program_name ?></p>
                        <p class="card-text">Batch: <?php echo $batch_val ?></p>
                        <!--
                        <p class="card-text">Year: 3</p>
                        <p class="card-text">CGPA: 10</p>
                        <p class="card-text">Semester: 5</p>
                        <p class="card-text">Fee Status: PAID</p>-->
                        <a href="#" class="btn bg-pink-500 text-white my-3">See Profile</a>
                    </div>
          </div>      
        </div>

        <div id="official_records" class="container tab-pane fade"><br>
        <!--Content-->
        <div class="container px-5 py-16 pt-1 mx-auto">
            <div class="flex flex-wrap -m-4">
            <div class="p-5 lg:w-1/3 md:w-full">
                    <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                                            
                    <div class="flex-grow">
                        <h2 class="text-white text-lg title-font font-medium mb-3">Basic Information</h2>
                        <!--<p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>-->
                        <table class="table text-white">
                        <tbody>
                        <tr>
                            <td style="text-align:left">Permanent address</td>
                            <td>O</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">City</td>
                            <td>A+</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">District</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">State</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Pincode</td>
                            <td>Failed</td>
                        </tr>
                        </tbody>
                        </table>
                        
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>

            <div class="p-5 lg:w-1/3 md:w-full">
                    <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                                            
                    <div class="flex-grow">
                        <h2 class="text-white text-lg title-font font-medium mb-3">Father Details</h2>
                        <!--<p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>-->
                        <table class="table text-white">
                        <tbody>
                        <tr>
                            <td style="text-align:left">Full Name</td>
                            <td>O</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Occupation</td>
                            <td>A+</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Designation</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Contact</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">E-mail</td>
                            <td>Failed</td>
                        </tr>
                        </tbody>
                        </table>
                        
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>

            <div class="p-5 lg:w-1/3 md:w-full">
                    <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                                            
                    <div class="flex-grow">
                        <h2 class="text-white text-lg title-font font-medium mb-3">Mother Details</h2>
                        <!--<p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>-->
                        <table class="table text-white">
                        <tbody>
                        <tr>
                            <td style="text-align:left">Full Name</td>
                            <td>O</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Occupation</td>
                            <td>A+</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Designation</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Contact</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">E-mail</td>
                            <td>Failed</td>
                        </tr>
                        </tbody>
                        </table>
                        
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
          
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <!--<h2 class="tracking-widest text-2x1 title-font font-medium text-gray-500 mb-1">Semester 1</h2>-->
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 3</h1>
    
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Grades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">EMC</td>
                            <td>O</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Thermal</td>
                            <td>A+</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Machine Design</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Machine and Mechanism</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Aeriel robotics</td>
                            <td>Failed</td>
                        </tr>
                    </tbody>
                </table>
                 <a class="py-2 text-pink-400 inline-flex items-center">Details
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-5">
                    <span class="text-gray-500 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-700 border-opacity-50">
                    CGPA:8.9 
                    </span>
                    <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                    SGPA:8.9
                    </span>
                </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 4</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left"> Subject</th>
                            <th>Grades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

                <a class="py-2 text-pink-400 inline-flex items-center">Details
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-5">
                    <span class="text-gray-500 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-700 border-opacity-50">
                    CGPA:9.1 
                    </span>
                    <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                    SGPA:-
                    </span>
                </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 5</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Grades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

                <a class="py-2 text-pink-400 inline-flex items-center">Details
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-5">
                    <span class="text-gray-500 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-700 border-opacity-50">
                    CGPA:9.1 
                    </span>
                    <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                    SGPA:-
                    </span>
                </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 6</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Grades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

                <a class="py-2 text-pink-400 inline-flex items-center">Details
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-5">
                    <span class="text-gray-500 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-700 border-opacity-50">
                    CGPA:9.1 
                    </span>
                    <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                    SGPA:-
                    </span>
                </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 7</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Grades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

                <a class="py-2 text-pink-400 inline-flex items-center">Details
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-5">
                    <span class="text-gray-500 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-700 border-opacity-50">
                    CGPA:9.1 
                    </span>
                    <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                    SGPA:-
                    </span>
                </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 8</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Grades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

                <a class="py-2 text-pink-400 inline-flex items-center">Details
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-5">
                    <span class="text-gray-500 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-700 border-opacity-50">
                    CGPA:9.1 
                    </span>
                    <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                    SGPA:-
                    </span>
                </div>
                </div>
            </div>
          </div>
        </div>

        </div>
        <div id="menu2" class="container tab-pane fade"><br>
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
      </div>
    </div>
 </section>
    





  </body>
</html>