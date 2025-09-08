@extends('admin.layouts.app')

@section('content')
<form action="{{ route('escorts.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="import_file" accept=".csv, .xlsx, .xls">
    <button type="submit">Import Escorts</button>
</form>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('escorts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Category -->
                <div class="form-group">
                    <label>Category</label>
                    <select name="category" class="form-control" required>
                        <option value="female-escorts">Female Escorts</option>
                        <option value="male-escorts">Male Escorts</option>
                        <option value="trans-escorts">Trans Escorts</option>
                    </select>
                </div>


                <!-- 🔹 SEO Section -->
                <div class="mb-4 card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">SEO Settings</h3>
                    </div>
                    <div class="card-body row">

                        <div class="form-group col-md-12">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" class="form-control"
                                placeholder="Enter custom meta title">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control" placeholder="Enter meta description"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control"
                                placeholder="e.g. Goa Escorts, VIP Call Girls, Female Escorts">
                            <small class="text-muted">Comma separated keywords</small>
                        </div>


                        <div class="form-group col-md-12">
                            <label>Escorts Slug Url</label>
                            <input type="text" name="slug" class="form-control"
                                placeholder="Enter custom Escorts Slug Url">
                        </div>

                    </div>
                </div>

{{---


                <!-- Prices -->
                <div class="mb-4 card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Prices</h3>
                    </div>
                    <div class="card-body row">
                        <!-- Incalls -->
                        <div class="form-group col-md-6">
                            <label><input type="checkbox" name="incall_enabled" checked> Incalls</label>
                            <input type="number" name="rate_per_hour_incall" class="mt-2 form-control"
                                placeholder="Per hour from">
                            <select name="currency_incall" class="mt-2 form-control">
                                <option>INR</option>
                                <option>USD</option>
                            </select>
                        </div>

                        <!-- Outcalls -->
                        <div class="form-group col-md-6">
                            <label><input type="checkbox" name="outcall_enabled" checked> Outcalls</label>
                            <input type="number" name="rate_per_hour_outcall" class="mt-2 form-control"
                                placeholder="Per hour from">
                            <select name="currency_outcall" class="mt-2 form-control">
                                <option>INR</option>
                                <option>USD</option>
                            </select>
                        </div>
                    </div>
                </div>


--}}
                <!-- About Me -->
                <div class="mb-4 card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <div class="card-body row">


                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <!-- Custom Title add here -->
                        <div class="form-group col-md-6">
                            <label>Custom Title</label>
                            <input type="text" name="custom_title" class="form-control" placeholder="Enter custom title">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Location</label>
                            <select name="location" class="form-control" required>
                                <option value="">🌍 Select Location</option>
                                @foreach ($beaches as $beach)
                                    <option value="{{ $beach->slug }}">{{ $beach->name }} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Experience (years)</label>
                            <input type="number" name="experience" class="form-control">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <label class="form-check-label">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="male">
                                <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="trans">
                                <label class="form-check-label">Transsexual</label>
                            </div>
                        </div>


                        <div class="form-group col-md-12">
                            <label>Marital Status</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="marital_status" value="married"
                                    required>
                                <label class="form-check-label">Married</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="marital_status" value="unmarried"
                                    required>
                                <label class="form-check-label">Unmarried</label>
                            </div>
                        </div>


                        <div class="form-group col-md-12">
                            <label>Bio</label>
                            <textarea name="bio" id="summernote" rows="10" cols="80">Hello from Summernote Editor!</textarea>
                        </div>


                        <div class="form-group col-md-12">
                            <label>About</label>
                            <textarea name="about" id="div_editor1" rows="10" cols="80">This is a default toolbar demo of Rich text editor.</textarea>
                        </div>


                        <div class="form-group col-md-12">
                            <label>Services Offered</label><br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="services[]" value="massage"
                                    id="service_massage">
                                <label class="form-check-label" for="service_massage">Massage</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="services[]" value="escort_service"
                                    id="service_escort">
                                <label class="form-check-label" for="service_escort">Escort Service</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="services[]"
                                    value="party_companion" id="service_party">
                                <label class="form-check-label" for="service_party">Party Companion</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="services[]"
                                    value="travel_companion" id="service_travel">
                                <label class="form-check-label" for="service_travel">Travel Companion</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="services[]" value="dinner_date"
                                    id="service_dinner">
                                <label class="form-check-label" for="service_dinner">Dinner Date</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="services[]" value="night_out"
                                    id="service_night_out">
                                <label class="form-check-label" for="service_night_out">Night Out</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="services[]" value="bdsm"
                                    id="service_bdsm">
                                <label class="form-check-label" for="service_bdsm">BDSM</label>
                            </div>

                            <!-- Add more options as needed -->
                        </div>


                        <div class="form-group col-md-6">
                            <label>Profile Photo</label>
                            <input type="file" name="profile_photo" class="form-control-file">
                        </div>


                        <div class="form-group col-md-6">
                            <label>Thumbnail 1</label>
                            <input type="file" name="thumb1" class="form-control-file">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Thumbnail 2</label>
                            <input type="file" name="thumb2" class="form-control-file">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Thumbnail 3</label>
                            <input type="file" name="thumb3" class="form-control-file">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Languages Spoken</label>
                            <input type="text" name="languages_spoken" class="form-control"
                                placeholder="E.g., English, Hindi">
                        </div>



                        <!-- Existing fields ke baad, e.g., Languages Spoken ke baad -->

                        <div class="form-group col-md-6">
                            <label>Height</label>
                            <input type="text" name="height" class="form-control" placeholder="E.g., 5'6&quot;">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Bust</label>
                            <input type="text" name="bust" class="form-control" placeholder="E.g., 34B">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Nationality</label>
                            <input type="text" name="nationality" class="form-control" placeholder="E.g., Indian">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Orientation</label>
                            <input type="text" name="orientation" class="form-control"
                                placeholder="E.g., Straight, Bisexual">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Ethnicity</label>
                            <input type="text" name="ethnicity" class="form-control" placeholder="E.g., Asian">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Shaved</label>
                            <select name="shaved" class="form-control">
                                <option value="">Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="trimmed">Trimmed</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Hair Color</label>
                            <input type="text" name="hair_color" class="form-control"
                                placeholder="E.g., Black, Blonde">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Smokes</label>
                            <select name="smokes" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Outcall Rate (Per hour)</label>
                            <input type="number" name="rate_per_hour_outcall" class="form-control"
                                placeholder="Enter Outcall Rate">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Currency for Outcall</label>
                            <select name="currency_outcall" class="form-control">
                                <option>INR</option>
                                <option>USD</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>VIP</label>
                            <select name="vip" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Verified</label>
                            <select name="verified" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>



                        <div class="form-group col-md-6">
                            <label>Rating</label>
                            <input type="number" step="0.01" name="rating" class="form-control"
                                placeholder="E.g., 4.5">
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-check-circle"></i> Submit Profile
                </button>
            </form>
        </div>
    </div>
@endsection
