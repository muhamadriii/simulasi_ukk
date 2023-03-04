@extends('layout.dashboard')
@push('css')
    <style>
        #blah{
            width: 500px;
            max-height: 300px;
        }
    </style>
@endpush
@section('content')
    <section id="aspirasi">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto mb-5 mb-md-7">
            <h1 class="fw-semi-bold text-warning">Pengaduan <span class="text-1100">& Saran</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
            <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="masyarakat/assets/img/gallery/researchers.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Kinerja</h3>
                <p class="lh-lg">Kritik dan Saran terkait kinerja kami sebagai wakil rakyat untuk perkembangan yang lebih baik</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
            <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="masyarakat/assets/img/gallery/librarian.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Imfrastruktur</h3>
                <p class="lh-lg">Pengaduan Fasilitas umum seperti Jalan, Trotoar, Taman, Lampu penerangan jalan , DLL...</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
            <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="masyarakat/assets/img/gallery/societies.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Konsultasi</h3>
                <p class="lh-lg">Konsultasikan keluhan anda terkait dengan hal apapun yang bisa kami layani :)</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
            <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="masyarakat/assets/img/gallery/authors.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Pelayanan</h3>
                <p class="lh-lg">Pengaduan terkait pelayanan umum seperti kesehatan,jalan,sosial,keselamatan ,dll....</p>
            </div>
            </div>
        </div>
        </div>
        <!-- end of .container-->

    </section>
    <section>
        <div class="container">
            <h2 class="text-primary text-center mb-5">Tulis Pengaduan anda</h2> 
            <form>
                <div class="mb-3">
                    <div class="d-flex justify-content-center">
                        <img id="blah" src="" class="d-flex justify-content-center" alt="your image" /><br>
                    </div>
                    <label for="exampleInputEmail1" class="text-center form-label">Masukan Foto</label>
                    <input type='file' id="imgInp" name="foto" class="form-control"/>
                </div>
                <div class="mb-3">
                  <label for="isi" class="form-label">Isi laporan</label>
                  <textarea type="text" class="form-control" id="isi" style="height:200px;"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </section>
@endsection
@push('js')
<script>
    function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();
   
           reader.onload = function (e) {
               $('#blah').attr('src', e.target.result);
           }
   
           reader.readAsDataURL(input.files[0]);
       }
   }
   
   $("#imgInp").change(function(){
       readURL(this);
   });
</script>    
@endpush
