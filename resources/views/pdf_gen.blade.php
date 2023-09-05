<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact Form</title>

    <style type="text/css">


     </style>

    <link rel="stylesheet" href="css/pdf.css">
</head>

<body>

    {!! $name !!}
    <h2>শিক্ষার্থীর নাম </h2>
    @if ($admission)
        <div class="admission_form">
            <div class="row">
                <div class="col-6">
                    <p><b style="font-family: 'li_alinur_tatsama_unicode', sans-serif;">শিক্ষার্থীর নাম :</b> <span>{{ $admission->student_name}}</span></p>
                </div>
                <div class="col-6">
                    <p><b>শিক্ষার্থীর নাম ইংরেজি :</b> <span>{{ $admission->student_name_en}}</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p><b>জন্ম তারিখ :</b> <span>{{ $admission->student_DOB}}</span></p>
                </div>
                <div class="col-6">
                    <p><b>জন্ম নিবন্ধন নম্বর :</b> <span>{{ $admission->student_birth_reg}}</span></p>
                </div>
            </div>
        </div>



    @endif

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
