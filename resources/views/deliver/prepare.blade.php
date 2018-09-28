@extends('layouts.master_simples')
@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Prepare</h1>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div id="content">
      <div class="container">
        <div class="row">

          <div class="col-md-12">


          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/deliver">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tabela</li>
          </ol>

          <!-- DataTables Example -->
            <div class="card-header">
              <i class="fa fa-table"></i>
              Tabela</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Código da compra</th>
                      <th>Produto</th>
                      <th>Quantidade</th>
                      <th>Data da compra</th>
                      <th>SLA</th>
                      <th>Etapa</th>
                    </tr>
                  </thead>
                  <tfoot>
                   <tr>
                      <th>Código da compra</th>
                      <th>Produto</th>
                      <th>Quantidade</th>
                      <th>Data da compra</th>
                      <th>SLA</th>
                      <th>Etapa</th>
                    </tr>
                  </tfoot>

                  <tbody>
                    <tr>
                      <!-- Mostrará a compra em um modal(product-modal), com click do mouse e armazenará o ID da compra -->
                      <td id="ID_Compra"><a href="#" data-toggle="modal" data-target="#product-modal" class="login-btn">201808093114982</a></td>
                      <!-- Descrição do produto pegará do BD, a partir do value da linha -->
                      <td id="Descrição_Produto_BD">(Descrição)Produto</td>
                      <!-- Quantidade da compra pegará da compra, buscando pela variavel que pegaremos no ID da compra(primeira linha da tabela) -->
                      <td id="Quantidade_Compra">2</td>
                      <!-- Data da compra pegará da compra, buscando pela variavel que pegaremos no ID da compra(primeira linha da tabela) -->
                      <td id="Data_Compra">01/02/2018</td>
                      <td id="SLA_Compra">02/02/2018 14:40:00</td>
                      <td>
                        <select class="custom-select">
                          <option value="1">1.Preparar</option>
                          <option value="2">2.Produto acessível</option>
                          <option value="3">3.Produto preparado para envio</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                    </tr>
                    <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>59</td>
                      <td>2012/08/06</td>
                      <td>$137,500</td>
                    </tr>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>55</td>
                      <td>2010/10/14</td>
                      <td>$327,900</td>
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
