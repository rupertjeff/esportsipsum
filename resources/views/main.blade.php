<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <base href="/">

    <title>{{ trans('general.pageTitle') }}</title>
</head>

<body>
    <h1>{{ trans('general.contentTitle') }}</h1>
    <div class="content">
        {!! $content !!}
    </div>
    @include('suggestion-form')
</body>

</html>
