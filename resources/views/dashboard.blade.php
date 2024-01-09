@extends('adminlte::page')

@section('content')





<div class="container mt-4">

<div class=row>

<div class="col">
<div class="small-box bg-info">
  <div class="inner">
    <h3>150</h3>
    <p>Ventas</p>
  </div>
  <div class="icon">
    <i class="fas fa-shopping-cart"></i>
  </div>
  <a href="#" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>


<div class="col">
<div class="small-box bg-gradient-success">
  <div class="inner">
    <h3>44</h3>
    <p>Productos</p>
  </div>
  <div class="icon">
    <i class="fas fa-user-plus"></i>
  </div>
  <a href="#" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>

<div class="col">
<div class="small-box bg-gradient-danger">
  <div class="inner">
    <h3>44</h3>
    <p>Ingresos</p>
  </div>
  <div class="icon">
    <i class="fas fa-user-plus"></i>
  </div>
  <a href="#" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>

<div class="col">
<div class="small-box bg-gradient-warning">
  <div class="inner">
    <h3>44</h3>
    <p>Egresos</p>
  </div>
  <div class="icon">
    <i class="fas fa-user-plus"></i>
  </div>
  <a href="#" class="small-box-footer">
    More info <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
</div>


</div>

</div>





@endsection



@section('css')
<link rel="stylesheet" href="/css/estilo.css">
@endsection

@section('js')

<canvas id="mychart" width="400" height="400"></canvas>

<script>

var ctx = document.getElementById("mychart").getContext("2d");
var mychart=new Chart(ctx,{
    type:"bar",
    data: {
        labels: ['col1','col2','col3','col4','col5','col6'],
        datasets: [{
            label: 'Num datos',
            data: [10,9,15,8,4,12]
        }] 
    }
});
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.js"></script>
@stop