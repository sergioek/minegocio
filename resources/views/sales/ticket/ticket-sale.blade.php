<style>@import url(http://fonts.googleapis.com/css?family=Bree+Serif);
    h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
    }
    </style>
<div class="container">
<div class="table table-bordered border-primary">
    <div class="text-center">
        <x-logo/>
    </div>
    
<div class="text-center">
    <h1 class="text-bold text-italic text-primary">{{$company->name}}</h1> 
    <small class="text-seconday"><h6>{{"Direccíon". " ".$company->address ." - " . "Teléfono :" . $company->phone}}</h6></small> 
</div>
</div>
<!-------------------------------------------->

<div class="container">
    <h2 class="text-center text-success">Comprobante de Venta</h2>
</div>

<table class="table table-bordered border-dark">
    <thead class="table-warning">
        <tr>
          <th scope="col" class="text-dark">Comprobante Nº</th>
          <th scope="col" class="text-dark">Fecha</th> 
          <th scope="col" class="text-dark">Cliente</th> 
          <th scope="col" class="text-dark">DNI</th>  
          <th scope="col" class="text-dark">Estado</th>  
        </tr>
        
    </thead>

    <tbody>
       <tr>
           @foreach ($sales as $sale)
              <td class="text-center">{{$sale->sale_id}}</td> 
              <td class="text-center">{{$sale->sale->date}}</td> 
              <td class="text-center">{{$sale->sale->cuestomer->name . " ". $sale->sale->cuestomer->lastname}}</td>
              <td class="text-center">{{$sale->sale->cuestomer->dni}}</td> 
              <td class="text-center">{{$sale->sale->status}}</td> 

           @endforeach
       </tr>
    </tbody>

</table>

<!------------------------------------------------------------->


<div class="container">
    <h3 class="text-center">Detalles de venta</h3>
</div>

<table class="table table-bordered border-dark">
    <thead class="table-primary">
        <tr>
          <th scope="col" class="text-dark">Codigo</th>
          <th scope="col" class="text-dark">Nombre</th> 
          <th scope="col" class="text-dark">Precio</th> 
          <th scope="col" class="text-dark">Cantidad</th>  
          <th scope="col" class="text-dark">Subtotal</th>  
        </tr>
        
    </thead>

    <tbody>
       <tr>
           @foreach ($sales as $sale)
              <td>{{$sale->product->brcode}}</td> 
              <td>{{$sale->product->name}}</td> 
              <td>{{"$".$sale->price}}</td>
              <td>{{$sale->quantity}}</td>
              <td>{{"$".$sale->quantity*$sale->price}}</td>
           @endforeach
       </tr>
    </tbody>

</table>

<div class="container text-right">
    @foreach ($sales as $sale)
         <h4 class="text-success">PAGADO: {{"$". $sale->sale->cash}}</h4>
         <h5 class="text-danger">ADEUDA: {{"$". $sale->sale->debt}}</h5>
    @endforeach
   
</div>
<script>
    function imprimir() {
        window.print();
        
    }
    </script>
<button id="button" class="offset-lg-11 btn btn-primary" onclick="imprimir()">Imprimir</button>
</div>