<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

<body>
  <link href="css/style.css" rel="stylesheet">
  <div class="main-content">
    <!-- Top navbar -->
    
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;">
      <!-- Mask -->
      
      <span class="mask bg-light-yellow opacity-8"></span>
      <a class="btn rounded-circle btn-success" type="button" href="{{ route('homepage') }}"><i class="fas fa-arrow-left"></i></a>
      
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello {{ strtoupper(Auth::user()->name) }}</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  {{ ucwords(Auth::user()->name) }}
                </h3>


                <div>
                  <i class="ni education_hat mr-2"></i>{{ ucwords(Auth::user()->prodi) }}
                </div>
                @if (Auth::user()->tentang_saya != null)
                <hr>

                <p>{{ Auth::user()->tentang_saya }}</p>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Akun Saya</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{ route('user-profile-information.update') }}" method="POST">
                @csrf
                @method('PUT')
                <h6 class="heading-small text-muted mb-4">Informasi User</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-nama-lengkap">Nama Lengkap</label>
                        <input type="text" name="name" id="input-nama-lengkap" class="form-control form-control-alternative" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-no-telp">Nomor Telp</label>
                        <input type="text" name="no_hp" id="input-no-telp" class="form-control form-control-alternative" placeholder="Nomor Telp" value="{{ Auth::user()->no_hp }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-email">Email</label>
                        <input type="text" name="email" id="input-email" class="form-control form-control-alternative" placeholder="Email" value="{{ Auth::user()->email }}">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Tentang Saya</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>Tentang Saya</label>
                    <textarea rows="4" name="tentang_saya" class="form-control form-control-alternative" placeholder="A few words about you ..." resize="none">{{ Auth::user()->tentang_saya }}</textarea>
                  </div>
                </div>
                <div class="text-right">

                    <button class="btn btn-warning btn-user btn-block">Edit Profile</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <div class="copyright">
          <p>Made with <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">SMK NEGERI 3 JEMBER</a> by RPL GTU</p>
        </div>
      </div>
    </div>
  </footer>
</body>
