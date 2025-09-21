
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

        @foreach ($permission_roles as $key => $permission_role )
        <div class="@if($key=='0') active @endif tab-pane" id="{{$permission_role->permission_accesse->permission->link}}">
        @if($permission_role->permission_accesse->id==$permission_role->permission_accesse_id)
        {{-- {{$permission_role->permission_id}}/ {{$permission_role->permission_accesse->id}}/ --}}
        @foreach ($permission_roles as  $permission )
        @if($permission_role->permission->id==$permission->permission_id)
        <div class="col-md-4">
        <div class="form-group clearfix">
            <div class="icheck-primary d-inline">
                <input type="checkbox" @if((explode_url(2)=='appointment')) disabled @endif  id="permission{{$permission->permission_accesse->id}}"
                name="permission[]" value="{{$permission->permission_accesse->id}}"
                 {{-- @if($permission->status=='active') checked @endif  --}}

               class="status-checkbox"
               data-id="{{ $permission->permission_accesse->id }}"
               data-roleid="{{ $permission->role_id }}"
               {{ $permission->status === 'active' ? 'checked' : '' }}
               >
                <label for="permission{{$permission->permission_accesse->id}}">
                    &nbsp; &nbsp; &nbsp;     {{ $permission->permission_accesse->name }}
                </label>
            </div>
            </div>
            </div>
            @endif
            @endforeach
        @endif
        </div>
        @endforeach
        </div>
        </div>
    </div>

 <script>

document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.status-checkbox');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            const id = this.dataset.id;
            const roleid = this.dataset.roleid;
            const status = this.checked ? 'active' : 'inactive';


            $.ajax({
    type: 'POST',
    url: `/api/items/${id}/status`, // or /items if using web.php
    data: {
        role_id: roleid,
        status: status
    },
    success: function (response) {
        console.log('Data received:', response);
    },
    error: function (xhr, status, error) {
        console.error('Error:', error);
    }
});

    // fetch(`/api/items/${id}/status`, {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json',
    //         'Accept': 'application/json',
    //     },
    //     body: JSON.stringify({
    //         status: status,
    //         role_id: roleid
    //     })
    // }).then(response => {
    //             console.log('Status updated:', response.data);
    //         }).catch(error => {
    //             console.error('Update failed:', error);
    //             alert('Failed to update status');
    //             this.checked = !this.checked;
    //         });
        });
    });
});
</script>
