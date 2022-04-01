@extends('modalForm')
@section('form')
<form id="dataForm" name="dataForm"  enctype="multipart/form-data">
    <input type="hidden" name="id" id="id">
    <div class="modal-body">
        <div class="form-group">
            <div class="form-line">
               <label for="tahun">tahun</label>
               <select class="form-control" name="tahun" id="tahun" required>
                 <option value="tahun" disabled>tahun</option>
                 <option value="tahun 1 ">tahun 1</option>
                 <option value="tahun 2 ">tahun 2</option>
                 <option value="tahun 3 ">tahun 3</option>
                 <option value="tahun 4 ">tahun 4</option>
                 <option value="tahun 5 ">tahun 5</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="jenis_audit">Jenis Audit</label>
               <select class="form-control" name="jenis_audit" id="jenis_audit" required>
                <option value="" hidden>Jenis Audit</option>
                <option value="test" hidden>Jenis Audit</option>
                <option value="test" hidden>Jenis Audit</option>
                <option value="test" hidden>Jenis Audit</option>
              </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="auditee">Auditee</label>
               <select class="form-control" name="auditee" id="auditee" required>
                 <option value="" disabled>Auditee</option>
                 <option value="Auditee 1" disabled>Auditee 1</option>
                 <option value="Auditee 2" disabled>Auditee 2</option>
                 <option value="Auditee 3" disabled>Auditee 3</option>
                 <option value="Auditee 4" disabled>Auditee 4</option>
                 <option value="Auditee 5" disabled>Auditee 5</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="supervisi_wakil">Supervisi Wakil</label>
               <select class="form-control" name="supervisi_wakil" id="supervisi_wakil" required>
                 <option value="test" disabled>Supervisi Wakil</option>
                 <option value="Supervisi Wakil 1">Supervisi Wakil 1</option>
                 <option value="Supervisi Wakil 2">Supervisi Wakil 2</option>
                 <option value="Supervisi Wakil 3">Supervisi Wakil 3</option>
                 <option value="Supervisi Wakil 4">Supervisi Wakil 4</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="supervisi_pka">Supervisi PKA</label>
               <select class="form-control" name="supervisi_pka" id="supervisi_pka" required>
                 <option value="test" disabled>Supervisi PKA</option>
                 <option value="Supervisi pka 1">Supervisi PKA 1</option>
                 <option value="Supervisi pka 2">Supervisi PKA 2</option>
                 <option value="Supervisi pka 3">Supervisi PKA 3</option>
                 <option value="Supervisi pka 4">Supervisi PKA 4</option>
               </select>
            </div>
         </div>
         <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="avp">AVP</label>
                       <input type="text" class="form-control" name="avp" id="avp">
                   </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="mgr">MGR</label>
                       <input type="text" class="form-control" name="mgr" id="mgr">
                   </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="amgr">AMGR</label>
                       <input type="text" class="form-control" name="amgr" id="amgr">
                   </div>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="persiapan">persiapan</label>
                       <input type="text" class="form-control" name="persiapan" id="persiapan">
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="perjalanan">perjalanan</label>
                       <input type="text" class="form-control" name="perjalanan" id="perjalanan">
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="pelaksanaan">pelaksanaan</label>
                       <input type="text" class="form-control" name="pelaksanaan" id="pelaksanaan">
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="Tanggapan">Tanggapan</label>
                       <input type="text" class="form-control" name="Tanggapan" id="Tanggapan">
                   </div>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="diskusi">diskusi</label>
                       <input type="text" class="form-control" name="diskusi" id="diskusi">
                   </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="total">total</label>
                       <input type="text" class="form-control" name="total" id="total" disabled>
                   </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="lha">lha</label>
                       <input type="text" class="form-control" name="lha" id="lha">
                   </div>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <div class="form-line">
                       <label for="mandays">mandays</label>
                       <input type="text" class="form-control" name="mandays" id="mandays">
                   </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="form-line">
                       <label for="total_hk">total_hk</label>
                       <input type="text" class="form-control" name="total_hk" id="total_hk">
                   </div>
                </div>
            </div>
         </div>
         <label for="">Anggaran Tim Audit</label>
         <div class="row border rounded">
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="anggaran_tim_audit_dop">DOP</label>
                       <input type="text" class="form-control" name="anggaran_tim_audit_dop" id="anggaran_tim_audit_dop">
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="anggaran_tim_audit_penginapan">Penginapan</label>
                       <input type="text" class="form-control" name="anggaran_tim_audit_penginapan" id="anggaran_tim_audit_penginapan">
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="anggaran_tim_audit_transport">Transport</label>
                       <input type="text" class="form-control" name="anggaran_tim_audit_transport" id="anggaran_tim_audit_transport">
                   </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="form-line">
                       <label for="anggaran_tim_audit_pulsa">Pulsa</label>
                       <input type="text" class="form-control" name="anggaran_tim_audit_pulsa" id="anggaran_tim_audit_pulsa">
                   </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="form-line">
                       <label for="sub_total_anggaran_tim_audit">Sub Total</label>
                       <input type="text" class="form-control" name="sub_total_anggaran_tim_audit" id="sub_total_anggaran_tim_audit" disabled>
                   </div>
                </div>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="hari_supervisi">Hari Supervisi</label>
               <input type="text" class="form-control" name="hari_supervisi" id="hari_supervisi">
           </div>
        </div>
         <label for="">Anggaran Tim Audit</label>
         <div class="row border rounded">
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="anggaran_supervisi_dop">DOP</label>
                       <input type="text" class="form-control" name="anggaran_supervisi_dop" id="anggaran_supervisi_dop">
                   </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="anggaran_supervisi_penginapan">Penginapan</label>
                       <input type="text" class="form-control" name="anggaran_supervisi_penginapan" id="anggaran_supervisi_penginapan">
                   </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="form-line">
                       <label for="anggaran_supervisi_transport">Transport</label>
                       <input type="text" class="form-control" name="anggaran_supervisi_transport" id="anggaran_supervisi_transport">
                   </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="form-line">
                       <label for="sub_total_anggaran_supervisi">Sub Total</label>
                       <input type="text" class="form-control" name="sub_total_anggaran_supervisi" id="sub_total_anggaran_supervisi" disabled>
                   </div>
                </div>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="total_anggaran">Total Anggaran</label>
               <input type="text" class="form-control" name="total_anggaran" id="total_anggaran">
           </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary"
            data-bs-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Close</span>
        </button>
        <button type="button" id="saveBtn" class="btn btn-primary ml-1"
            data-bs-dismiss="modal">
            <i class="bx bx-check d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Save</span>
        </button>
    </div>
</form>
@endsection
