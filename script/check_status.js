document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('toggleButton').addEventListener('click', function() {
        var dashboard = document.getElementById('dashboard');
        dashboard.classList.toggle('open');
    });

    document.getElementById('button1').addEventListener('click', function() {
        window.location.href = 'grievances.html'; 
    });

    document.getElementById('button2').addEventListener('click', function() {
        window.location.href = 'status_check.html'; 
    });

    document.addEventListener('click', function(event) {
        var dashboard = document.getElementById('dashboard');
        var toggleButton = document.getElementById('toggleButton');
        if (!dashboard.contains(event.target) && !toggleButton.contains(event.target)) {
            dashboard.classList.remove('open');
        }
    });

    // Add event listener for "View Details" buttons
    document.querySelectorAll('.view-details').forEach(button => {
        button.addEventListener('click', function() {
            var timestamp = this.getAttribute('data-timestamp');
            window.location.href = 'view_details.php?timestamp=' + encodeURIComponent(timestamp);
        });
    });
});