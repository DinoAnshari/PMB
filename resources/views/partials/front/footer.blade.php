<footer id="footer" style="/*background-color: #222;*/ background-color: #FAC833; padding: 40px 0;">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center text-center text-md-start text-light">
                <!-- Kiri -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="footer-logo mb-2">
                        <a href="{{ url('/') }}">
                            @if ($setting?->gambar_footer)
                            <img src="{{ asset('storage/' . $setting->gambar_footer) }}" alt="Logo Footer" style="height: 50px;">
                            @else
                            <img src="{{ asset('images/logo-black.svg') }}" alt="Default Logo" style="height: 50px;">
                            @endif
                        </a>
                    </div>
                    <p style="color: #f1f1f1;">Email: {{ $setting->email ?? 'info@example.com' }}</p>
                    <p style="color: #f1f1f1;">Telepon: {{ $setting->phone ?? '(021) 123-4567' }}</p>
                    <p style="color: #f1f1f1;">Alamat: {{ $setting->alamat ?? 'Alamat belum diisi' }}</p>
                </div>

                <!-- Kanan -->
                <div class="col-md-6 text-md-end">
                    <ul class="social-links list-inline mb-2" style="color: #f1f1f1;">
                        <li class="list-inline-item me-2">Portal Resmi:</li>
                        <li class="list-inline-item">
                            <a href="https://facebook.com/yourpage" target="_blank" class="btn btn-outline-light btn-sm" style="border-radius: 20px;">
                                Facebook
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com/yourpage" target="_blank" class="btn btn-outline-light btn-sm" style="border-radius: 20px;">
                                Instagram
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ $latestVideo->video_url ?? '#' }}" target="_blank" class="btn btn-outline-light btn-sm" style="border-radius: 20px;">
                                YouTube
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/yourpage" target="_blank" class="btn btn-outline-light btn-sm" style="border-radius: 20px;">
                                Twitter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom" style="/*background-color: #111;*/ background-color: #014AF7; padding: 20px 0;">
        <div class="container">
            <div class="text-center mt-3">
                <p class="mb-0" style="color: #ccc;">
                    {{ $setting->copyright ??
                    '© 2025 PPDB SMPN Maju Jaya. All rights reserved by Lagikoding' }}
                </p>
            </div>
        </div>
    </div>
</footer>