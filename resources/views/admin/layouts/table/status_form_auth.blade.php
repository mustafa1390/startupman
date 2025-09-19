
                                  @if ($admin->auth == 'active')
                                  <button type="button" class="badge badge-success" data-toggle="modal"
                                      data-target="#status_auth{{ $admin->id }}">
                                      <i data-feather="check-circle"></i> &nbsp; احرازهویت الزامی
                                  </button>


                                  @elseif($admin->auth=='inactive')
                                  <button type="button" class="badge badge-warning" data-toggle="modal"
                                      data-target="#status_auth{{ $admin->id }}">
                                      <i data-feather="x-circle"></i> &nbsp; احرازهویت اختیاری
                                  </button>


                                  @endif

                                  <div class="modal fade" id="status_auth{{ $admin->id }}" tabindex="-1" role="dialog"
                                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">  {{ $admin->auth == 'active' ? ' اختیاری کردن'.$myname : ' الزامی کردن'.$myname }}</h5>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                      aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">
                                                  آیا شما مایل به   {{ $admin->auth == 'active' ? ' اختیاری کردن'.$myname : ' الزامی کردن'.$myname }} هستید؟
                                              </div>
                                              <div class="modal-footer">

                                                      <form class="forms-sample" method="POST" action="{{$route}}" >
                                                        @csrf
                                                        @method('PUT')

                                                        @if ($admin->auth == 'active')
                                                        <button  type="submit"   class="btn btn-warning"  >اختیاری کردن</button>
                                                        @else
                                                        <button  type="submit"   class="btn btn-success"  >الزامی کردن</button>
                                                        @endif

                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                                                        </form>


                                              </div>
                                          </div>
                                      </div>
                                  </div>









