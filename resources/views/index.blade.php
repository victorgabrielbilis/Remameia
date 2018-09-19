@extends('layouts.master')
@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <!--<div class="col-md-7">
              <h1 class="h2">Category with left sidebar</h1>
            </div>-->
            <div class="col-md-12">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Categorias</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categorias</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Eles  </span><span class="badge badge-secondary">42</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Shirts(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories(Alterar)</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Elas  </span><span class="badge badge-light">123</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories(Alterar)</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Kids  </span><span class="badge badge-secondary">11</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants(Alterar)</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories(Alterar)</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title">Marcas</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Limpar</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Armani(Alterar)  (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Versace(Alterar)  (12)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Carlo Bruni(Alterar)  (15)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Jack Honey(Alterar)  (14)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Aplicar</button>
                  </form>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-titlen">Cores</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Limpar</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour white"></span> White(Alterar) (14)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour blue"></span> Blue(Alterar) (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour green"></span>  Green(Alterar) (20)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour yellow"></span>  Yellow(Alterar) (13)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour red"></span>  Red(Alterar) (10)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Aplicar</button>
                  </form>
                </div>
              </div>
              <div class="banner"><a href="shop-category.html"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-md-9">
              <p class="text-muted lead">O melhor site de meias de <strong>NOVA ODESSA</strong>(Alterar)</p>
              <div class="row products products-big">
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia4.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Meia Azul - Imã/Galinho(Alterar)</a></h3>
                      <p class="price">R$29.99</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Meia Preta - Imã/Galinho(Alterar)</a></h3>
                      <p class="price">
                        <del>R$34,99</del> R$29,99
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Meia Cinza - Imã/Galinho(Alterar)</a></h3>
                      <p class="price">R$29,99</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia5.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Black Blouse Versace(Alterar)</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia4.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Armani(Alterar)</a></h3>
                      <p class="price">
                        <del>$280</del> $143.00
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/meia2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Versace(Alterar)</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 banner mb-small"><a href="#"><img src="img/banner2.jpg" alt="" class="img-fluid"></a></div>
              </div>
              <div class="pages">
                <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Carregar mais</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- teste-->
@endsection
