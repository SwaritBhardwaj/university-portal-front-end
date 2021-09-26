<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>

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

    <!--Content-->
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-wrap -m-4">
            <div class="container">
      
      <br>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#Sem1">Semester 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sem2">Semester 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sem3">Semester 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sem4">Semester 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sem5">Semester 5</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sem6">Semester 6</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sem7">Semester 7</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sem8">Semester 8</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div id="Sem1" class="container tab-pane active"><br>
        <!---------------------------------------------------------------------------------->
        <div class="p-4 mx-auto lg:w-1/3">
        <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 1</h1>
    
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">EMC</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Thermal</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Machine Design</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Machine and Mechanism</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Aeriel robotics</td>
                            <td>29</td>
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
        </div>

        <div id="Sem2" class="container tab-pane fade"><br>
        <div class="p-4 mx-auto lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 2</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover" >
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">Thermal-2</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Thermal</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">HVAC</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">EVS</td>
                            <td>39</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">DM</td>
                            <td>29</td>
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
                    SGPA:9.8
                    </span>
                </div>
                </div>
            </div>
        </div>
        <div id="Sem3" class="container tab-pane fade"><br>
        <div class="p-4 mx-auto lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <!--<h2 class="tracking-widest text-2x1 title-font font-medium text-gray-500 mb-1">SEMESTER 1</h2>-->
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 3</h1>
    
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">EMC</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Thermal</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Machine Design</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Machine and Mechanism</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Aeriel robotics</td>
                            <td>29</td>
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
        </div>
        <div id="Sem4" class="container tab-pane fade"><br>
        <div class="p-4 mx-auto lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 4</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
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
        <div id="Sem5" class="container tab-pane fade"><br>
        <div class="p-4 mx-auto lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 5</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
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
        <div id="Sem6" class="container tab-pane fade"><br>
        <div class="p-4 mx-auto lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 6</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
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
        <div id="Sem7" class="container tab-pane fade"><br>
        <div class="p-4 mx-auto lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 7</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
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
        <div id="Sem8" class="container tab-pane fade"><br>
        <div class="p-4 mx-auto lg:w-1/3">
                <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-10 pb-20 rounded-lg overflow-hidden text-center relative">
                <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">Semester 8</h1>
                
                <table class="table table-dark table-borderless bg-gray-800 bg-opacity-40 table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:left">Subject</th>
                            <th>Marks</th>
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
    </div>
            
            
            
            
            
            
            
            
            
        </div>
    </section>
</body>
</html>