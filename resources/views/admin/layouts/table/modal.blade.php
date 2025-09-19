
<button type="button" class="btn btn-danger  "  data-toggle="modal" data-target="#delet{{$admin->id}}" ><i data-feather="trash"></i>  </button>
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

<button type="button" class="btn light btn-danger"  data-bs-toggle="modal" data-bs-target="#delet{{$admin->id}}"> <i class='fas fa-trash' style='font-size:14px'></i></button>

<div class="modal fade" id="delet{{$admin->id}}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">حذف {{$myname}} </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">

 آیه شما مایل به حذف   {{$myname}} از سیستم هستید؟
            </div>
            <div class="modal-footer">
                <form class="forms-sample" method="POST" action="{{$route}}" >
                    @csrf
                    @method('DELETE')

                <button type="submit" class="btn btn-primary">حذف {{$myname}}</button>
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">خیر</button>

  </form>
            </div>
        </div>
    </div>
</div>
