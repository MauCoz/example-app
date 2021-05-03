<!-- Stored in resources/views/layouts/master.blade.php -->

<html>

<head>
    <title>A12Toys @yield('title')</title>


    <link href="/index.css" rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    {{-- <link href="/bootstrap.css" rel="stylesheet" /> --}}
</head>

<body>
    <div class="side-nav">
        <form action="/search" method="POST" role="search" class="form-inline my-2 my-lg-0">
            {{ csrf_field() }}

            <input class="form-control mr-sm-2" name="q" type="search" placeholder="Search" aria-label="Search">
            <br />
        </form>

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a href="/orders"
                class="nav-link {{ request()->segment(1) == 'orders' ? 'active' : '' }}">Bestellingen</a>

            <a href="/picklists"
                class="nav-link {{ request()->segment(1) == 'picklists' ? 'active' : '' }}">Picklijsten</a>
            <a href="/backorders"
                class="nav-link {{ request()->segment(1) == 'backorders' ? 'active' : '' }}">Backorders</a>
            <a href="/purchases"
                class="nav-link {{ request()->segment(1) == 'purchases' ? 'active' : '' }}">Inkoop</a>
            <a href="/retours" class="nav-link {{ request()->segment(1) == 'retours' ? 'active' : '' }}">Retouren</a>

            <br />

            <a href="/products"
                class="nav-link {{ request()->segment(1) == 'products' ? 'active' : '' }}">Producten</a>
            <a href="/clients" class="nav-link {{ request()->segment(1) == 'clients' ? 'active' : '' }}">Klanten</a>
            <a href="/suppliers"
                class="nav-link {{ request()->segment(1) == 'suppliers' ? 'active' : '' }}">Leveranciers</a>
            <a href="/movements"
                class="nav-link {{ request()->segment(1) == 'movements' ? 'active' : '' }}">Verplaatsingen</a>
            <a href="/deliveries"
                class="nav-link {{ request()->segment(1) == 'deliveries' ? 'active' : '' }}">Zendingen</a>

            <br />

            <a href="/magazines"
                class="nav-link {{ request()->segment(2) == 'warehouses' ? 'active' : '' }}">Magazijnen</a>
            <a href="/locations"
                class="nav-link {{ request()->segment(2) == 'locations' ? 'active' : '' }}">Locaties</a>
            <a href="/rapports"
                class="nav-link {{ request()->segment(2) == 'rapports' ? 'active' : '' }}">Rapporten</a>
            <a href="/settings"
                class="nav-link {{ request()->segment(2) == 'settings' ? 'active' : '' }}">Instellingen</a>
        </div>


    </div>

    <div class="content">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/logo_sticky.png" alt="" width="90" class="d-inline-block align-text-top">

                </a>
            </div>
        </nav>
        @yield('content')
    </div>



    {{-- <div class='container'>
        <div class="col-sm-6">Hier komt een footer</div>

        <div class="col-sm-6"></div>
    </div> --}}
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>


<script src="/js/forms.js"></script>
