{{-- File: resources/views/sections/_services.blade.php --}}

<section id="services" class="py-5 bg-light">
    <div class="container position-relative">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Services</h2>
            <p class="text-muted">Providing solutions to drive your business success.</p>
        </div>

        <div class="swiper services-slider">
            <div class="swiper-wrapper py-4">
                
                {{-- Kartu 1 --}}
                <div class="swiper-slide">
                    <div class="card text-center h-100 shadow-sm feature-card">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">Internal Audit & Risk Management</h5>
                            <p class="card-text text-muted">Assisting clients in developing their risk profile and designing a strategy to mitigate the risks.</p>
                        </div>
                    </div>
                </div>

                {{-- Kartu 2 --}}
                <div class="swiper-slide">
                    <div class="card text-center h-100 shadow-sm feature-card">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">Technology Risk Management</h5>
                            <p class="card-text text-muted">Establish IT Master Plan (ITMP) / IT strategic Plan (ITSP) for business goals/vision.</p>
                        </div>
                    </div>
                </div>

                {{-- Kartu 3 --}}
                <div class="swiper-slide">
                    <div class="card text-center h-100 shadow-sm feature-card">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">Consultancy for International Standarization</h5>
                            <p class="card-text text-muted">Assisting in preparation for Certification Preparation Programme.</p>
                        </div>
                    </div>
                </div>
                
                {{-- Kartu 4 --}}
                <div class="swiper-slide">
                    <div class="card text-center h-100 shadow-sm feature-card">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">Data Center Consultation</h5>
                            <p class="card-text text-muted">Assisting in preparation for Data Center based upon TIA 942 Standard or Uptime Institute Tier standard.</p>
                        </div>
                    </div>
                </div>

                {{-- Kartu 5 --}}
                <div class="swiper-slide">
                    <div class="card text-center h-100 shadow-sm feature-card">
                        <div class="card-body">
                             <div class="service-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">Training and Workshop</h5>
                            <p class="card-text text-muted">Provide services for training and workshops.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-pagination"></div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <div class="text-center mt-5">
            <a href="{{ route('services.index') }}" class="btn btn-primary btn-lg">Explore more here now</a>
        </div>
    </div>
</section>