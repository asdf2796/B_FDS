{!! Form::open(['action' => 'ParametersController@postUpdate', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Parameter Configuration</h4>
</div>
<div class="modal-body">
  @foreach($parameters as $parameter)
  <div class="form-group">
      {{Form::label($parameter->name,$parameter->name, ['class' => 'control-label col-sm-3'])}}
      <div class="col-sm-9">
      {{Form::number($loop->iteration,$parameter->value, ['class' => 'form-control'])}}
      </div>
  </div>
  @endforeach
</div>
<div class="modal-footer">
  {{Form::submit('Update', ['class' => 'btn btn-info'])}}
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
{!! Form::close() !!}
