<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Photo Details Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_details_id', 'Detalles de foto:') !!}
   
 
</div>
<div class="form-group col-sm-6">
{!! Form::hidden('url', $photo->url ?? 'indefinido', ['class' => 'form-control', 'maxlength' => 255]) !!}

    @if (!empty($photo->url))
        <img src="{{ asset($photo->url) }}" alt="" style="width: 20px;">
     
    @endif
</div>

<!-- Product Url Image -->
<div class="form-group col-sm-6">
{!! Form::label('img_url_image_path', 'Url Imagen:') !!}
{!! Form::file('img_url_image_path', null, ['class' => 'form-control-file', 'accept'=> 'jpg, .png']) !!}


</div>
