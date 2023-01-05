<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Contact</title>
</head>
<body>
@extends('layouts.main')

@section('container')
    <div class="address">
        <h1 class="title-contact">Contact</h1>
        <p class="detail-contact">
            Jalan pembangunan raya <br>
            Komplek perumahan <br>
            Bintaro, Tangerang selatan
            Indonesia
        </p>
    </div>

    <div class="time">
        <h1>Open Daily</h1>
        <p>08.00 - 20.00</p>
    </div>

    <div class="contact-us">
        <h1>Contact us</h1>
        <p>
        Phone : 021-088776655
        Email : happybookstore@happy.com</p>
    </div>
@endsection
