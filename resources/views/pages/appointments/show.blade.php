@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Appointments</h1>
    </div>
    <div class="card shadow mb-4 mr-auto">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">All Appointments</h6>
        </div>
        <div class="card-body" style="font-size: 12px;">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Identification Number</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>DN/19/1</td>
                            <td>Eze Uchechukwu</td>
                            <td>30-12-2019</td>
                            <td>12PM</td>
                            <td style="color:green">Accepted</td>
                            <td>
                                <button class="btn btn-success btn-sm" style="font-size:10px;">
                                    Accept
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" style="font-size: 10px;">Decline
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>DN/19/1</td>
                            <td>Eze Uchechukwu</td>
                            <td>30-12-2019</td>
                            <td>12PM</td>
                            <td style="color:green">Accepted</td>
                            <td>
                                <button class="btn btn-success btn-sm" style="font-size:10px;">
                                    Accept
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" style="font-size: 10px;">Decline
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>DN/19/1</td>
                            <td>Eze Uchechukwu</td>
                            <td>30-12-2019</td>
                            <td>12PM</td>
                            <td style="color:green">Accepted</td>
                            <td>
                                <button class="btn btn-success btn-sm" style="font-size:10px;">
                                    Accept
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" style="font-size: 10px;">Decline
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>DN/19/1</td>
                            <td>Eze Uchechukwu</td>
                            <td>30-12-2019</td>
                            <td>12PM</td>
                            <td style="color:green">Accepted</td>
                            <td>
                                <button class="btn btn-success btn-sm" style="font-size:10px;">
                                    Accept
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" style="font-size: 10px;">Decline
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>DN/19/1</td>
                            <td>Eze Uchechukwu</td>
                            <td>30-12-2019</td>
                            <td>12PM</td>
                            <td style="color:green">Accepted</td>
                            <td>
                                <button class="btn btn-success btn-sm" style="font-size:10px;">
                                    Accept
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" style="font-size: 10px;">Decline
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>DN/19/1</td>
                            <td>Eze Uchechukwu</td>
                            <td>30-12-2019</td>
                            <td>12PM</td>
                            <td style="color:green">Accepted</td>
                            <td>
                                <button class="btn btn-success btn-sm" style="font-size:10px;">
                                    Accept
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" style="font-size: 10px;">Decline
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>DN/19/1</td>
                            <td>Eze Uchechukwu</td>
                            <td>30-12-2019</td>
                            <td>12PM</td>
                            <td style="color:green">Accepted</td>
                            <td>
                                <button class="btn btn-success btn-sm" style="font-size:10px;">
                                    Accept
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" style="font-size: 10px;">Decline
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')