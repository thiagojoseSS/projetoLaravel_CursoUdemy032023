@extends('layouts.template')
@section('title', 'Página dos Produtos')
@section('content')

<?php
@session_start();
if(@$_SESSION['id_user'] == NULL) {
    echo "<script language='javascript'> window.location='./' </script>";
}
?>

<div class="w-2/3 container">

    <script src="../../../public/assets/datatables/jquery.dataTables.js"></script>

    <a name="inserirProduto" id="inserirProduto" class="btn btn-success mt-4 mb-4" href="{{route('produtos.inserir')}}"
        role="button">Inserir Produto</a>

    <!-- <?php $qntPag = (isset($_GET['qntPag'])) ? $_GET['qntPag'] : 10 ?>
    <?php echo((isset($_GET['search'])) ? $_GET['search'] : 10 ) ?> -->

    <?php
        echo(@$id);
    ?>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="show mb-2">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <form class="my-2 my-lg-auto" id="form01">
                            <div class="d-flex container-fluid " id="collapsibleNavId"">
                                <ul class=" navbar-nav me-auto mt-2 mt-lg-0 ml-2 input-group">
                                <div class="input-group-text">Mostrar</div>
                                <!-- <div class="mt-2"> -->
                                <input type="number" name="qntPag" id="qntPag"
                                    value="<?php echo((isset($_GET['qntPag'])) ? $_GET['qntPag'] : 10 ) ?>"
                                    class="text-blue-800 text-lg pl-2 w-20">
                                <!-- </div> -->
                                <div class="ml-2 input-group-text">Registros</div>
                                </ul>
                                <div class="d-flex input-group" role="search">
                                    <input class="form-control" type="text" name="search" id="search"
                                        placeholder="Search"
                                        value="<?php echo((isset($_GET['search'])) ? $_GET['search'] : '' ) ?>">
                                    <button
                                        class="btn btn-warning my-2 my-sm-0 mr-3 hover:shadow-lg hover:shadow-orange-800"
                                        type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </nav>
                </div>

                <table class="table table-bordered table-hover thead-dark table-dark" id="#example" width="100%"
                    cellspacing="" 0>
                    <thead>
                        <tr class="table-secondary">
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Estoque</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td class="hover: hover:bg-red-500 transition-colors duration-75">{{$produto->nome}}</td>
                            <td class="hover:bg-red-500 transition-colors">R$
                                <?php echo(number_format($produto->valor,2,",","."));?>
                            </td>
                            <td class="text-right hover:bg-red-500 transition-colors">
                                <?php echo(number_format($produto->estoque,3,",","."));?>
                            </td>
                            <td>
                                <a title="Detalhes do Produto" href="{{route('produtos.descricao', $produto->id)}}">
                                    <i class="fas fa-eye text-primary mx-1 hover:bg-white transition-colors"></i></a>
                                <a title="Editar Dados do Produto" href="{{route('produtos.edit', $produto)}}">
                                    <i class="fas fa-edit text-info mx-1 hover:bg-red-500 transition-colors"></i></a>
                                <!-- <a title="Excluir Produto" href="{{route('produtos.modal', $produto)}}"> -->
                                <a title="Excluir Produto" href="{{route('produtos.modal', $produto)}}">
                                    <i class="fas fa-trash text-danger mx-1 hover:bg-white transition-colors"></i></a>
                                <button type="button" class="bg-indigo-500 inline-flex" disabled>
                                        <svg class="animate-spin h-5 w-5 mr-3 m-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-dotted" viewBox="0 0 16 16">
                                            <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                          </svg>
                                    Processing...
                                    </button>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                    {{$produtos->links()}}
                    {{$produtos->total()}}
                </div>
                <!-- <script>
                    const myModals = {};
                    @foreach($produtos as $produto)
                        myModals['modal-{{$produto->id}}'] = new bootstrap.Modal(document.getElementById('modal-{{$produto->id}}'), options);
                    @endforeach
                </script> -->
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modal1" tabindex="-1" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Deletar registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja Realmente Excluir este Registro? <?php echo(@$id);?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    @if (isset($id))
                    <form action="{{route('produtos.delete', $id)}}" method="POST">
                    @else
                    <form action="{{route('produtos.delete', '.')}}" method="POST">
                    @endif
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional: Place to the bottom of scripts -->
    
    <!-- Optional: Place to the bottom of scripts -->
    <!-- <script>
        const myModal = new bootstrap.Modal(document.getElementById('modal1'), '$produto->id')

    </script> -->

    <hr class="mt-5 mb-5">
    @php
        if(@$id != ""){
            echo "<script>
                //$('#modal1').modal('show')
                new bootstrap.Modal($('#modal1')).show();
            </script>";
        }
    @endphp
</div>
@endsection