@extends('layouts.master')
@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Confirmação</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="get" action="shop-checkout4.html">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link disabled"><i class="fa fa-money"></i><br>Pagamento</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active"><i class="fa fa-eye"></i><br>Confirmação</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-check"></i><br>Concluído</a></li>
                  </ul>

                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left-col"><a href="shop-checkout2.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Voltar</a></div>
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-main">Próximo<i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mb-4 p-0">
                <div class="box-header mt-0">
                  <h4>VALOR COM DESCONTO (Á VISTA NO BOLETO)</h4>
                  <p class="text-muted">R$300.00</p>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Total dos produtos</td>
                        <th>R$446.00</th>
                      </tr>
                      <tr>
                        <td>Frete</td>
                        <th>R$10.00</th>
                      </tr>
                      <tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>R$456.00</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
