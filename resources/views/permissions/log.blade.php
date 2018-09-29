@extends('layouts.master_simples')
@section('content')
<script type="text/javascript">
$(document).ready( function () {
  $('#table_id').DataTable();
} );
</script>
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Entregador</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <br>
          <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach(App\Product::where("StrActive","Y")->get() as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->StrName}}</td>
                    <td>{{$product->StrModelo}}</td>
                    <td>{{$product->StrMarca}}</td>
                    <td>{{$product->DecPreco}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>

@endsection
