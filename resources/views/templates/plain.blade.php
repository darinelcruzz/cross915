<div id="field_{{ $id }}" {!! Html::classes(['form-group', 'has-error' => $hasErrors]) !!}>

    @if ($required)
        <span class="label label-info">Required</span>
    @endif

    <div class="input-group">
        {!! $input !!}
    </div>
    @foreach ($errors as $error)
        <p class="help-block">{{ $error }}</p>
    @endforeach
</div>
