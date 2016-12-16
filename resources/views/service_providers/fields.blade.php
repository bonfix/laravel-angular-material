<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Contract No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contract_no', 'Contract No:') !!}
    {!! Form::text('contract_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service', 'Service:') !!}
    {!! Form::text('service', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course', 'Course:') !!}
    {!! Form::text('course', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Proprietor Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_name', 'Proprietor Name:') !!}
    {!! Form::text('p_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Proprietor Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_address', 'Proprietor Address:') !!}
    {!! Form::text('p_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Proprietor Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_location', 'Proprietor Location:') !!}
    {!! Form::text('p_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- County Field -->
<div class="form-group col-sm-6">
    {!! Form::label('county', 'County:') !!}
    {!! Form::text('county', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub-county Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subc', 'Sub-county:') !!}
    {!! Form::text('subc', null, ['class' => 'form-control']) !!}
</div>

<!-- Ward Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward', 'Ward:') !!}
    {!! Form::text('ward', null, ['class' => 'form-control']) !!}
</div>

<!-- Village Field -->
<div class="form-group col-sm-6">
    {!! Form::label('village', 'Village:') !!}
    {!! Form::text('village', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('serviceProviders.index') !!}" class="btn btn-default">Cancel</a>
</div>
