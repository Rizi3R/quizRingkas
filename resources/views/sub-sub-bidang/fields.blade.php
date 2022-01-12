@if(!empty($subsubBidang))
<div class="form-group">
    <label for="inputDescription">Nombor Sub-Sub Bidang</label>
    <input type="text" class="form-control" name="number" value="{{ $subsubBidang->number ?? '' }}">
</div>
<div class="form-group">
    <label for="inputDescription">Tajuk Sub-Sub Bidang</label>
    <input type="text" class="form-control" name="title" value="{{ $subsubBidang->title ?? '' }}">
</div>
<div class="form-group">
    <label for="inputDescription">Objektif Sub-Sub Bidang</label>
    <textarea id="summernote" class="form-control" rows="4" name="description">{{ $subsubBidang->description ?? '' }}</textarea>
</div>
<div class="form-group">
    <label for="inputStatus">Status</label>
    <select class="form-control custom-select" name="status">
        <option selected disabled>Sila Pilih</option>
        <option {{ $subsubBidang->status == '1' ? 'selected' : '' }} value="1">Aktif</option>
        <option {{ $subsubBidang->status == '0' ? 'selected' : '' }} value="0">Tidak Aktif</option>
    </select>
</div>
@else
<div class="form-group">
    <label for="inputDescription">Nombor Sub-Sub Bidang</label>
    <input type="text" class="form-control" name="number" value="">
</div>
<div class="form-group">
    <label for="inputName">Tajuk Sub-Sub Bidang</label>
    <input type="text" class="form-control" name="title" value="">
</div>
<div class="form-group">
    <label for="inputDescription">Objektif Sub-Sub Bidang</label>
    <textarea id="summernote" class="form-control" rows="4" name="description"></textarea>
</div>
<div class="form-group">
    <label for="inputStatus">Status</label>
    <select class="form-control custom-select" name="status">
        <option selected disabled>Sila Pilih</option>
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option>
    </select>
</div>
@endif