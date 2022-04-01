@extends('modalForm')
@section('form')
<form id="dataForm" name="dataForm"  enctype="multipart/form-data">
    <input type="hidden" name="id" id="id">
    <div class="modal-body">
        <div class="form-group">
            <div class="form-line">
               <label for="periode">Periode</label>
               <select class="form-control" name="periode" id="periode" required>
                 <option value="test" disabled>periode</option>
                 <option value="periode 1">periode 1</option>
                 <option value="periode 2">periode 2</option>
                 <option value="periode 3">periode 3</option>
                 <option value="periode 4">periode 4</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="auditee">Auditee</label>
               <select class="form-control" name="auditee" id="auditee" required>
                 <option value="test" disabled>Auditee</option>
                 <option value="Auditee 1">Auditee 1</option>
                 <option value="Auditee 2">Auditee 2</option>
                 <option value="Auditee 3">Auditee 3</option>
                 <option value="Auditee 4">Auditee 4</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="jenis_assessment">Jenis Assessment</label>
               <select class="form-control" name="jenis_assessment" id="jenis_assessment" required>
                <option value="test" hidden>Jenis Assessment</option>
              </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="pka">PKA</label>
               <select class="form-control" name="pka" id="pka" required>
                 <option value="test" disabled>PKA</option>
                 <option value="PKA 1">PKA 1</option>
                 <option value="PKA 2">PKA 2</option>
                 <option value="PKA 3">PKA 3</option>
                 <option value="PKA 4">PKA 4</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="auditor">Auditor</label>
               <select class="form-control" name="auditor" id="auditor" required>
                 <option value="test" disabled>Auditor</option>
                 <option value="Auditor 1">Auditor 1</option>
                 <option value="Auditor 2">Auditor 2</option>
                 <option value="Auditor 3">Auditor 3</option>
                 <option value="Auditor 4">Auditor 4</option>
               </select>
            </div>
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
