<!DOCTYPE html>
<html>
    <head>
        <title>1</title>
        <style>
            *{
                box-sizing: border-box;
            }

            html{
                width: 100%;
                height: 100%;
            }

            body{
                width: 100%;
                height: 100%;
            }

            .main{
                border: 2px solid black; 
                text-align: center;
                width: 600px;
                height: 400px;
                margin: auto;
            }
        </style>
    </head>
    <body >
        <div class="main">
            <form action="userstorage.php" method="post">
                <input type="text" name="username">
                <input type="password" name="password">
                <input type="submit" value="Submit">
            </form>
        </div>
        <script id="Main_Script">
            function add_user_js(username, password){
                add_user(username, password);
            }
        </script>
    </body>
</html>