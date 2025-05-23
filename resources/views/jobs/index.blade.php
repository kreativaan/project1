<x-layout>
    <div class="space-y-10">
        {{-- search --}}
        <section class="text-center pt-6">
            <h1 class="font-bold text-3xl">Let's find your next Job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web developer..."
                    class="rounded-xl bg-white/5 border border-white/10 px-5 py-4  w-full max-w-2xl">
            </form>
        </section>

        {{-- featured jobs --}}
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>

        {{-- tags --}}
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 ">
                @foreach ($tags as $tag)
                    <x-tag :tag=$tag></x-tag>
                @endforeach

            </div>
        </section>

        {{-- recent jobs --}}


        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job></x-job-card-wide>
                @endforeach

            </div>

        </section>

    </div>
</x-layout>
