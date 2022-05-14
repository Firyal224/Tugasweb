@extends('layoutsDashboard/dashboardapp')
@section('title', 'Dashboard')
@section('dashboard', 'active')

@section('content')
    <link href="{{ asset('css/pegawai.css') }}" rel="stylesheet">

    <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2><small>User Data</small></h2>
					</div>

					<div class="x_content">
						<div class="col-md-4 col-sm-4 col-xs-12 profile_left">
							<img class="rounded-circle justify-content-center" src="https://images.unsplash.com/source-404?fit=crop&fm=jpg&h=800&q=60&w=1200" style="width:100px;height:100px;">
							<h3>Adminnyaaa</h3>
							<ul >
								<li><i class="fa fa-map-marker user-profile-icon"></i> Indonesia</li>
								<li><i class="fa fa-building user-profile-icon"></i> Administrator</li>
								<li><i class="fa fa-phone user-profile-icon"></i> 081234567890</li>
								<li><i class="fa fa-envelope user-profile-icon"></i> <a href="https://webmail.umm.ac.id" target="_blank">admin@webmail.umm.ac.id</a></li>
							</ul>
							<a href="#" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
							<a href="https://infokhs.umm.ac.id/download/ktm/1" class="btn btn-info"><i class="fa fa-id-card-o m-right-xs"></i> Menu 2</a>
							<a href="https://infokhs.umm.ac.id/download/ktm/1" class="btn btn-info"><i class="fa fa-id-card-o m-right-xs"></i> Menu 3</a>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>

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

                        <table class="table table-striped table-bordered table-sm" id="table_pegawai" >
                        <thead style=" background-image: linear-gradient(to bottom right, ##B0C4DE, #f7f7f7);" >
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
     <div class="container" style="margin-top:50px">
           <div class="col-lg-9 col-md-9 col-sm-2" >
                <div class="card"  id="#card" style="padding:10px;">
                 
               
                    <!-- MULAI TABLE -->
                
                     <div class="col-lg-12 col-sm-12 hero-feature" >
                        <div class="table-responsive">

                        <table class="table table-striped table-bordered table-sm" id="table_user" >
                        <thead style=" background-image: linear-gradient(to bottom right, ##B0C4DE, #f7f7f7);" >
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
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
                                <input  name="id" id="id">
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Jenis Surat</label>
                                    <div class="col-sm-12">
                                        <select name="divisi" id="divisi" class="form-control required">
                                            <option value="">Divisi</option>
                                            <option value="Human Resource">Human Resource</option>
                                            <option value="Developer">Developer</option>
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
                                    <label for="name" class="col-sm-12 control-label">Nomer Hp</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nohp" name="nohp"
                                            value="" required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">E-mail</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="email" name="email" value="">
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
 
     <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade" id="edit-user-modal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-user" name="form-edit-user" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12"> 
                                <input type="hidden"name="id_user" id="id_user">
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama User Account</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nama_user" name="nama_user"
                                            value="" required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">E-mail</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="email_user" name="email_user" value=""
                                            required>
                                    </div>
                                </div>
 
                            </div>
 
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan-user"
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

        var url;
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
            $('#table_pegawai').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    
                  
                     url: "/admin/table",
                    type: 'GET',
                },
                columns: [
                    {
                        data: 'divisi',
                        name: 'divisi'
                    },
                    
                    {
                        data: 'nama_pegawai',
                        name: 'nama_pegawai'
                    },
                    {
                        data: 'nohp',
                        name: 'nohp'
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
        $(document).ready(function () {
            $('#table_user').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    
                  
                     url: "/admin/table_users",
                    type: 'GET',
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    
                    {
                        data: 'email',
                        name: 'email'
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
                        url: "{{ route('admin.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_pegawai').dataTable(); //inialisasi datatable
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
                             console.log($('#form-tambah-edit')
                            .serialize());
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }

         if ($("#form-edit-user").length > 0) {
            $("#form-edit-user").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan-user').val();
                    dataId = $(this).attr('id')
                    $('#tombol-simpan-user').html('Sending..');
                    $.ajax({
                        data: $('#form-edit-user')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "/admin/update_users", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-edit-user').trigger("reset"); //form reset
                            $('#edit-user-modal').modal('hide'); //modal hide
                            $('#tombol-simpan-user').html('Simpan'); //tombol simpan
                            var oTable = $('#table_user').dataTable(); //inialisasi datatable
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
                            console.log($('#form-edit-user')
                            .serialize());
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
            $.get('admin/' + data_id + '/edit', function (data) {
                $('#modal-judul').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id').val(data.id);
                 $('#divisi').val(data.divisi);
                $('#nama_pegawai').val(data.nama_pegawai);
                $('#nohp').val(data.nohp);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
            })
        });
        $('body').on('click', '.edit-account', function () {
            dataId = $(this).attr('id');
           
            var data_id = $(this).data('id');
            $.get('admin/' + data_id + '/edit_users', function (data) {
                $('#modal-judul').html("Edit Post");
                $('#tombol-simpan-user').val("edit-post");
                $('#edit-user-modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id_user').val(data.id);
                 $('#nama_user').val(data.name);
                $('#email_user').val(data.email);
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
            url="admin/"+dataId;
            $('#konfirmasi-modal').modal('show');
        });
         $(document).on('click', '.delete-user', function () {
            dataId = $(this).attr('id');
            url="/admin/delete_users/"+dataId;
            $('#konfirmasi-modal').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: url, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                       
                        var oTable = $('#table_pegawai').dataTable();
                        var oTableUser = $('# table_user').dataTable();
                        oTable.fnDraw(false); //reset datatable
                        oTableUser.fnDraw(false);
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