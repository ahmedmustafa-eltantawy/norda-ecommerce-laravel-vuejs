@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div id="card-view">
        <div class="row">
            <customer-invoices></customer-invoices>
        </div>
    </div>
</div>
@endsection
