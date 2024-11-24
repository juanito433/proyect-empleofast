<link rel="stylesheet" href="{{asset('css/style.css')}}">
<nav class="navbar" style="position: sticky; top: 0; z-index: 1;">
    <div class="container-fluid justify-content-center">
        <img src="{{ asset('/images/logo.png') }}" alt="logo" width="160px">

        <x-login/>
        <x-filterData />
        <a href="/selection" style="margin: 10px; text-decoration: none; margin:15px">Register</a>
        <form class="d-flex" style="padding-top: 10px;" role="search">
            <input class="form-control me-2 input-shadow" type="search" placeholder="Search" aria-label="Search"
                style="margin:10px;">
            <button class="btn btn-primary" type="submit" style="margin:10px">Search</button>
        </form>
    </div>
</nav>