@section('title', 'Dashboard - Shubhanu Eye Hospital')
@prepend('head-script')
@endprepend
<div class="">
    <div class="row g-3 mb-4">
        <h2>Dashboard</h2>
        <p class="pt-0 mt-0">Welcome to the Shubhanu Eye Hospital Admin Panel.</p>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <h6>Total Blogs</h6>
                <h3 class="subheading">{{$allblogs}}</h3>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <h6>Total Users</h6>
                <h3 class="subheading">3</h3>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <h6>Total Messages</h6>
                <h3 class="subheading">12</h3>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card shadow-sm p-3">
                <h6>Upcoming</h6>
                <h3 class="subheading">-</h3>
            </div>
        </div>
    </div>
   
</div>


@push('foot-script')

@endpush