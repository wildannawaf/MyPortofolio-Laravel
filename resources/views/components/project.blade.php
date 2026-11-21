<section id="projects" class="py-5 bg-white">
  <div class="container py-4">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">Proyek Terkait</h2>
      <div class="bg-purple mx-auto rounded mb-2" style="width: 60px; height: 4px;"></div>
      <p class="text-muted">Beberapa tugas dan proyek praktikum yang pernah dibuat.</p>
    </div>

    <div class="row g-4">
       <!-- 1 -->
      <div class="col-md-4">
        <div class="card card-project h-100 border-0 shadow-sm overflow-hidden">
          {{-- <img src="assets/images/sistem-peminjaman.jpg" class="card-img-top" alt="Sistem Peminjaman Fasilitas"> --}}
          <img src="{{ asset('images/sistem-peminjaman.jpg') }}" alt="Sistem Peminjaman Fasilitas" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">Sistem Peminjaman Fasilitas Kampus</h5>
            <p class="card-text text-muted flex-grow-1">Perancangan dan analisis sistem informasi peminjaman fasilitas kampus dengan Diagram Use Case & Activity Diagram.</p>
            <div class="mb-3">
              <span class="badge bg-secondary">UML</span>
              <span class="badge bg-secondary">Web Spec</span>
            </div>
            <button type="button" class="btn btn-outline-primary w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#modalProyek1">
              Detail Proyek
            </button>
          </div>
        </div>
      </div>

      <!--  2 -->
      <div class="col-md-4">
        <div class="card card-project h-100 border-0 shadow-sm overflow-hidden">
          {{-- <img src="assets/images/kalkulator-web.jpg" class="card-img-top" alt="Kalkulator Sederhana"> --}}
          <img src="{{ asset('images/kalkulator-web.jpg') }}" alt="Kalkulator Sederhana" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">Kalkulator Web Client-Side</h5>
            <p class="card-text text-muted flex-grow-1">Aplikasi kalkulator interaktif berbasis HTML, CSS, dan JavaScript murni untuk perhitungan aritmatika dasar.</p>
            <div class="mb-3">
              <span class="badge bg-secondary">HTML5</span>
              <span class="badge bg-secondary">JavaScript</span>
            </div>
            <button type="button" class="btn btn-outline-primary w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#modalProyek2">
              Detail Proyek
            </button>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-md-4">
        <div class="card card-project h-100 border-0 shadow-sm overflow-hidden">
          {{-- <img src="assets/images/linux.jpg" class="card-img-top" alt="Konfigurasi Server BIND & Nginx"> --}}
          <img src="{{ asset('images/linux.jpg') }}" alt="Konfigurasi Server BIND & Nginx" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">Konfigurasi DNS & Nginx Server</h5>
            <p class="card-text text-muted flex-grow-1">Setup server DNS BIND9 lokal beserta virtual host Nginx untuk deployment domain web portofolio statis.</p>
            <div class="mb-3">
              <span class="badge bg-secondary">Linux</span>
              <span class="badge bg-secondary">Nginx</span>
              <span class="badge bg-secondary">BIND</span>
            </div>
            <button type="button" class="btn btn-outline-primary w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#modalProyek3">
              Detail Proyek
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Proyek 1 -->
  <div class="modal fade" id="modalProyek1" tabindex="-1" aria-labelledby="labelProyek1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-purple text-white">
          <h5 class="modal-title fw-bold" id="labelProyek1">Sistem Peminjaman Fasilitas Kampus</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <img src="{{ asset('images/sistem-peminjaman.jpg') }}" class="img-fluid rounded mb-3 w-100" style="max-height: 300px; object-fit: cover;" alt="Preview Proyek 1">
          <h6 class="fw-bold text-purple">Deskripsi Lengkap</h6>
          <p class="text-muted">Proyek ini berfokus pada analisis kebutuhan perangkat lunak (Requirements Engineering) dan pemodelan proses bisnis untuk digitalisasi peminjaman ruangan serta alat inventaris kampus.</p>
          <h6 class="fw-bold text-purple mt-3">Fitur & Output Utama:</h6>
          <ul class="text-muted mb-0">
            <li>Pemodelan Use Case Diagram, Activity Diagram, dan Sequence Diagram.</li>
            <li>Alur persetujuan berjenjang antara Mahasiswa, Dosen Wali, dan Admin Sarpras.</li>
            <li>Dokumen Spesifikasi Kebutuhan Perangkat Lunak (SKPL).</li>
          </ul>
        </div>
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Proyek 2 -->
  <div class="modal fade" id="modalProyek2" tabindex="-1" aria-labelledby="labelProyek2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-purple text-white">
          <h5 class="modal-title fw-bold" id="labelProyek2">Kalkulator Web Client-Side</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <img src="{{ asset('images/kalkulator-web.jpg') }}" class="img-fluid rounded mb-3 w-100" style="max-height: 300px; object-fit: cover;" alt="Preview Proyek 2">
          <h6 class="fw-bold text-purple">Deskripsi Lengkap</h6>
          <p class="text-muted">Aplikasi kalkulator berbasis web yang berjalan sepenuhnya di sisi klien tanpa reload halaman. Dibangun untuk melatih manipulasi DOM JavaScript dan tata letak CSS Grid.</p>
          <h6 class="fw-bold text-purple mt-3">Teknologi & Fitur:</h6>
          <ul class="text-muted mb-0">
            <li>Operasi aritmatika dasar (penjumlahan, pengurangan, perkalian, pembagian).</li>
            <li>Validasi input untuk mencegah pembagian dengan nol dan kesalahan sintaks operator.</li>
            <li>Antarmuka responsif menggunakan HTML5 dan CSS3 murni.</li>
          </ul>
        </div>
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Proyek 3 -->
  <div class="modal fade" id="modalProyek3" tabindex="-1" aria-labelledby="labelProyek3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 shadow">
        <div class="modal-header bg-purple text-white">
          <h5 class="modal-title fw-bold" id="labelProyek3">Konfigurasi DNS & Nginx Server</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <img src="{{ asset('images/linux.jpg') }}" class="img-fluid rounded mb-3 w-100" style="max-height: 300px; object-fit: cover;" alt="Preview Proyek 3">
          <h6 class="fw-bold text-purple">Deskripsi Lengkap</h6>
          <p class="text-muted">Implementasi administrasi sistem pada virtual machine Rocky Linux untuk melayani domain lokal menggunakan BIND9 DNS dan web server Nginx.</p>
          <h6 class="fw-bold text-purple mt-3">Konfigurasi yang Diterapkan:</h6>
          <ul class="text-muted mb-0">
            <li>Konfigurasi Forward & Reverse Zone pada BIND DNS (`wildan.sisjarlab.io`).</li>
            <li>Setup Server Block (Virtual Host) pada Nginx untuk domain `wildan.lab`.</li>
            <li>Pengujian resolusi DNS menggunakan `nslookup` dan `dig` serta verifikasi akses HTTP.</li>
          </ul>
        </div>
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
</section>
