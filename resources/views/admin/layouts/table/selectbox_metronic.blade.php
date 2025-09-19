 


        <label  for="{{$index_id}}" class="required fs-6 fw-semibold form-label mb-2">{{$name_select}}</label>
        <select   name="{{$index_id}}"  class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="{{$name_select}}">

            <option value="">لطفا {{$name_select}} مورد نظر را انتخاب نمایید</option>
            @if($allforeachs)
            @foreach($allforeachs as $option)
            <option value="{{$option->id}}"  {{($option->id  == $value ? 'selected' : '')}}  >
                {{$option->$input_name}}</option>
            @endforeach

            @endif
        </select>
