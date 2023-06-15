<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>Temperature converter</title>
</head>

<body>
    <div class="h-text">
        <h1>WELCOME TO TEMPERATURE CONVERTER </h1>
    </div>
   
    
    <div class="container">
        
        <form id="calcTemp" onsubmit="calculateTemp(); return false">
            <label for="temp">Enter the temperature to convert</label>
            <br>
            <input type="number" name="temp" id="temp" value="0">
            <select name="temp_diff" id="temp_diff">
                <option value="cel">&#176;Celsius</option>
                <option value="fah">&#176;Fahrenheit</option>
            </select>
            <br>
            <input type="submit" name="temp" id="submit">
            <br>
            <span id="result"></span>
        </form>
    </div>
    

    <script src="script.js"></script>
</body>

</html>