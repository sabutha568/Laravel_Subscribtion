<?php
$value = config('subscribe');
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Subscription</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link  href="/css/app.css" rel="stylesheet">
 
    </head>
    <body class="antialiased">
        <!-- TEXT START-->
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>
                        Hey, wait...
                    </h1>
                    <h2>
                        Subscribe to get 20 % discount!
                    </h2>
                    <p>
                        The first 50 subscribers will get 30% discount on their first purchase.
                    </p>
                </div><!-- TEXT END -->
        
                <!-- FORM START -->
                <div class=" form-section">
              
                    <form class="m-b-md" action="/" method="post">
                     
                        <input class="form-control" type="email" name="email" required placeholder="Email">
                        <input class="btn" type="submit" value="Submit">
                    </form>
                  
                </div>
                <!-- FORM END -->
            </div>
        </div>
        
    </body>
    <script src="/js/app.js"></script>
</html>
