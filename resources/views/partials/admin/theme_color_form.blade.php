<style>
    .color_height{
        height: 8rem;
    }
</style>
<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control " value="{{ $theme->name ?? old('name') }}" required>
</div>

<div class="mb-3">
    <label>Primary Color</label>
    <input type="color" name="primary" class="form-control color_height" value="{{ $theme->primary ?? '#007bff' }}">
</div>

<div class="mb-3">
    <label>Secondary Color</label>
    <input type="color" name="secondary" class="form-control color_height" value="{{ $theme->secondary ?? '#6c757d' }}">
</div>

<div class="mb-3">
    <label>Base Color</label>
    <input type="color" name="base" class="form-control color_height" value="{{ $theme->base ?? '#ffffff' }}">
</div>

<div class="mb-3">
    <label>Accent Color</label>
    <input type="color" name="accent" class="form-control color_height" value="{{ $theme->accent ?? '#ffc107' }}">
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control" required>
        <option value="1" {{ (isset($theme) && $theme->status) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ (isset($theme) && !$theme->status) ? 'selected' : '' }}>Inactive</option>
    </select>
</div>
