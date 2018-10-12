@extends('layouts.master_simples')
@section('content')
<script type="text/javascript">
$(document).ready( function () {
  $('#table_id').DataTable();
} );
// Pegando os dados do Modal
  @php
    function Teste($cod){
      // ------------------------- Pega informações do Banco de Dados -------------------------
      $shop = DB::table('shops')->where('id', $cod)->first();
      $StrCodSale = $shop->StrCodSale;
      $DateShop = $shop->DateShop;
      $IntQuantity = $shop->IntQuantity;
      $DateShop = $shop->DateShop;
      $DateRealDeliver = $shop->DateRealDeliver;
      $DecFinalPrice = $shop->DecFinalPrice;
      $IntFrkIdStage = $shop->IntFrkIdStage;
      $IntFrkIdUser = $shop->IntFrkIdUser;
      $IntFrkIdProd = $shop->IntFrkIdProd;

      $client = DB::table('users')->where('id', $IntFrkIdUser)->first();
      $StrFirstClient = $client->StrName;
      $StrLastClient = $client->StrLastName;
      $StrEmail = $client->StrEmail;
      $StrCity = $client->StrCity;
      $StrCEP = $client->StrCep;
      $StrState = $client->StrState;
      $StrStreet = $client->StrStreet;
      $StrEmail = $client->StrEmail;

      $stage = DB::table('stages')->where('id', $IntFrkIdStage)->first();
      $StrStage = $stage->StrStage;

      $product = DB::table('products')->where('id', $IntFrkIdProd)->first();
      $StrNameProduct = $product->StrName;
      $StrDescProduct = $product->StrDesc;
      $StrMarcaProduct = $product->StrMarca;
      
      // ------------------------- Adiciona informações ao Modal -------------------------
      echo ("document.getElementById('ModalCodSale').innerHTML = 'Código: {$StrCodSale}';");
      echo ("document.getElementById('ModalNameClient').innerHTML = 'Nome Completo: {$StrFirstClient} {$StrLastClient}';");
      echo ("document.getElementById('ModalEmail').innerHTML = 'E-mail: {$StrEmail}';");
      echo ("document.getElementById('ModalAdress').innerHTML = 'Endereço: {$StrStreet}';");
      echo ("document.getElementById('ModalCEP').innerHTML = 'CEP: {$StrCEP}';");
      echo ("document.getElementById('ModalIDProduct').innerHTML = 'ID Produto: {$IntFrkIdProd}';");
      echo ("document.getElementById('ModalDescProduct').innerHTML = 'Descrição do Produto: {$StrDescProduct}';");
      echo ("document.getElementById('ModalBrand').innerHTML = 'Marca: {$StrMarcaProduct}';");
      echo ("document.getElementById('ModalColor').innerHTML = 'Cor: {$StrMarcaProduct}';");
      //Mostrar código no Console - echo ("console.log('myObj');");
      
    }

  @endphp
    
    
</script>
<!-- Modal Produto -->
<div id="product-modal" tabindex="-1" role="dialog" aria-labelledby="product-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Produto</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <!-- Body do Modal -->
            <div class="modal-body">
              <!-- Colocar a imagem do produto -->
              <img src="{{url('img/meia2.jpg')}}" alt="" class="img-fluid image1" style="padding-left:60px;padding-bottom: 5px;width: 400px;height: 400px;"> 
              <!-- Trazer TODAS as inforamções do produto -->
              <ol>
                <li id="ModalCodSale"></li>
                <li id="ModalNameClient"></li>
                <li id="ModalEmail"></li>
                <li id="ModalAdress"></li>
                <li id="ModalCEP"></li>
                <li id="ModalIDProduct"></li>
                <li id="ModalDescProduct"></li>
                <li id="ModalBrand"></li>
                <li id="ModalColor"></li>
                <li>Estoque: 344</li>
              </oi>
            </div>
          </div>
        </div>
      </div>

<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Erro</h1>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div id="content">
          <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/deliver">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tabela</li>
          </ol> 
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i>
              Tabela</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="display" id="table_id" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Código da compra</th>
                      <th>Produto</th>
                      <th>QTD.</th>
                      <th>Data da compra</th>
                      <th>Valor</th>
                      <th>Etapa</th>
                    </tr>
                  </thead>
                  <tfoot>
                   <tr>
                      <th>Código da compra</th>
                      <th>Produto</th>
                      <th>QTD.</th>
                      <th>Data da compra</th>
                      <th>Valor</th>
                      <th>Etapa</th>
                    </tr>
                  </tfoot>

                  <tbody>
                     @foreach(App\Shop::where("IntFrkIdStage","9")->get() as $shop) 
                <tr>
                    @php

                      $i = 9;
                      $id = $shop->IntFrkIdProd;
                    @endphp
                    @foreach(App\Product::where("id","$id")->get() as $product)
                    <td><a href="#" id="{{$CodSale2 = $shop->id}}" onclick="{{Teste($CodSale2)}}" href="#" data-toggle="modal" data-target="#product-modal" class="login-btn"><!--<a href="#" data-toggle="modal" data-target="#product-modal" class="login-btn">-->{{$shop->StrCodSale}}</td>
                    <td>{{$product->StrName}}</td>
                    <td>{{$shop->IntQuantity}}</td>
                    <td>{{$shop->DateShop}}</td>
                    <td>{{$shop->DecFinalPrice}}</td>
                    <td>
                          <select class="custom-select" id="select_linha">
                              @php
                                while ($i < 13){
                                  $__currentLoopData = App\Stage::where("id","$i")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop();

                                  $i++;

                                    echo "<option value='$stage->id'>$stage->StrVisible</option>";
                                  endforeach; $__env->popLoop(); $loop = $__env->getLastLoop();
                                }
                              @endphp

                        </select>
                      </td>
 
                </tr>
                @endforeach
                @endforeach
                        
            <!--
                    <tr>
                       Mostrará a compra em um modal(product-modal), com click do mouse e armazenará o ID da compra 
                      <td id="ID_Compra"><a href="#" data-toggle="modal" data-target="#product-modal" class="login-btn">201808093114982</a></td>
                       Descrição do produto pegará do BD, a partir do value da linha 
                      <td id="Descricao_Produto_BD">Meia Azul</td>
                       Quantidade da compra pegará da compra, buscando pela variavel que pegaremos no ID da compra(primeira linha da tabela)
                      <td id="Quantidade_Compra">2</td>
                       Data da compra pegará da compra, buscando pela variavel que pegaremos no ID da compra(primeira linha da tabela) 
                      <td id="Data_Compra">01/02/2018</td>
                      <td id="Data_Entrega">05/02/2018</td>
                      <td>

                        <select class="custom-select" onChange="cod_rastreio()" id="select_linha">
                          <option value="08" selected>1.Falha</option>
                          <option value="11">2.Contato cliente</option>
                          <option value="12">3.Reembolsar</option>
                          <option value="13">4.Reenviar</option>
                        </select>
                      </td>
              -->
                  </tbody>
                </table>
              </div>
            </div>
      
      </div>
    </div>
  </div>
</div>
<br>
@endsection

