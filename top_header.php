<?php
echo '<header class="text-white bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-2 md:mb-0">
                <img src="LOGO.jpeg" class="rounded" alt="Logo" style="width:45px;">
                <span class="ml-3 text-xl">ARYAN GROUP OF COLLEGES</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="landing_page.php" class="mr-4 hover:text-pink-400">HomePage</a>
                <a href="contact_page.php" class="mr-4 hover:text-pink-400">Contact Us</a>
                <a href="#" class="mr-4 hover:text-pink-400">Third Link</a>
                <a href="profile_page.php" class="mr-4 hover:text-pink-400">Profile</a>
            </nav>
            <button onclick="location.href=\'#\'" class="inline-flex text-white bg-pink-500 border-0 py-1 px-2 focus:outline-none hover:bg-pink-600 rounded text-base ">Logout
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-6 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
        </div> 
     </header>

     <!--adding nav bar-->
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top shadow  ">
     <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="collapse_target">
       <ul class="navbar-nav">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="www.w3.com" id="navbardrop" data-toggle="dropdown">Academics</a>
           <div class="dropdown-menu">
             <a class="dropdown-item" href="marks_page.php">Marks</a>
             <a class="dropdown-item" href="grades_page.php">Grades</a>   
             <a class="dropdown-item" href="attendance_page.php">Attendence</a>       
             <a class="dropdown-item" href="timetable_page.php">Time Table</a>
             <a class="dropdown-item" href="assignment_page.php">Assignments</a>
             <a class="dropdown-item" href="resources_page.php">Resources</a>
           </div>
         </li>
   
         <li class="nav-item dropdown">
           <a class="nav-link  dropdown-toggle" href="www.w3.com" id="navbardrop" data-toggle="dropdown">Facility</a>
           <div class="dropdown-menu">
             <a class="dropdown-item" href="transportf_page.php">Transport Facility</a>
             <a class="dropdown-item" href="hostelf_page.php">Hostel Facility</a> 
           </div>  
         </li>
   
         <li class="nav-item">
           <a class="nav-link" href="#">Fees</a>
         </li>
       </ul>
     </nav>';
?>