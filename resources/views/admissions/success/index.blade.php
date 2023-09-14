<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/print.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<title>School</title>
	<link rel="shortcut icon" type="image/png" href="images/School.png">

</head>
<body>

    <div class="success_alert">অভিনন্দন! ভর্তি আবেদন সম্পন্ন হয়েছে।</div>

    <div class="admission_form">
        <div class="canvas_div_pdf" id="A4" style="width: 794px;">
            <div class="form_heading">
                <div class="istitute_name">সরাইল সদর উচ্চ বিদ্যালয়</div>
                <div class="istitute_address">সরাইল থানা, রোড ১২, সরাইল বাজার </div>
                <div class="istitute_contact">যোগাযোগ : ০১৭৯৫২৪৩৬২৮, ০১৮৭৮২৪৪২৭৬</div>
                <div class="form_title">ভর্তি আবেদন ফরম</div>
                <div class="institute_logo">
                    <img width="100%" height="100%" src="{{ '/images/institute_logo.png' }}">
                </div>
            </div>

            <div class="form_content">
                @if ($admission)
                    <div class="section_title">শিক্ষার্থীর পরিচয়</div>
                    <div class="section_info">
                        <p> <span class="title">শিক্ষার্থীর নাম বাংলায় :</span> <span class="details">{{$admission->student_name}}</span></p>
                        <p> <span class="title">শিক্ষার্থীর নাম ইংরেজি :</span> <span class="details">{{$admission->student_name_en}}</span></p>
                        <p> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$admission->student_birth_reg}}</span></p>
                        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$admission->student_DOB}}</span></p>
                        <p class="collaps"> <span class="title">লিঙ্গ :</span> <span class="details">{{$admission->student_gender}}</span></p>
                        <div class="student_photo">
                            <img width="100%" height="100%" src="{{ $admission->photo ? $admission->photo->file : '/images/DummyProfile.jpg' }}">
                        </div>
                    </div>

                    <div class="section_title">পিতার পরিচয়</div>
                    <div class="section_info fathers_info">
                        <p> <span class="title">পিতার নাম বাংলায় :</span> <span class="details">{{$admission->fathers_name}}</span></p>
                        <p> <span class="title">পিতার নাম ইংরেজি :</span> <span class="details">{{$admission->fathers_name_en}}</span></p>
                        <p> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$admission->fathers_birth_reg}}</span></p>
                        <p> <span class="title">জাতীয় পরিচয়পত্র নম্বর :</span> <span class="details">{{$admission->fathers_NID}}</span></p>
                        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$admission->fathers_DOB}}</span></p>
                        <p class="collaps"> <span class="title">ফোন নম্বর :</span> <span class="details">{{$admission->fathers_phone}}</span></p>
                        <p class="collaps"> <span class="title">পিতার পেশা :</span> <span class="details">{{$admission->fathers_profession}}</span></p>
                    </div>


                    <div class="section_title">মাতার পরিচয়</div>
                    <div class="section_info fathers_info">
                        <p> <span class="title">মাতার নাম বাংলায় :</span> <span class="details">{{$admission->mothers_name}}</span></p>
                        <p> <span class="title">মাতার নাম ইংরেজি :</span> <span class="details">{{$admission->mothers_name_en}}</span></p>
                        <p> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$admission->mothers_birth_reg}}</span></p>
                        <p> <span class="title">জাতীয় পরিচয়পত্র নম্বর :</span> <span class="details">{{$admission->mothers_NID}}</span></p>
                        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$admission->mothers_DOB}}</span></p>
                        <p class="collaps"> <span class="title">ফোন নম্বর :</span> <span class="details">{{$admission->mothers_phone}}</span></p>
                        <p class="collaps"> <span class="title">মাতার পেশা :</span> <span class="details">{{$admission->mothers_profession}}</span></p>
                    </div>


                    <div class="section_title">অভিভাবকের পরিচয়</div>
                    <div class="section_info fathers_info">
                        <p> <span class="title">অভিভাবকের নাম বাংলায় :</span> <span class="details">{{$admission->guardian_name}}</span></p>
                        <p> <span class="title">অভিভাবকের নাম ইংরেজি :</span> <span class="details">{{$admission->guardian_name_en}}</span></p>
                        <p> <span class="title">জন্ম নিবন্ধন নম্বর :</span> <span class="details">{{$admission->guardian_birth_reg}}</span></p>
                        <p> <span class="title">জাতীয় পরিচয়পত্র নম্বর :</span> <span class="details">{{$admission->guardian_NID}}</span></p>
                        <p class="collaps"> <span class="title">জন্ম তারিখ :</span> <span class="details">{{$admission->guardian_DOB}}</span></p>
                        <p class="collaps"> <span class="title">ফোন নম্বর :</span> <span class="details">{{$admission->guardian_phone}}</span></p>
                        <p> <span class="title">শিক্ষার্থীর সাথে সম্পর্ক :</span> <span class="details">{{$admission->guardian_relation}}</span></p>
                    </div>

                    <hr>

                    <div class="section_title">আনুষঙ্গিক তথ্য</div>
                    <div class="section_info additional_info">
                        <p class="collaps"> <span class="title">জাতীয়তা :</span> <span class="details">{{$admission->nationality}}</span></p>
                        <p class="collaps"> <span class="title">ধর্ম :</span> <span class="details">{{$admission->religion}}</span></p>
                        <p> <span class="title">শারীরিক অক্ষমতা :</span> <span class="details">{{$admission->physical_disability}}</span></p>
                    </div>

                    <div class="section_title">স্থায়ী ঠিকানা</div>
                    <div class="section_info address_info">
                        <p class="collaps"> <span class="title">বিভাগ :</span> <span class="details">{{$admission->permanent_division}}</span></p>
                        <p class="collaps"> <span class="title">জেলা :</span> <span class="details">{{$admission->permanent_district}}</span></p>
                        <p class="collaps"> <span class="title">উপজেলা :</span> <span class="details">{{$admission->permanent_upazila}}</span></p>
                        <p class="collaps"> <span class="title">ডাকঘর :</span> <span class="details">{{$admission->permanent_postOffice}}</span></p>
                        <p class="collaps"> <span class="title">পোস্ট কোড :</span> <span class="details">{{$admission->permanent_postCode}}</span></p>
                        <p class="collaps"> <span class="title">গ্রাম :</span> <span class="details">{{$admission->permanent_postCode}}</span></p>
                    </div>

                    <div class="section_title">বর্তমান ঠিকানা</div>
                    <div class="section_info address_info">
                        <p class="collaps"> <span class="title">বিভাগ :</span> <span class="details">{{$admission->present_division}}</span></p>
                        <p class="collaps"> <span class="title">জেলা :</span> <span class="details">{{$admission->present_district}}</span></p>
                        <p class="collaps"> <span class="title">উপজেলা :</span> <span class="details">{{$admission->present_upazila}}</span></p>
                        <p class="collaps"> <span class="title">ডাকঘর :</span> <span class="details">{{$admission->present_postOffice}}</span></p>
                        <p class="collaps"> <span class="title">পোস্ট কোড :</span> <span class="details">{{$admission->present_postCode}}</span></p>
                        <p class="collaps"> <span class="title">গ্রাম :</span> <span class="details">{{$admission->present_postCode}}</span></p>
                    </div>

                    <div class="section_title">ভর্তি সম্পর্কিত তথ্য</div>
                    <div class="section_info">
                        <p> <span class="title">ভর্তি ইচ্ছু শ্রেণীর নাম :</span> <span class="details">
                            @foreach (App\Models\Classs::whereId($admission->admission_class)->get() as $class)
                                {{$class->name}}
                            @endforeach
                        </span></p>
                        <p> <span class="title">পূর্বে অধ্যয়নরত শ্রেণীর নাম :</span> <span class="details">
                            @if ($admission->previous_class !== null)
                                @foreach (App\Models\Classs::whereId($admission->previous_class)->get() as $class)
                                    {{$class->name}}
                                @endforeach
                            @endif
                        </span></p>
                    </div>
                @endif

                <div class="admission_notice">
                    <p>আবেদন নিশ্চিত করতে আবেদনকৃত ফরমটি প্রিন্ট করে তার সাথে শিক্ষার্থীর জন্ম নিবন্ধন সনদ, শিক্ষার্থীর ২ কপি পাসপোর্ট সাইজ ছবি, পিতা মাতার জাতীয় পরিচয় পত্রের ফটোকপি, প্রযোজ্য ক্ষেত্রে ট্রান্সফার অথবা প্রশংসা পত্র এবং প্রয়োজনীয় ফি সহ সরাসরি প্রতিষ্ঠানে যোগাযোগ করুন।</p>
                </div>

                <div class="admission_date">
                    <p>ভর্তির তারিখ : <span></span></p>
                </div>
                <div class="signature_section">
                    <div class="sign_bar parent_sign">
                        <span>পিতা/মাতার স্বাক্ষর</span>
                    </div>
                    <div class="sign_bar guardian_sign">
                        <span>অভিভাবকের স্বাক্ষর</span>
                    </div>
                    <div class="sign_bar principal_sign">
                        <span>প্রধান শিক্ষকের স্বাক্ষর</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



<button class="pdfDownload" id="download">Download PDF</button>
<div class="return_button"><a href="/"> Back to Home</a></div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

<!-- Setup and start animation! -->
<script type="text/javascript">


function getPDF(){

    var HTML_Width = $(".canvas_div_pdf").width();
    var HTML_Height = $(".canvas_div_pdf").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width+(top_left_margin*2);
    var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;


    html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
        canvas.getContext('2d');

        console.log(canvas.height+"  "+canvas.width);


        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);


        for (var i = 1; i <= totalPDFPages; i++) {
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }

        pdf.save("AdmissionForm.pdf");
    });
};

$(document).ready(function() {
    jQuery("#download").click(function(){
        getPDF();
    });
});

</script>

</body>
</html>
