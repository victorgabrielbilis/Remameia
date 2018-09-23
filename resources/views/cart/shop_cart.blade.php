@extends('layouts.master')
@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Carrinho</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
              <p class="text-muted lead">Você tem 3 produto(s) em seu carrinho.</p>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="get" action="shop-checkout1.html">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Produto</th>
                          <th>Quantidade</th>
                          <th>Unidade</th>
                          <th>Desconto</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="img/meia5.jpg" alt="White Blouse Armani" class="img-fluid"></a></td>
                          <td><a href="#">Meia cinza</a></td>
                          <td>
                            <input type="number" value="2" class="form-control">
                          </td>
                          <td>R$123.00</td>
                          <td>R$0.00</td>
                          <td>R$246.00</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td><a href="#"><img src="img/meia4.jpg" alt="Black Blouse Armani" class="img-fluid"></a></td>
                          <td><a href="#">Meia azul</a></td>
                          <td>
                            <input type="number" value="1" class="form-control">
                          </td>
                          <td>R$200.00</td>
                          <td>R$0.00</td>
                          <td>R$200.00</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2">R$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="col-lg-12">
                    <p class="text-muted lead">Endereço de entrega</p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Cep</th>
                            <th>Rua</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th colspan="2">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>13460-000</td>
                            <td>Rua Angelo Cocato</td>
                            <td>Santa Luiza</td>
                            <td>Valinhos</td>
                            <td>MG</td>
                            <td><a href="#" data-toggle="modal" data-target="#end-modal"><i class="fa fa-edit"></i></a></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="5">Frete</th>
                            <th colspan="2">R$10.00</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="shop-category.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continuar comprando</a></div>
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-outlined">Finalizar compra <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-2">
                    <h3>Mais produtos</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Meia Preta</a></h3>
                      <p class="price">R$143</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia5.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Meia Cinza colorida</a></h3>
                      <p class="price">R$143</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Meia cinza com nuvens</a></h3>
                      <p class="price">R$143</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mt-0 mb-4 p-0">
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
