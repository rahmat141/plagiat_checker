@extends('layout.main')

@section('title', 'Lembar Jawaban Checker')

@section('container')

    <div class="container-custom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-customlink">Lembar Jawaban Checker</a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col">
                <h2 class="custom1">Lembar Jawaban Checker</h2>
            </div>
            <div class="col col-md-2">
                <button type="button" class="btn btn-dark">Print</button>
                <button type="button" class="btn btn-dark">Download</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="custom1">Karlis - Strategi Perang</h5>
            </div>
            <div class="col col-md-3">
                <h6><input type="text" class="form-control" placeholder="Search"></h6>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <th> </th>
                <th>Doc 1</th>
                <th>Doc 2</th>
                <th>Doc 3</th>
            </thead>
            <tbody>
                <tr>
                    <td class="custom1">File 1</td>
                    <td class="custom1">95% <a href="{{url('/detail')}}">detail</a></td>
                    <td class="custom1">95% <a href="#">detail</a></td>
                    <td class="custom1">45% <a href="#">detail</a></td>
                </tr>
                <tr>
                    <td class="custom1">File 2</td>
                    <td class="custom1">95% <a href="#">detail</a></td>
                    <td class="custom1">95% <a href="#">detail</a></td>
                    <td class="custom1">45% <a href="#">detail</a></td>
                </tr>
                <tr>
                    <td class="custom1">File 3</td>
                    <td class="custom1">95% <a href="#">detail</a></td>
                    <td class="custom1">95% <a href="#">detail</a></td>
                    <td class="custom1">45% <a href="#">detail</a></td>
                </tr>
            </tbody>
        </table>


    </div>

@endsection
