@extends(file_exists(resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php'))
                    ? resource_path('views.vazhenegar.layout.StaticPagesLayout.blade.php')
                    : 'faq::layout.StaticPagesLayout'
        )

@section('nav')
    @parent
        <a href="/faq">سوالات متداول</a>
        &nbsp; &nbsp;
        <a href="/faqAdmin">مدیریت بخش سوالات متداول </a>

    @endsection
