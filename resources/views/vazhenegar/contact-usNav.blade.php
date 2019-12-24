@extends(file_exists(resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php'))
? resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php')
: 'ContactUs::layout.StaticPagesLayout'
)

@section('nav')
    @parent
        <a href="/contact-us">تماس با ما</a>
        &nbsp; &nbsp;
        <a href="/contact-usAdmin">مدیریت بخش تماس با ما</a>

    @endsection
