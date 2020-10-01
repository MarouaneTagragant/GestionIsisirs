
@section('admindashboard')
    <div class="col-md-2 admin_dash">
            <h4>Admin Dashboard</h4>
            <div>
                <a href="#">Home</a><br>
                <a href="{{ route('admin.listUsers') }}">Users list</a><br>
                <a href="{{ route('admin.Sections') }}">Sections list</a><br>
                <a href="{{ route('admin.Niveaux') }}">Niveaux list</a><br>
            </div>
    </div> 
 
@endsection
    

