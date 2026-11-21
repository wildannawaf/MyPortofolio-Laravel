<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio & Resume - M. Wildanun Mukholladun</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="80" tabindex="0">

  @include('components.navbar')
  @include('components.hero')
  @include('components.about')
  @include('components.skill')
  @include('components.project')
  @include('components.contact')
  @include('components.footer')

</body>
</html>
