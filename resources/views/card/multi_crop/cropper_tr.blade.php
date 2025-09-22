
            <tr>
                <td>

        <div class="dropify-wrapper"><div class="dropify-message">
            <span class="file-icon">
            </span>
            <p>{{ $name_file }}</p>

        </div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div>

        <input data-kind="cropper" name="{{ $name }}" type="file"  class="border">
        <div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos">
            <div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span>
                <span class="dropify-filename-inner"></span></p>
                <p class="dropify-infos-message">برای جایگزینی فایل خود را کشیده و اینجا رها کنید یا کلیک کنید</p></div>
            </div>
        </div></div>
                </td>
                <td>
<img class="imgEdit"
id="imageTarget"   data-kind="cropper"

class="imgEdit"
 @if($path_file)
  src="{{$path_file}}"
  @endif
   />
</img>
                </td>
            </tr>

