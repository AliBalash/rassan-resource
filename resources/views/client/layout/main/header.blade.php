<!doctype html>
<html lang="{{__('global.lang')}}" dir="{{__('global.direction')}}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/assets/client/images/favicon.ico">

    <!-- Bootstrap CSS -->

    @if(__('global.direction') == 'rtl')
        <link rel="stylesheet" href="/assets/client/css/uikit-rtl.css" />
    @else
        <link rel="stylesheet" href="/assets/client/css/uikit.css" />
    @endif

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css" />
    <link rel="stylesheet" href="/assets/client/css/style.css" />
    @if(__('global.lang') == 'en')
        <style>
            body {
                font-family: IRANSansEn !important;
            }
            input {
                font-family: IRANSansEn !important;
            }
        </style>
    @endif
    <title>Rassan – Rassan  Faucets Co</title>

    @stack('styles')
    @livewireStyles
</head>
<body>
@include("client.component.navBar")

