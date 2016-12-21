<!--  Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('_id', ' Id:') !!}
    {!! Form::number('_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Person Field -->
<div class="form-group col-sm-6">
    {!! Form::label('person', 'Person:') !!}
    {!! Form::number('person', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Received Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_received', 'Date Received:') !!}
    {!! Form::date('date_received', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Sent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_sent', 'Date Sent:') !!}
    {!! Form::date('date_sent', null, ['class' => 'form-control']) !!}
</div>

<!-- Thread Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thread_id', 'Thread Id:') !!}
    {!! Form::number('thread_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_by', 'Updated By:') !!}
    {!! Form::number('updated_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_by', 'Deleted By:') !!}
    {!! Form::number('deleted_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sms.index') !!}" class="btn btn-default">Cancel</a>
</div>
