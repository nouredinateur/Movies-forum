@foreach($comments as $comment)
<div class="mt-10 bg-white p-5 rounded-lg shadow	">
    <div  @if($comment->parent_id != null) @endif>
        <strong class="">{{ $comment->user->name }}</strong>
        <p>{{ $comment->comment }}</p>
    </div>
</div>
@endforeach