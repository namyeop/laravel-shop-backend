<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
  <script src="https://cdn.portone.io/v2/browser-sdk.js"></script>

  @livewireStyles
  <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
  {{ $slot }}
  @livewireScripts
</body>

</html>
