<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Kriptografi</title>
  </head>
  <body>
    <!-- prelaoder -->
    <div id="preloader">
      <div class="body-preloader">
        <div class="spinner d-block">
          <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-success" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-info" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-light" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <div class="mt-2">
          <p class="text-dark text-center fs-5">Loading...</p>
        </div>
      </div>
    </div>
    <!-- End Preloader  -->

    <div class="container">
      <div id="bodyContainer">
        <div class="row">
            <div class="col-sm-6 card m-4">
                <div class="header mt-2">
                    <div class="d-flex justify-content-between">
                        <h3>RZEMA</h3>
                        <div class="button-toggle-switch-type btn-group">
                            <button type="button" class="btn btn-primary btn-switch-left m-0 btn-activerz" id="btnTypeEnkripsi">Enkripsi</button>
                            <button type="button" class="btn btn-primary btn-switch-right m-0" id="btnTypeDekripsi">Dekripsi</button>
                        </div>
                    </div>
                </div>
                <div class="body-inputan-user mt-4">
                    <form id='form-input-user'>
                      <input type="hidden" id="typeInput" name="typeInput" value="enkripsi">
                      <div class="mb-3">
                        <label for="input_user" class="form-label" id="labelInput">Masukan yang ingin di Enkripsi</label>
                        <!-- Alert -->
                        <div id="alert-input">
                          <div class="alert alert-danger d-flex align-items-center mt-2" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div id="body-alert">
                              Mohon untuk mengisi Enkripsi
                            </div>
                          </div>
                        </div>
                        <!-- End Alert -->
                        <textarea class="form-control" name="input_user" id="input_user" placeholder="Masukan data" cols="3" rows="3"></textarea>
                        <div id="emailHelp" class="form-text">Encryption is still in beta stage.</div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-eksekusi" id="btn-eksekusi">Enkripsi</button>
                      <div class="mb-3 mt-3">
                        <div class="d-flex justify-content-between">
                          <label for="input_user" class="form-label" id="labelReturn">Hasil Enkripsi</label>
                          <div class="d-flex justify-content-center">
                            <span id="copied">Copy</span>
                            <a href="javascript:;" title="copy" id="buttonCopy">
                              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                                <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                              </svg>
                            </a>
                          </div>
                        </div>
                        <textarea class="form-control" id="return_enkripsiOrDekripsi" placeholder="Belum Ada Hasil" cols="3" rows="3" disabled></textarea>
                      </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 card m-4">
                <div class="header header-kelompok">
                    <h3>KELOMPOK</h3>
                    <hr>
                </div>
                <div class="card-body">
                    <ol>
                        <li>17190163 - Rizat Sakmir</li>
                    </ol>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
    </svg>
    <!-- End SVG -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>