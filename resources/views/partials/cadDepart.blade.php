<div class="box">
    <div class="box-header">
    <h3>Cadastrar Departamentos</h3>
    @include('layouts.alerts-erro')
        
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
