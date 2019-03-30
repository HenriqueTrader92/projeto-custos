
<div class="box">
        <div class="box-header">
        <h3>Funcionarios cadastrados</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Funcionario</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($funcionarios))
                    @foreach($funcionarios as $funcionario)
                    <tr>
                        <td> {{$funcionario->id}} </td>
                        <td> {{$funcionario->name}} </td>
                    </tr>
                    @endforeach
                @else
                @endif
                </tbody>
            </table>    
        </div>
 </div>