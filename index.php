<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

  <script>
   document.addEventListener("DOMContentLoaded", function(event) {
    $.get('ajax.php?command=testest', function (data) { console.log(data) });
  });
  </script>
</body>
</html>


<!-- $today = date("F j, Y, g:i a");     -->