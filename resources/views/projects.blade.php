@extends('layouts.app')

@section('content')




  <!-- Header -->
  <header class="masthead">

  </header>
  <div>
    <a href="#"><img src="img/banner.png" width="100%" class="img-fluid" ></a>
  </div>


  <div class="container espacamento">
    <form>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCity">Nome/Tag</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Categoria</label>
          <select id="inputState" class="form-control">
            <option selected>Todas</option>
            <option>RPG</option>
            <option>Tabuleiro</option>
            <option>Cartas</option>
            <option>Dados</option>
            <option>Suplementos</option>
            <option>Outros</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputZip">Status</label>
          <select id="inputState" class="form-control">
            <option selected>Todos</option>
            <option>Finalizado</option>
            <option>Em progresso</option>
          </select>
        </div>
      </div>
      <div class="form-group">

      </div>
      <button type="submit" class="btn btn-primary btn-block">Buscar</button>
    </form>
  </div>



  <!-- últimos projetos -->

    <div class="container espacamento">



          <div class="row">
        <div class="col-lg-12">
          <h3 class="section-heading text-left">Projetos</h3>

          </div>
      </div>

      <div class="row text-left">



        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

      </div>

    </div>
</div>
</div>







@endsection
