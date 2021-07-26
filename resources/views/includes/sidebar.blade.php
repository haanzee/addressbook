<div>
    {{-- @php
        $id = $_Get($id);
    @endphp --}}

    <nav class="nav flex-column text-center mt-4">
        <div class="bdrclr">
            <a href="{{ route('home')}}" class="nav-link {{ Request::routeIs('home') ? 'active' : ''}}" >Home</a>
        </div>
        <div class="bdrclr">
        <a href="{{ route('show')}}" class="nav-link {{ Request::routeIs('show') ? 'active' : ''}}">Create</a>
        </div>

        <div class="bdrclr">
        <a href="{{ route('change')}}" class="nav-link {{ Request::routeIs('change') ? 'active' : ''}}">change</a>
        </div>

        <div class="bdrclr">
        <a href="{{ route('display')}}" class="nav-link {{ Request::routeIs('display') ? 'active' : ''}}">Display</a>
        </div>

        <div class="bdrclr">
        <a href="{{ route('delete')}}" class="nav-link {{ Request::routeIs('delete') ? 'active' : ''}}">Delete</a>
        </div>

        <div class="bdrclr">
        <a href="{{ route('contact')}}" class="nav-link {{ Request::routeIs('contact') ? 'active' : ''}}">Contact Us</a>
        </div>

    </nav>
</div>