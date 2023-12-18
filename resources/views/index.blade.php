@extends('nova-meettheteam::layouts.master')

@section('content')
    <h1 class="text-7xl mb-10">Meet the team</h1>
    <h2 class="text-5xl mb-4">{{ nova_get_setting('page_header') }}</h2>
    <p class="text-base">{{ nova_get_setting('page_body') }}</p>

    <div class="my-10">
        @foreach($teams as $team)
            <h3 class="text-3xl mb-4">{{ $team->title }}</h3>

            <section class="grid grid-cols-4 gap-20 mb-10">
                @foreach($team->members as $teamMember)
                    <article>
                        <img src="{{ asset('storage').'/'.$teamMember->image }}" alt="">
                        <h4 class="text-2xl font-bold mt-4">{{ $teamMember->name }}</h4>
                        <p>{{ $teamMember->job_title }}</p>
                    </article>
                @endforeach
            </section>
        @endforeach
    </div>

@endsection
