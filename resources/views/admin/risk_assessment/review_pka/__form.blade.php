@extends('backend.crud.modal')
@section('input-form')
<div class="form-group">
   <div class="form-line">
      <label for="periode">Periode</label>
      <select class="form-control" name="team_id" id="team" required>
        <option value="" disable>periode</option>
      </select>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="auditee">Auditee</label>
      <select class="form-control" name="auditee" id="auditee" required>
        <option value="" disable>Auditee</option>
      </select>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="jenis_assessment">Jenis Assessment</label>
      <select class="form-control" name="jenis_assessment" id="jenis_assessment" required>
        <option value="" disable>Jenis Assessment</option>
      </select>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="pka">PKA</label>
      <select class="form-control" name="pka" id="pka" required>
        <option value="" disable>PKA</option>
      </select>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="auditor">Auditor</label>
      <select class="form-control" name="auditor" id="auditor" required>
        <option value="" disable>Auditor</option>
      </select>
   </div>
</div>
@endsection
