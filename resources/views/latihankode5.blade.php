<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets/CSS/soalkode5.css')}}" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--Import Poppins-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Latihan Kode Soal 5</title>
  </head>
  <body>
      <div class="row">
        <div class="col justify-content-start pt-2 pl-4 pb-2"><img src="{{asset('assets/images/cekdonglogo.png')}}" class="gambar-logo" alt=""/></div>
      </div>

      <div class="row">
        <div class="col justify-content-start pl-4" style="background-color: rgb(226, 228, 231);
          font-size: 20px;"><strong>HomePage Teknisi</strong>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row pt-5 pb-2">
        <div class="col-12 d-flex justify-content-center" style="font-size: 15px; font-weight: 500">ALAT YANG SEDANG DISEWA</div>
      </div>

      <div class="row justify-content-center m-0">
        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera1.png')}}" alt="SONY Cinema Line" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>SONY Cinema Line</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #ff0000;"></i> Dipinjam kembali pada 10/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera2.png')}}" alt="SONY NP-FZ100" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>SONY NP-FZ100</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #ff0000;"></i> Dipinjam kembali pada 10/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera3.png')}}" alt="SONY FE 24-70mm F2.8 GM" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>SONY FE 24-70mm F2.8 GM</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #ff0000;"></i> Dipinjam kembali pada 10/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera4.png')}}" alt="Sony Maximum" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Sony Maximum</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #ff0000;"></i> Dipinjam kembali pada 10/12/24
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex mt-4 justify-content-center">
        <button type="button" class="btn btn-lg justify-content-center align-items-center" style="background-color: #d6cfcfbe; width: 280px; height: 50px; font-size: 20px;"><strong>Cek Alat!</strong></button>
      </div>
    </div>

    <div class="container">
      <div class="row mt-4 mb-2">
        <div class="col-12 d-flex justify-content-center" style="font-size: 15px; font-weight: 500;">MENUNGGU PERSETUJUAN</div>
      </div>

      <div class="row justify-content-center m-0">
        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera5.png')}}" alt="Nikon D7500" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Nikon D7500</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera6.png')}}" alt="Canon Lens EFS 18-135mm" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Canon Lens EFS 18-135mm</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera7.png')}}" alt="Sony PXW-Z90T XDCAM camcorder" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Sony PXW-Z90T XDCAM camcorder</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera1.png')}}" alt="Canon EOS 4000D" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Canon EOS 4000D</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row justify-content-center mb-4 mt-3 mr-0 ml-0">
        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera8.png')}}" alt="Instax mini11" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Instax mini11</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera9.png')}}" alt="Instax slim-go" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Instax slim-go</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera2.png')}}" alt="Canon EOS 80D" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Canon EOS 80D</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 pr-1 pl-1">
          <div class="card h-100 shadow-sm border-secondary">
            <div class="card-body p-1">
              <div class="d-flex justify-content-center" style="height: 80px; margin-bottom: 0">
                <img src="{{asset('assets/images/camera3.png')}}" alt="Sony Zeiss" class="img-fluid mx-auto" style="max-height: 100%" />
              </div>
              <h5 class="card-title mb-0 mt-2" style="font-size: 0.6em; line-height: 1.1"><b>Sony Zeiss</b></h5>

              <div class="text-muted mt-1" style="font-size: 7px">
                <i class="fa-solid fa-circle" style="color: #11a949;"></i> Diajukan pada 2/12/24
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
