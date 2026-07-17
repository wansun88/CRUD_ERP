<!doctype html>
<html lang="en">

@include('partials.head')

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

    @include('partials.navbar')

    @include('partials.sidebar')

    <main class="app-main">

        @include('partials.breadcrumb')

        <div class="app-content">

            <div class="container-fluid py-3">

                @yield('content')

            </div>

        </div>

    </main>

    @include('partials.footer')

</div>

@include('partials.scripts')

</body>

</html>