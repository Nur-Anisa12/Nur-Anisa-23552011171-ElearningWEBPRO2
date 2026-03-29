@extends('layouts.app')
@section('title', 'Landing Page')

{{-- ✅ Di LUAR section content --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')


    <!-- HERO -->
    <section class="hero">
        <img src="https://images.pexels.com/photos/4022212/pexels-photo-4022212.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            loading="lazy" class="hero__img" alt="Hero Bunga">
        <div class="hero__overlay"></div>

        <div class="hero__content">
            <h1 class="hero__title">A Little Bloom,<br><em>A Little Light</em></h1>
            <p class="hero__desc">Rangkaian bunga segar pilihan, hadirkan hadiah yang indah di hari
                istimewamu.</p>
            <a href="#katalog" class="hero__cta">
                Jelajahi Koleksi
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </section>

    <!-- MARQUEE -->
    <div class="marquee-wrap">
        <div class="marquee-track">
            <!-- duplicate for seamless loop -->
            <span>Mawar Segar</span><span>Rangkaian Custom</span><span>Pengiriman Same Day</span>
            <span>Lily Pilihan</span><span>Buket Pernikahan</span><span>Hadiah Spesial</span>
            <span>Matahari Cerah</span><span>Dekorasi Acara</span><span>Bunga Import</span>
            <span>Mawar Segar</span><span>Rangkaian Custom</span><span>Pengiriman Same Day</span>
            <span>Lily Pilihan</span><span>Buket Pernikahan</span><span>Hadiah Spesial</span>
            <span>Matahari Cerah</span><span>Dekorasi Acara</span><span>Bunga Import</span>
        </div>
    </div>

    <!-- CATALOG -->
    <section class="catalog" id="katalog">
        <div class="section-header">
            <span class="section-tag">Koleksi Pilihan</span>
            <h2 class="section-title">Katalog Bunga <em>Kami</em></h2>
            <div class="section-divider"></div>
        </div>

        @php
            $flowers = [
                [
                    'nama' => 'Bunga Mawar',
                    'harga' => 'Rp 25.000',
                    'deskripsi' => 'Simbol cinta sejati yang abadi dan elegan.',
                    'img' => 'https://images.pexels.com/photos/12366357/pexels-photo-12366357.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
                    'badge' => 'Premium',
                ],
                [
                    'nama' => 'Bunga Aster',
                    'harga' => 'Rp 10.000',
                    'deskripsi' => 'Bunga Aster warna yang cerah dan menarik.',
                    'img' => 'https://images.pexels.com/photos/6913066/pexels-photo-6913066.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
                    'badge' => 'Baru',
                ],
                [
                    'nama' => 'Bunga Matahari',
                    'harga' => 'Rp 15.000',
                    'deskripsi' => 'Memberikan keceriaan di setiap sudut ruangan.',
                    'img' => 'https://images.pexels.com/photos/17890606/pexels-photo-17890606.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
                    'badge' => 'Terlaris',
                ],
            ];
        @endphp

        <div class="flower-grid">
            @foreach ($flowers as $flower)
                <div class="flower-card">
                    <div class="card-img-wrap">
                        <img src="{{ $flower['img'] }}" alt="{{ $flower['nama'] }}" loading="lazy">
                        <span class="card-badge">{{ $flower['badge'] }}</span>
                        <button class="card-wishlist" aria-label="Simpan ke wishlist">🤍</button>
                        <div class="card-overlay">
                            <a href="#" class="overlay-btn">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-name">{{ $flower['nama'] }}</h3>
                        <p class="card-desc">{{ $flower['deskripsi'] }}</p>
                        <div class="card-footer-row">
                            <span class="card-price">{{ $flower['harga'] }}</span>
                            <div class="card-rating">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CTA STRIP -->
    <div class="strip">
        <h2 class="strip__title">Rangkai <em>Hadiah Spesial</em><br>bersama kami</h2>
        <p class="strip__sub">Konsultasikan kebutuhan bunga Anda dengan tim ahli kami. Pengiriman ke seluruh kota, hari ini
            juga.</p>
        <a href="#" class="strip__btn">
            Hubungi Kami
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
    </div>

@endsection
