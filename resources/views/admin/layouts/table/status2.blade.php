
                                  @if ($admin->status_p2p == 'active')
                                  <button type="button" class="badge badge-success" data-toggle="modal"
                                      data-target="#status2_{{ $admin->id }}">
                                      <i data-feather="check-circle"></i> &nbsp; قابل نمایش در p2p
                                  </button>


                                  @elseif($admin->status_p2p=='inactive')
                                  <button type="button" class="badge badge-warning" data-toggle="modal"
                                      data-target="#status2_{{ $admin->id }}">
                                      <i data-feather="x-circle"></i> &nbsp; غیرقابل نمایش در p2p
                                  </button>


                                  @endif

                                  <div class="modal fade" id="status2_{{ $admin->id }}" tabindex="-1" role="dialog"
                                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">  {{ $admin->status_p2p == 'active' ? ' غیرفعال کردن'.$myname : ' فعال کردن'.$myname }}</h5>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                      aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">
                                                  آیا شما مایل به   {{ $admin->status_p2p == 'active' ? ' غیرفعال کردن'.$myname : ' فعال کردن'.$myname }} جهت نمایش p2p
                                              </div>
                                              <div class="modal-footer">

                                                      <form class="forms-sample" method="POST" action="{{$route}}" >
                                                        @csrf
                                                        @method('PUT')

                                                        @if ($admin->status_p2p == 'active')
                                                        <button  type="submit"   class="btn btn-warning"  >غیرقابل نمایش کردن</button>
                                                        @else
                                                        <button  type="submit"   class="btn btn-success"  >قابل نمایش کردن</button>
                                                        @endif

                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                                                        </form>


                                              </div>
                                          </div>
                                      </div>
                                  </div>









