<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>
    @section("title")
        Vlogo
    @show
</title>
<meta name="description" content="Vlogo is the food delivery site that will get you anything you want to your doorstep. You order online, you'll have it!"/>
<meta name="keywords" content="Vlogo, food delivery, Restaurants, Recommended, Home"/>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<link rel="icon" href="{{ asset("favicon.ico") }}"/>
<link rel="stylesheet" href="{{ asset("assets/vendor/fontawesome/css/all.min.css") }}" crossorigin="anonymous"/>
<link rel="stylesheet" href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}"/>
<link rel="stylesheet" href="{{ asset("assets/css/app.min.css") }}"/>
