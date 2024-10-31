<div class="container shadow-md">
    @for ($i = 0; $i < 20; $i++)
        <div class="max-w-md mx-auto bg-slate-100 rounded-xl shadow-xl overflow-hidden md:max-w-2xl"
            style="margin-bottom: 10px; margin-top: 10px">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('images/images.png') }}"
                        alt="Modern building architecture">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company
                        retreats</div>
                    <a href="#"
                        class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible
                        accommodation for your team</a>
                    <p class="mt-2 text-slate-500">Looking to take your team away on a retreat to enjoy
                        awesome food and
                        take in some sunshine? We have a list of places to do just that.</p>

                </div>
            </div>
    @endfor
</div>
