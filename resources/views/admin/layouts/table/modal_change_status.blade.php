
<button type="button" class="btn btn-danger  "  data-toggle="modal" data-target="#delet{{$admin->id}}" >
    <i data-feather="trash"></i>

</button>


<div class="modal fade" id="delet{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel"> حذف {{$myname}}  </h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
<p>     {{$myname}}  </p>
<hr>
 آیه شما مایل به حذف   {{$myname}} از سیستم هستید؟
</div>
<div class="modal-footer">
  <form class="forms-sample" method="POST" action="{{$route}}" >
  @csrf
  @method('DELETE')
  <button  type="submit"   class="btn btn-danger"  >حذف</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
  </form>
</div>
</div>
</div>
</div>


@if($admin->status=='active')
<button type="button" class="btn light btn-success"   data-bs-toggle="modal"
data-bs-target="#status{{$admin->id}}">فعال <i class="fa-regular fa-circle-check" style='font-size:14px'></i></button>
@elseif ($admin->status=='inactive')
<button type="button" class="btn light btn-warning"  data-bs-toggle="modal"
data-bs-target="#status{{$admin->id}}"><i data-feather="x-circle" style='font-size:14px'></i> &nbsp; غیرفعال </button>
@else
<button type="button" class="btn light btn-primary"  data-bs-toggle="modal"
data-bs-target="#status{{$admin->id}}"> در دست بررسی</button>
@endif

<div class="modal fade" id="status{{$admin->id}}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">انتشار {{$myname}} </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">

 آیه شما مایل به
 @if($admin->status == 'active') <b>غیرفعال کردن</b> @else <b>فعال کردن</b> @endif
 {{$myname}} هستید؟
            </div>
            <div class="modal-footer">
                <form class="forms-sample" method="POST" action="{{$route}}" >
                    @csrf
                    @method('PUT')

                <button type="submit" class="btn btn-primary"> @if($admin->status == 'active') <b>غیرفعال کردن</b> @else <b>فعال کردن</b> @endif {{$myname}}</button>
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">خیر</button>

  </form>
            </div>
        </div>
    </div>
</div>
