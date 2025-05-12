const ctx = document.getElementById('salesChart').getContext('2d');
const salesChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
        datasets: [{
            label: 'Penjualan (Rp)',
            data: [500000, 700000, 600000, 800000, 900000],
            backgroundColor: '#007bff',
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});