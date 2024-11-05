@foreach($formData as $data)
    <div class="form-group">
        <!--<label class="form-label">{{ __($data->name) }}-->
        <!--</label>-->

        @if($data->type == 'text')
            <div data-v-fde8aada="" data-v-71a47aea="" class="uni-input-input">
                <div data-v-fde8aada="" class="input-box">
                    <div data-v-fde8aada="" class="input-left-slot"></div>
                    <input data-v-fde8aada="" type="text" 
                        name="{{ $data->label }}"
                        value="{{ old($data->label) }}" 
                        placeholder="{{ __($data->name) }}" 
                        class="w-full" 
                        @if($data->is_required == 'required') required @endif
                        >
                    <div data-v-fde8aada="" class="input-right-slot"></div>
                </div>
            </div>
            
            {{--<input type="text"
            class="form-control form--control"
            name="{{ $data->label }}"
            value="{{ old($data->label) }}"
            @if($data->is_required == 'required') required @endif
            >--}}
        @elseif($data->type == 'textarea')
            <textarea
              class="uni-input-input"
                name="{{ $data->label }}"
                @if($data->is_required == 'required') required @endif
            >{{ old($data->label) }}</textarea>
        @elseif($data->type == 'select')
            <select
         class="uni-input-input"
                name="{{ $data->label }}"
                @if($data->is_required == 'required') required @endif
            >
                <option value="">@lang('Select One')</option>
                @foreach ($data->options as $item)
                    <option value="{{ $item }}" @selected($item == old($data->label))>{{ __($item) }}</option>
                @endforeach
            </select>
        @elseif($data->type == 'checkbox')
            @foreach($data->options as $option)
                <div class="form-check">
                    <input
                      class="uni-input-input"
                        name="{{ $data->label }}[]"
                        type="checkbox"
                        value="{{ $option }}"
                        id="{{ $data->label }}_{{ titleToKey($option) }}"
                    >
                    <label class="form-check-label" for="{{ $data->label }}_{{ titleToKey($option) }}">{{ $option }}</label>
                </div>
            @endforeach
        @elseif($data->type == 'radio')
            @foreach($data->options as $option)
                <div class="form-check">
                    <input
               class="uni-input-input"
                    name="{{ $data->label }}"
                    type="radio"
                    value="{{ $option }}"
                    id="{{ $data->label }}_{{ titleToKey($option) }}"
                    @checked($option == old($data->label))
                    >
                    <label class="form-check-label" for="{{ $data->label }}_{{ titleToKey($option) }}">{{ $option }}</label>
                </div>
            @endforeach
        @elseif($data->type == 'file')
            <input
            type="file"
         class="uni-input-input"
            name="{{ $data->label }}"
            @if($data->is_required == 'required') required @endif
            accept="@foreach(explode(',',$data->extensions) as $ext) .{{ $ext }}, @endforeach"
            >
      
        @endif
    </div>
@endforeach
