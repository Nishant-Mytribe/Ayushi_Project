<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.container {
  position: relative;
  width: 2%;
}


.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 10%;
  height: 50%;
  width: 50%;
  opacity: 0;
  transition: .5s ease;
  background-color: red;
}

.container:hover .overlay {
  opacity: 1;
}

</style>
</head>
<body>


<div class="container">
  <span class="glyphicon glyphicon-heart-empty"></span></p>
  <div class="overlay">
  </div>
</div>

</body>
</html>
