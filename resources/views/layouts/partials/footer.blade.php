<footer class="black font-small pt-4 text-white">
    <div class="container text-center text-md-left">
        <div class="d-flex justify-content-around">
            <div class="mx-auto">
                <a href="{{ route('privacy') }}" class="h5-responsive font-weight-bold text-uppercase text-white my-3">
                    Privacy Policy
                </a>
            </div>
            <div class="mx-auto">
                <a href="{{ route('terms') }}" class="h5-responsive font-weight-bold text-uppercase text-white my-3">
                    Terms & Conditions
                </a>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">
            &copy; {{ now()->year }} Reedy River Riot
        </div>
    </div>
</footer>