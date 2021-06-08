<main>
    <section class="noir-background">
        <div class="container">
            <div class="cards">
                @foreach ($cards as $card)
                    
                    <div class="card">
                        <img src=" {{ $card['image'] }} " alt="">
                        <h5 class="card-title"> {{ $card['title'] }} </h5>
                    </div>
                @endforeach
            </div>

            <button class="main-btn">
                <a href="https://www.dccomics.com/comics"> load more</a>
            </button>
        </div>

    </section>
</main>