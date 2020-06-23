@extends("layouts.app")

@section("content")

<div class="parent-container">
    <h1>Account Overview</h1>
    <div class="child-container1">
        <h3>ACCOUNT DETAILS</h3>
        <a href="/reset" class="reset"> Reset your password</a>
    </div>

    <div class="child-container1">
        <h3>ADDRESS DETAILS</h3>
        <a href="/address" class="address"> Edit your address</a>
    </div>
</div>

@endsection
