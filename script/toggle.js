


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