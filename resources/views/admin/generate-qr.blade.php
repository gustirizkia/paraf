@extends('crudbooster::admin_template')

@section('content')
@push('head')
<style>
    .capture{
        display: inline-block;
    }
</style>
@endpush
<div class="row">
    <div class="col-md-8">
      <div class="box box-info">
        <div class="box-header text-center">
          <h4>Paraf Digital - copy code ini</h4>
        </div>
        <div class="box-body text-center" onclick="capture()" >
            <div class="capture" id="capture">
                {{ $qr }}
            </div>
            <br>
            <div class="text-primary mt-3"  style="cursor: pointer;">Click to Download</div>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-md-6">
              <b>Deskripsi</b>
            </div>
            <div class="col-md-6 text-right">
              {{ $item->deskripsi }}
            </div>
          </div>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Nomor Dokumen</b> <a class="pull-right">{{ $item->nomor }}</a>
            </li>
            <li class="list-group-item">
              <b>Kategori</b> <a class="pull-right">{{ $item->kategori }}</a>
            </li>
            <li class="list-group-item">
              <b>Jenis</b> <a class="pull-right">{{ $item->jenis }}</a>
            </li>
            <li class="list-group-item">
              <b>Tipe</b> <a class="pull-right">{{ $item->type }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('bottom')
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script>
        function capture() {
                    html2canvas(document.querySelector("#capture")).then(canvas => {

                        var imgString = canvas.toDataURL("image/png");
                        var a = document.createElement('a');
                        a.href = imgString;
                        a.download = "paraf-{{ $item->jenis }}-{{ $item->nomor }}.png";
                        a.click();
                    });
            }
    </script>
@endpush
