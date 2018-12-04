@if (session('message'))
    <div class="container mx-auto">
        <div class="my-3">
            <div class="bg-{{ session('color') ? session('color') : 'blue' }} text-white py-4 lg:px-4">
                @if (session('title'))
                    {!! session('title') !!}
                @endif
                <p>
                   {!! $slot !!}
                </p>
            </div>
        </div>
    </div>
@endif
