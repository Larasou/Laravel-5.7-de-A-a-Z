<?php
if ($project->id) {
    $route = ['url' => route('projects.update', $project), 'method' => 'PUT'];
} else {
    $route =  ['url' => route('projects.store'), 'method' => 'POST'];
}
?>


{{ Form::model($project, $route) }}
@csrf

<div class="py-3">
    {{ Form::text('name', null, ['class' => 'bg-form', 'placeholder' => 'Nom du projet']) }}
    {!! $errors->first('name', '<p class="text-red-darker text-lg font-bold">:message</p>') !!}
</div>

<div class="py-3">
    {{ Form::textarea('description', null, ['class' => 'bg-form', 'placeholder' => 'Description du projet']) }}
    {!! $errors->first('description', '<p class="text-red-darker text-lg font-bold">:message</p>') !!}
</div>

<div>
    <button class="bg-green-dark text-white py-3 px-6">
        Enregistrer
    </button>
</div>
{{ Form::close() }}
