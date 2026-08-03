<footer class="custom-footer">
    <div class="container py-5">
        <div class="row gy-4">
            <div class="col-md-4">
                <a class="footer-brand" href="{{ route('home') }}">
                    <span class="navbar-brand-accent">Comics</span> Shop
                </a>
                <p class="footer-text mt-2">La tua fumetteria di fiducia: albi, edizioni deluxe e rarità per ogni collezionista.</p>
            </div>
            <div class="col-6 col-md-4">
                <h6 class="footer-heading">Link utili</h6>
                <ul class="footer-links list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('fumetti') }}">Fumetti</a></li>
                    <li><a href="{{ route('chi-siamo') }}">Chi siamo</a></li>
                    <li><a href="{{ route('contatti') }}">Contatti</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4">
                <h6 class="footer-heading">Contatti</h6>
                <ul class="footer-links list-unstyled">
                    <li><a href="mailto:info@comics.test">info@comics.test</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container py-3">
            <p class="mb-0">&copy; {{ date('Y') }} Comics Shop. Tutti i diritti riservati.</p>
        </div>
    </div>
</footer>