@extends('app')
@section('idishumcontent')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3" style=" height:100vh;">
                <div class="row">
                    <div class="col-12" >
                        <div class="side-panel p-3 shadow" style="height:100%; background:#f5fbf1;">
                            <div class="profile-image-div d-flex justify-content-center" style="margin:0 auto; ">
                                <div class="dash_profile_img p-1 mt-3 " style="width: 9rem; height: 9rem; background:white; border-radius:50%;">
                                    <img src="https://cdn4.iconfinder.com/data/icons/eldorado-user/40/user-512.png" alt="...">
                                </div>
                            </div>
                            <div class="admin-details text-center mt-4">
                                <h2>Admin Name</h2>
                            </div>
                            <div class="admin-setting">
                                <ul class="admin-setting list-group list-group-flush p-3 mt-3 text-left font-weight-bold"> 
                                    <li class="list-group-item">Profile</li>
                                    <li class="list-group-item active">All Articles</li>
                                    <li class="list-group-item active">Category</li>
                                    <li class="list-group-item">All Users</li>
                                    <li class="list-group-item">Sign Out</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 col-lg-9">
                <div class="row">
                    <div class="col-12 mt-4 mb-4 d-flex justify-content-center">
                        <h1 class="text-dark">All Articles</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{-- <h2 class="text-left mb-4 ml-4">Post Listing</h2> --}}
                        <div class="gymlisting p-2">
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Name of the Article </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm">Open</button>
                                    </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm">Open</button>
                                    </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm">Open</button>
                                    </td>
                                    <td><span class="badge badge-danger">Inactive</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Approve</button>
                                        <button type="button" class="btn btn-danger btn-sm">Reject</button>   
                                    </td>
                                    </tr>
                                </tbody>
                            </table>       
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection