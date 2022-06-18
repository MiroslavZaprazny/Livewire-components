<x-header/>
<p class="text-center font-semibold mt-6">
{{$post->title}}
</p>
<div>
    <livewire:comments 
        :post="$post"
    />
</div>