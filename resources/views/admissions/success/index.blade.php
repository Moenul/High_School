@extends('layouts.app')

@section('style')

<style type="text/css">

*{
	margin: 0;
	padding: 0;
}
@font-face {
    font-family: "LiNiladriRongtuliUnicode";
    src: url("../fonts/Li Alinur Tatsama Unicode.ttf") format('truetype');
}

:root{
	--color-bg:#ffffff;
	--color-main:#6AAD46;
	--color-deep:#548D5A;
	--color-white:white;
    --color-deep-white:#e5e5e5;
	--color-black:black;
	--color-smart-black:#3C3C3C;
	--color-hover:#8d5a00;
}
body{
	background:var(--color-bg);
	font-family: sans-serif;
	color: var(--color-black);
    height: 100%;
    overflow: hidden;
    font-family: 'LiNiladriRongtuliUnicode', sans-serif;
}



.success_section{
    width: 100%;
    min-height: 100vh;
    font-family: 'LiNiladriRongtuliUnicode', sans-serif;
}
.success_section .success_bar{
    width: 500px;
    min-height: 300px;
    height: auto;
    background: wheat;
    text-align: center;
    padding: 50px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 5px;
    box-shadow: 0px 0px 10px #acacac;
    border: 2px solid #4CAF50;
}
.success_section .success_bar .success_alert{
    font-size: 24px;
    margin-bottom: 10px;
}
.success_section .success_bar .success_desc{
    color: var(--color-smart-black);
    margin-bottom: 20px;
}
.success_section .success_bar .download_alert{
    margin-bottom: 10px;
}
.success_section .success_bar .pdf_button{
    margin-bottom: 20px;
}



</style>

@endsection

@section('content')


<div class="success_section">
	<div class="container">
        <div class="success_bar">
            <div class="success_alert">অভিনন্দন! ভর্তি আবেদন সম্পন্ন হয়েছে।</div>
            <div class="success_desc">আবেদন নিশ্চিত করতে আবেদন ফরম, শিক্ষার্থীর জন্ম নিবন্ধন, পিতা মাতার জাতীয় পরিচয় পত্রের ফটোকপি এবং প্রয়োজনীয় ফি সহ সরাসরি প্রতিষ্ঠানে যোগাযোগ করুন।</div>
            <div class="download_alert">নিচের লিংক থেকে আবেদনকৃত ফরম ডাউনলোড করুন।</div>
            <div class="pdf_button"><a href="" class="btn btn-success">Download PDF Form</a></div>
            <div class="return_button"><a href="/"> Back to Home</a></div>
        </div>
    </div>
</div>

@endsection
