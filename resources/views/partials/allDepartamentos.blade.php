
<div class="box">
        <div class="box-header">
        <h3>Departamentos cadastrados</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Departamentos</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($departamentos))
                    @foreach($departamentos as $departamento)
                    <tr>
                        <td> {{$departamento->id}} </td>
                        <td> {{$departamento->name}} </td>
                    </tr>
                    @endforeach
                @else
                @endif
                </tbody>
            </table>    
        </div>
 </div>