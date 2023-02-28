<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paraf Nusa Cita Teknologi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .card{
            background-color: rgb(253, 243, 230);
            border: unset;
        }
    </style>
    </head>
  <body>

    <div class="main d-flex flex-column justify-content-center" style="min-height: 100vh; background-image: url(https://images.unsplash.com/photo-1500989145603-8e7ef71d639e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="berkas">
                                <strong>Berkas : </strong>
                                <div class="deskripsi p-3 mt-2 bg-white">
                                    {{ $data->deskripsi }}
                                </div>
                            </div>
                            <div class="bg-white p-3 mt-2">
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Nomor Dokumen</div>
                                        <div class="">{{ $data->nomor }}</div>
                                    </div>
                                    <hr class="mt-3">
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Stempel</div>
                                        <div class="">{{ \Carbon\Carbon::parse($data->created_at)->format('d-M-Y H:i') }}</div>
                                    </div>
                                    <hr class="mt-3">
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Kategori</div>
                                        <div class="">{{ $data->kategori}}</div>
                                    </div>
                                    <hr class="mt-3">
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Jenis</div>
                                        <div class="">{{ $data->jenis}}</div>
                                    </div>
                                    <hr class="mt-3">
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Diparaf oleh</div>
                                        <div class="">{{ $user->name}}</div>
                                    </div>
                                    <hr class="mt-3">
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Kredensial</div>
                                        <div class="">{{ $user->email}}</div>
                                    </div>
                                    <hr class="mt-3">
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Diverifikasi</div>
                                        <div class="">PT. Gusma Cita Teknologi</div>
                                    </div>
                                    <hr class="mt-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
