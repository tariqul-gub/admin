<section id="sidebar">
    <div class="top">
        <div class="logo">
            <a href="{{ url('/home') }}">
                <img src="{{ config('admin.logo') }}" alt="">
            </a>
        </div>
        <div class="hr"></div>
    </div>
    <ul class="list-unstyled m-0 menu accordion" id="sidebar-menu">
        @include('admin::tm1.inc.menu')
    </ul>
</section>
