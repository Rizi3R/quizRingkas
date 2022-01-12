@if(!empty($subBidang))
<div class="form-group">
    <label for="inputDescription">Nombor Sub Bidang</label>
    <input type="text" class="form-control" name="number" value="{{ $subBidang->number ?? '' }}">
</div>
<div class="form-group">
    <label for="inputDescription">Tajuk Sub Bidang</label>
    <input type="text" class="form-control" name="title" value="{{ $subBidang->title ?? '' }}">
</div>
<div class="form-group">
    <label for="inputDescription">Objektif Sub Bidang</label>
    <textarea id="summernote" class="form-control" rows="4" name="description">{{ $subBidang->description ?? '' }}</textarea>
</div>
<div class="form-group">
    <label for="inputStatus">Status</label>
    <select class="form-control custom-select" name="status">
        <option selected disabled>Sila Pilih</option>
        <option {{ $subBidang->status == '1' ? 'selected' : '' }} value="1">Aktif</option>
        <option {{ $subBidang->status == '0' ? 'selected' : '' }} value="0">Tidak Aktif</option>
    </select>
</div>
<div class="form-group">
    <label>Sub-Sub Bidang</label>
    <select class="select2" multiple="multiple" data-placeholder="Masukkan Sub-Sub Bidang" style="width: 100%;" name="subsubBidangs[]">
        @foreach($subsubBidangs as $subsubBidang)
        <option value="{{ $subsubBidang->id }}" {{ in_array($subsubBidang->id, $subsubBidangs->toArray()) ? 'selected' : '' }}>{{ $subsubBidang->number }}</option>
        @endforeach
    </select>
</div>
@else
<div class="form-group">
    <label for="inputDescription">Nombor Sub Bidang</label>
    <input type="text" class="form-control" name="number" value="">
</div>
<div class="form-group">
    <label for="inputName">Tajuk Sub Bidang</label>
    <input type="text" class="form-control" name="title" value="">
</div>
<div class="form-group">
    <label for="inputDescription">Objektif Sub Bidang</label>
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
<div class="form-group">
    <label>Sub-Sub Bidang</label>
    <select class="select2" multiple="multiple" data-placeholder="Masukkan Sub-Sub Bidang" style="width: 100%;" name="subsubBidangs[]">
        @foreach($subsubBidangs as $subsubBidang)
        <option value="{{ $subsubBidang->id }}">{{ $subsubBidang->number }}</option>
        @endforeach
    </select>
</div>
@endif