@extends('layout.frontend.template-meta')

@section('konten-meta')
<div class="section-title">
    <h2>Meta Data</h2>
  </div>

  <ul id="meta-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
    <!-- <li data-filter="" class="filter-active"></li> -->
    <li data-filter=".filter-subak">Subak</li>
    <li data-filter=".filter-batuan">Batuan</li>
    <li data-filter=".filter-geopark">Geopark</li>
  </ul>

  <div class="row meta-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-md-4 col-xs-6 meta-item filter-subak">
      <div class="meta-img"><img src="img/subak/bale kulkul.jpg" class="img-fluid" alt="" style="height: 80vh; width: 80vh;"></div>
      <div class="meta-info">
        <div class="col-7 col-sm-7">
          <h4>Bale Kul-kul</h4>
        </div>
        <br>
        <div class="col-9 col-sm-9">
          <p align="justify">Bale Kul-kul merupapakan tempat untuk kentongan yang berfungsi untuk memberikan informasi sesuai ketukan yang ditentukan.</p>
        </div>
        <a href="img/subak/bale kulkul.jpg" data-gallery="metaGallery" class="meta-lightbox preview-link" title="subak 1"><i class="bx bx-plus"></i></a>
        <a href="meta-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 meta-item filter-subak">
      <div class="meta-img"><img src="img/subak/lumbung.jpg" class="img-fluid" alt="" style="height: 80vh; width: 80vh;"></div>
      <div class="meta-info">
        <div class="col-7 col-sm-7">
          <h4>Lumbung Padi</h4>
        </div>
        <br>
        <div class="col-9 col-sm-9">
          <p align="justify">Lumbung Padi merupakan tempat padi hasil panen pada petani.</p>
        </div>
        <a href="img/subak/lumbung.jpg" data-gallery="metaGallery" class="meta-lightbox preview-link" title="batuan 1"><i class="bx bx-plus"></i></a>
        <a href="meta-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 meta-item filter-subak">
      <div class="meta-img"><img src="img/subak/pelinggih pura dalem.jpg" class="img-fluid" alt="" style="height: 80vh; width: 80vh;"></div>
      <div class="meta-info">
        <div class="col-7 col-sm-7">
          <h4>Pelinggih Pura Dalem</h4>
        </div>
        <br>
        <div class="col-9 col-sm-9">
          <p align="justify">Pura Dalem Desa Adat Selat merupakan Pura yang digunakan untuk melakukan upacara dan doa kepada Dewa Siwa. Kondisi pura sangat terawat dan bersih, terlebih lagi pura ini sangat luas</p>
        </div>
        <a href="img/subak/pelinggih pura dalem.jpg" data-gallery="metaGallery" class="meta-lightbox preview-link" title="batuan 1"><i class="bx bx-plus"></i></a>
        <a href="meta-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
      </div>
    </div>

  <div class="col-lg-4 col-md-6 meta-item filter-subak">
    <div class="meta-img"><img src="img/subak/pura uma sanghyang.jpg" class="img-fluid" alt="" style="height: 80vh; width: 80vh;"></div>
    <div class="meta-info">
      <div class="col-7 col-sm-7">
        <h4>Pura Uma Sangiang</h4>
      </div>
      <br>
      <div class="col-9 col-sm-9">
        <p align="justify">Pura Uma Sangiang Desa Adat Selat merupakan Pura yang digunakan untuk melakukan upacara dan doa kepada Dewi Sri. Pura uma sangiang sangat bersih dan terawat karena selalu dibersihkan oleh masyarakat</p>
      </div>
      <a href="img/subak/pura uma sanghyang.jpg" data-gallery="metaGallery" class="meta-lightbox preview-link" title="batuan 1"><i class="bx bx-plus"></i></a>
      <a href="meta-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 meta-item filter-subak">
    <div class="meta-img"><img src="img/subak/alat traktor.jpg" class="img-fluid" alt="" style="height: 80vh; width: 80vh;"></div>
    <div class="meta-info">
      <div class="col-7 col-sm-7">
        <h4>Alat Traktor</h4>
      </div>
      <br>
      <div class="col-9 col-sm-9">
        <p align="justify">Alat Traktor merupakan alat untuk membanjak sawah secara modern.</p>
      </div>
      <a href="img/subak/pura uma sanghyang.jpg" data-gallery="metaGallery" class="meta-lightbox preview-link" title="batuan 1"><i class="bx bx-plus"></i></a>
      <a href="meta-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 meta-item filter-subak">
    <div class="meta-img"><img src="img/subak/sapi.jpg" class="img-fluid" alt="" style="height: 80vh; width: 80vh;"></div>
    <div class="meta-info">
      <div class="col-7 col-sm-7">
        <h4>Sapi</h4>
      </div>
      <br>
      <div class="col-9 col-sm-9">
        <p align="justify">Sapi merupakan Sekor hewan yang juga bisa digunakan untuk membajak sawah secara tradisional.</p>
      </div>
      <a href="img/subak/pura uma sanghyang.jpg" data-gallery="metaGallery" class="meta-lightbox preview-link" title="batuan 1"><i class="bx bx-plus"></i></a>
      <a href="meta-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>


  <div class="col-lg-4 col-md-6 meta-item filter-subak">
    <div class="meta-img"><img src="img/subak/bendungan.jpg" class="img-fluid" alt="" style="height: 80vh; width: 80vh;"></div>
    <div class="meta-info">
      <div class="col-7 col-sm-7">
        <h4>Bendungan</h4>
      </div>
      <br>
      <div class="col-9 col-sm-9">
        <p align="justify">Bendungan merupakan tempat penampungan air.</p>
      </div>
      <a href="img/subak/pura uma sanghyang.jpg" data-gallery="metaGallery" class="meta-lightbox preview-link" title="batuan 1"><i class="bx bx-plus"></i></a>
      <a href="meta-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

</div>
@endsection
