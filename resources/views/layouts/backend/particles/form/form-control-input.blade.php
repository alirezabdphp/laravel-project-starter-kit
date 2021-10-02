<div class="form-group">
    <label for="{{$input_name}}">
        @if(isset($label)) {{$label}} @else {{ ucwords(str_replace('_', ' ', $input_name))  }} @endif

        @if(isset($required))
            @if($required == 'true')
                <span class="text-danger">*</span>
            @endif
        @else
            <span class="text-danger">*</span>
        @endif
    </label>

    <input type="{{ isset($type) ? $type : 'text'}}"
           name="{{ $input_name }}"
           id="{{$input_name}}"
           value="@if(old($input_name)){{old($input_name)}}@else{{ isset($value) ? $value : null }}@endif"
           placeholder="@if(isset($label)) {{$label}} @else {{ ucwords(str_replace('_', ' ', $input_name))  }} @endif"
           class="form-control {{ $errors->first($input_name) ? 'is-invalid' : '' }} {{ isset($additional_class) ? $additional_class : '' }}"
           aria-describedby="emailHelp" {{ isset($custom_string) ? $custom_string : '' }}>

    @if ($errors->has($input_name))
        <div class="error">{{ $errors->first($input_name) }}</div>
    @endif
</div>
