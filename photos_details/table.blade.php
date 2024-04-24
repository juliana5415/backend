<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="photos_details-table">
            <thead>
            <tr>
                <th>Gps Location</th>
                <th>Status</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photosDetails as $photosDetails)
                <tr>
                    <td>{{ $photosDetails->gps_location }}</td>
                    <td>{{ $photosDetails->status }}</td>
                    <td>{{ $photosDetails->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['photosDetails.destroy', $photosDetails->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('photosDetails.show', [$photosDetails->id]) }}"
                               class='btn btn-outline-info btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('photosDetails.edit', [$photosDetails->id]) }}"
                               class='btn btn-outline-info btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $photosDetails])
        </div>
    </div>
</div>
