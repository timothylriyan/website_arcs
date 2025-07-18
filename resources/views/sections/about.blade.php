{{-- File: resources/views/sections/_about.blade.php --}}

<section id="about" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">About Us</h2>
            <p class="text-muted">A closer look at who we are and what we do.</p>
        </div>
        <div class="row align-items-center">
            {{-- KOLOM KIRI: LOGO --}}
            <div class="col-md-6 mb-4 mb-md-0 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/ARCS_Logo_Transparant.png') }}" alt="ARCS Logo" style="width: 250px; max-width: 100%;">
            </div>

            {{-- KOLOM KANAN: DESKRIPSI --}}
            <div class="col-md-6">
                <h3 class="fw-bold">PT Anugrah Rekatama Cipta Solusi (ARCS)</h3>
                <p class="text-muted">
                    PT Anugrah Rekatama Cipta Solusi (ARCS) established in 2008, and is specialized in:
                </p>

                <div class="mt-4">
                    <h5 class="fw-bold">Internal Audit</h5>
                    <p class="text-muted" style="font-size: 0.9rem;">
                        IA Function Development, IA Transformation, IA Co-sourcing and outsourcing, IA Quality Assurance and Fraud/Forensic Investigation.
                    </p>

                    <h5 class="fw-bold mt-3">Risk Management</h5>
                    <p class="text-muted" style="font-size: 0.9rem;">
                        Risk profile and Designing a strategy to mitigate the risks.
                    </p>

                    <h5 class="fw-bold mt-3">Technology Risk Management</h5>
                    <p class="text-muted" style="font-size: 0.9rem;">
                        IT Governance, Enterprise Security, Systems Controls and its Effectiveness, Business Continuity, Vulnerability Analysis, IT Audit, and Independent Reviewer for IDX (Indonesian Stock Exchange) requirement and Central Bank ( Bank Indonesia ) Independent Reviewer. Data Center Design, audit and Consultation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>