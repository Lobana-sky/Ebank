@if(session()->has('message'))
    <div id="alert-box" class="alert alert-success" 
        style="position: absolute;
        z-index: 99999;
        top: 10%;
        left: 30%;
        width: 50%;
        transition: opacity 0.5s ease-in-out;"> <!-- Added transition -->
        {{ session()->get('message') }}
    </div>

    <script>
        setTimeout(function() {
            var alertBox = document.getElementById('alert-box');
            alertBox.style.opacity = '0'; // Start fade-out

            setTimeout(function() {
                alertBox.style.display = 'none'; // Hide after fade-out completes
            }, 900); // Duration of the fade-out transition
        }, 3000); // Initial delay before fade-out starts
    </script>
@endif
