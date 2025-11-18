<nav class="p-3 rounded border border-black vh-100 bg-white">
    <h3 class="text-center border border-black rounded p-3">RENZEMARK M OLEA</h3>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href="{{ route('pharma.home') }}"><i class="bi bi-house-door-fill"></i> DASHBOARD</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href="{{ route('pharma.inventory') }}"><i class="bi bi-clipboard2-check-fill"></i> INVENTORY</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href="{{ route('pharma.order') }}"><i class="bi bi-bag-check-fill"></i> ORDERS</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href="{{ route('pharma.history') }}"><i class="bi bi-hourglass-bottom"></i> HISTORY</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href="{{ route('pharma.profile') }}"><i class="bi bi-person-fill"></i> PROFILE</a>
        </li>
    </ul>
    <!--logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-primary w-100">Logout</button>
    </form>
</nav>
