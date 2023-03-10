@extends('layout.backend.app',[
    'title' => 'Posting',
    'pageTitle' =>'Posting',
])

@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="notify"></div>

<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-modal">
          Tambah Data
        </button>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $no => $i )
                            <tr>
                                {{-- <td>{{ $i->id }}</td> --}}
                                <td>{{ $i->judul }}</td>
                                <td>{{ $i->file }}</td>
                                <form action="{{ route('post.destroy',$i->id) }}" method="POST">
                                    <td>
                                        <a class="btn btn-success" action="{{ route('post.edit',$i->id) }}" data-toggle="modal" data-target="#edit-modal" method="P"> Edit </a>
                                        {{-- <button type="button" href="{{ route('post.edit',$i->id) }}class="btn btn-success" data-toggle="modal" data-target="#create-modal">
                                            Edit
                                          </button> --}}
                                         @csrf
                                         @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> Delete </button>
                                    </td>
                                </form>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="create-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="create-modalLabel">Create Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="createForm" method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
            @csrf

        <div class="form-group">
            <label for="n">Judul</label>
            <input type="" required id="n" name="judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="e">Upload File</label>
            <input type="file" required id="e" onclick="uploadFile()" name="file" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-store">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Create -->

<!-- Modal Edit -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="editForm" method="POST" enctype="multipart/form-data" action="{{ route('post.update',$i->id)}}">
            @csrf
            @method('PUT')

        <div class="form-group">
            <label for="n">Judul</label>
            <input type="hidden" required="" id="id" name="id" class="form-control">
            <input type="" required id="n" name="judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="e">Upload File</label>
            <input type="file" required id="e" onclick="uploadFile()" name="file" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit -->

<!-- Destroy Modal -->
<div class="modal fade" id="destroy-modal" tabindex="-1" role="dialog" aria-labelledby="destroy-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="destroy-modalLabel">Yakin Hapus ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger btn-destroy">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- Destroy Modal -->

@stop

@push('js')
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>

<script type="text/javascript">

$(document).ready(function () {
    $('.data-table').DataTable();
});

//   $(function () {

//     var table = $('.data-table').DataTable({
//         // processing: true,
//         // serverSide: true,
//         ajax: "{{ route('admin') }}/admin/post",
//         columns: [
//             {data: 'id' , name: 'id'},
//             {data: 'judul', name: 'judul'},
//             {data: 'file', name: 'file'},
//             {data: 'action', name: 'action'},
//         ]
//     });
//   });


//     // Reset Form
        // function resetForm(){
        //     $("[name='category_id']").val("")
        //     $("[name='judul']").val("")
        //     $("[name='file']").val("")
        // }
    //

     // Create

    // $("#createForm").on("submit",function(e){
    //     e.preventDefault()

    //     $.ajax({
            // url: "admin/post",
    //         method: "POST",
    //         data: $(this).serialize(),
    //         success:function(){
    //             $("#create-modal").modal("hide")
    //             $('.data-table').DataTable().ajax.reload();
    //             flash("success","Data berhasil ditambah")
    //             resetForm()
    //         }
    //     })
    // })

//     // Create

//     // Edit & Update
    // $('body').on("click",".btn-edit",function(){
    //     var id = $(this).attr("id")

    //     $.ajax({
    //         url: "/admin/"+id+"/edit",
    //         method: "GET",
    //         success:function(response){
    //             $("#edit-modal").modal("show")
    //             $("#id").val(response.id)
    //             $("#name").val(response.name)
    //             $("#email").val(response.email)
    //             $("#role").val(response.role)
    //         }
    //     })
    // });

    // $("#editForm").on("submit",function(e){
    //     e.preventDefault()
    //     var id = $("#id").val()

    //     $.ajax({
    //         url: "/admin/user/"+id,
    //         method: "PATCH",
    //         data: $(this).serialize(),
    //         success:function(){
    //             $('.data-table').DataTable().ajax.reload();
    //             $("#edit-modal").modal("hide")
    //             flash("success","Data berhasil diupdate")
    //         }
    //     })
    // })
//     //Edit & Update

    // $('body').on("click",".btn-delete",function(){
    //     var id = $(this).attr("id")
    //     $(".btn-destroy").attr("id",id)
    //     $("#destroy-modal").modal("show")
    // });

    // $(".btn-destroy").on("click",function(){
    //     var id = $(this).attr("id")

    //     $.ajax({
    //         url: "/admin/post/"+id,
    //         method: "DELETE",
    //         success:function(){
    //             $("#destroy-modal").modal("hide")
    //             $('.data-table').DataTable().ajax.reload();
    //             flash('success','Data berhasil dihapus')
    //         }
    //     });
    // })

    // function flash(type,message){
    //     $(".notify").html(`<div class="alert alert-`+type+` alert-dismissible fade show" role="alert">
    //                           `+message+`
    //                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                             <span aria-hidden="true">&times;</span>
    //                           </button>
    //                         </div>`)
    // }


</script>
@endpush
