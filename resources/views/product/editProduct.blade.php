@extends('layouts.master')

@section('content')
    <br />
    <div class="container">
        <form>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Product code</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Name</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
@stop
