@extends('layouts.master')

@section('title', 'Profile')

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Here are our</h6>
                    <h2>Extracuricular SMAN 13 Bandung</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="apply-now" id="profile-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    {{-- <div class="row">
                    <h1 id="intra">- INTRA -</h1>
                    <div class="col-lg-12">
                        <details open>
                            <summary id="OSIS">
                                <span>OSIS</span>
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9" viewBox="0 0 14 9" fill="none">
                                        <path d="M1 1L7 7L13 1" stroke="#EBE8F0" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="det">
                                <img src="https://ujione.id/wp-content/uploads/2022/09/Organisasi-Siswa-Intra-Sekolah-OSIS-Pengertian-Tujuan-Fungsi-dan-Strukturnya.jpg" alt="">
                                <div class="deskripsi">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis adipisci nisi. Ut dolores ipsa minima? Alias fuga culpa perferendis odio, asperiores aliquid corporis quisquam, facere doloribus aut magnam dignissimos et libero. Vitae fugit at omnis est rerum nam. Debitis.\</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni exercitationem sint maiores beatae, incidunt alias ullam eligendi consequuntur quidem saepe atque? Delectus hic eligendi quidem, odit, rerum consectetur animi quibusdam eveniet, aliquam illum optio rem ipsa esse maiores totam. Nesciunt nisi quod dicta enim repellendus optio iste beatae libero.</p>
                                    <ul class="nested-list">
                                        <li>Meningkatkan keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.</li>
                                        <li>Meningkatkan kondisi sekolah yang sehat, indah, nyaman, dan peduli terhadap lingkungan.</li>
                                        <li>Meningkatkan profesionalisme tenaga pendidik dan tenaga kependidikan.</li>
                                        <li>Meningkatkan sarana-prasarana penunjang pendidikan. Yang ramah lingkungan.</li>
                                        <li>Mewujudkan pembelajaran PAIKEMKU (Pembelajaran Aktif, Inovatif, Kreatif, Efektif, Menyenangkan, Kompetitif dan Unggul).</li>
                                        <li>Meningkatkan pembelajaran berbasis IT.</li>
                                        <li>Mengembangkan pembelajaran berbasis bahasa Inggris.</li>
                                        <li>Meningkatkan budaya belajar, bekerja, dan disiplin, peduli dan berwawasan lingkungan.</li>
                                        <li>Mengembangkan potensi, minat, bakat dan keterampilan melalui pengembangan diri.</li>
                                        <li>Meningkatkan pembinaan dan keikutsertaan dalam berbagai lomba akademik (olimpiade) dan non akademik (ekstra kurikuler) berbasis lingkungan.</li>
                                        <li>Mengembangkan pengelolaan sekolah yang transparan, partisipatif, dan akuntabel.</li>
                                    </ul>
                                </div>
                            </div>
                        </details>
                    </div>

                    <div class="col-lg-12">
                        <details>
                            <summary id="mpk">
                                <span>MPK</span>
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9" viewBox="0 0 14 9" fill="none">
                                        <path d="M1 1L7 7L13 1" stroke="#EBE8F0" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="det">
                                <img src="https://ujione.id/wp-content/uploads/2022/09/Organisasi-Siswa-Intra-Sekolah-OSIS-Pengertian-Tujuan-Fungsi-dan-Strukturnya.jpg" alt="">
                                <div class="deskripsi">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis adipisci nisi. Ut dolores ipsa minima? Alias fuga culpa perferendis odio, asperiores aliquid corporis quisquam, facere doloribus aut magnam dignissimos et libero. Vitae fugit at omnis est rerum nam. Debitis.\</p>
                                </div>
                            </div>
                        </details>
                    </div>

                </div> --}}

                    <div class="row">
                        @foreach ($data as $ekskul)
                            <div class="col-lg-12">
                                <details>
                                    <summary id="{{ $ekskul->id }}">
                                        <span>{{ $ekskul->name }}</span>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9"
                                                viewBox="0 0 14 9" fill="none">
                                                <path d="M1 1L7 7L13 1" stroke="#EBE8F0" stroke-width="2"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </summary>
                                    <div class="det">
                                        <img src="/storage/images/extracurricular/{{ $ekskul->image }}" alt="">
                                        <div class="deskripsi">
                                            <p>{{ $ekskul->description }}
                                            </p>
                                        </div>
                                    </div>
                                </details>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
