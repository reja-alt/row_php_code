
<html>
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content=
          "width=device-width, initial-scale=1">
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
</head>
  
<body>
    <div class="container">
        <h2 style="color:green">GeeksforGeeks</h2>
        <strong>Session Manager</strong></br>
  
        <form method="POST">
            <br/>Enter Name: <input type="text" name="name"> <br />
            <br/>
            <div>
               <input type="submit" name="Submit1"
                       value="Create Session"
                       style="width:120;">
            </div><br/>
            <div>
              <input type="submit" name="Submit2" 
                     value="Retrieve Session"
                     style="width:120;">
            </div>
            <div><br/>
               <input type="submit" name="Submit3" 
                      value="Destroy Session"
                      style="width:120;">
            </div>
        </form>
    </div>
    <?php
    session_start();
    //creating session
    if(isset($_POST['Submit1'])) {
        $_SESSION['sname'] = $_POST['name'];
        echo 'Session is created';
    }

    //retrive session
    if(isset($_POST['Submit2'])) {
        echo $_SESSION['sname'];
    }
?>
  
</body>
</html>
