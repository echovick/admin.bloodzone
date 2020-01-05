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
                            <th>Transfusion ID</th>
                            <th>Patient ID</th>
                            <th>Pre Exam ID</th>
                            <th>Center ID</th>
                            <th>BloodBag ID</th>
                            <th>Lab Scientist ID</th>
                            <th>Ammount Transfused</th>
                            <th>Date Of Transfusion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TF040120201</td>
                            <td>P201</td>
                            <td>PE191</td>
                            <td>CE201</td>
                            <td>BB203</td>
                            <td>LS203</td>
                            <td>3 Pints</td>
                            <td>20-3-2020</td>
                        </tr>
                        <tr>
                            <td>TF040120201</td>
                            <td>P201</td>
                            <td>PE191</td>
                            <td>CE201</td>
                            <td>BB203</td>
                            <td>LS203</td>
                            <td>3 Pints</td>
                            <td>20-3-2020</td>
                        </tr>
                        <tr>
                            <td>TF040120201</td>
                            <td>P201</td>
                            <td>PE191</td>
                            <td>CE201</td>
                            <td>BB203</td>
                            <td>LS203</td>
                            <td>3 Pints</td>
                            <td>20-3-2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')