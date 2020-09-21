<!DOCTYPE html>
<html lang="en">
    @include('admin.templates.partials.head')
<body>
    <input type="checkbox" id="check"/>
    {{-- header --}}
    @include('admin.templates.partials.header')
    {{-- end Header --}}
    {{-- sidebar --}}
    @include('admin.templates.partials.sidebar')
    {{-- end sidebar --}}
    {{-- content --}}
    <div class="content">
        @yield('content')
    </div>
    {{-- end content --}}
    </body>
</html>