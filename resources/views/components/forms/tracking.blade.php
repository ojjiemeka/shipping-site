<div class="tracking-form text-left">
    <h2 class="title-1">Track your product</h2>
    <span class="font2-light fs-12">Now you can track your product easily</span>
    <form method="POST" action="{{ route('user.tracking.search') }}">
        @csrf
        <div class="col-md-7 col-sm-7">
            <div class="form-group">
                <input type="text" name="tracking_number" placeholder="Enter your tracking number" required
                    class="form-control box-shadow" value="{{ old('tracking_number') }}">
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="form-group">
                <button type="submit" class="btn-1">Track Package</button>
            </div>
        </div>
    </form>

    @error('tracking_number')
        <div class="font-2 fs-20 mt-3 text-capitalize text-center text-danger">{{ $message }}</div>
    @enderror
</div>
