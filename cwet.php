<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <script>
    function func(){
      var r = document.getElementById("R").value;
      var g = document.getElementById("G").value;
      var b = document.getElementById("B").value;
      if (r>=0 && r<256 && g>=0 && g<256 && b>=0 && b<256){
        var save = document.getElementById("prawy").style.backgroundColor = "rgb("+r+","+g+","+b+")";
        localStorage.last = save;
      }
      else {
        document.myForm.reset();
      }
    }
    function slv(){
      document.getElementById("last").innerHTML = localStorage.getItem("last");
    }
    </script>
  <div id="lewy">
    <form name="myForm" action="#">
      R(red):
      <input type="number" id="R"><br>
      G(grean):
      <input type="number" id="G"><br>
      B(blue):
      <input type="number" id="B"><br>
    </form>
      <input type="submit" value="wyszli" name="wyszli" onclick="func()">
      <input type="submit" value="show last value" name="slv" onclick="slv()">
    <div id="last">
    </div>  
  </div>

  <div id="prawy">

  </div>
  </body>
</html>