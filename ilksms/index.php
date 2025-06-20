<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ilksms.com - Eğitim Teknolojileri Platformu</title>
  <link rel="icon" href="assets/img/ilksms-logo.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    /* Custom Styles */
    body {
      background-color: #f8f9fa;
    }
    .hero-section {
      background: #0077b6;
      color: white;
      padding: 100px 0;
    }
    .feature-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    .cta-section {
      background: #00b4d8;
      color: white;
      padding: 60px 0;
    }
    .footer {
      background-color: #212529;
      color: #f8f9fa;
      padding: 40px 0;
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/ilksms-logo.webp" alt="Logo" height="40" class="me-2">
        ilksms.com
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#features">Özellikler</a></li>
          <li class="nav-item"><a class="nav-link" href="#solutions">Çözümler</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Referanslar</a></li>
          <li class="nav-item"><a class="nav-link" href="#pricing">Fiyatlandırma</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">İletişim</a></li>
        </ul>
        <a href="#demo" class="btn btn-light ms-3">Demo Talep Et</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section text-center">
    <div class="container">
      <h1 class="display-4 fw-bold">Eğitim Kurumları İçin <span class="text-warning">Dijital Çözümler</span></h1>
      <p class="lead mb-4">Okul yönetiminden veli iletişimine kadar tüm süreçleri tek platformda yönetin.</p>
      <a href="#demo" class="btn btn-light btn-lg">Ücretsiz Demo</a>
    </div>
  </section>

  <!-- Key Features -->
  <section id="features" class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold mb-3">Temel Özelliklerimiz</h2>
        <p class="lead text-muted">Eğitim kurumlarının ihtiyaç duyduğu tüm araçlar tek platformda</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card h-100 p-4">
            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fas fa-comment-dots fa-lg"></i>
            </div>
            <h4 class="mb-3">SMS & WhatsApp</h4>
            <p class="text-muted">Toplu SMS ve WhatsApp gönderimleri ile velilerle anlık iletişim kurun.</p>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="feature-card h-100 p-4">
            <div class="icon-box bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fas fa-calendar-check fa-lg"></i>
            </div>
            <h4 class="mb-3">E-Randevu</h4>
            <p class="text-muted">Velilerin okul yönetimi ve öğretmenlerle randevu almasını kolaylaştırın.</p>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="feature-card h-100 p-4">
            <div class="icon-box bg-info bg-opacity-10 text-info rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fas fa-user-graduate fa-lg"></i>
            </div>
            <h4 class="mb-3">E-Yoklama</h4>
            <p class="text-muted">Öğrenci devamsızlıklarını dijital ortamda takip edin ve raporlayın.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card h-100 p-4">
            <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fas fa-book fa-lg"></i>
            </div>
            <h4 class="mb-3">Dijital Kaynaklar</h4>
            <p class="text-muted">Ders programları, sınav tarihleri ve dijital kaynaklara tek platformdan erişim.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card h-100 p-4">
            <div class="icon-box bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fas fa-users fa-lg"></i>
            </div>
            <h4 class="mb-3">Veliler İçin Kolaylık</h4>
            <p class="text-muted">Velilerin tüm işlemleri mobil cihazlardan kolayca yönetebileceği bir platform.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card h-100 p-4">
            <div class="icon-box bg-secondary bg-opacity-10 text-secondary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
              <i class="fas fa-chart-line fa-lg"></i>
            </div>
            <h4 class="mb-3">Performans Takibi</h4>
            <p class="text-muted">Öğrencilerin akademik performansını takip edin ve raporlayın.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Solutions Section -->
  <section id="solutions" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold mb-3">Kapsamlı Çözümlerimiz</h2>
        <p class="lead text-muted">Eğitim süreçlerinizi kolaylaştıran modüler yapı</p>
      </div>
      
      <!-- Your existing module includes would go here -->
      <?php
      include("includes/mod_eokul.php");
      include("includes/mod_ikelebek.php");
      include("includes/mod_ikilittahta.php");
      include("includes/mod_iders.php");
      include("includes/mod_eyoklama.php");
      include("includes/mod_smswhatsapp.php");
      include("includes/mod_okulummobil.php");
      ?>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold mb-3">Müşterilerimiz Ne Diyor?</h2>
        <p class="lead text-muted">Eğitim kurumlarının ilksms.com deneyimleri</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="testimonial-card h-100 p-4">
            <div class="d-flex align-items-center mb-3">
              <img src="https://randomuser.me/api/portraits/women/43.jpg" class="rounded-circle me-3" width="50" height="50">
              <div>
                <h5 class="mb-0">Ayşe Kaya</h5>
                <small class="text-muted">Özel Okul Müdürü</small>
              </div>
            </div>
            <p class="mb-0">"Velilerimizle iletişimimiz çok daha kolaylaştı. Toplu duyuruları anında gönderebiliyoruz."</p>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="testimonial-card h-100 p-4">
            <div class="d-flex align-items-center mb-3">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="50" height="50">
              <div>
                <h5 class="mb-0">Mehmet Yılmaz</h5>
                <small class="text-muted">Devlet Okulu Müdürü</small>
              </div>
            </div>
            <p class="mb-0">"E-yoklama sistemi sayesinde devamsızlık takibi çok kolaylaştı. Raporlama özellikleri mükemmel."</p>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="testimonial-card h-100 p-4">
            <div class="d-flex align-items-center mb-3">
              <img src="https://randomuser.me/api/portraits/women/65.jpg" class="rounded-circle me-3" width="50" height="50">
              <div>
                <h5 class="mb-0">Zeynep Demir</h5>
                <small class="text-muted">Kurs Merkezi Yöneticisi</small>
              </div>
            </div>
            <p class="mb-0">"Mobil uygulama ile velilerimiz tüm bilgilere anında ulaşabiliyor. Çok memnunuz."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold mb-3">Uygun Fiyatlandırma</h2>
        <p class="lead text-muted">Kurumunuzun büyüklüğüne göre esnek paketler</p>
      </div>
      
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-header bg-white py-4 text-center">
              <h4 class="fw-bold">Temel</h4>
              <div class="d-flex justify-content-center align-items-end">
                <span class="display-4 fw-bold">₺499</span>
                <span class="text-muted">/ay</span>
              </div>
              <small class="text-muted">Küçük ölçekli kurumlar için</small>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-4">
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 1,000 SMS/ay</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> E-Yoklama</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> E-Randevu</li>
                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> WhatsApp Entegrasyonu</li>
                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Mobil Uygulama</li>
              </ul>
              <a href="#" class="btn btn-outline-primary w-100">Başla</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-lg">
            <div class="card-header bg-primary text-white py-4 text-center position-relative">
              <span class="badge bg-warning text-dark position-absolute top-0 start-50 translate-middle mt-2">Popüler</span>
              <h4 class="fw-bold">Profesyonel</h4>
              <div class="d-flex justify-content-center align-items-end">
                <span class="display-4 fw-bold">₺999</span>
                <span class="opacity-75">/ay</span>
              </div>
              <small class="opacity-75">Orta ölçekli kurumlar için</small>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-4">
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 5,000 SMS/ay</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> E-Yoklama</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> E-Randevu</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> WhatsApp Entegrasyonu</li>
                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Mobil Uygulama</li>
              </ul>
              <a href="#" class="btn btn-primary w-100">Başla</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-header bg-white py-4 text-center">
              <h4 class="fw-bold">Kurumsal</h4>
              <div class="d-flex justify-content-center align-items-end">
                <span class="display-4 fw-bold">₺1,999</span>
                <span class="text-muted">/ay</span>
              </div>
              <small class="text-muted">Büyük ölçekli kurumlar için</small>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-4">
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 20,000 SMS/ay</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> E-Yoklama</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> E-Randevu</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> WhatsApp Entegrasyonu</li>
                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Mobil Uygulama</li>
              </ul>
              <a href="#" class="btn btn-outline-primary w-100">Başla</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-4">
        <p class="text-muted">Özel ihtiyaçlarınız mı var? <a href="#contact" class="text-primary">Özel çözüm teklifi alın</a></p>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="demo" class="cta-section text-center">
    <div class="container">
      <h2 class="display-5 fw-bold mb-4">Ücretsiz Demo Talep Edin</h2>
      <p class="lead mb-4">Sistemimizi 14 gün boyunca ücretsiz deneyin, eğitim süreçlerinizi nasıl kolaylaştırabileceğimizi görün.</p>
      <form class="row g-3 justify-content-center">
        <div class="col-md-5">
          <input type="text" class="form-control form-control-lg" placeholder="Adınız">
        </div>
        <div class="col-md-5">
          <input type="email" class="form-control form-control-lg" placeholder="E-posta Adresiniz">
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-light btn-lg w-100">Gönder</button>
        </div>
      </form>
  </section>