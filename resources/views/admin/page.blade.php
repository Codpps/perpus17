@extends('admin.dashboard')
@section('page')
<div class="p-6 bg-gray-900 min-h-screen">
  <h1 class="text-2xl font-bold text-gray-700 mb-6">Dashboard</h1>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Card Total User -->
    <div class="bg-gray-300 shadow-lg rounded-lg p-6 border border-blue-200">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold text-gray-700">Total User</h2>
          <p class="text-4xl font-bold text-blue-500">1,245</p>
        </div>
        <div>
          <div class="p-4 bg-blue-100 rounded-full">
            <i class="bi bi-people-fill text-blue-500 text-2xl"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Total Buku -->
    <div class="bg-gray-300 shadow-lg rounded-lg p-6 border border-green-200">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold text-gray-700">Total Buku</h2>
          <p class="text-4xl font-bold text-green-500">3,420</p>
        </div>
        <div>
          <div class="p-4 bg-green-100 rounded-full">
            <i class="bi bi-book-fill text-green-500 text-2xl"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Buku Belum Dikembalikan -->
    <div class="bg-gray-300 shadow-lg rounded-lg p-6 border border-red-200">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold text-gray-700">Buku Belum Dikembalikan</h2>
          <p class="text-4xl font-bold text-red-500">120</p>
        </div>
        <div>
          <div class="p-4 bg-red-100 rounded-full">
            <i class="bi bi-exclamation-circle-fill text-red-500 text-2xl"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bar Chart Section -->
  <div class="mt-8 bg-gray-300 shadow-lg rounded-lg p-6">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">Peminjaman Buku</h2>
    <canvas id="bookLoanChart" width="100" height="20"></canvas>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('bookLoanChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
      datasets: [{
        label: 'Jumlah Peminjaman',
        data: [65, 59, 80, 81, 56, 55],
        backgroundColor: [
          'rgba(255, 99, 132, 0.6)',   // Pink
          'rgba(54, 162, 235, 0.6)',   // Blue
          'rgba(255, 206, 86, 0.6)',   // Yellow
          'rgba(75, 192, 192, 0.6)',   // Teal
          'rgba(153, 102, 255, 0.6)',  // Purple
          'rgba(255, 159, 64, 0.6)'    // Orange
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
});
</script>
@endsection
