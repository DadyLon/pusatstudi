@extends('layout.frontend.template')

{{-- about --}}
@section('konten-about')
<div class="section-title">
    <h2>About Us</h2>
</div>
<div class="row content">
    <div class="col-lg-6">
      <img src="img/jumbotron1.png" class="img-fluid animated" alt="">
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0">
      <div id="summary">
      <!-- <h2>Siapa Kita?</h2> -->
      <!-- <br> -->
      <p>
        Keanekaragaman budaya yang ada di Indonesia merupakan salah satu kebanggaan warisan kebudayaan yang turun temurun oleh berbagai suku dan etnis. Kebudayaan bisa diwarisi jika dipelajari dan disosialisasikan dengan baik ke masyarakat. Kekuatan yang terbesar yang dimiliki Indonesia terletak pada kekayaan budaya beragam. Dalam melestarikan budaya, peran pemerintah dan masyarakat sudah sepatutnya dikembangkan. Digitalisasi budaya merupakan suatu langkah untuk mempertahankan warisan budaya agar tetap ada, dikenal, dan mampu diterapkan dalam setiap  aspek kehidupan.
        Pusat Studi Digitalisasi Budaya Bali merupakan lintas keilmuan yang bergerak dalam merancang, meneliti, mengkaji dan mempublikasikan berbagai temuan berbasis budaya yang sejalan dengan visi dan misi dari STMIK STIKOM Indonesia. Pengajuan Pusat Studi Digitalisasi Budaya Bali mengacu pada Peraturan Menteri Riset Dan Sastra Bali Serta Penyelenggaraan Bulan Bahasa Bali
      </p>
      <p>
        Peluang – peluang penelitian yang mampu diterapkan dalam digitalisasi warisan budaya antara lain: 1. Digitalisasi naskah dan lontar kuno, bangunan, tarian, benda pusaka, artfak, ke dalam berbagai media.<span id="dots">...</span><span id="more"> 2. Melakukan kajian dan analisis terhadap penerapan teknologi dalam digitalisasi warisan budaya sehingga diharapkan hasil kajian mampu menjadi kebijakan yang bermanfaat untuk masyarakat dalam menjaga warisan budaya. 3. Mengadakan Seminar Nasional atau International, sosialisasi, pelatihan dan publikasi terkait ruang lingkup pusat studi Digitalisasi Budaya Bali.</span></p>
      <a class="btn btn-primary "onclick="myFunctionabout()" id="myBtn"> Read More</a>
    </div>
    </div>
  </div>
@endsection

{{-- event --}}
@section('konten-event')
<div class="section-title">
    <h2>About Us</h2>
</div>
<div class="isi-event">
<div class="row ">
<div class="card col-md-4 col-xs-6">
<img class="card-img-top" src="img/event/event.jpg" alt="Card image cap">
<div class="card-body">
  <p class="card-text">Bali International Field School (BIFSS) Ke-8 yang dilaksanakan di Jero Tumbuk, Karangasem. BIFSS ini bertujuan untuk Memperkenalkan sistem irigasi subak Bali kepada peserta, serta memperkenalkan konsep Tri Hita Karana yang diadopsikan pada subak Bali dan juga memperkenalkan Budaya Bali kepada para peserta BIFSS</p>
  <P>Konsep Tri Hita Karana yang ada pada subak adalah<span id="dotsevent">...</span>
  <span id="moreevent"><br>
    1. Parahayangan = Hubungan harmonis manusia dengan Tuhan.<br>
    2. Pawongan = Hunbungan harmonis manusia dengan sesama.<br>
    3. Palemahan = Hubungan harmonis manusia dengan lingkungan.<br><br>
    Ketentuan Tri Hita Karana ini tertuang pada peraturan atau awig-awig sistem subak di Bali.
  </span></p>
<a class="btn btn-primary "onclick="myFunctionevent()" id="myBtnevent"> Read More</a>        </div>
</div>

<div class="card col-md-4 col-xs-6">
<img class="card-img-top" src="img/event/event2.jpg" alt="Card image cap">
<div class="card-body">
  <p class="card-text">Launching Website Desa Batuan dan Pura Puseh Batuan (<a href="http://batuan.id/"><u>batuan.id</u></a>), yang merupakan Website yang dikembangkan oleh Tim INSTIKI yang akan difungsikan untuk membantu mendigitalisasikan peninggalan sejaerah dan budaya di Desa Batuan serta Pura Puseh Batuan</p>
  <p>Launching ini bertepatan dengan peringatan 1000 Tahun ditulisnya Prasasti Batuan</p>
</div>
</div>

