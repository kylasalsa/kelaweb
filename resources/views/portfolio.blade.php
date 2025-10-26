@extends('layouts.app')

@section('content')
<section class="about">
    <h2>Tentang Saya</h2>
    <p>{{ $about }}</p>
</section>

<section class="skills">
    <h2>Keahlian</h2>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</section>

<section class="projects">
    <h2>Proyek</h2>
    @foreach ($projects as $p)
        <div class="project-card">
            <h3>{{ $p['name'] }}</h3>
            <p>{{ $p['desc'] }}</p>
            <a href="{{ $p['link'] }}" target="_blank">Lihat Proyek</a>
        </div>
    @endforeach
</section>
