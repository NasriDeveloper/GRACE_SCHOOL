<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', "resources/js/Pages/{$page['component']}.vue"])

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <title>EEducation Master Template</title>
    <!-- META TAGS -->
   
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
        <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
        <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
        
        <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
  
        <link rel="stylesheet" href="homes/css/main.css">
      

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/hod/plugins/fontawesome-free/css/all.min.css">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/hod/dist/css/adminlte.min.css">
        
       


        <!-- Fonts -->


        
       


        <!--homes-->
     
        <!-- Place favicon.ico in the root directory -->
    
        <!-- CSS here -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       
      
        
       
      

        <!-- Scripts -->
        @routes
        
        @vite('home/js/materialize.min.js')
        @vite('home/js/bootstrap.min.js')
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    

        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia


      
        <script src="home/js/custom.js"></script>
        <script src="home/js/main.min.js"></script>


        <script src="/hod/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/hod/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/hod/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/hod/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/hod/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/hod/dist/js/pages/dashboard3.js"></script>


	
		<!-- Demo scripts -->
  
	

        

    


      


    </body>
</html>
