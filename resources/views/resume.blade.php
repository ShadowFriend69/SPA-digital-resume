<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Resume</title>
    </head>
    <body>
    @php /** @var \App\Dto\Resume $resume */ @endphp
        hello {{ $resume->basics->name }} {{ $resume->basics->label }}
    </body>
</html>