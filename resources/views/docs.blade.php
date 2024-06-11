<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://assets.treblle.com" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>{{ config('redoc.config.title') }}</title>

    <!-- ReDoc doesn't change outer page styles -->
    <style>
      body {
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <redoc
        spec-url='{{ config('redoc.openapi.path') }}'
        disable-search="{{ config('redoc.config.search') }}"
        hide-hostname="{{ config('redoc.config.hostname') }}"
        hide-loading="{{ config('redoc.config.loading') }}"
        menu-toggle="{{ config('redoc.config.menu') }}"
        native-scrollbars="{{ config('redoc.config.scrollbars') }}"
        untrusted-spec="{{ config('redoc.config.trust') }}"
    ></redoc>

    @if (config('redoc.alfred.enabled'))
      <div
        class="getalfred-io"
        data-api="{{ config('redoc.alfred.project_id') }}"
        data-auth="{{ config('redoc.alfred.api_key') }}"
      ></div>
      <script src="https://assets.treblle.com/alfred-embed-v3.min.js"></script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/redoc@next/bundles/redoc.standalone.js"> </script>
  </body>
</html>
