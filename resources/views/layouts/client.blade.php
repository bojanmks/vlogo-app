<!DOCTYPE html>
<html>
    <head>
        @include("fixed.client.head")
    </head>
    <body>
        @include("fixed.client.header")

        <div id="content" class="min-vh-100">
            @yield("content")
        </div>

        @include("fixed.client.footer")

        @section("scripts")
            @include("fixed.client.scripts")
        @show
    </body>
</html>
