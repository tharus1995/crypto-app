<!DOCTYPE html>
<html>
<head>
<title>Cryto Data</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"></script>
  <script src="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap5.min.css"></script>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  align-self: center
}

.main {
  -ms-flex: 70%;
  flex: 70%;
  background-color: white;
  padding: 20px;
}
.card {
  transition: 0.3s;
  background: #c0d6cb7c;
  width: 90%;
  text-align: center;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

}
</style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<div class="header">
  <h1>Cloud Computing - Cryto Data</h1>
</div>
<main class="content">
	<div class="container p-0">
        <div class="row">
            @if(count($coins) > 0)
            @foreach($coins as $coin)
            <div class="col-sm-4">
                <div class="card mt-5">
                    <div class="container mt-3">
                      <h4><b>{{$coin->coin_name}}</b></h4>
                      <p>{{$coin->price}}</p>
                    </div>
                </div>

            </div>
            @endforeach
            {{-- {{$coins->links()}} --}}
        @else
            <p>No coins found</p>
        @endif
        </div>



	</div>

</main>

</body>
</html>
