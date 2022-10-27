@component('mail::message')
# Your post was liked

{{ $liker ->name }} liked your posts

@component('mail::button', ['url' => route('post.show',$post)])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
