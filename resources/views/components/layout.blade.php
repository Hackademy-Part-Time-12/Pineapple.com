<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <x-chat />

    <x-footer />
</body>

</html>