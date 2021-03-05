@extends('layout.main')

@section('title', 'Detail')

@section('container')

{{-- {{dd($data)}} --}}
    <div class="container-custom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/')}}" class="breadcrumb-customlink">Lembar Jawaban Checker</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col">
                <h2 class="custom1">Detail</h2>
            </div>
            <div class="col col-md-2">
                <button type="button" class="btn btn-dark">Print</button>
                <button type="button" class="btn btn-dark">Download</button>
            </div>
        </div>
        <div class="row mb-4">
            <h5 class="custom2">Plagiat 95%</h5>
        </div>
        <div class="row">
            <div class="col">
                <h6 class="custom1">{{$data['document1name']}}</h6>
                <div class="border-custom">
                    <p class="p-3" id="text1">
                    {!!$data['text1']!!}
                    </p>
                </div>
            </div>
            <div class="col">
                <h6 class="custom1">{{$data['document2name']}}</h6>
                <div class="border-custom">
                    <p class="p-3">
                        {!!$data['text2']!!}
                    </p>
                    {{-- <p class="p-3">
                        <span class="plagiat">Lorem ipsum dolor sit amet</span>, consectetur adipiscing elit. Aliquam sit nulla ac iaculis tristique posuere.
                        Feugiat at id massa pellentesque ultricies a imperdiet sed. Sed dignissim quis pharetra pellentesque
                        commodo, volutpat netus. Suspendisse id amet fringilla egestas nulla mauris magna vulputate vitae.
                        Lobortis odio senectus sodales cursus pharetra tristique. Eu bibendum enim est mi pellentesque auctor
                        imperdiet hac. Urna morbi quisque vulputate id id. Cursus sed ut interdum condimentum. Praesent
                        curabitur lorem rhoncus aliquam varius.
                        Ultrices leo in elementum ipsum velit augue arcu dictum eget. Volutpat, feugiat eleifend odio a.
                        Malesuada nulla penatibus aliquam phasellus nisl. Morbi sit eu cras pellentesque tristique. Pretium,
                        commodo scelerisque diam posuere.
                        Sed ultricies nulla pulvinar <span class="plagiat">elit semper malesuada ac</span>. Commodo urna, habitant id tortor dictum tellus
                        arcu pretium. Cursus erat fermentum montes, nunc, lobortis tempor tincidunt nunc ut. Orci cras at
                        tristique sed venenatis. Nullam neque ultrices porttitor cras arcu. Nulla pellentesque sed mauris
                        molestie dictum. Lectus sed id lorem leo. <span class="plagiat">Massa ut turpis viverra mauris amet.</span> Aliquam in elit sed
                        egestas nulla vitae platea.
                        A venenatis auctor non nisl sed molestie porta praesent diam. Sapien sit massa interdum turpis risus
                        risus egestas tincidunt aliquet. <span class="plagiat">Pretium volutpat consectetur</span> fermentum porttitor id malesuada est
                        tellus. Duis cursus augue id neque varius. Erat egestas.
                    </p> --}}
                </div>
            </div>
        </div>


    </div>
    <script src="{{ asset('jquery/jquery.min.js') }}"></script> 
    {{-- <script>
    var dat: JSON.parse('{{$data}}');
    $.getJSON(dat, function (data) {
        console.log(data);
    });


    </script> --}}

@endsection
