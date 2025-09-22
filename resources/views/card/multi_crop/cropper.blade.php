
        <table class="table dataTable no-footer">
            <tbody>
                @if($type_upluad=='multi_upload')
                @include('card.multi_crop.cropper_tr', [   'name'=>'uploader_multiple[0]', 'name_file'=>'کاور خبر'  ])
                @include('card.multi_crop.cropper_tr', [   'name'=>'uploader_multiple[1]'  ])
                @include('card.multi_crop.cropper_tr', [   'name'=>'uploader_multiple[2]'  ])
                @endif

                @if($type_upluad=='single_upload')
                @include('card.multi_crop.cropper_tr', [   'name'=>'image', 'name_file'=>'کاور خبر'  ])
                @endif
            </tbody>
        </table>




