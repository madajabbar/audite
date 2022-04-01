@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/all.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    table.dataTable td{
        padding: 15px 8px;
    }
    .fontawesome-icons .the-icon svg {
        font-size: 24px;
    }
</style>
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>{{$title}}</h3>
            <!-- Button trigger for login form modal -->

        </div>
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    {{$subtitle}}
                    <br>
                    <a href="{{route('rat.index')}}" class="btn rounded-pill btn-outline-warning">
                        View RAT
                    </a>
                </div>
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Kode RAT</th>
                                <th>Nama Penugasan</th>
                                <th>Auditee</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Realisasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.risk_assessment.assign_assessment.__form')

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://ahmadsaugi.com">A. Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('js')
<script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendors/fontawesome/all.min.js')}}"></script>


<script type="text/javascript">
    // Jquery Datatable
    $(function (){
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

        var jquery_datatable = $("#table1").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('assign-assessment.index')}}",
            columns:
                [{
                data: 'DT_RowIndex',
                orderable: false
                },
                {
                    data: 'periode',
                    orderable: true
                },
                {
                    data: 'auditee',
                    orderable: true
                },
                {
                    data: 'jenis_assessment',
                    orderable: true
                },

                {
                    data: 'pka',
                    orderable: true
                },
                {
                    data: 'auditor',
                    orderable: true
                },
                {
                    data: 'action',
                    name: '#',
                    orderable: false
                },
            ],
            order: [[0, 'desc']]
        })

    });
    $('body').on('click', '.deleteProduct', function () {

        var data_id = $(this).data("id");
        confirm("Are You sure want to delete !");

        $.ajax({
            type: "DELETE",
            url: "{{ route('assign-assessment.store') }}"+'/'+data_id,
            success: function (data) {
                reloadDatatable();
                Swal.fire({
                        icon: 'warning',
                        title: 'Data berhasil dihapus',
                        })
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    $('body').on('click', '.editProduct', function () {
      var data_id = $(this).data('id');
      $.get("{{ route('assign-assessment.index') }}" +'/' + data_id +'/edit', function (data) {
          $('#myModalLabel33').html("Edit Risk Assessment");
          $('#saveBtn').val("edit");
          $('#inlineForm').modal('show');
          $('#id').val(data.id);
          $('#periode').val(data.periode);
          $('#jenis_assessment').val(data.jenis_assessment);
          $('#auditee').val(data.auditee);
          $('#auditor').val(data.auditor);
          $('#pka').val(data.pka);
      })
   });

    function reloadDatatable() {
        $('#table1').DataTable().ajax.reload();
    }
</script>
<script type="text/javascript">
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                var myform = document.getElementById('dataForm');
                var formData = new FormData(myform);

                $.ajax({
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                url: "{{ route('assign-assessment.store') }}",
                type: "POST",
                dataType: 'json',

                success: function (data) {

                    reloadDatatable();
                    $('#dataForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#saveBtn').html('success');

                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil dimasukan',
                        })
                },
                error: function (data) {
                    console.log('Error:', data);
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Error!',
                        })
                    $('#saveBtn').html('Error');
                }
            });
        });

    });
</script>
@endsection
