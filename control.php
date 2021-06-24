<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.header {
 padding: 11px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 25px;
}
.button {
  background-color: #1abc9c;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.slidecontainer {
  width: 45%;
  margin-top :4%;
}

.slider {

  -webkit-appearance: none;
  width: 45%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
.slider2 {

  -webkit-appearance: none;
  width: 45%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
.slider3 {

  -webkit-appearance: none;
  width: 45%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
.slider4 {

  -webkit-appearance: none;
  width: 45%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
.slider5 {

  -webkit-appearance: none;
  width: 45%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
.slider6 {

  -webkit-appearance: none;
  width: 45%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}


.slider:hover {
  opacity: 1;
}
.slider2:hover {
  opacity: 1;
}
.slider3:hover {
  opacity: 1;
}
.slider4:hover {
  opacity: 1;
}
.slider5:hover {
  opacity: 1;
}
.slider6:hover {
  opacity: 1;
}


.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider2::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider3::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider4::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider5::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider6::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider2::-moz-range-thumb {
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider3::-moz-range-thumb {
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider4::-moz-range-thumb {
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider5::-moz-range-thumb {
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
.slider6::-moz-range-thumb {
  width: 15px;
  height: 15px;
  background: #04AA6D;
  cursor: pointer;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"thearm");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>


<div class="header">
  
  <p>arm control</p>
</div>

<center><form action="control.php" method="post" ><div class="slidecontainer">

  Engine 1  <input type="range" min="1" max="100" value="50" class="slider" id="myRange" name="slidert1"> Value :<label> <span id="demo1"></span></label> </p>
  Engine 2  <input type="range" min="1" max="100" value="50" class="slider2" id="myRange2"name="slidert2">Value :<label> <span id="demo2"></span></label> </p>
  Engine 3  <input type="range" min="1" max="100" value="50" class="slider3" id="myRange3"name="slidert3">Value :<label> <span id="demo3"></span></label> </p>
  Engine 4  <input type="range" min="1" max="100" value="50" class="slider4" id="myRange4"name="slidert4">Value :<label> <span id="demo4"></span></label> </p>
 Engine 5  <input type="range" min="1" max="100" value="50" class="slider5" id="myRange5"name="slidert5">Value :<label> <span id="demo5"></span></label> </p>
 Engine 6 <input type="range" min="1" max="100" value="50" class="slider6" id="myRange6"name="slidert6">Value :<label> <span id="demo6"></span></label> </p>


</div>
  
  <p> <input type="submit" name="send" class="button">
  <input  type="submit" name="on" id="on" value="on" class="button">
<input  type="submit" name="off" id="off" value="off"  class="button">
 </p>
</form> </center>
<?php 

if (isset($_POST['send'])) {
 
$sql = " UPDATE `arm` SET `arm1`='".$_POST['slidert1']."', `arm2`='".$_POST['slidert2']."', `arm3`='".$_POST['slidert3']."', `arm4`='".$_POST['slidert4']."', `arm5`='".$_POST['slidert5']."', `arm6`='".$_POST['slidert6']."'  WHERE `ID`='1'";

$result = $conn->query($sql);
 }

 ?>

 <?php 

if (isset($_POST['on'])) {
$sql =" UPDATE `arm` SET `run`='1'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>

 <?php 

if (isset($_POST['off'])) {
$sql =" UPDATE `arm` SET `run`=''WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo1");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}
var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}
</script>



</body>
</html>
