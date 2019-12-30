@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Donations</h1>
    </div>
    <div class="card shadow mb-4 mr-auto">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">All Donations</h6>
        </div>
        <div class="card-body" style="font-size: 12px;">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Donation ID</th>
                            <th>Donor ID</th>
                            <th>Donation Center ID</th>
                            <th>Pre-Exam ID</th>
                            <th>Lab Scientist ID</th>
                            <th>BloodBag ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DNT191</td>
                            <td>DN191</td>
                            <td>CE191</td>
                            <td>PE191</td>
                            <td>LSC191</td>
                            <td>BB191</td>
                        </tr>
                        <tr>
                            <td>DNT191</td>
                            <td>DN191</td>
                            <td>CE191</td>
                            <td>PE191</td>
                            <td>LSC191</td>
                            <td>BB191</td>
                        </tr>
                        <tr>
                            <td>DNT191</td>
                            <td>DN191</td>
                            <td>CE191</td>
                            <td>PE191</td>
                            <td>LSC191</td>
                            <td>BB191</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')