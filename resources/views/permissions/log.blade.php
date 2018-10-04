@extends('layouts.master_simples')
@section('content')
<script type="text/javascript">
$(document).ready( function () {
  $('#table_id').DataTable();
  $('#preco_inserir').maskMoney();
  $('.js-example-basic-single').select2();
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
          <div class="row">
            <div class="col-md-2 col-sm-3">
              <a href="#" data-toggle="modal" data-target="#produto-modal" class="btn btn-primary btn-custom">
              <span class="fa fa-plus-circle img-circle btn-icon"></span>
              Adicionar
              </a>
            </div>
            <div class="col-md-2 col-sm-3">
              <a href="#" class="btn btn-danger btn-custom">
              <span class="fa fa-trash img-circle btn-icon"></span>
              Excluir
              </a>
            </div>
          </div>
          <br>
          <input type="checkbox" name="line"> Selecionar todos <br><br>
          <table id="table_id" class="display">
            <thead>
                <tr>
                    <th></th>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach(App\Product::where("StrActive","Y")->get() as $product)
                <tr>
                    <td><input type="checkbox" name="line"></td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->StrName}}</td>
                    <td>{{$product->StrModelo}}</td>
                    <td>{{$product->StrMarca}}</td>
                    <td>{{$product->DecPreco}}</td>
                    <td><a href="#" data-toggle="modal" data-target="#end-modal"><i class="fa fa-edit"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>

@endsection
