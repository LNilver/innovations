    </div>
  </main>
    <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!-- Github buttons -->
  <script>
var ctx = document.getElementById('chartEstadoHerramientas').getContext('2d');
var chartEstadoHerramientas = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Buen Estado', 'Mal Estado'],
        datasets: [{
            data: [<?php echo $HerramientaBuen; ?>, <?php echo $HerramientaMal; ?>],
            backgroundColor: ['#046F14', '#910622'],
        }]
    },
    options: {
        responsive: true,
        legend: {
            position: 'top',
        },
        title: {
            display: true,
            text: 'Distribución de Herramientas por Estado'
        }
    }
});
</script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</div>
</body>
</html>