<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 text-center">
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="60" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Cari</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-dark" href="/login">Sign up</a>
      </div>
    </div>
  </header>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Yasmin <br>Foodies</h1>
      <p class="lead my-3">A Blog and A Food</p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Lapis Legit</h3>
          <div class="mb-1 text-muted">19 Nov 2020</div>
          <p class="card-text mb-auto">Berbeda dengan lapis biasa. Lapis legit khas Lampung memiliki tekstur yang berminyak dan lengket dengan rasa manis. Lapis legit khas Lampung tidak dicampurkan dengan tepung melainkan dibuat dari telur yang banyak. </p>
          <a href="/pages/detailProduk/lapisLegit" class="stretched-link">Lanjut membaca</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Restoran Terpopuler di Lampung
      </h3>

      

      <div class="blog-post">
      <img src="assets/bgg.jpg" alt="..." class="rounded-circle">
      </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>
    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">YasminFoodies is a food and lifestyle blog based in BandarLampung – Indonesia.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2020</a></li>
          <li><a href="#">February 2020</a></li>
          <li><a href="#">January 2020</a></li>
          <li><a href="#">December 2019</a></li>
          <li><a href="#">November 2019</a></li>
          <li><a href="#">October 2019</a></li>
          <li><a href="#">September 2019</a></li>
          <li><a href="#">August 2019</a></li>
          <li><a href="#">July 2019</a></li>
          <li><a href="#">June 2019</a></li>
          <li><a href="#">May 2019</a></li>
          <li><a href="#">April 2019</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<?= $this->endSection(); ?>