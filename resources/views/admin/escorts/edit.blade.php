@extends('admin.layouts.app')

@section('content')
    <h1 class="mb-4 text-2xl font-bold">Edit Escort: {{ $escort->name }}</h1>

    <form action="{{ route('admin.escorts.status.update', $escort->id) }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')

          <!-- 🔹 SEO Section -->
        <div class="mb-4 card card-secondary">
            <div class="card-header">
                <h3 class="card-title">SEO Settings</h3>
            </div>
            <div class="card-body row">

                <div class="form-group col-md-12">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control"
                        value="{{ old('meta_title', $escort->meta_title) }}" placeholder="Enter custom meta title">
                </div>

                <div class="form-group col-md-12">
                    <label>Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control" placeholder="Enter meta description">{{ old('meta_description', $escort->meta_description) }}</textarea>
                </div>

                <div class="form-group col-md-12">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control"
                        value="{{ old('meta_keywords', $escort->meta_keywords) }}"
                        placeholder="e.g. Goa Escorts, VIP Call Girls, Female Escorts">
                    <small class="text-muted">Comma separated keywords</small>
                </div>

                <div class="form-group col-md-12">
                    <label>Escorts Slug Url</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug', $escort->slug) }}"
                        placeholder="Enter custom Escorts Slug Url">
                </div>
            </div>
        </div>

        <!-- 🔹 Custom Title -->
        <div class="form-group col-md-6">
            <label>Custom Title</label>
            <input type="text" name="custom_title" class="form-control"
                value="{{ old('custom_title', $escort->custom_title) }}" placeholder="Enter custom title">
        </div>


        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $escort->name) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Gender</label><br>
            <label><input type="radio" name="gender" value="female"
                    {{ old('gender', $escort->gender) == 'female' ? 'checked' : '' }}> Female</label>
            <label><input type="radio" name="gender" value="male"
                    {{ old('gender', $escort->gender) == 'male' ? 'checked' : '' }}> Male</label>
            <label><input type="radio" name="gender" value="trans"
                    {{ old('gender', $escort->gender) == 'trans' ? 'checked' : '' }}> Trans</label>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control" required>
                <option value="female-escorts"
                    {{ old('category', $escort->category) == 'female-escorts' ? 'selected' : '' }}>Female Escorts</option>
                <option value="male-escorts" {{ old('category', $escort->category) == 'male-escorts' ? 'selected' : '' }}>
                    Male Escorts</option>
                <option value="trans-escorts" {{ old('category', $escort->category) == 'trans-escorts' ? 'selected' : '' }}>
                    Trans Escorts</option>
            </select>
        </div>



        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" value="{{ old('age', $escort->age) }}" class="form-control" min="18"
                max="100" required>
        </div>

        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" value="{{ old('location', $escort->location) }}" class="form-control"
                required>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $escort->phone) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $escort->email) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Rate per Hour</label>
            <input type="number" name="rate_per_hour" value="{{ old('rate_per_hour', $escort->rate_per_hour) }}"
                class="form-control" min="0" step="0.01">
        </div>

        <div class="form-group">
            <label>Bio</label>
            <textarea id="summernote" name="bio" class="form-control" rows="5">{{ old('bio', $escort->bio) }}</textarea>
        </div>


        <div class="form-group">
            <label>About</label>
            <textarea id="div_editor1" name="about" class="form-control" rows="5">{{ old('about', $escort->about) }}</textarea>
        </div>

        <div class="form-group">
            <label>Services</label>
            <textarea  name="services" class="form-control" rows="3" required>{{ old('services', $escort->services) }}</textarea>
        </div>

        <div class="form-group">
            <label>Profile Photo</label>
            <input type="file" name="profile_photo" class="form-control-file">
            @if ($escort->profile_photo)
                <img src="{{ asset('storage/' . $escort->profile_photo) }}" alt="Profile Photo"
                    style="max-width:120px; margin-top:10px;">
            @endif
        </div>

          <div class="form-group">
            <label>Thumb1</label>
            <input type="file" name="thumb1" class="form-control-file">
            @if ($escort->thumb1)
                <img src="{{ asset('storage/' . $escort->thumb1) }}" alt="Thumb1"
                    style="max-width:120px; margin-top:10px;">
            @endif
        </div>
          <div class="form-group">
            <label>Thumb2</label>
            <input type="file" name="thumb2" class="form-control-file">
            @if ($escort->thumb2)
                <img src="{{ asset('storage/' . $escort->thumb2) }}" alt="Thumb2"
                    style="max-width:120px; margin-top:10px;">
            @endif
        </div>
          <div class="form-group">
            <label>Thumb3</label>
            <input type="file" name="thumb3" class="form-control-file">
            @if ($escort->thumb3)
                <img src="{{ asset('storage/' . $escort->thumb3) }}" alt="Thumb4"
                    style="max-width:120px; margin-top:10px;">
            @endif
        </div>

        <div class="form-group">
            <label>Rating</label>
            <input type="number" step="0.01" min="0" max="5" name="rating"
                value="{{ old('rating', $escort->rating) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Verified</label>
            <select name="verified" class="form-control" required>
                <option value="0" {{ old('verified', $escort->verified) == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ old('verified', $escort->verified) == 1 ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" value="{{ old('status', $escort->status) }}" class="form-control"
                placeholder="e.g. active, pending">
        </div>

        <div class="form-group">
            <label>Experience (Years)</label>
            <input type="number" name="experience" value="{{ old('experience', $escort->experience) }}"
                class="form-control" min="0" max="80">
        </div>

        <div class="form-group">
            <label>Languages Spoken</label>
            <input type="text" name="languages_spoken"
                value="{{ old('languages_spoken', $escort->languages_spoken) }}" class="form-control"
                placeholder="E.g., English, Hindi">
        </div>

        <div class="form-group">
            <label>VIP</label>
            <select name="vip" class="form-control" required>
                <option value="0" {{ old('vip', $escort->vip) == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ old('vip', $escort->vip) == 1 ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <div class="form-group">
            <label>Height</label>
            <input type="text" name="height" value="{{ old('height', $escort->height) }}" class="form-control"
                placeholder="E.g., 5'6&quot;">
        </div>

        <div class="form-group">
            <label>Bust</label>
            <input type="text" name="bust" value="{{ old('bust', $escort->bust) }}" class="form-control"
                placeholder="E.g., 34B">
        </div>

        <div class="form-group">
            <label>Nationality</label>
            <input type="text" name="nationality" value="{{ old('nationality', $escort->nationality) }}"
                class="form-control" placeholder="E.g., Indian">
        </div>

        <div class="form-group">
            <label>Orientation</label>
            <input type="text" name="orientation" value="{{ old('orientation', $escort->orientation) }}"
                class="form-control" placeholder="E.g., Straight, Bisexual">
        </div>

        <div class="form-group">
            <label>Ethnicity</label>
            <input type="text" name="ethnicity" value="{{ old('ethnicity', $escort->ethnicity) }}"
                class="form-control" placeholder="E.g., Asian">
        </div>

        <div class="form-group">
            <label>Shaved</label>
            <select name="shaved" class="form-control">
                <option value="" {{ old('shaved', $escort->shaved) == '' ? 'selected' : '' }}>Select</option>
                <option value="yes" {{ old('shaved', $escort->shaved) == 'yes' ? 'selected' : '' }}>Yes</option>
                <option value="no" {{ old('shaved', $escort->shaved) == 'no' ? 'selected' : '' }}>No</option>
                <option value="trimmed" {{ old('shaved', $escort->shaved) == 'trimmed' ? 'selected' : '' }}>Trimmed
                </option>
            </select>
        </div>

        <div class="form-group">
            <label>Hair Color</label>
            <input type="text" name="hair_color" value="{{ old('hair_color', $escort->hair_color) }}"
                class="form-control" placeholder="E.g., Black, Blonde">
        </div>

        <div class="form-group">
            <label>Smokes</label>
            <select name="smokes" class="form-control" required>
                <option value="0" {{ old('smokes', $escort->smokes) == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ old('smokes', $escort->smokes) == 1 ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <div class="form-group">
            <label>Outcall Rate (Per Hour)</label>
            <input type="number" step="0.01" min="0" name="outcall_rate"
                value="{{ old('outcall_rate', $escort->outcall_rate) }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Marital Status</label><br>
            <label><input type="radio" name="marital_status" value="married"
                    {{ old('marital_status', $escort->marital_status) == 'married' ? 'checked' : '' }}> Married</label>
            <label><input type="radio" name="marital_status" value="unmarried"
                    {{ old('marital_status', $escort->marital_status) == 'unmarried' ? 'checked' : '' }}> Unmarried</label>
        </div>

        <button type="submit" class="mt-3 btn btn-primary">Update Escort</button>
    </form>
@endsection
