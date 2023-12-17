@extends('layouts.app')

@section('content')
<!-- Tudo o que digitar aqui vai ser mostrado no template-->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1>Listagem dos Candidatos</h1>
        </div>
        <div class="col-sm-2">
            <button id="openCreateModal" class="btn btn-primary">Novo Candidato</button>
        </div>
    </div>
    <hr>

    @if(count($candidatos) > 0)
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidatos as $candidato)
            <tr>
                <th>{{ $candidato->id }}</th>
                <th>{{ $candidato->nome }}</th>
                <th>{{ $candidato->telefone }}</th>
                <th>{{ $candidato->email }}</th>
                <th class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-light">
                            <a href="#" class="openEditModal" data-candidato="{{ json_encode($candidato) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                            </a>
                        </button>
                    </div>
                    <div class="col">
                        <form action="{{ route('candidatos-destroy', ['id' => $candidato->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="col">
                        <form action="{{ route('candidatos-destroy', ['id' => $candidato->id, 'force' => 1]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Nenhum candidato encontrado.</p>
    @endif

    <!-- Create Candidato Modal -->
    <div class="modal fade" id="createCandidatoModal" tabindex="-1" role="dialog" aria-labelledby="createCandidatoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="candidatoModalLabel">Novo Candidato</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('candidatos-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nome" id="floatingNome" placeholder="Nome">
                                <label for="floatingNome">Nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" name="telefone" id="floatingTelefone" placeholder="Telefone">
                                <label for="floatingTelefone">Telefone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="E-Mail">
                                <label for="floatingEmail">E-Mail</label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name='submit' class="btn btn-primary" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Candidato Modal -->
<div class="modal fade" id="editCandidatoModal" tabindex="-1" role="dialog" aria-labelledby="editCandidatoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="candidatoModalLabel">Editar Candidato</h5>
            </div>
            <div class="modal-body">
                @if(isset($candidatos) && count($candidatos) > 0)
                @foreach($candidatos as $candidato)
                <form method="POST" action="{{ route('candidatos-update', ['id' => $candidato->id]) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group mt-2">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" value="{{ $candidato->nome }}" class="form-control">
                    </div>

                    <div class="form-group mt-2">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="telefone" value="{{ $candidato->telefone }}" class="form-control">
                    </div>

                    <div class="form-group mt-2">
                        <label for="email">E-Mail:</label>
                        <input type="email" name="email" value="{{ $candidato->email }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Atualizar Candidato</button>
                </form>
                @endforeach
                @else
                <p>No candidate found for editing.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.openEditModal').forEach(function(editLink) {
        editLink.addEventListener('click', function(event) {
            event.preventDefault();
            var candidatoData = JSON.parse(editLink.getAttribute('data-candidato'));
            populateEditModal(candidatoData);
        });
    });

    function populateEditModal(candidatoData) {
        $('#editCandidatoModalLabel').text('Editar Candidato');
        $('#editCandidatoForm').attr('action', '{{ url("candidatos") }}/' + candidatoData.id);
        $('#editCandidatoForm').attr('method', 'POST');

        // Populate form fields with candidatoData
        $('#editCandidatoModal input[name="nome"]').val(candidatoData.nome);
        $('#editCandidatoModal input[name="telefone"]').val(candidatoData.telefone);
        $('#editCandidatoModal input[name="email"]').val(candidatoData.email);

        $('#editCandidatoModal').modal('show');
    }

    document.getElementById('openCreateModal').addEventListener('click', function() {
        $('#createCandidatoModalLabel').text('Novo Candidato');
        $('#createCandidatoModal form').attr('action', '{{ route("candidatos-store") }}');
        $('#createCandidatoModal').modal('show');
    });
</script>

@endsection