@extends('layouts.master_simples')
@section('content')
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
 		<!-- Cards -->
 		<div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-cubes"></i>
                  </div>
                  <div class="mr-5" style="font-weight: bold;">Preparar Entrega</div>
                </div>
                <a class="card-footer text-black clearfix small z-1" href="/deliver/firststep">
                  <span class="float-left">Clique aqui</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-truck"></i>
                  </div>
                  <div class="mr-5" style="font-weight: bold;">Postar e Acompanhar envio</div>
                </div>
                <a class="card-footer text-black clearfix small z-1" href="/deliver/secondstep">
                  <span class="float-left">Clique aqui</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-check-circle-o"></i>
                  </div>
                  <div class="mr-5" style="font-weight: bold;">Entregue com sucesso</div>
                </div>
                <a class="card-footer text-black clearfix small z-1" href="/deliver/successful">
                  <span class="float-left">Clique aqui</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-close"></i>
                  </div>
                  <div class="mr-5" style="font-weight: bold;">Não entregue</div>
                </div>
                <a class="card-footer text-black clearfix small z-1" href="/deliver/problem">
                  <span class="float-left">Clique aqui</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
    <!-- Fim Cards -->

        </div>
      </div>
      </div>
@endsection
