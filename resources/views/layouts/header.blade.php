<style>
  .modal-dialog {
      display: flex;
      justify-content: center;
      align-items: center;
  }

  .modal-content {
      width: 80%;
      justify-content: center;
  }

  .modal-header {
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
  }

  .modal-header .profile-icon {
      margin-right: 10px;
  }

  .modal-footer {
      text-align: center;
  }

  .profile-info {
      margin-bottom: 20px;
  }

  .large-icon {
      font-size: 5em;
  }

  /* Mengubah warna navbar menjadi abu-abu */
  .main-header.navbar {
      background-color: #6777EF; /* Abu-abu */
      color: #ffffff; /* Teks putih untuk kontras */
  }

  .navbar-light .navbar-nav .nav-link {
      color: #ffffff; /* Teks pada link navbar berwarna putih */
  }

  .navbar-light .navbar-nav .nav-link:hover {
      color: #f8f9fa; /* Warna lebih cerah ketika di-hover */
  }

</style>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="contact.php" class="nav-link">Kontak</a>
      </li>
  </ul>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#profileModal" href="#" role="button">
              <i class="nav-icon bi bi-person-circle"></i>
          </a>
      </li>
  </ul>
</nav>

<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header text-center">
              <!-- Tambahkan ikon profil sebelum teks -->
              <i class="nav-icon bi bi-person-circle profile-icon"></i> <!-- Ikon profil -->
              <h5 class="modal-title w-100" id="profileModalLabel">Profil Anda</h5>
          </div>
          <div class="modal-body text-center">
              <div class="profile-info">
                  <i class="nav-icon bi bi-person-circle large-icon"></i>
              </div>
          </div>

          <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="logoutproses.php" class="btn btn-danger">Logout</a>
          </div>
      </div>
  </div>
</div>
