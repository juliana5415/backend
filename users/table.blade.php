<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="users-table">
            <thead>
            <tr>
                <th>Nombre </th>
                <th>Rol Id</th>
                <th># Telefono</th>
                <th>Email</th>
                <th>Email Verificado</th>
                <th>Contraseña</th>
                <th>Recordar Token</th>
                <th colspan="3">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->remember_token }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$user->id]) }}"
                               class='btn btn-outline-info btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', [$user->id]) }}"
                               class='btn btn-outline-info btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $users])
        </div>
    </div>
</div>
