@if(!empty($bidang))
<div class="form-group">
    <label for="inputDescription">Nombor Bidang</label>
    <input type="text" class="form-control" name="number" value="{{ $bidang->number ?? '' }}">
</div>
<div class="form-group">
    <label for="inputName">Tajuk Bidang</label>
    <input type="text" class="form-control" name="title" value="{{ $bidang->title ?? '' }}">
</div>
<div class="form-group">
    <label for="inputDescription">Objektif Bidang</label>
    <textarea id="summernote" class="form-control" rows="4" name="description">{{ $bidang->description ?? '' }}</textarea>
</div>
<div class="form-group">
    <label for="inputStatus">Status</label>
    <select class="form-control custom-select" name="status">
        <option selected disabled>Sila Pilih</option>
        <option {{ $bidang->status == '1' ? 'selected' : '' }} value="1">Aktif</option>
        <option {{ $bidang->status == '0' ? 'selected' : '' }} value="0">Tidak Aktif</option>
    </select>
</div>
<div class="form-group">
    <label>Sub Bidang</label>
    <select class="select2" multiple="multiple" data-placeholder="Masukkan Sub Bidang" style="width: 100%;" name="subBidangs[]">
        @foreach($subBidangs as $subBidang)
            <option value="{{ $subBidang->id }}" {{ in_array($subBidang->id, $subBidangs->toArray()) ? 'selected' : '' }}>{{ $subBidang->number }}</option>
        @endforeach
    </select>
</div>
@else
<div class="form-group">
    <label for="inputDescription">Nombor Bidang</label>
    <input type="text" class="form-control" name="number" value="">
</div>
<div class="form-group">
    <label for="inputName">Tajuk Bidang</label>
    <input type="text" class="form-control" name="title" value="">
</div>
<div class="form-group">
    <label for="inputDescription">Objektif Bidang</label>
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
    <label>Sub Bidang</label>
    <select class="select2" multiple="multiple" data-placeholder="Masukkan Sub Bidang" style="width: 100%;" name="subBidangs[]">
        @foreach($subBidangs as $subBidang)
            <option value="{{ $subBidang->id }}">{{ $subBidang->number }}</option>
        @endforeach
    </select>
</div>
@endif