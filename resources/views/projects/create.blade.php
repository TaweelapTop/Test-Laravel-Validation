{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    @foreach($projects as $project)
    Title:
    <br />
    <input type="text" name="title" value="{{ $project->title }}" />
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" value="{{ $project->description }}" />
    <br /><br />
    <button type="submit">Save</button>
    @endforeach
</form>
