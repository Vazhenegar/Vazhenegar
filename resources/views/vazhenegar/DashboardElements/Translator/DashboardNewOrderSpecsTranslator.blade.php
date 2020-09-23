@include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')

@switch($Order->status_id)
    @case(4)

    <p class="pull-right">
        فایل را دانلود کرده و در صورت توانایی انجام سفارش، کلید قبول سفارش را فشار دهید.
    </p>

    <div class="pull-left">

        <a onclick="event.preventDefault();
            document.getElementById('AcceptOrder').submit();">

            <button type="button" class="btn btn-primary"><i class="fa fa-check"></i>
                قبول سفارش
            </button>
        </a>
        <form id="AcceptOrder" action="{{route('AcceptOrderByTranslator',[$Order->id])}}" method="POST"
              style="display: none;">
            @csrf
        </form>

    </div>
    @break

    @case(5)

    @if ($Order->ResponsibleUserId==DashboardCurrentUser::$id)
        <p class="SuccessBackground">
            سفارش برای شما ثبت شده است. لطفا به زمان تحویل سفارش توجه ویژه داشته و در تحویل بموقع کوشا باشید.
        </p>
        <br>
        <hr>
        <p>
            پس از تکمیل ترجمه، فایل آن را بصورت زیپ از قسمت زیر ارسال نمایید:
        </p>
        <br>
        <div>
            <form action="{{route('UploadTranslation',[$Order->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @if($errors->has('TranslatedOrder'))
                    <div class="wrong-field form-group">
                        @else
                            <div class="form-group">
                                @endif
                                <input type="file" name="TranslatedOrder" required>

                            </div>
                            <button type="submit"><i class="fa fa-upload"></i>آپلود فایل</button>

                            <div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

            </form>
        </div>
    @endif

    @break
@endswitch
