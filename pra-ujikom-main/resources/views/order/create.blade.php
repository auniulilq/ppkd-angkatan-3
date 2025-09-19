<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            text-align: center;
            color: #4a5568;
            margin-bottom: 10px;
            font-size: 2.5em;
            font-weight: 700;
        }

        .header .subtitle {
            text-align: center;
            color: #718096;
            font-size: 1.1em;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card h2 {
            color: #4a5568;
            margin-bottom: 20px;
            font-size: 1.8em;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: #4a5568;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-success {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(72, 187, 120, 0.3);
        }

        .btn-danger {
            background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%);
            color: white;
        }

        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 101, 101, 0.3);
        }

        .btn-warning {
            background: linear-gradient(135deg, #ed8936 0%, #dd6b20 100%);
            color: white;
        }

        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(237, 137, 54, 0.3);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .service-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
        }

        .service-card h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .service-card .price {
            font-size: 1.5em;
            font-weight: 700;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .cart-table th,
        .cart-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .cart-table th {
            background: #f7fafc;
            font-weight: 600;
            color: #4a5568;
        }

        .cart-table tr:hover {
            background: #f7fafc;
        }

        .total-section {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-top: 20px;
        }

        .total-section h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .total-amount {
            font-size: 2.5em;
            font-weight: 700;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-pending {
            background: #fed7d7;
            color: #c53030;
        }

        .status-process {
            background: #feebc8;`
            color: #dd6b20;
        }

        .status-1 {
            background: #c6f6d5;
            color: #2f855a;
        }

        .status-0 {
            background: #bee3f8;
            color: #2b6cb0;
        }

        .transaction-list {
            max-height: 400px;
            overflow-y: auto;
        }

        .transaction-item {
            background: #f7fafc;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            border-left: 4px solid #667eea;
        }

        .transaction-item h4 {
            color: #4a5568;
            margin-bottom: 5px;
        }

        .transaction-item p {
            color: #718096;
            margin-bottom: 5px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            line-height: 1;
        }

        .close:hover {
            color: #000;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
        }

        .stat-card h3 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .stat-card p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 2em;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        .receipt {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            font-family: 'Courier New', monospace;
        }

        .receipt-header {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .receipt-total {
            border-top: 2px solid #333;
            padding-top: 10px;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>🧺 Laundry Diri</h1>
            <p class="subtitle">Laundry Diri - Landry cepat, mudah, dan terpecaya</p>
        </div>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3 id="totalTransactions">0</h3>
                <p>Total Transaksi</p>
            </div>
            <div class="stat-card">
                <h3 id="totalRevenue">Rp 0</h3>
                <p>Total Pendapatan</p>
            </div>
            <div class="stat-card">
                <h3 id="activeOrders">0</h3>
                <p>Pesanan Aktif</p>
            </div>
            <div class="stat-card">
                <h3 id="completedOrders">0</h3>
                <p>Pesanan Selesai</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Left Panel: New Transaction -->
            <div class="card">
                <h2>🛒 Transaksi Baru</h2>

                <form method="POST" action="{{ route('order.store') }}" id="transactionForm" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="customerName">Nama Pelanggan</label>
                        <select name="id_customer" id="customerName" required>
                            <option value="">Pilih Customer</option>
                            @foreach ($customers as $customer)
                            <option data-phone="{{ $customer->phone }}" data-address="{{ $customer->address }}" value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="customerPhone">No. Telepon</label>
                            <input type="text" name="phone" id="customerPhone" readonly>
                        </div>
                        <div class="form-group">
                            <label for="customerAddress">Alamat</label>
                            <input type="text" name="address" id="customerAddress" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pilih Layanan</label>
                        <div class="services-grid">
                            @foreach ($services as $service)
                            <button type="button" class="service-card" onclick="addService('{{ $service->id }}', {{ $service->price }})">
                                <h3>{{ $service->service_name }}</h3>
                                <div class="price">Rp {{ $service->price }}/kg</div>
                            </button>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="serviceWeight">Berat/Jumlah</label>
                            <input type="number" id="serviceWeight" step="any" min="1" required>
                        </div>
                        <div class="form-group">
                            <label for="serviceType">Jenis Layanan</label>
                            <select id="serviceType" required>
                                <option value="">Pilih Layanan</option>
                                @foreach ($services as $service)
                                <option data-price="{{ $service->price }}" value="{{ $service->id }}">{{ $service->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="notes">Catatan</label>
                        <textarea id="notes" rows="3" placeholder="Catatan khusus untuk pesanan..."></textarea>
                    </div>

                    <button type="button" class="btn btn-primary" onclick="addToCart()" style="width: 100%; margin-bottom: 10px;">
                        ➕ Tambah ke Keranjang
                    </button>

                    <!-- Cart -->
                    <div id="cartSection" style="display: none;">
                        <h3>📋 Keranjang Belanja</h3>
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th>Layanan</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="cartItems">
                            </tbody>
                        </table>

                        <div class="total-section">
                            <h3>Total Pembayaran</h3>
                            <div class="total-amount" id="totalAmount">Rp 0</div>
                            <input type="hidden" name="total" id="totalValue">
                            <button type="button" class="btn btn-success" onclick="processTransaction()" style="width: 100%; margin-top: 15px;">
                                💳 Proses Transaksi
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            <!-- Right Panel: Transaction History -->
            <div class="card">
                <h2>📊 Riwayat Transaksi</h2>
                <div class="transaction-list" id="transactionHistory">
                </div>

                <a href="{{ route('order.index') }}" style="text-decoration: none; color: white;">
                    <button class="btn btn-warning" style="width: 100%; margin-top: 15px;">
                        📋 Lihat Semua Transaksi
                    </button>
                </a>
            </div>
        </div>

        <!-- Action Buttons -->
        <div style="text-align: center; margin-top: 20px;">
            <button class="btn btn-primary" onclick="showReports()" style="margin: 0 10px;">
                📈 Laporan Penjualan
            </button>
            <button class="btn btn-danger" onclick="clearCart()" style="margin: 0 10px;">
                🗑️ Bersihkan Keranjang
            </button>
        </div>
    </div>

    <!-- Modal for Transaction Details -->
    <div id="transactionModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="modalContent"></div>
        </div>
    </div>

        {{-- <script>
            localStorage.clear();
        </script> --}}

    <script>
        // Buat Tamplan data customer
        const selectCustomer = document.querySelector('#customerName');
        selectCustomer.addEventListener('change', ()=>{
            const optionCustomer = selectCustomer.options[selectCustomer.selectedIndex];
            const phoneCustomer = optionCustomer.dataset.phone;
            const addressCustomer = optionCustomer.dataset.address;
            document.querySelector('#customerPhone').value = phoneCustomer;
            document.querySelector('#customerAddress').value = addressCustomer;
        });


        let cart = [];
        let transactions = JSON.parse(localStorage.getItem('laundryTransactions')) || [];
        let transactionCounter = transactions.length + 1;

        // Tombol button pilih jenis service
        function addService(serviceName, price) {
            document.getElementById('serviceType').value = serviceName;
            document.getElementById('serviceWeight').focus();
        }

        // Remove row detail service
        function removeFromCart(itemId) {
            cart = cart.filter(item => item.id !== itemId);
            updateCartDisplay();
        }

        function clearCart() {
            cart = [];
            updateCartDisplay();
            document.getElementById('transactionForm').reset();
        }

        function processTransaction() {
            const selectCustomer = document.querySelector('#customerName');
            const optionCustomer = selectCustomer.options[selectCustomer.selectedIndex];
            const addressCustomer = optionCustomer.dataset.address;
            const customerName = optionCustomer.textContent;
            const customerPhone = optionCustomer.dataset.phone;
            const customerAddress = optionCustomer.dataset.address;

            if (!customerName || !customerPhone || cart.length === 0) {
                alert('Mohon lengkapi data pelanggan dan pastikan ada item di keranjang!');
                return;
            }

            const total = cart.reduce((sum, item) => sum + item.subtotal, 0);

            const transaction = {
                id: `TRX-${transactionCounter.toString().padStart(3, '0')}`,
                customer: {
                    name: customerName,
                    phone: customerPhone,
                    address: customerAddress
                },
                items: [...cart],
                total: total,
                date: new Date().toISOString(),
                status: '0'
            };

            transactions.push(transaction);
            localStorage.setItem('laundryTransactions', JSON.stringify(transactions));

            transactionCounter++;

            // Show receipt
            showReceipt(transaction);

            document.querySelector('#transactionForm').submit();

            // Clear form and cart
            clearCart();
            updateTransactionHistory();
            updateStats();
        }

        function showReceipt(transaction) {
            const receiptHtml = `
                <div class="receipt">
                    <div class="receipt-header">
                        <h2>🧺 LAUNDRY RECEIPT</h2>
                        <p>ID: ${transaction.id}</p>
                        <p>Tanggal: ${new Date(transaction.date).toLocaleString('id-ID')}</p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <strong>Pelanggan:</strong><br>
                        ${transaction.customer.name}<br>
                        ${transaction.customer.phone}<br>
                        ${transaction.customer.address}
                    </div>

                    <div style="margin-bottom: 20px;">
                        <strong>Detail Pesanan:</strong><br>
                        ${transaction.items.map(item => `
                            <div class="receipt-item">
                                <span>${item.service} (${item.weight} ${item.service.includes('Sepatu') ? 'pasang' : item.service.includes('Karpet') ? 'm²' : 'kg'})</span>
                                <span>Rp ${item.subtotal.toLocaleString('id-ID')}</span>
                            </div>
                        `).join('')}
                    </div>

                    <div class="receipt-total">
                        <div class="receipt-item">
                            <span>TOTAL:</span>
                            <span>Rp ${transaction.total.toLocaleString('id-ID')}</span>
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 20px;">
                        <p>Terima kasih atas kepercayaan Anda!</p>
                        <p>Barang akan siap dalam 1-2 hari kerja</p>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 20px;">
                    <a href="" class="btn btn-primary" >🖨️ Cetak Struk</a>
                    <button class="btn btn-success" onclick="closeModal()">✅ Selesai</button>
                </div>
            `;

            document.getElementById('modalContent').innerHTML = receiptHtml;
            document.getElementById('transactionModal').style.display = 'block';
        }

        // ambil  5 transaksi terakhir lalu join data baru
        function updateTransactionHistory() {
            const historyContainer = document.getElementById('transactionHistory');
            const recentTransactions = transactions.slice(-5).reverse();

            const html = recentTransactions.map(transaction => `
                <div class="transaction-item">
                    <h4>${transaction.id} - ${transaction.customer.name}</h4>
                    <p>📞 ${transaction.customer.phone}</p>
                    <p>🛍️ ${transaction.items.map(item => `${item.service} - ${item.weight}${item.service.includes('Sepatu') ? 'pasang' : item.service.includes('Karpet') ? 'm²' : 'kg'}`).join(', ')}</p>
                    <p>💰 Rp ${transaction.total.toLocaleString('id-ID')}</p>
                    <p>📅 ${new Date(transaction.date).toLocaleString('id-ID')}</p>
                    <span class="status-badge status-${transaction.status}">${getStatusText(transaction.status)}</span>
                </div>
            `).join('');

            historyContainer.innerHTML = html || '<p>Belum ada transaksi</p>';
        }

        // status orderan
        function getStatusText(status) {
            const statusMap = {
                '0': 'Baru',
                '1': 'Selesai'
            };
            return statusMap[status] || status;
        }

        // tanda tanya
        function updateStats() {
            const totalTransactions = transactions.length;
            const totalRevenue = transactions.reduce((sum, t) => sum + t.total, 0);
            const activeOrders = transactions.filter(t => t.status !== 'delivered').length;
            const completedOrders = transactions.filter(t => t.status === 'delivered').length;

            document.getElementById('totalTransactions').textContent = totalTransactions;
            document.getElementById('totalRevenue').textContent = `Rp ${totalRevenue.toLocaleString('id-ID')}`;
            document.getElementById('activeOrders').textContent = activeOrders;
            document.getElementById('completedOrders').textContent = completedOrders;
        }

        // tidak dipakai, menuju order list saja dan simpan ke db
        function showAllTransactions() {
            const allTransactionsHtml = `
                <h2>📋 Semua Transaksi</h2>
                <div style="max-height: 400px; overflow-y: auto;">
                    ${transactions.map(transaction => `
                        <div class="transaction-item">
                            <h4>${transaction.id} - ${transaction.customer.name}</h4>
                            <p>📞 ${transaction.customer.phone}</p>
                            <p>🛍️ ${transaction.items.map(item => `${item.service} - ${item.weight}${item.service.includes('Sepatu') ? 'pasang' : item.service.includes('Karpet') ? 'm²' : 'kg'}`).join(', ')}</p>
                            <p>💰 Rp ${transaction.total.toLocaleString('id-ID')}</p>
                            <p>📅 ${new Date(transaction.date).toLocaleString('id-ID')}</p>
                            <span class="status-badge status-${transaction.status}">${getStatusText(transaction.status)}</span>
                            <button class="btn btn-primary" onclick="updateTransactionStatus('${transaction.id}')" style="margin-top: 10px; padding: 5px 15px; font-size: 12px;">
                                📝 Update Status
                            </button>
                        </div>
                    `).join('')}
                </div>
            `;

            document.getElementById('modalContent').innerHTML = allTransactionsHtml;
            document.getElementById('transactionModal').style.display = 'block';
        }

        function showReports() {
            const today = new Date();
            const thisMonth = today.getMonth();
            const thisYear = today.getFullYear();

            const monthlyTransactions = transactions.filter(t => {
                const tDate = new Date(t.date);
                return tDate.getMonth() === thisMonth && tDate.getFullYear() === thisYear;
            });

            const monthlyRevenue = monthlyTransactions.reduce((sum, t) => sum + t.total, 0);

            const serviceStats = {};
            transactions.forEach(t => {
                t.items.forEach(item => {
                    if (!serviceStats[item.service]) {
                        serviceStats[item.service] = { count: 0, revenue: 0 };
                    }
                    serviceStats[item.service].count++;
                    serviceStats[item.service].revenue += item.subtotal;
                });
            });

            const reportsHtml = `
                <h2>📈 Laporan Penjualan</h2>

                <div class="stats-grid" style="margin-bottom: 20px;">
                    <div class="stat-card">
                        <h3>${transactions.length}</h3>
                        <p>Total Transaksi</p>
                    </div>
                    <div class="stat-card">
                        <h3>${monthlyTransactions.length}</h3>
                        <p>Transaksi Bulan Ini</p>
                    </div>
                    <div class="stat-card">
                        <h3>Rp ${monthlyRevenue.toLocaleString('id-ID')}</h3>
                        <p>Pendapatan Bulan Ini</p>
                    </div>
                </div>

                <h3>📊 Statistik Layanan</h3>
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Layanan</th>
                            <th>Jumlah Order</th>
                            <th>Total Pendapatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${Object.entries(serviceStats).map(([service, stats]) => `
                            <tr>
                                <td>${service}</td>
                                <td>${stats.count}</td>
                                <td>Rp ${stats.revenue.toLocaleString('id-ID')}</td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
            `;

            document.getElementById('modalContent').innerHTML = reportsHtml;
            document.getElementById('transactionModal').style.display = 'block';
        }

        // sepertinya tidak terpakai
        function updateTransactionStatus(transactionId) {
            const transaction = transactions.find(t => t.id === transactionId);
            if (!transaction) return;

            const statusOptions = [
                { value: '0', text: 'New' },
                { value: '1', text: 'Selesai' }
            ];

            const statusHtml = `
                <h2>📝 Update Status Transaksi</h2>
                <h3>${transaction.id} - ${transaction.customer.name}</h3>
                <p>Status saat ini: <span class="status-badge status-${transaction.status}">${getStatusText(transaction.status)}</span></p>

                <div class="form-group">
                    <label>Pilih Status Baru:</label>
                    <select id="newStatus" style="width: 100%; padding: 10px; margin: 10px 0;">
                        ${statusOptions.map(option => `
                            <option value="${option.value}" ${transaction.status === option.value ? 'selected' : ''}>
                                ${option.text}
                            </option>
                        `).join('')}
                    </select>
                </div>

                <div style="text-align: center; margin-top: 20px;">
                    <button class="btn btn-success" onclick="saveStatusUpdate('${transactionId}')">
                        ✅ Simpan Update
                    </button>
                    <button class="btn btn-danger" onclick="closeModal()" style="margin-left: 10px;">
                        ❌ Batal
                    </button>
                </div>
            `;

            document.getElementById('modalContent').innerHTML = statusHtml;
            document.getElementById('transactionModal').style.display = 'block';
        }

        function saveStatusUpdate(transactionId) {
            const newStatus = document.getElementById('newStatus').value;
            const transactionIndex = transactions.findIndex(t => t.id === transactionId);

            if (transactionIndex !== -1) {
                transactions[transactionIndex].status = newStatus;
                localStorage.setItem('laundryTransactions', JSON.stringify(transactions));
                updateTransactionHistory();
                updateStats();
                closeModal();
                alert('Status berhasil diupdate!');
            }
        }

        function closeModal() {
            document.getElementById('transactionModal').style.display = 'none';
        }

        function formatNumber(input) {
            // Replace comma with dot for decimal separator
            let value = input.value.replace(',', '.');

            // Ensure only valid decimal number
            if (!/^\d*\.?\d*$/.test(value)) {
                value = value.slice(0, -1);
            }

            // Update input value
            input.value = value;
        }

        function parseDecimal(value) {
            // Handle both comma and dot as decimal separator
            return parseFloat(value.toString().replace(',', '.')) || 0;
        }

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            updateTransactionHistory();
            updateStats();

            // Add event listener for weight input to handle decimal with comma
            const weightInput = document.getElementById('serviceWeight');
            weightInput.addEventListener('input', function() {
                formatNumber(this);
            });

            // Close modal when clicking outside
            window.onclick = function(event) {
                const modal = document.getElementById('transactionModal');
                if (event.target === modal) {
                    closeModal();
                }
            };
        });

        function addToCart() {
            const selectService = document.querySelector('#serviceType');
            const optionService = selectService.options[selectService.selectedIndex];
            const nameService = optionService.textContent;
            const idService = optionService.value;
            const priceService = parseInt(optionService.dataset.price);
            const weightValue = document.getElementById('serviceWeight').value;
            const weight = parseDecimal(weightValue);
            const notes = document.getElementById('notes').value;

            if (!nameService || !weightValue || weight <= 0) {
                alert('Mohon lengkapi semua field yang diperlukan!');
                return;
            }

            const subtotal = priceService * weight;

            const item = {
                id: Date.now(),
                idService: idService,
                service: nameService,
                weight: weight,
                price: priceService,
                subtotal: subtotal,
                notes: notes
            };

            cart.push(item);
            updateCartDisplay();

            // Clear form
            document.getElementById('serviceType').value = '';
            document.getElementById('serviceWeight').value = '';
            document.getElementById('notes').value = '';
        }

        // Update cart display to show decimal properly
        function updateCartDisplay() {
            const cartItems = document.getElementById('cartItems');
            const cartSection = document.getElementById('cartSection');
            const totalAmount = document.getElementById('totalAmount');

            if (cart.length === 0) {
                cartSection.style.display = 'none';
                return;
            }

            cartSection.style.display = 'block';

            let html = '';
            let total = 0;

            cart.forEach(item => {
                const unit = item.service.includes('Sepatu') ? 'pasang' :
                           item.service.includes('Karpet') ? 'm²' : 'kg';

                // Format weight to show decimal properly
                const formattedWeight = item.weight % 1 === 0 ?
                    item.weight.toString() :
                    item.weight.toFixed(1).replace('.', ',');

                html += `
                    <tr>
                        <td><input type="hidden" name="id_service[]" value="${item.idService}">${item.service}</td>
                        <td><input type="hidden" name="qty[]" value="${item.weight}">${formattedWeight} ${unit}</td>
                        <td>Rp ${item.price.toLocaleString('id-ID')}</td>
                        <td><input type="hidden" name="subtotal[]" value="${item.subtotal}">Rp ${item.subtotal.toLocaleString('id-ID')}</td>
                        <td>
                            <button class="btn btn-danger" onclick="removeFromCart(${item.id})" style="padding: 5px 10px; font-size: 12px;">
                                🗑️
                            </button>
                        </td>
                    </tr>
                `;
                total += item.subtotal;
            });

            cartItems.innerHTML = html;
            totalAmount.textContent = `Rp ${total.toLocaleString('id-ID')}`;
            document.getElementById('totalValue').value = total;

        }
    </script>
