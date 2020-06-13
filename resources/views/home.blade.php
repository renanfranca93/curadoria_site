@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->




  <!-- Header -->
  <header class="masthead">

  </header>
  <div>
    <a href="#"><img src="img/banner.png" width="100%" class="img-fluid" ></a>
  </div>





  <!-- últimos projetos -->

    <div class="container espacamento">

      <div class="row">
        <div class="col-lg-3 mb-4">
          <h3 class="section-heading text-left">Categorias</h3>
            <p class="text-muted text-left"> &nbsp;</p>
          <div class="row">
          <div class="col-6 col-md-12">
             <button class="btn btn-sm btn-outline-secondary btn-block custom-btn" type="button">RPG</button>
          </div>
          <div class="col-6 col-md-12">
            <button class="btn btn-sm btn-outline-secondary btn-block custom-btn" type="button">Tabuleiro</button>
         </div>
         <div class="col-6 col-md-12">
          <button class="btn btn-sm btn-outline-secondary btn-block custom-btn" type="button">Cartas</button>
       </div>
       <div class="col-6 col-md-12">
        <button class="btn btn-sm btn-outline-secondary btn-block custom-btn" type="button">Dados</button>
     </div>
     <div class="col-6 col-md-12">
      <button class="btn btn-sm btn-outline-secondary btn-block custom-btn" type="button">Suplementos</button>
     </div>
     <div class="col-6 col-md-12">
      <button class="btn btn-sm btn-outline-secondary btn-block custom-btn" type="button">Outros</button>
     </div>
        </div>

        </div>
        <div class="col-lg-9">

          <div class="row">
        <div class="col-lg-12">
          <h3 class="section-heading text-left">Projetos mais curtidos</h3>
          <p class="text-muted text-left"><a href="#">Ver todos</a></p>

        </div>
      </div>

      <div class="row text-left">



        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto (000)</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto (000)</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3">
            <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
            <div class="card-body">
              <a href="#"><p class="service-heading font-weight-bold">Nome do projeto (000)</p></a>
              <p class="service-heading">Categoria - <a href="#">Autor</a></p>
            </div>
          </div>
        </div>

      </div>

    </div>
</div>
</div>

  <!-- criacao colaborativa -->

   <div class="container espacamento">

    <div class="row">
      <div class="col-lg-12">
        <h3 class="section-heading text-left">Criação colaborativa</h3>
        <p class="text-muted text-left"><a href="#">Ver todos</a></p>

      </div>
    </div>

    <div class="row text-left">

      <div class="col-md-3">
        <div class="card mb-3">
          <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
          <div class="card-body">
            <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
            <p class="service-heading">Categoria - <a href="#">Autor</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
          <div class="card-body">
            <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
            <p class="service-heading">Categoria - <a href="#">Autor</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
          <div class="card-body">
            <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
            <p class="service-heading">Categoria - <a href="#">Autor</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
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


  <!-- últimos projetos -->

  <div class="container espacamento">

    <div class="row">
      <div class="col-lg-12">
        <h3 class="section-heading text-left">Últimos projetos</h3>
        <p class="text-muted text-left"><a href="#">Ver todos</a></p>

      </div>
    </div>

    <div class="row text-left">

      <div class="col-md-3">
        <div class="card mb-3">
          <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
          <div class="card-body">
            <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
            <p class="service-heading">Categoria - <a href="#">Autor</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
          <div class="card-body">
            <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
            <p class="service-heading">Categoria - <a href="#">Autor</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <a href="#"><img class="card-img-top" src="img/americanas.png"></a>
          <div class="card-body">
            <a href="#"><p class="service-heading font-weight-bold">Nome do projeto</p></a>
            <p class="service-heading">Categoria - <a href="#">Autor</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
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



  <!-- Team -->

  <div class="container espacamento">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="section-heading text-left">Criadores mais curtidos</h3>
        <p class="text-muted text-left"><a href="#">Ver todos</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
          <h4>Kay Garland</h4>
          <p class="text-muted">00 projetos | 00 curtidas</p>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
          <h4>Larry Parker</h4>
          <p class="text-muted">00 projetos | 00 curtidas</p>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
          <h4>Diana Pertersen</h4>
          <p class="text-muted">00 projetos | 00 curtidas</p>

        </div>
      </div>
    </div>

  </div>

  <!-- Forum -->

  <div class="container espacamento">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="section-heading text-left">Fórum - últimos tópicos</h3>
        <p class="text-muted text-left"><a href="#">Ver todos</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tópico</th>
              <th scope="col">Resposta</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" >1</th>
              <td class="link_amarelo"><a href="#" >Como começar a criar meu jogo?</a></td>
              <td>32</td>

            </tr>
            <tr>
              <th scope="row">2</th>
              <td class="link_amarelo"><a href="#">Mesa para RPG em São Paulo?</a></td>
              <td>0</td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="link_amarelo"><a href="#">Pergunta exemplo</a></td>
              <td>10</td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="link_amarelo"><a href="#">Pergunta exemplo</a></td>
              <td>10</td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="link_amarelo"><a href="#">Pergunta exemplo</a></td>
              <td>10</td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="link_amarelo"><a href="#">Pergunta exemplo</a></td>
              <td>10</td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="link_amarelo"><a href="#">Pergunta exemplo</a></td>
              <td>10</td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="link_amarelo"><a href="#">Pergunta exemplo</a></td>
              <td>10</td>

            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-sm-4">
          <a href="#"><img class="img-responsive" width="100%" src="img/banners/ex-vertical1.png"></a>

      </div>

    </div>

  </div>
















@endsection
