<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Financial Application – Financial Management Dashboard</title>
    <meta name="description" content="Financial Application - kelola pemasukan dan pengeluaran Anda dengan mudah, pantau transaksi dan kategori pengeluaran dalam satu dashboard.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="{{ asset('css/filament/style.css') }}">
</head>
<body>
<div class="page">
    {{-- NAVBAR COMPONENT --}}
    @include('components.navbar')

    {{-- HERO COMPONENT --}}
    @include('components.hero')

    <section class="cards-row">
        {{-- CARD COMPONENT (chart, transactions, category) ... --}}
    </section>
</div>

<script src="{{ asset('js/filament/script.js') }}" defer></script>
</body>
</html>
