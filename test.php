<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
  
<input type="number" max="9999999999">

<script>
$(document).ready(function() {

$('input[type=number][max]:not([max=""])').on('input', function(ev) {
  var $this = $(this);
  var maxlength = $this.attr('max').length;
  var value = $this.val();
  if (value && value.length >= maxlength) {
    $this.val(value.substr(0, maxlength));
  }
});

});

</script>

</body>
</html>





