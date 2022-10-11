
@extends('master')
@section("content")
<div class="container custom-login" >
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form >
                <div class="form-group">
                <label for="examplInputEmail">Email address </label>
                <input type="email" class="form-control"id="exampleInputEmail" placeholder="enter username">
                </div>

                <div class="form-group">
                <label for="examplInputPassword">Password </label>
                <input type="email" class="form-control"id="exampleInputPassword" placeholder="enter password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection