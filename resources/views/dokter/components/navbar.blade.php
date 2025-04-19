<li class="nav-item">
    <a href="/dokter/" class="nav-link {{ request()->is('dokter') || request()->is('dokter/') ? 'active' : '' }}">
        <i class="nav-icon fas fa-house-medical"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="/dokter/memeriksa" class="nav-link {{ request()->is('dokter/memeriksa*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-doctor"></i>
        <p>Memeriksa</p>
    </a>
</li>
<li class="nav-item">
    <a href="/dokter/obat" class="nav-link {{ request()->is('dokter/obat*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-mortar-pestle"></i>
        <p>Obat</p>
    </a>
</li>
