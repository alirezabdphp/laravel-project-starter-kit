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

    <select name="{{ $input_name }}"
            id="{{ $input_name }}"
            class="form-control {{ $errors->first($input_name) ? 'is-invalid' : '' }} {{ isset($additional_class) ? $additional_class : '' }}"
        {{ isset($custom_string) ? $custom_string : '' }}>

        <option value="">Select One</option>
        @foreach($data_set as $_data)
            <option value="{{$_data->id}}" @if(old($input_name)) {{old($input_name) == $_data->id ? 'selected' : ''}}
                @else {{ isset($value) ? $value == $_data->id ? 'selected' : '' : '' }}
                @endif>{{$_data->{$data_title} }}
            </option>
        @endforeach
    </select>
</div>
