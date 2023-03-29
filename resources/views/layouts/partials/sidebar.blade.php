<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ Request::is('home') ? '' : 'collapsed' }}" href="/home">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('siswa') ? '' : 'collapsed' }}" href="/siswa">
        <i class="bi bi-person"></i>
        <span>Siswa</span>
      </a>
    </li>

    <li class="nav-item">
  <a class="nav-link {{ Request::is('mapel') ? '' : 'collapsed' }}" href="/mapel">
    <i class="bi bi-people">
  </i><span>Mapel</span>
  </a>
</li>

  <li class="nav-item">
      <a class="nav-link {{ Request::is('guru') ? '' : 'collapsed' }}" href="/guru">
        <i class="bi bi-book"></i>
        <span>Guru</span>
      </a>
    </li>
  </ul>

</aside><!-- End Sidebar-->