<!-- HERO TOP -->
        <section class="hero-top">
            <div class="hero-title-block">
                <h1 class="hero-title">
                    <span>Financial</span>
                    <span>Management</span>
                </h1>
            </div>

            <div class="hero-right">
                <p class="hero-tagline">
                    Never wonder where your money went again. Track every income and
                    expense easily to keep your budget balanced and your mind at ease.
                </p>
                <div class="hero-buttons">
                    {{-- Tombol langsung ke dashboard admin --}}
                    <a href="{{ url('/admin') }}" class="btn btn-primary" id="btnGetStarted">
                        Get Started
                    </a>
                    <a href="https://github.com/BagusSetiawan09/financial"
                       target="_blank"
                       class="btn btn-outline">
                        Visit Github
                    </a>
                </div>
            </div>
        </section>

        <!-- 3 BENTO CARDS -->
        <section class="cards-row">
            <!-- CARD: CHART -->
            <article class="card card-chart">
                <div class="card-header">
                    <span class="card-title">Overview Statistics</span>
                </div>

                <div class="chart">
                    <div class="chart-inner">
                        <div class="y-labels">
                            <span>10.000</span>
                            <span>8.000</span>
                            <span>6.000</span>
                            <span>4.000</span>
                            <span>2.000</span>
                        </div>

                        <!-- LINE CHART -->
                        <svg class="chart-svg" viewBox="0 0 120 70" preserveAspectRatio="none">
                            <!-- grid horizontal -->
                            <g stroke="rgba(148,163,184,0.35)" stroke-width="0.4">
                                <line x1="12" y1="10" x2="118" y2="10" />
                                <line x1="12" y1="22" x2="118" y2="22" />
                                <line x1="12" y1="34" x2="118" y2="34" />
                                <line x1="12" y1="46" x2="118" y2="46" />
                                <line x1="12" y1="58" x2="118" y2="58" />
                            </g>

                            <!-- area di bawah line -->
                            <path
                                d="M12 52
                                   L 22 47
                                   L 32 55
                                   L 42 50
                                   L 52 45
                                   L 62 42
                                   L 72 35
                                   L 82 40
                                   L 92 33
                                   L 102 30
                                   L 112 32
                                   L 118 10
                                   L 118 62
                                   L 12 62 Z"
                                fill="rgba(37,99,255,0.08)"
                            />

                            <!-- polyline biru -->
                            <polyline
                                fill="none"
                                stroke="#3b82f6"
                                stroke-width="0.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                points="
                                  12,52
                                  22,47
                                  32,55
                                  42,50
                                  52,45
                                  62,42
                                  72,35
                                  82,40
                                  92,33
                                  102,30
                                  112,32
                                  118,10
                                "
                            />

                            <!-- titik tiap bulan -->
                            <g fill="#3b82f6">
                                <circle cx="12"  cy="52" r="1" />
                                <circle cx="22"  cy="47" r="1" />
                                <circle cx="32"  cy="55" r="1" />
                                <circle cx="42"  cy="50" r="1" />
                                <circle cx="52"  cy="45" r="1" />
                                <circle cx="62"  cy="42" r="1" />
                                <circle cx="72"  cy="35" r="1" />
                                <circle cx="82"  cy="40" r="1" />
                                <circle cx="92"  cy="33" r="1" />
                                <circle cx="102" cy="30" r="1" />
                                <circle cx="112" cy="32" r="1" />
                                <circle cx="118" cy="10" r="1" />
                            </g>
                        </svg>
                    </div>

                    <div class="chart-x">
                        <span>Jan</span>
                        <span>Feb</span>
                        <span>Mar</span>
                        <span>Apr</span>
                        <span>May</span>
                        <span>Jun</span>
                        <span>Jul</span>
                        <span>Aug</span>
                        <span>Sep</span>
                        <span>Oct</span>
                        <span>Nov</span>
                        <span>Dec</span>
                    </div>
                </div>
            </article>

            <!-- CARD: TRANSACTIONS -->
            <article class="card card-feature">
                <div>
                    <div class="card-icon">
                        <div class="card-icon-inner">
                            <i class="fa-solid fa-credit-card"></i>
                        </div>
                    </div>
                    <div class="card-header">
                        <span class="card-title">Transactions</span>
                    </div>
                    <p class="card-text">
                        Catat setiap pemasukan dan pengeluaran dengan rapi sehingga
                        arus kas bisnis maupun pribadi lebih mudah dianalisis.
                    </p>
                </div>
            </article>

            <!-- CARD: CATEGORY -->
            <article class="card card-feature">
                <div>
                    <div class="card-icon">
                        <div class="card-icon-inner">
                            <i class="fa-solid fa-table-cells-large"></i>
                        </div>
                    </div>
                    <div class="card-header">
                        <span class="card-title">Category</span>
                    </div>
                    <p class="card-text">
                        Kelompokkan pengeluaran ke berbagai kategori agar Anda tahu ke
                        mana uang paling banyak dihabiskan perbulan.
                    </p>
                </div>
            </article>
        </section>
    </div>
</div>

