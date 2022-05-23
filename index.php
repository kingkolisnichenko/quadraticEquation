<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   <title>Algo</title>
</head>

<body>

   <div class="container">
      <h1>Решение квадратного уравнения</h1>

      <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">a =</span>
         <input type="number" class="form-control" aria-describedby="basic-addon1" id="InputX">
      </div>
      <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">b =</span>
         <input type="number" class="form-control" aria-describedby="basic-addon1"  id="InputY">
      </div>
      <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">c =</span>
         <input type="number" class="form-control" aria-describedby="basic-addon1" id="InputZ">
      </div>

      <h2>Ответ</h2>

      <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">D =</span>
         <input type="number" class="form-control" aria-describedby="basic-addon1" id="ans">
      </div>
      <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">X<sub>1</sub> =</span>
         <input type="number" class="form-control" aria-describedby="basic-addon1" id="x1">
      </div>
      <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">X<sub>2</sub> =</span>
         <input type="number" class="form-control" aria-describedby="basic-addon1" id="x2">
      </div>

      <div class="col-auto">
         <button type="submit" class="btn btn-primary mt-3" id="Post_Form">Вычислить</button>
      </div>

   </div>

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>

   <script src="my_ajax.js"></script>

</body>

</html>