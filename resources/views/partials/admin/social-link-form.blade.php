<div class="form-group mb-3">
    <label>Facebook</label>
    <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $link->facebook ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>WhatsApp</label>
    <input type="text" name="whatsapp" class="form-control" value="{{ old('whatsapp', $link->whatsapp ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>YouTube</label>
    <input type="text" name="youtube" class="form-control" value="{{ old('youtube', $link->youtube ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>LinkedIn</label>
    <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin', $link->linkedin ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Instagram</label>
    <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $link->instagram ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Twitter</label>
    <input type="text" name="twitter" class="form-control" value="{{ old('twitter', $link->twitter ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $link->email ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $link->phone ?? '') }}">
</div>

<div class="form-group mb-3">
    <label>Address</label>
    <textarea name="address" class="form-control" rows="3">{{ old('address', $link->address ?? '') }}</textarea>
</div>
