<div class="form-group">
    {{ Form::label('title', 'Title', array('class' => 'foo')) }}
    {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title')) }}
</div>
<div class="form-group">

    {{ Form::label('body', 'Body', array('class' => 'foo')) }}
    {{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'body')) }}
</div>
{{ Form::submit('Save Post', array('class' => 'btn btn-primary')) }}
