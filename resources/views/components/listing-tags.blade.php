@props(['tagsCsv'])
@php
 $tags = explode (',', $tagsCsv);   
@endphp
@foreach($tags as $tag)
<a href="/?tag={{$tag}}"> 
    <span class="badge badge-sm bg-gradient-secondary">
        {{$tag}}
    </span>
</a>
@endforeach