@extends('layouts.master')
@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Método de pagamento</h1>
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
                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link active"><i class="fa fa-money"></i><br>Pagamento</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Confirmação</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-check"></i><br>Concluído</a></li>
                  </ul>
                    <div class="content">
                      <div id="accordion" role="tablist" class="mb-5">
                <div class="card">
                  <div id="headingOne" role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-barcode"></i> Boleto</a></h5>
                  </div>
                  <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
                        <div class="col-md-8">
                          <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                          <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.                                    </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo" role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed"><i class="fa fa-credit-card-alt"></i> Cartão de crédito</a></h5>
                  </div>
                  <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4"><img src="img/template-easy-code.png" alt="" class="img-fluid"></div>
                        <div class="col-md-8">
                          <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                          <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingThree" role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed"><i class="fa fa-paypal"></i> PayPal</a></h5>
                  </div>
                  <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                    <div class="card-body">His room, a proper human room although a little too small, lay peacefully between its four familiar walls.<br>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</div>
                  </div>
                </div>
              </div>
                    </div>
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
