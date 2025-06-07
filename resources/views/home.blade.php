<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout meta-description="Personal blog home">
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3 px-3">
            <div class="flex flex-col items-center">
                @foreach ($posts as $post)
                    <x-post-item :post='$post'></x-post-item>
                @endforeach
            </div>
            {{ $posts->onEachSide(1)->links() }}
        </section>

        <x-sidebar />
    </div>
</x-app-layout>