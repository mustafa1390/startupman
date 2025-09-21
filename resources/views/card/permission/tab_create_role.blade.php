
    <div class="card">
        <div class="card-header p-2">
        <ul class="nav nav-pills">
        @foreach ($permissions as $key => $permission )
            <li class="nav-item"><a class="nav-link @if($key=='0') active @endif" href="#{{$permission->link}}" data-toggle="tab">{{$permission->name}}</a></li>
        @php $key++; @endphp
        @endforeach
         </ul>
        </div>
        <div class="card-body">
        <div class="tab-content">

        @foreach ($permissions as $key => $permission )
        <div class="@if($key=='0') active @endif tab-pane" id="{{$permission->link}}">
        @foreach ($permission_accesses as  $permission_accesse )
        @if($permission->id==$permission_accesse->permission_id)
        <div class="col-md-4">
        <div class="form-group clearfix">
            <div class="icheck-primary d-inline">
                <input type="checkbox"   id="permission{{$permission_accesse->id}}"
                name="permission[]" value="{{$permission_accesse->id}}"
                 @if($permission->status=='active') checked @endif  >
                <label for="permission{{$permission_accesse->id}}">
                    &nbsp; &nbsp; &nbsp;     {{ $permission_accesse->name }}
                </label>
            </div>
            </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
        </div>
        </div>
    </div>
