<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 shadow-sm" style="background-color: #0f172a !important;">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ url('/user') }}">
      <span class="badge bg-primary p-2 rounded-3" style="background-color: var(--star-blue) !important;">
        <i class="fa-solid fa-graduation-cap"></i>
      </span>
      <span>PWL <span class="text-star-blue">App</span></span>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-2 mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link px-3 rounded-3 {{ request()->is('user') ? 'active bg-primary text-white fw-semibold' : '' }}" 
             style="{{ request()->is('user') ? 'background-color: var(--star-blue) !important;' : '' }}"
             href="{{ url('/user') }}">
            <i class="fa-solid fa-users me-1"></i> List User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 rounded-3 {{ request()->is('user/create') ? 'active bg-primary text-white fw-semibold' : '' }}" 
             style="{{ request()->is('user/create') ? 'background-color: var(--star-blue) !important;' : '' }}"
             href="{{ url('/user/create') }}">
            <i class="fa-solid fa-user-plus me-1"></i> Tambah User
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>