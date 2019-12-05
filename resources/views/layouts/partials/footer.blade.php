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
            <div class="mx-auto font-weight-bold text-uppercase text-white">
                <span class="h5-responsive my-3"><i class="fas fa-camera"></i> Media Credits:</span>
                <ul class="list-unstyled">
                    <li>
                        <a href="http://www.blakeschultz.org/photography-contact" class="text-white">Blake Schultz</a>
                    </li>
                    <li>
                        <a href="https://www.jakeriggins.com/" class="text-white">Jake Riggins Productions</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">
            &copy; {{ now()->year }} Reedy River Riot
        </div>
    </div>
</footer>