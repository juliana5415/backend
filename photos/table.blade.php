<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="photos-table">
            <thead>
            <tr>
                <th>Id Usuario</th>
                <th>Detalles Id</th>
                <th>Url</th>
                <th colspan="3">Acción</th>

            </tr>
            </thead>

            <tbody>
            @foreach($photos as $photo)
            
                <tr>
                <td><a href="../users/{{ $photo->user_id }}" class="btn btn-outline-info">{{ $photo->user->name }}</a></td>
                <td><a href="../photos_Details/{{$photo->photoDetail_id}}" class="btn btn-outline-info">Ver detalles de la foto</a></td>
                    <td><img src="{{ $photo->url }}" alt="Photo" width="200" height="200"></td>
                    <td>{{ $photo->user_id }}
                    </td>
                    <td>{{ $photo->photo_details_id }}</td>
                    <td>{{ $photo->url }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['photos.destroy', $photo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('photos.show', [$photo->id]) }}"
                               class='btn btn-outline-info btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('photos.edit', [$photo->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $photos])
        </div>
    </div>
</div>
