@extends('layouts.app')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Services</h2>
            <p class="text-muted">The solutions we offer to support your business success.</p>
        </div>

        {{-- AKORDION UTAMA --}}
        <div class="accordion" id="servicesAccordion">

            {{-- KATEGORI 1: Internal Audit & Risk Management --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingAuditRisk">
                    <button class="accordion-button accordion-button-custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAuditRisk">
                        Internal Audit & Risk Management
                    </button>
                </h2>
                {{-- Atribut data-bs-parent dihapus dari sini --}}
                <div id="collapseAuditRisk" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Risk Management</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Assisting clients in developing their risk profile and designing a strategy to mitigate the risks.</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Internal Audit Transformation</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Enhancing the contribution of the Internal Auditor to continuously improve company performance.</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Internal Audit Strategic Partnering and Staffing</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Formulating the right mix of resources that includes utilization of tools and applying standard.</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Vendor and Outsourcing Audits</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Assuring reliability and dependability of business partners.</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Fraud/Forensic Investigations</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Preventive, detective and corrective action in respect to fraud.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KATEGORI 2: Technology Risk Management --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingTechRisk">
                    <button class="accordion-button accordion-button-custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTechRisk">
                        Technology Risk Management
                    </button>
                </h2>
                {{-- Atribut data-bs-parent dihapus dari sini --}}
                <div id="collapseTechRisk" class="accordion-collapse collapse">
                    <div class="accordion-body">
                         <div class="list-group list-group-flush">
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Information Technology (IT) Governance</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Establish IT Master Plan (ITMP) / IT strategic Plan (ITSP) for business goals/vision.</li>
                                    <li>Establish or re-engineer a clients processes against international and local standards/best practices, such as:
                                        <ul class="list-unstyled ps-4 mt-2">
                                            <li>- ITIL for IT service management;</li>
                                            <li>- ISO/IEC 27001 for Information Security Management Systems (ISMS);</li>
                                            <li>- ISO/IEC 20000-1 for Services Management System (SMS);</li>
                                            <li>- Sarbanes-Oxley Act (SOX);</li>
                                            <li>- PRINCE2 and PMBOK for project management.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Enterprise Security</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Establish an IT security function based upon international standard/best practice.</li>
                                    <li>Security health check against NIST 800-53.</li>
                                    <li>Assisting compliance towards PCI DSS (for Payment Card Industry).</li>
                                    <li>TVRA (Threat Vulnerability Risk Assessment) for Building.</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Systems Controls and Effectiveness</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Checking controls outside and within the “IT Box”</li>
                                    <li>Control Objectives for Information and related Technology (COBIT)</li>
                                    <li>Setting up surveillance systems to immediately mitigate control weaknesses</li>
                                    <li>IT service Management to ITSM or ITIL standard</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">IT Systems Management</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Checking controls against ITSM or ITIL standard</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Business Continuity Plans</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Emergency response and evacuation plan based ISO 22301</li>
                                    <li>Safety and security operations manual ISO 45001</li>
                                    <li>Redundancy and recovery site establishment:
                                        <ul class="list-unstyled ps-4 mt-2">
                                            <li>- Avoiding single point of failure in building support infrastructure, e.g. electrical cabling, water and fuel supplies.</li>
                                            <li>- Site selection and site support requirements, e.g. food, water, medical supplies and temporary accommodation.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Information Communication and Technology (ICT) recovery plan</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Emergency communication</li>
                                    <li>IT disaster recovery plan</li>
                                    <li>Periodic testing, audit, drill and training</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">IT Project Management</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Quality assurance for system development</li>
                                    <li>Vendor Selection i.e. ERP, Core-Banking, IFRS, etc</li>
                                    <li>Data cleansing, integrity checking and migration</li>
                                    <li>Change management controls</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">IT Audit covering the high level assessment of</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>IT governance</li>
                                    <li>Enterprise security</li>
                                    <li>Systems controls and effectiveness</li>
                                    <li>Business Continuity Plans</li>
                                    <li>IT Project Management</li>
                                </ul>
                            </div>
                             <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Compliance review / Independent Review for Bank Indonesia (BI) and Otoritas Jasa Keuangan (OJK)</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>BI regulation regarding 23/6/PBI/2021 – Payment Service Provider and</li>
                                    <li>OJK regulation regarding POJK 38/POJK.03/2016 – The Application of Risk Management in the use of Information Technology by Commercial Bank</li>
                                    <li>OJK regulation regarding POJK 12/POJK.03/2018 - The Administration of Digital Banking services by commercial banks</li>
                                    <li>Other BI and OJK regulation regarding review of Information Technology.</li>
                                </ul>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Vulnerability Analysis / Conducting vulnerability and penetration testing for clients systems</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Internet Application System, Core Banking System</li>
                                    <li>HR System, Inventory System</li>
                                    <li>Network and WAN System</li>
                                    <li>PCI DSS Vulnerability Assessment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KATEGORI 3: International Standarization (SUDAH DIGABUNG) --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingStandardization">
                    <button class="accordion-button accordion-button-custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStandardization">
                        Consultasy for International Standarization
                    </button>
                </h2>
                {{-- Atribut data-bs-parent dihapus dan konten digabung --}}
                <div id="collapseStandardization" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Certification Preparation Programme</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Assisting in preparation for Business Continuity Management System (BCMS) certification and audit (based ISO 22301).</li>
                                    <li>Assisting in preparation for Services Management System (SMS) certification and audit (based ISO 20000-1).</li>
                                    <li>Assisting in preparation for Information Security Management System (ISMS) certification and audit (based ISO 27001).</li>
                                    <li>Assisting in preparation for Quality Management System (QMS) certification and audit (based ISO 9001).</li>
                                    <li>Assisting in preparation for Environmental Management System (EMS) certification and audit (based ISO 14001).</li>
                                    <li>Assisting in preparation for Occupational Health and Safety Management (OHSM) certification and audit (based ISO 45001).</li>
                                    <li>Assisting in preparation for PCI-DSS certification and audit (PCI-DSS v3.2).</li>
                                </ul>
                                <p class="mt-3"><small><strong>Note:</strong> the certification will be provide by other certification body.</small></p>
                            </div>
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Training for introduction and implementation for</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Business Continuity Management System (BCMS) – ISO 22301.</li>
                                    <li>Services Management System (SMS) - ISO 20000-1.</li>
                                    <li>Information Security Management System (ISMS) - ISO 27001.</li>
                                    <li>Quality Management System (QMS) - ISO 9001.</li>
                                    <li>Environmental Management System (EMS) - ISO 14001.</li>
                                    <li>Occupational Health and Safety Management (OHSM) - ISO 45001.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KATEGORI 4: Data Center Consultation --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingDataCenter">
                    <button class="accordion-button accordion-button-custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataCenter">
                        Data Center Consultation
                    </button>
                </h2>
                {{-- Atribut data-bs-parent dihapus dari sini --}}
                <div id="collapseDataCenter" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Data Center Consultation</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Assisting in preparation for Data Center based upon TIA 942 Standard or Uptime Institute Tier standard</li>
                                    <li>Conduct Data Center Audit based upon TIA 942 Standard or Uptime Institute Tier standard</li>
                                </ul>
                                <p class="mt-3"><small><strong>Note:</strong> the certification will be provide by other certification body.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KATEGORI 5: Training And Workshop --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="headingTraining">
                    <button class="accordion-button accordion-button-custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTraining">
                        Training And Workshop
                    </button>
                </h2>
                {{-- Atribut data-bs-parent dihapus dari sini --}}
                <div id="collapseTraining" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item pt-3 pb-4">
                                <h5 class="fw-bold mb-1">Training And Workshop</h5>
                                <ul class="service-point-list ps-3 mb-0">
                                    <li>Risk Management Workshop based upon ISO 31000</li>
                                    <li>ISO 27001, ISO 20000-1 and ISO 22301 Internal Audit Course</li>
                                    <li>ISO 27001, ISO 20000-1 and ISO 22301 Lead Auditor IRCA Registered Course</li>
                                    <li>ISO 27001, ISO 20000-1 and ISO 22301 Lead Implementation Registered Course</li>
                                    <li>IT Audit for Beginner</li>
                                    <li>Information Technology Infrastructure Library (ITIL v3 & ITIL v4)</li>
                                    <li>IT Governance based upon COBIT 5.0 & COBIT 2019</li>
                                    <li>CISSP, CISM and CISA 3 in 1 Workshop / Course.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection