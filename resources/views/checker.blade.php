<?php
 header("Access-Control-Allow-Origin: *");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    {{-- {{ dropzone.load_css() }}
    {{ dropzone.style('border: 2px dashed #0087F7; margin: 10%; min-height: 200px;') }} --}}

    <title>Checker Pasis</title>
</head>

<body>

    <div class="container-checker">
        <div class="row-checker">
            <div class="col p-4 align-self-center">
                <h5 class="mb-2" style="color: #98AA00;">LP Checker</h5>
                <h3 class="mb-0">E-PLAGIAT P45TI</h3>
            </div>
            <div class="col">
                <img src="{{ asset('img/logo.png') }}" width="121" height="119" style="float: right;">
            </div>
        </div>
        <div class="row-checker mt-4">
            <div class="col-sm-8">
                {{-- <label for="upload-file" class="drag-file">
                    <img src="{{ asset('img/drag-file.png') }}">
                </label> --}}
                {{-- <form action="{{ route('CheckerPage.upload') }}" id="fileUpload" enctype="multipart/form-data" class="dropzone"> --}}
                <form action="" id="fileUpload" method="post" enctype="multipart/form-data" class="dropzone">
                {{ method_field('POST') }}
                        @csrf
                
                </form>
                {{-- <input type="file" name="filename[]" multiple="multiple" id="upload-file" /> --}}
            </div>
            <div class="col-sm-4 text-center mb-4">
                <div class="card-progress mx-auto">
                    <div class="progress mx-auto" data-value='45'>
                        <span class="progress-left">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar border-primary"></span>
                        </span>
                        <div
                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 font-weight-bold">45<sup class="small">%</sup></div>
                        </div>
                    </div>
                    <h5 class="mt-lg-4">Plagiat</h5>
                </div>
                <a href="{{ route('CheckerPage.check') }}" class="btn btn-dark w-25">Proses</a>
                
            </div>
        </div>
    </div>
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>

    <script>
        Dropzone.options.fileUpload = {
            maxFileSize: 1,
            acceptedFiles: ".docx",
            autoProcessQueue: !0,
            url: "{{ route('CheckerPage.upload') }}",
            init: function() {

                var myDropzone = this;

                // Update selector to match your button
                $("#submitFile").click(function (e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });

                this.on('sending', function(file, xhr, formData) {
                    // Append all form inputs to the formData Dropzone will POST
                    var data = $('#fileUpload').serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });
                });
            }
        }

        $(function() {

            $(".progress").each(function() {

                var value = $(this).attr('data-value');
                var left = $(this).find('.progress-left .progress-bar');
                var right = $(this).find('.progress-right .progress-bar');

                if (value > 0) {
                    if (value <= 50) {
                        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                    } else {
                        right.css('transform', 'rotate(180deg)')
                        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                    }
                }

            })

            function percentageToDegrees(percentage) {

                return percentage / 100 * 360

            }

        });

    </script>

</body>

</html>
