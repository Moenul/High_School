
@if ($notices->count())
@foreach ($notices as $notice)
<!-- notice bar -->
<div class="notice_bar">
    <div class="image_box"><iconify-icon icon="bxs:file-pdf"></iconify-icon></div>
    <div class="notice_box">
        <div class="notice_title">{{$notice->title}}</div>
        <div class="notice_date">{{ \Carbon\Carbon::parse($notice->created_at)->format('d M Y') }}</div>
        <div class="notice_download"><a href="{{ $notice->pdf->file }}" target="_blank">View PDF</a></div>
        {{-- <div class="notice_download"><a href="{{ action('DownloadsController@download', ['id'=> $notice->pdf_id ]) }}">Download</a></div> --}}
    </div>
</div>
<!-- notice bar -->
@endforeach
<div class="d-flex justify-content-center">
    {{-- {!! $notices !!} --}}
</div>
@endif
