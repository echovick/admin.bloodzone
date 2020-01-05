@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transactions</h1>
    </div>
    <div class="card shadow mb-4 mr-auto">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">All Transactions</h6>
        </div>
        <div class="card-body" style="font-size: 12px;">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Seller ID</th>
                            <th>Buyer ID</th>
                            <th>Blood Type</th>
                            <th>No Of Units</th>
                            <th>Price Per Units</th>
                            <th>Total Sales Price</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>040120201</td>
                            <td>CE201</td>
                            <td>CE191</td>
                            <td>A+</td>
                            <td>3</td>
                            <td><del>N</del>15,000.00</td>
                            <td><del>N</del>45,000.00</td>
                            <td><label class="btn btn-success btn-sm text-xs p-1 m-0">PAID</label></td>
                            <td class="text-success"><i class="fa fa-check"></i> Delivered</td>
                        </tr>
                        <tr>
                            <td>050120202</td>
                            <td>CE191</td>
                            <td>CE201</td>
                            <td>B+</td>
                            <td>8</td>
                            <td><del>N</del>12,000.00</td>
                            <td><del>N</del>96,000.00</td>
                            <td><label class="btn btn-warning btn-sm text-xs p-1 m-0">PENDING</label></td>
                            <td class="text-warning"><i class="fa fa-undo"></i> Awaiting</td>
                        </tr>
                        <tr>
                            <td>060120203</td>
                            <td>DN191</td>
                            <td>CE191</td>
                            <td>AB+</td>
                            <td>2</td>
                            <td><del>N</del>9,000.00</td>
                            <td><del>N</del>18,000.00</td>
                            <td><label class="btn btn-success btn-sm text-xs p-1 m-0">PAID</label></td>
                            <td class="text-success"><i class="fa fa-check"></i> Delivered</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')