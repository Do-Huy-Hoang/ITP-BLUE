<div class="container">
    <div class="main-body">

        <div class="row gutters-sm">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row gutters-sm">
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <!-- Display current avatar image -->
                                                <img src="{{ $user->image ? 'data:image/jpeg;base64,' . base64_encode($user->image) : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}" alt="image" class="rounded-circle" width="150" id="currentAvatar">
                                            </div>
                                            <div class="mt-3 d-flex justify-content-center">
                                                <!-- Input to select new avatar -->
                                                <input type="file" name="avatar" id="avatar" accept="image/*" style="display: none;" onchange="previewImage(event)">
                                                <label for="avatar" class="btn btn-secondary">Change Avatar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input id="us_name" type="text" class="form-control" name="us_name"
                                        value="{{ old('us_name', $user->us_name) }}">
                                </div>
                            </div>
                            @error('us_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control" name="us_gender">
                                        <option value="male" {{ $user->us_gender == 'Mmle' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ $user->us_gender == 'female' ? 'selected' : '' }}>
                                            Female</option>
                                        <option value="other" {{ $user->us_gender == 'other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="birthday">Birthday:</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" id="birthday" name="birthday"
                                        value="{{ old('birthday', $user->us_birthday) }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input name="email" id="email" type="email" class="form-control"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input id="us_phone" type="tel" class="form-control" name="us_phone"
                                        value="{{ old('us_phone', $user->us_phone) }}"
                                        pattern="^(84|0[3|5|7|8|9])+([0-9]{8})$"
                                        title="Invalid Vietnamese phone number format">
                                </div>
                            </div>
                            @error('us_phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input id="us_address" type="text" class="form-control" name="us_address"
                                        value="{{ old('us_address', $user->us_address) }}">
                                </div>
                            </div>
                            @error('us_address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-info">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>