<div class="card col-md-4 col-xs-6">
<img class="card-img-top" src="img/event/event3.jpg" alt="Card image cap">
<div class="card-body">
<p class="card-text">Prasasti Baturan merupakan prasasti peninggalan dari pemerintahan Raja Bali Kuno yang ditulis oleh Srie Marakata dan Berangka Tahun 944 Saka atau 1022 Mahasehi yang hingga saat ini masih tersimpan di Pura Desa Puseh Adat Batuan bertepatan dengan hari Suci Saraswati, 22 Oktober 2022
dilaksanakan pembacaan dari prasasti Baturan kembali dan pembuatan dokumentasi untuk prasasti tersebut.</p>
</div>
</div>
</div>
</div>
@endsection

{{-- galery --}}
@section('konten-galery')
<div class="section-title">
    <h2>Gallery</h2>
  </div>

  <!-- Carousel wrapper -->
  <div class="container">
      <div class="row">
        <!-- baris 1 -->
        <div class="col-md-4 col-xs-6 thumb">
          <img class="img-thumbnail" src="img/dok/dok1.jpg" alt="Dokumentasi 1">
          </div>
            <div class="col-md-4 col-xs-6 thumb">
              <img class="img-thumbnail" src="img/dok/dok3.jpg" alt="Dokumentasi 2">
              </div>
              <div class="col-md-4 col-xs-6 thumb">
                <img class="img-thumbnail" src="img/dok/dok2.jpg" alt="Another alt text">
                </div>
              </div>
              <div class="row">
          <!--Baris 2-->
              <div class="col-md-4 col-xs-6 thumb">
              <img class="img-thumbnail" src="img/dok/dok9.JPG" alt="Another alt text">
              </div>
              <div class="col-md-4 col-xs-6 thumb">
                <img class="img-thumbnail" src="img/dok/dok4.jpg" alt="Another alt text">
              </div>
              <div class="col-md-4 col-xs-6 thumb">
                <img class="img-thumbnail" src="img/dok/dok5.jpg" alt="Another alt text">
              </div>
              </div>
              <div class="row">
          <!-- baris 3 -->
              <div class="col-md-4 col-xs-6 thumb">
                <img class="img-thumbnail" src="img/dok/dok8.JPG" alt="Another alt text">
              </div>
              <div class="col-md-4 col-xs-6 thumb">
                <img class="img-thumbnail" src="img/dok/dok6.jpg" alt="Another alt text">
              </div>
              <div class="col-md-4 col-xs-6 thumb">
                <img class="img-thumbnail" src="img/dok/dok7.JPG" alt="Another alt text">
              </div>
          </div>
          </div>

          <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" id="image-gallery-title"></h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                          </button>

                          <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
  </div>
@endsection

@section('konten-team')
<div class="section-title">
    <h2>OUR TEAM</h2>
  </div>

  <div class="teams-slider swiper" data-aos="fade-up" data-aos-delay="100">
    <div class="teams-header text-center">
      <h5>Team Dosen INSTIKI</h5>
    </div>
    <div class="swiper-wrapper">

    <!-- team Dosen -->
    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/dok/dok1.JPG" class="team-img" alt="">
        <h3>Ida Bagus Ary Indra Iswara, S.Kom., M.Kom</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              NIDN
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              ID SINTA
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Bidang Keahlian
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/psdigdayabali_instiki/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="fa-brands fa-linkedin" viewBox="0 0 16 16" >
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/dok/dok1.JPG" class="team-img" alt="">
        <h3>Ida Bagus Gede Sarasvananda, S.Kom., M.Cs</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              NIDN
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              ID SINTA
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Bidang Keahlian
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/psdigdayabali_instiki/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="fa-brands fa-linkedin" viewBox="0 0 16 16" >
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/dok/dok1.JPG" class="team-img" alt="">
        <h3>I Gusti Ngurah Desnanjaya, S.T., M.T</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              NIDN
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              ID SINTA
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Bidang Keahlian
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/psdigdayabali_instiki/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="fa-brands fa-linkedin" viewBox="0 0 16 16" >
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/dok/dok1.JPG" class="team-img" alt="">
        <h3>I Nyoman Jayanegara, S.Sn., M.Sn</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              NIDN
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              ID SINTA
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Bidang Keahlian
            </div>
            <div class="col-6 col-sm-6">
              -
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/psdigdayabali_instiki/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="fa-brands fa-linkedin" viewBox="0 0 16 16" >
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/dylon.JPG" class="team-img" alt="">
        <h3>Putu Wirayudi Aditama, S.Kom., M.Kom</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
        <div class="row">
          <div class="col-6 col-sm-6">
            NIDN
          </div>
          <div class="col-6 col-sm-6">
            -
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-6">
            ID SINTA
          </div>
          <div class="col-6 col-sm-6">
            -
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-6">
            Bidang Keahlian
          </div>
          <div class="col-6 col-sm-6">
            -
          </div>
        </div>
      </div>
