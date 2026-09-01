@extends('layouts.app')

@section('title', 'Berkah Media Gemilang | Precision Media. Raw Energy.')
@section('meta_description', 'PT Berkah Media Gemilang - Perusahaan media terkemuka yang menyediakan Event Organizer, Media Buying, Event Production & Logistik, Digital & Social Media. Amplifying Brands. Igniting Events.')

@section('content')
    @include('components.hero')
    @include('components.services')
    @include('components.portfolio')
    @include('components.about')
    @include('components.contact')
@endsection
