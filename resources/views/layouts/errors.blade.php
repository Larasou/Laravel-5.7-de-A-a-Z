@if ($errors->any())
    <div class="my-3 w-4/5">
        <div class="bg-indigo-darkest text-center py-4 lg:px-4">
            @foreach($errors->all() as $error)
                <li class="p-2 text-white font-bold">
                    {!! $error !!}
                </li>
            @endforeach
        </div>
    </div>
@endif
