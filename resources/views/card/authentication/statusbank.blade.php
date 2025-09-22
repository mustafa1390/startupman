
                                  @if ($admin->status == 'active')
                                  <button type="button" class="badge badge-success" data-toggle="modal"
                                      data-target="#status_b{{ $admin->id }}">
                                      <i data-feather="check-circle"></i> &nbsp; فعال
                                  </button>


                                  @elseif($admin->status=='waiting')
                                  <button type="button" class="badge badge-warning" data-toggle="modal"
                                      data-target="#status_b{{ $admin->id }}">
                                      <i data-feather="x-circle"></i> &nbsp; در انتظار تایید
                                  </button>


                                  @elseif($admin->status=='inactive')
                                  <button type="button" class="badge badge-danger" data-toggle="modal"
                                      data-target="#status_b{{ $admin->id }}">
                                      <i data-feather="x-circle"></i> &nbsp; رد شده
                                  </button>


                                  @endif

                                  <div class="modal fade" id="status_b{{ $admin->id }}" tabindex="-1" role="dialog"
                                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">  {{ $admin->status == 'active' ? ' غیرفعال کردن'.$myname : ' فعال کردن'.$myname }}</h5>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                      aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">
                                                  آیا شما مایل به   {{ $admin->status == 'active' ? ' غیرفعال کردن'.$myname : ' فعال کردن'.$myname }} هستید؟
                                              </div>
                                              <div class="modal-footer">



                                        <div class="card-footer">


                                            @if($admin->status=='waiting')
                                            <form class="forms-sample" method="POST" action="{{$route}}" >
                                              @csrf
                                              @method('PUT')
                                            <button type="submit"   class="btn btn-success float-right">فعال کردن</button>
                                            <input type="hidden" name="status"  id="status" value="active">
                                            </form>
                                            <form class="forms-sample" method="POST" action="{{$route}}" >
                                              @csrf
                                              @method('PUT')
                                              <button type="submit"   class="btn btn-warning float-right">غیرفعال کردن</button>
                                            <input type="hidden" name="status"  id="status" value="inactive">
                                            </form>
                                            @endif

                                            @if($admin->status=='inactive')
                                            <form class="forms-sample" method="POST" action="{{$route}}" >
                                              @csrf
                                              @method('PUT')
                                            <button type="submit"   class="btn btn-success">فعال کردن</button>
                                            <input type="hidden" name="status"  id="status" value="active">
                                            </form>
                                            @endif

                                            @if($admin->status=='active')
                                            <form class="forms-sample" method="POST" action="{{$route}}" >
                                              @csrf
                                              @method('PUT')
                                              <button type="submit"   class="btn btn-warning float-right">غیرفعال کردن</button>
                                            <input type="hidden" name="status"  id="status" value="inactive">
                                            </form>
                                            @endif

{{--
                                            @if($admin->status=='active')
                                            <button type="submit"   class="btn btn-warning">غیرفعال کردن</button>
                                            @endif --}}

                                        </div>





                                                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button> --}}



                                              </div>
                                          </div>
                                      </div>
                                  </div>









