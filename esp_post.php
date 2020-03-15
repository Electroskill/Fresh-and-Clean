$Temp=$_POST["temperature"];
//create a variable that will receive the temperature
$Humidity=$_POST["humidity"];
//create a variable that will receive the humidity
$Write=<p>Temperature : " . $Temp . " Celcius </p>". "<p>Humidity : " . $Humidity . " % </p>";
//create an HTML file to display the data within
file_put_contents('sensor.html',$Write);