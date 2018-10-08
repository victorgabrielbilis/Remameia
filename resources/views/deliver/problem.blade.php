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
              <h1 class="h2">Sucesso</h1>
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
                    $arr = array(9,10,11,12);
                    $i = 9;
                    $id = $shop->IntFrkIdProd;
                    @endphp
                    @foreach(App\Product::where("id","$id")->get() as $product)
                    <td><a href="#" data-toggle="modal" data-target="#product-modal" class="login-btn">{{$shop->StrCodSale}}</td>
                    <td>{{$product->StrName}}</td>
                    <td>{{$shop->IntQuantity}}</td>
                    <td>{{$shop->DateShop}}</td>
                    <td>{{$shop->DecFinalPrice}}</td>
                    <td>
                          <select class="custom-select" onChange="stage()" id="select_linha">
                              @php
                              while ($i < 13){
                              $__currentLoopData = App\Stage::where("id","$i")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop();
                              $i++;
                              echo "<option value='$stage->id'>$stage->StrStage</option>";
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
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>2012/08/06</td>
                      <td>$137,500</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>2010/10/14</td>
                      <td>$327,900</td>
                      <td>$86,000</td>
                    </tr>
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

