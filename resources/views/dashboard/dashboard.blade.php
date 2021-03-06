<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
<a href="/">Home</a>
<a class="ml-2" href="/create">Voeg een voertuig toe</a>

<div class="w-full shadow stats">
    <div class="stat">
        <div class="stat-figure text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
        </div>
        <div class="stat-title">Total Likes</div>
        <div class="stat-value text-primary">25.6K</div>
        <div class="stat-desc">21% more than last month</div>
    </div>
    <div class="stat">
        <div class="stat-figure text-info">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
        </div>
        <div class="stat-title">Page Views</div>
        <div class="stat-value text-info">2.6M</div>
        <div class="stat-desc">21% more than last month</div>
    </div>
    <div class="stat">
        <div class="stat-figure text-info">
            <div class="avatar online">
                <div class="w-16 h-16 p-1 mask mask-squircle bg-base-100">
                    <img src="/tailwind-css-component-profile-5@56w.png" alt="Avatar Tailwind CSS Component" class="mask mask-squircle">
                </div>
            </div>
        </div>
        <div class="stat-value">86%</div>
        <div class="stat-title">Tasks done</div>
        <div class="stat-desc text-info">31 tasks remaining</div>
    </div>
</div>

<table>
    <tr>
        <th>Aantal auto's</th>
        <th>Inkoopprijs totaal</th>
        <th>Verkoopprijs totaal</th>
        <th>Marge</th>

    </tr>
    <tr>
        <td>{{ $aantal }}</td>
        <td>{{ $inkoopprijs }}</td>
        <td>{{ $verkoopprijs }}</td>
        <td>{{ $verkoopprijs - $inkoopprijs }}</td>
    </tr>

</table>
</body>
</html>
