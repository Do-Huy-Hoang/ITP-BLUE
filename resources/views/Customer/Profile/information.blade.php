<div class="container">
    <div class="main-body">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update', ['id' => $user->id]) }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="us_name"
                                        value="{{ old('us_name', $user->us_name) }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control" name="us_gender">
                                        <option value="male" {{ $user->us_gender == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ $user->us_gender == 'Female' ? 'selected' : '' }}>
                                            Female</option>
                                        <option value="other" {{ $user->us_gender == 'Other' ? 'selected' : '' }}>Other
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
                                    <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                                </div>
                            </div>
                            <hr>
                            @error('us_phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="us_phone"
                                        value="{{ old('us_phone', $user->us_phone) }}"
                                        pattern="^(84|0[3|5|7|8|9])+([0-9]{8})$"
                                        title="Invalid Vietnamese phone number format">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="us_address"
                                        value="{{ old('us_address', $user->us_address) }}">
                                </div>
                            </div>
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