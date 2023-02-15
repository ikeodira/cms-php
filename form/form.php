<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML FORMS</title>
</head>
<body>
    <form method="post">
        <input name="search" type="text">
        <input name="password" type= "password">
        <textarea name="textarea " id="" cols="30" rows="10"></textarea>
        <select name="country" id="">
            <optgroup label="Europe">
                <option value="germany">Germany</option>
                <option value="france">France</option>
                <option value="uk">United Kingdom</option>
            </optgroup>
            <optgroup label="America">
                <option value="brazil">Brazil</option>
                <option value="canada">Canada</option>
                <option value="usa">United State</option>
            </optgroup>           
        </select>
        <div>
            Title : <input type="text" name="title">
        </div>

        <div>
            Content : <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <input type="checkbox" name="visible" value="yes"> Visible
        </div>

        <div>
            <p>Color: </p>
            <input type="radio" name="colour" value="blue" checked> Blue <br>
            <input type="radio" name="colour" value="red">Red <br>
            <input type="radio" name="colour" value="green" > Green
        </div>
        <button>Send</button>
    </form>    
</body>
</html>     