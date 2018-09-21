@extends('layouts.master')
@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Registrar-se / Entrar</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Registrar-se / Entrar</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Registar-se</h2>
                <p class="lead">Não é cadastrado?</p>
                <hr>
                <form action="customer-orders.html" method="get">
                  <div class="form-group">
                    <label for="name-login">Nome</label>
                    <input id="name-login" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email-login">Email</label>
                    <input id="email-login" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password-login">Senha</label>
                    <input id="password-login" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Registrar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Login</h2>
                <hr>
                <form action="customer-orders.html" method="get">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Entrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
