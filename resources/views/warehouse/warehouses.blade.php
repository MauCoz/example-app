@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="page-title">warehouses</h1>

        <div class="row">
            <div class="col-sm-3">
                <form id="filter-warehouses" method="GET" role="search" class="form">
                    <input class="form-control mr-sm-2" name="name" type="search" placeholder="Search" aria-label="Search">

                    <div>priority</div>

                    <input class="form-control mr-sm-2" name="priority-down" type="number" placeholder="lowest"
                        aria-label="Search">
                    <input class="form-control mr-sm-2" name="priority-up" type="number" placeholder="highest"
                        aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            <div class="col-sm-9">

                <div class="alert alert-secondary" role="alert">

                </div>



                <div class="card">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Naam</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($warehouses as $warehouse)
                                <a href="/test">
                                    <tr>
                                        <th scope="row">{{ $warehouse->id }}</th>
                                        <td>{{ $warehouse->name }}</td>

                                        <td>
                                            <a><button class="btn btn-primary">open</button></a>
                                        </td>

                                    </tr>
                                </a>
                            @endforeach

                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
@stop
