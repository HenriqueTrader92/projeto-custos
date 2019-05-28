<div class="box">
    <div class="box-header">
    <h3>Buscar CEPS</h3>

    @include('layouts.alerts-erro')
        
    </div>
    <div class="box-body">
        <ul>
            <li>{{$parametro['bairro']}}</li>
            <li>{{$parametro['cidade']}}</li>
            <li>{{$parametro['logradouro']}}</li>
        </ul>  
        
        
    </div>
</div>
