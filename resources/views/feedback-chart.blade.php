<!DOCTYPE html>
<html>
<head>
    <title>Feedback Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 600px; height: 400px;">
        <canvas id="feedbackChart"></canvas>
    </div>

    <script>
        var feedbackData = <?php echo json_encode($feedbackData); ?>;
        var ratings = [];
        var counts = [];

        feedbackData.forEach(function(data) {
            ratings.push(data.rating);
            counts.push(data.count);
        });

        var ctx = document.getElementById('feedbackChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ratings,
                datasets: [{
                    label: 'Feedback Counts',
                    data: counts,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>