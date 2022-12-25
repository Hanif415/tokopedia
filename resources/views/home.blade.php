@extends('layouts.main')
@section('container')
{{-- Banner section --}}
<div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/12/15/405e792a-eacb-4a05-b066-54ef4f5e2d9f.jpg.webp?ect=4g" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/12/14/d923f234-c5f8-421c-9006-134b7bd3f25f.jpg.webp?ect=4g" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- Category section --}}
<div class="row shadow-lg p-3 rounded">
    <div class="col">
        <h5>Kategori pilihan</h5>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_e5b3e074-c897-4cf0-9ced-5572d0538e7c.jpg.webp" class="card-img-top" alt="...">
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_c6f70915-577f-4cd4-834c-daf892265ef0.jpg.webp" class="card-img-top" alt="...">
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_d7c67b76-9ff4-46f9-93a3-ec4be4918439.jpg.webp" class="card-img-top" alt="...">
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_76d08c44-8194-4454-9fb0-1e7a64b656aa.jpg.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_76d08c44-8194-4454-9fb0-1e7a64b656aa.jpg.webp" class="card-img-top" alt="...">
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_cfe03d9c-d79f-4327-8247-458429e1b116.jpg.webp" class="card-img-top" alt="...">
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/11/3127195/3127195_2883bb63-8f91-4c9c-a423-d68b22e51b78.jpg.webp" class="card-img-top" alt="...">
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_e5b3e074-c897-4cf0-9ced-5572d0538e7c.jpg.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- end of slider --}}
    </div>
    <div class="col">
        <h5>Top Up & Tagihan</h5>
        <div class="shadow p-3 rounded">
            <ul class="nav nav-tabs justify-content-between" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-success" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pulsa</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-success" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Paket Data</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-success" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Flight</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-success" id="listrik-tab" data-bs-toggle="tab" data-bs-target="#listrik-tab-pane" type="button" role="tab" aria-controls="listrik-tab-pane" aria-selected="false">Listrik PLN</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled><a href=""><span class="bi bi-three-dots-vertical"></span></a></button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae repudiandae earum nobis magni voluptate a deserunt adipisci saepe aspernatur officiis.</div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae repudiandae earum nobis magni voluptate a deserunt adipisci saepe aspernatur officiis.</div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae repudiandae earum nobis magni voluptate a deserunt adipisci saepe aspernatur officiis.</div>
                <div class="tab-pane fade" id="listrik-tab-pane" role="tabpanel" aria-labelledby="listrik-tab" tabindex="0">    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae repudiandae earum nobis magni voluptate a deserunt adipisci saepe aspernatur officiis.</div>
            </div>
        </div>
    </div>
</div>
@endsection