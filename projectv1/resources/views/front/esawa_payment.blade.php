@extends('front.layout.master')

@section('main_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Redirecting to eSewa...</h1>
            <form action="https://uat.esewa.com.np/epay/main" method="POST" id="esewaForm">
                <input type="hidden" name="amt" value="{{ $amount }}">
                <input type="hidden" name="pdc" value="0">
                <input type="hidden" name="psc" value="0">
                <input type="hidden" name="txAmt" value="0">
                <input type="hidden" name="tAmt" value="{{ $amount }}">
                <input type="hidden" name="pid" value="{{ $transaction_uuid }}">
                <input type="hidden" name="scd" value="epay_payment">
                <input type="hidden" name="su" value="{{ $successUrl }}">
                <input type="hidden" name="fu" value="{{ $failureUrl }}">
                <button type="submit" class="btn btn-success">Pay Now</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('esewaForm').submit();
</script>
@endsection