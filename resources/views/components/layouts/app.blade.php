<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.header />
</head>

<body>
    <x-layouts.navbar />
        <main>
            {{ $slot }}
        </main>
    <x-layouts.footer />
    <x-layouts.script />
</body>
</html>