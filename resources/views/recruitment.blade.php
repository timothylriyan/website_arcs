{{-- File: resources/views/recruitment.blade.php --}}

@extends('layouts.app')

@section('content')
    <section id="recruitment" class="py-5 bg-light">
        <div class="container" style="min-height: 70vh;">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Join Us</h2>
                <p class="text-muted">We are always looking for the best talent to join our solid team.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4 class="mb-4">Available Positions</h4>

                    {{-- Nanti bagian ini akan dinamis dari database --}}
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Backend Developer (Laravel)</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Full-time | Remote/Bogor</h6>
                            <p class="card-text">Mencari developer Laravel berpengalaman untuk membangun dan memelihara aplikasi web kami.</p>
                            <a href="https://www.linkedin.com/company/pt-arcs/jobs/" target="_blank">See Detail</a>
                        </div>
                    </div>

                     <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Frontend Developer (Vue/React)</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Full-time | Bogor</h6>
                            <p class="card-text">Bertanggung jawab untuk membangun user interface yang interaktif dan responsif.</p>
                            <a href="https://www.linkedin.com/company/pt-arcs/jobs/" target="_blank">See Detail</a>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                         <p>Don't see a role that fits your profile? You are always welcome to submit your CV to our email address for future consideration.</p>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hrd-job@arcs.co.id&su=Job%20Application%20/%20CV%20Submission" target="_blank" class="btn btn-primary btn-lg mt-3">
                        Send Your CV via Gmail</a>>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection