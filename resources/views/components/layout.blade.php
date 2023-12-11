<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <title>Pineapple</title>
</head>

<body>

    <x-navbar />

    <div class="nonsieteingrado">
        <div class="dicopiare">
            <div class="ctrlc">
                <span class="ctrlv">A partire dal 24 novembre, acquista un prodotto in promozione e avrai una Pineapple Gift Card fino a € 200.</span>
                <span class="nonlosapetefare"></span>
            </div>
        </div>
    </div>

    {{ $slot }}

    <x-footer />
</body>

</html>