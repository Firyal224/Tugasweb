@extends('layoutsDashboard/dashboardapp')
@section('title', 'Dashboard')
@section('dashboard', 'active')

@section('content')
    <link href="{{ asset('css/pegawai.css') }}" rel="stylesheet">
      <!-- MULAI CONTAINER -->
    <div class="container" style="margin-top:50px">

           <div class="col-lg-9 col-md-9 col-sm-2" >
                <div class="card"  id="#card" style="padding:10px;">
                 
                 <div class="bdy">
                   <!-- MULAI TOMBOL TAMBAH -->
                    <a href="javascript:void(0)" class="btn tambah" id="tombol-tambah">Tambah PEGAWAI</a>
                    <br><br>
                    <!-- AKHIR TOMBOL -->
                 </div>
               
                    
                   
                    <!-- MULAI TABLE -->
                
                     <div class="col-lg-12 col-sm-12 hero-feature" >
                        <div class="table-responsive">

                             <table class="table table-striped table-bordered table-sm" id="table_surat" >
                        <thead style=" background-image: linear-gradient(to bottom right, #fa6969, #f7f7f7);" >
                            <tr>
                                <th >Divisi</th>
                                <th>Nama</th>
                                <th>Nomer Hp</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        </table>

                        </div>
                     </div> 
                    <!-- AKHIR TABLE -->
                </div>    
            </div>
       
    </div>
    <!-- AKHIR CONTAINER -->
    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12"> 
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Jenis Surat</label>
                                    <div class="col-sm-12">
                                        <select name="jenis_surat" id="jenis_surat" class="form-control required">
                                            <option value="">Pilih Jenis Surat</option>
                                            <option value="Surat Izin">Surat Izin</option>
                                            <option value="Surat Lamaran">Surat Lamaran</option>
                                        </select>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama Pegawai</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                                            value="" required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Isi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="isi" name="isi"
                                            value="" required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">E-mail</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="email" name="email" value=""
                                            required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Alamat</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                                    </div>
                                </div>
 
                            </div>
 
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>
 
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->
 
    <!-- MULAI MODAL KONFIRMASI DELETE-->
 
    <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Jika menghapus Pegawai maka</b></p>
                    <p>*data pegawai tersebut hilang selamanya, apakah anda yakin?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                        Data</button>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->
    @section('javascript')
    <script>
        //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function () {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
       
        $(document).ready(function () {
            $('#table_surat').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    
                  
                     url: "/pegawai/table",
                    type: 'GET',
                },
                columns: [
                    {
                        data: 'jenis_surat',
                        name: 'jenis_surat'
                    },
                    
                    {
                        data: 'nama_pegawai',
                        name: 'nama_pegawai'
                    },
                    {
                        data: 'isi',
                        name: 'isi'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ],
                order: [
                    [0, 'asc']
                ]
            });
        });
        //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        if ($("#form-tambah-edit").length > 0) {
            $("#form-tambah-edit").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');
                    $.ajax({
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('pegawai.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_surat').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }
        //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('pegawai/' + data_id + '/edit', function (data) {
                $('#modal-judul').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id').val(data.id);
                 $('#jenis_surat').val(data.jenis_surat);
                $('#nama_pegawai').val(data.nama_pegawai);
                $('#isi').val(data.isi);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
            })
        });
        //jika klik class show (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
   
       
        $('body').on('click', '.show-post', function () {
           
            dataId = $(this).attr('id');
             
           
               $.ajax({
                   url:"DynamicPdf/"+dataId ,
                    success:function(data) {
                      $("body").html(data);
                      
                     // This will navigate to your preferred location
                     window.location.href = url;   
                },
                   
               })
               
        });
 
           // $('#tombol-show').click(function () {
                
       // });
    
        
 
        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "pegawai/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_surat').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'bottomRight'
                    });
                }
            })
        });

       


    </script>
    @stop

@endsection