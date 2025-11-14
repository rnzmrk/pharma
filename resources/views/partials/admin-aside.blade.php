<nav class="p-3 rounded border border-black vh-100 bg-white">
    <h3 class="text-center border border-black rounded p-3">RADMIN</h3>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href=""><i class="bi bi-house-door-fill"></i> DASHBOARD</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href=""><i class="bi bi-clipboard2-check-fill"></i> INVENTORY</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href=""><i class="bi bi-bag-check-fill"></i> ORDERS</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href=""><i class="bi bi-hourglass-bottom"></i> HISTORY</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href=""><i class="bi bi-people-fill"></i></i> USERS</a>
        </li>
        <li class="nav-item border border-black rounded mb-1">
            <a class="nav-link text-black" href=""><i class="bi bi-person-fill"></i> PROFILE</a>
        </li>
    </ul>
    <!--logout -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    LOGOUT
    </button>
</nav>

<!-- Logout Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Are you sure to logout?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Going back to login page
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Okay</button>
      </div>
    </div>
  </div>
</div>
