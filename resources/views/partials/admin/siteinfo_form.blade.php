<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $info->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Slug</label>
    <input type="text" name="slug" value="{{ old('slug', $info->slug ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Profile Image</label>
    @if(!empty($info->profile_img))
        <div><img src="{{ asset('storage/'.$info->profile_img) }}" width="50"></div>
    @endif
    <input type="file" name="profile_img" class="form-control">
</div>

<div class="mb-3">
    <label>Logo</label>
    @if(!empty($info->logo))
        <div><img src="{{ asset('storage/'.$info->logo) }}" width="50"></div>
    @endif
    <input type="file" name="logo" class="form-control">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $info->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="1" {{ old('status', $info->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
        <option value="0" {{ old('status', $info->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
    </select>
</div>
