<!doctype html>
<html lang="en">
{{-- head --}}
    @include('layoutsDashboard/head')

  <body id="page-top">
    {{-- navbar --}}
    @include('home/template/navbar')

    <div class="container">
    <header>
            <div class="container header__container">
                <div class="header__left">
                    <h1>Mari Berkembang Bersama Kami</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quisquam
                        maiores dolore omnis sunt error, ipsa porro ullam minus nihil inventore
                        placeat sint pariatur officiis maxime consectetur ad nulla suscipit?
                    </p>
                    <a href="/register" class="btn btn-primary">Get Started</a>
                </div>

                <div class="header__right">
                    <div class="header__right-image">
                        <img src="https://img.freepik.com/free-vector/illustrated-woman-being-intern-company_23-2148726151.jpg?w=1380" alt="">
                    </div>
                    
                </div>
            </div>
        </header>
    </div>
    <!--===================================END OF HEADER=====================================-->

    <section class="categories">
            <div class="container categories__container">
                <div class="categories__left"> 
                    <h1>Categories</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt provident corporis nostrum dolorum, impedit 
                        nobis atque laboriosam inventore unde, eos nisi blanditiis ratione rem quasi velit excepturi vel odio perferendis?
                    </p>

                </div>

                <div class="categories__right"> 
                    <article class="category">
                        <span class="category__icon"><i class="uil uil-database"></i></span>
                        <h5>Database</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi unde optio hic?</p>
                    </article>

                    <article class="category">
                        <span class="category__icon"><i class="uil uil-browser"></i></i></span>
                        <h5>Web Programming</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi unde optio hic?</p>
                    </article>

                    <article class="category">
                        <span class="category__icon"><i class="uil uil-mobile-android"></i></i></span>
                        <h5>Mobile Programming</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi unde optio hic?</p>
                    </article>

                    <article class="category">
                        <span class="category__icon"><i class="uil uil-analytics"></i></i></span>
                        <h5>Data Analyst</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi unde optio hic?</p>
                    </article>
                </div>
            </div>
        
        </section>
        <!--===================================END OF CATEGORIES ========================-->
    <!-- Footer -->
      @include('layoutsDashboard/footer')



   {{-- logout --}}
   @include('layoutsDashboard/logout-modal')
  
   {{-- javascript --}}
   @include('layoutsDashboard/javascript')
  </body>
  
</html>
