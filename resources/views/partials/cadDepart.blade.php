<div class="box">
    <div class="box-header">
    <h3>Cadastrar Departamentos</h3>
    @if( isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach()
        </div>
    @endif
        
    </div>
    <div class="box-body">
        <form method="post" action="{{route('cadastro.departamento')}}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="inputNome">Nome</label>
                <input name="name" type="text" class="form-control" id="inputName" placeholder="Nome do departamento">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>
    
    </div>
</div>
