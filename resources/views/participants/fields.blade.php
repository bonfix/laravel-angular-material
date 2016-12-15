<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fn', 'First Name:') !!}
    {!! Form::text('fn', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ln', 'Last Name:') !!}
    {!! Form::text('ln', null, ['class' => 'form-control']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sn', 'Surname:') !!}
    {!! Form::text('sn', null, ['class' => 'form-control']) !!}
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

<!-- Date of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Date of Birth:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('b_name', 'Bank Name:') !!}
    {!! Form::text('b_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Branch Field -->
<div class="form-group col-sm-6">
    {!! Form::label('b_branch', 'Bank Branch:') !!}
    {!! Form::text('b_branch', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Ac Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('b_ac_name', 'Bank Ac Name:') !!}
    {!! Form::text('b_ac_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Ac No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('b_ac_no', 'Bank Ac No:') !!}
    {!! Form::text('b_ac_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('participants.index') !!}" class="btn btn-default">Cancel</a>
</div>
