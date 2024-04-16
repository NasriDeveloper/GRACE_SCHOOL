



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, th {
            text-align: center;
            padding: 8px;
            border: 1px solid black;
        }
        .grace {
            background-color: gray;
        }
        
       .grac {
            background-color: yellow;
        }

        

      
    </style>
</head>
<body>

    <nav class="bg-red-700 text-white p-4 fixed top-0 w-full z-10">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center">
          <a href="#" class="text-2xl font-semibold" style="padding-bottom: 50px;">
            <img src="homes/img/logo/logo.png" class="h-8" alt="Flowbite Logo" />
            Graceschools
          </a>
          <div class="flex items-center space-x-4">
              <form @submit.prevent="logout">
                      <DropdownLink as="button">
                      <a class='waves-effect dropdown-button top-user-pro' data-activates='top-menu'>LOGOUT<i class="fa fa-angle-down" aria-hidden="true"></i>
                      </a>
                      </DropdownLink>
               </form>
          </div>
        </div>
      </nav><br><br><br><br><br><br><br>
    
    
    
   
   
    

   

    

  

</body>
</html>
