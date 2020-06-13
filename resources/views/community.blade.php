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




<header class="masthead">

     </header>
     <div>
       <a href="#"><img src="img/banner.png" width="100%" class="img-fluid" ></a>
     </div>

     <!-- Categorias -->
     <div class="container espacamento">
       <div class="row">
         <div class="col-md-6">
           <a href="#">
             <button class="btn btn btn-outline-secondary btn-block custom-btn" type="button">Criar Projeto de Criação Colaborativa</button>
           </a>
         </div>
         <div class="col-md-6">
           <a href="#">
             <button class="btn btn btn-outline-secondary btn-block custom-btn" type="button">Divulgar Financiamento coletivo</button>
           </a>
         </div>

     </div>


     <div class="container espacamento">
       <form>

         <div class="form-row">
           <div class="form-group col-md-4">
             <label for="inputCity">Nome</label>
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
             <label for="inputZip">Tipo</label>
             <select id="inputState" class="form-control">
               <option selected>Todos</option>
               <option>Criação</option>
               <option>Financiamento</option>
             </select>
           </div>
         </div>
         <div class="form-group">

         </div>
         <button type="submit" class="btn btn-primary btn-block">Buscar</button>
       </form>
     </div>

     <!-- <div class="row">



     <div class="col-md-9" style="background-color: #F4F7F6;"> -->




       <div class="container espacamento">
         <div class="row">
           <div class="col-lg-12 text-center">
             <h3 class="section-heading text-left">Projetos colaborativos e financiamento</h3>
             <!-- <p class="text-muted text-left"><a href="#">Ver todos</a></p> -->
           </div>
         </div>
         <div class="row">
           <div class="col-sm-12">
             <table class="table  table-borderless">
               <thead class="thead-dark" >
                 <tr>
                   <th scope="col">Projeto</th>
                   <th scope="col">Tipo</th>

                 </tr>
               </thead>
               <tbody>
                 <tr>

                   <td class="link_laranja"><a href="#" >A4 Quest</a></td>
                   <td>Criação</td>
                   <tr>
                     <td >RPG - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
                 <tr>
                   <td class="link_laranja"><a href="#">Dice Monsters</a></td>
                   <td>Criação</td>
                   <tr>
                     <td>Dados - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
                 <tr>
                   <td class="link_laranja"><a href="#">Manual RPG Generic</a></td>
                   <td>Financiamento</td>
                   <tr>
                     <td>RPG - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
                 <tr>
                   <td class="link_laranja"><a href="#">Pergunta exemplo</a></td>
                   <td>Financiamento</td>
                   <tr>
                     <td>Categoria - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
                 <tr>
                   <td class="link_laranja"><a href="#">Pergunta exemplo</a></td>
                   <td>Criação</td>
                   <tr>
                     <td>Categoria - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
                 <tr>
                   <td class="link_laranja"><a href="#">Pergunta exemplo</a></td>
                   <td>Financiamento</td>
                   <tr>
                     <td>Categoria - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
                 <tr>
                   <td class="link_laranja"><a href="#">Pergunta exemplo</a></td>
                   <td>Criação</td>
                   <tr>
                     <td >Categoria - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
                 <tr>
                   <td class="link_laranja"><a href="#">Pergunta exemplo</a></td>
                   <td>Criação</td>
                   <tr>
                     <td >Categoria - Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto Descrição do projeto </td>
                   </tr>

                 </tr>
               </tbody>
             </table>
           </div>


           <!-- <div class="col-sm-4">
               <a href="#"><img class="img-responsive" width="100%" src="img/banners/ex-vertical1.png"></a>

           </div>

         </div> -->

       </div>



     </div>
     </div>

     <!-- Footer -->









@endsection
