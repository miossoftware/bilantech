@include('header')
<div id="wrapper">
    @include('navbar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                @include('dashboard_content')
            </div>
        </div>
    </div>
</div>
@include('footer')
