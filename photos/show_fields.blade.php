<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'Id Usuario:') !!}
    <p>{{ $photo->user_id }}</p>
</div>

<div class="card" style="width: 100rem;">
  <div style="width: 200px; height: 200px; margin: 0 auto 10px; overflow: hidden;">
    <img src="{{ $photo->url }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Photo">
  </div>
  <div class="card-body">


<!-- Photo Details Id Field -->
<div class="col-sm-12">
    {!! Form::label('photo_details_id', 'Id Detalles Foto:') !!}
    <p>{{ $photo->photo_details_id }}</p>
</div>
</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;"><p>id de la foto: {{ $photo->id }}</p></li>
    <li class="list-group-item" style="border-bottom: 1px solid #dee2e6;"><p>url de la foto: {{ $photo->url }}</p></li>
</ul>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $photo->url }}</p>
   
</div>
<div class="card-body">
    <a href="../users/{{ $photo->user_id }}" class="btn btn-dark">Usuario</a>
    <a href="../photos_Details/{{$photo->photos_Details_id}}" class="btn btn-dark">detalles de la foto</a>
  </div>
</div>
