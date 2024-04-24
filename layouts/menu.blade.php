<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inicio</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Usuarios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('rols.index') }}" class="nav-link {{ Request::is('rols*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-plus"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('photos.index') }}" class="nav-link {{ Request::is('photos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-camera-retro"></i>
        <p>Fotos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('photosDetails.index') }}" class="nav-link {{ Request::is('photosDetails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-images"></i>
        <p>Detalles Fotos</p>
    </a>
  
</li>



