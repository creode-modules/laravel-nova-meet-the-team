@extends('nova-meet-the-team::layouts.master')

@section('content')
    <h1 class="text-7xl mb-10">Meet the team</h1>

    <div class="my-10">
        @foreach($teams as $team)
            <h3 class="text-3xl mb-4">{{ $team->title }}</h3>

            <section class="grid grid-cols-4 gap-20 mb-10">
                @foreach($team->members as $teamMember)
                    <article>
                        @if ($teamMember->image)
                            <img src="{{ $teamMember->imageUrl }}" alt="{{ $teamMember->name }}">
                        @endif

                        <h4 class="text-2xl font-bold mt-4">{{ $teamMember->name }}</h4>

                        @if ($teamMember->job_title)
                            <p>{{ $teamMember->job_title }}</p>
                        @endif
                    </article>
                @endforeach
            </section>
        @endforeach
    </div>
@endsection