<br>
      <div class="row ">
        <div class="col-sm">
          <a class="btn" href="https://instagram.com/psdigdayabali_instiki/" style="color: blue;">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="fa-brands fa-linkedin" viewBox="0 0 16 16" >
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg>
        </a>

        </div>
      </div>

      </div>
    </div>

    </div>
    <div class="swiper-page-dosen"></div>
  </div>
</div>
</div>

<!-- team kp -->
<div class="container" data-aos="fade-up">
<div class="teams-slider swiper" data-aos="fade-up" data-aos-delay="100">
  <br>
  <div class="teams-header text-center">
    <h5>Team Mahasiswa INSTIKI</h5>
  </div>
  <div class="swiper-wrapper">

    <!-- team KP -->
    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/mita.jpg" class="team-img" alt="">
        <h3>Ni Putu Mita Erlina Putri</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Komputer Akuntansi & Bisnis
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/mitaerlinaa/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/aik.jpg" class="team-img" alt="">
        <h3>Ni Kadek Ari Adnyani</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Komputer Akuntansi & Bisnis
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/ariadnyaniii_/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/eka.jpg" class="team-img" alt="">
        <h3>Ni Wayan Eka Noviyanti</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Komputer Akuntansi & Bisnis
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/zkaaviyz/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/yogik.jpg" class="team-img" alt="">
        <h3>I Gede Yogi Widiastika</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Komputer Akuntansi & Bisnis
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/yogiwdstk_/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/arya.jpg" class="team-img" alt="">
        <h3>I Made Arya Sukerta Kusuma Dewa</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
            TI - Desain Grafis & Multimedia
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/aryasukerta/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/indra.jpg" class="team-img" alt="">
        <h3>Anak Agung Gede Indrastata Pemayun</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Desain Grafis & Multimedia
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/gungindraas/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/kak wahyu.jpg" class="team-img" alt="">
        <h3>Afreza Mahdi</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Desain Grafis & Multimedia
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/afreeeza/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KP/dadylon.jpg" class="team-img" alt="">
        <h3>I Ketut Dady Usnadi</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Manajemen Data & Informasi
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/dadylon_/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/krisna.jpg" class="team-img" alt="">
        <h3>Putu Krisna Antara</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              Sistem Komputer
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/krisnaantara_/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/ulan.jpg" class="team-img" alt="">
        <h3>Ni Putu Diah Puspita Wulandari</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Komputer Akuntansi & Bisnis
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/diyahwulaan/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/nikma.jpg" class="team-img" alt="">
        <h3>Nihayatul Nikma</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Komputer Akuntansi & Bisnis
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/nnkm._/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/esa.jpg" class="team-img" alt="">
        <h3>Kadek Mahesya</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Desain Grafis & Multimedia
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/esakdk/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/tugek.jpg" class="team-img" alt="">
        <h3>Ida Ayu Agung Weda Harum</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              TI - Komputer Akuntansi & Bisnis
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/tugekharumm/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/surya.jpg" class="team-img" alt="">
        <h3>Pande Ketut Adi Surya Pranata</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              Sistem Komputer
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/suryaprnt4/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/ary.jpg" class="team-img" alt="">
        <h3>I Komang Agus Ary Guna</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              Sistem Komputer
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/aryguna.jr/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/wana.jpg" class="team-img" alt="">
        <h3>I Wayan Pawana Aris Putra</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              Sistem Komputer
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/wanaaris_/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="team-item">
        <img src="img/team/KKNT/dena.jpg" class="team-img" alt="">
        <h3>I Made Krisna Adyakasa</h3>
        <!-- <h4></h4> -->
        <div class=" team-item-dosen">
          <div class="row">
            <div class="col-6 col-sm-6">
              Jurusan
            </div>
            <div class="col-6 col-sm-6">
              Sistem Komputer
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              Angkatan
            </div>
            <div class="col-6 col-sm-6">
              2020
            </div>
          </div>
        </div>
<br>
        <div class="row ">
          <div class="col-sm">
            <a class="btn" href="https://instagram.com/maede.na_/" style="color: blue;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
          </a>

          </div>
        </div>
      </div>
    </div>
    <!-- akhir konetn swiper -->
      </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
@endsection
