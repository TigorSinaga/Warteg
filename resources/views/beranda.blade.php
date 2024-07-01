<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warteg</title>

    <link rel="stylesheet" href="css/beranda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navbar (Ganti dengan navbar Anda jika ada) -->
    @include('partial.navbar')

    <div class="container-fluid" id="con-beranda">
        <div class="row">
            <!-- Menu -->
            <div class="col-md-12">
                <div class="container" id="con-menu">
                    <!-- Makanan -->
                    <h4 class="mb-4">Menu Makanan</h4>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Example Card -->
                        <div class="col">
                            <div class="card">
                                <img src="img/OrekTempe.png" class="card-img-top" alt="Orek Tempe">
                                <div class="card-body">
                                    <h5 class="card-title">Orek Tempe</h5>
                                    <p class="card-text">Rp3.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate for other food items -->
                        <div class="col">
                            <div class="card">
                                <img src="img/Kikil.png" class="card-img-top" alt="Kikil">
                                <div class="card-body">
                                    <h5 class="card-title">Kikil</h5>
                                    <p class="card-text">Rp2.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/KentangBalado.png" class="card-img-top" alt="Kentang Balado">
                                <div class="card-body">
                                    <h5 class="card-title">Kentang Balado</h5>
                                    <p class="card-text">Rp3.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/ayamgoreng.png" class="card-img-top" alt="Ayam Goreng">
                                <div class="card-body">
                                    <h5 class="card-title">Ayam Goreng</h5>
                                    <p class="card-text">Rp7.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/mendoan.png" class="card-img-top" alt="Mendoan">
                                <div class="card-body">
                                    <h5 class="card-title">Mendoan</h5>
                                    <p class="card-text">Rp1.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/sop.png" class="card-img-top" alt="Sop">
                                <div class="card-body">
                                    <h5 class="card-title">Sop</h5>
                                    <p class="card-text">Rp2.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat for other items -->
                    </div>
                    <!-- Minuman -->
                    <h4 class="mb-4 mt-4">Menu Minuman</h4>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Example Card -->
                        <div class="col">
                            <div class="card">
                                <img src="img/esjeruk.png" class="card-img-top" alt="Es Jeruk">
                                <div class="card-body">
                                    <h5 class="card-title">Es Jeruk</h5>
                                    <p class="card-text">Rp3.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate for other drinks -->
                        <div class="col">
                            <div class="card">
                                <img src="img/KopiHitam.png" class="col-md-8 offset-md-2" alt="Kopi Hitam">
                                <div class="card-body">
                                    <h5 class="card-title">Kopi Hitam</h5>
                                    <p class="card-text">Rp5.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/Esteh.png" class="card-img-top" alt="Es Teh">
                                <div class="card-body">
                                    <h5 class="card-title">Es Teh</h5>
                                    <p class="card-text">Rp3.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-danger" onclick="decreaseQuantity(this)"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control text-center" value="0" readonly style="width: 50px;">
                                        <button class="btn btn-outline-primary" onclick="increaseQuantity(this)"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat for other items -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button to trigger modal -->
    <div class="container mt-4 mb-5 text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">
            Buat Pesanan
        </button>
    </div>

    <!-- Modal Konfirmasi Pesanan -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Keterangan Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Pesanan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody id="orderTableBody">
                            <!-- Rows will be inserted dynamically here -->
                        </tbody>
                    </table>
                    <hr>
                    <p>Total: <span id="totalPrice">Rp0</span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" onclick="submitOrder()">Konfirmasi Pesanan</button>
                </div>
            </div>
        </div>
    </div>
    
 <!-- Modal Sukses -->
 <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <i class="modal-check-icon fas fa-check-circle"></i>
                    <h5 class="mt-3">Pesanan Berhasil!</h5>
                    <p>Terima kasih telah memesan. Pesanan Anda akan segera diproses.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-DB7INRBk6Qyk9RmnD0G8m/hqNN1tPzJrZ2Q6L6t9FTm81A8S95XurSeGQ15EXZb0" crossorigin="anonymous"></script>
    <script>
        // Function to increase quantity
        function increaseQuantity(button) {
            const input = button.previousElementSibling;
            let value = parseInt(input.value);
            input.value = value + 1;
        }

        // Function to decrease quantity
        function decreaseQuantity(button) {
            const input = button.nextElementSibling;
            let value = parseInt(input.value);
            if (value > 0) {
                input.value = value - 1;
            }
        }

        // Function to update order summary
        function updateOrderSummary() {
            const orderTableBody = document.getElementById('orderTableBody');
            const cards = document.querySelectorAll('.card');
            let totalPrice = 0;

            orderTableBody.innerHTML = '';

            cards.forEach(card => {
                const quantityInput = card.querySelector('input[type="text"]');
                const quantity = parseInt(quantityInput.value);
                if (quantity > 0) {
                    const priceText = card.querySelector('.card-text').textContent;
                    const price = parseInt(priceText.replace('Rp', '').replace('.', ''));
                    totalPrice += price * quantity;

                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${card.querySelector('.card-title').textContent}</td>
                        <td>${quantity}</td>
                        <td>Rp${(price * quantity).toLocaleString()}</td>
                    `;
                    orderTableBody.appendChild(row);
                }
            });

            document.getElementById('totalPrice').textContent = `Rp${totalPrice.toLocaleString()}`;
        }

        // Function to submit the order
        function submitOrder() {
            const cards = document.querySelectorAll('.card');
            const orders = [];

            cards.forEach(card => {
                const quantityInput = card.querySelector('input[type="text"]');
                const quantity = parseInt(quantityInput.value);
                if (quantity > 0) {
                    const menu = card.querySelector('.card-title').textContent;
                    const priceText = card.querySelector('.card-text').textContent;
                    const price = parseInt(priceText.replace('Rp', '').replace('.', ''));

                    orders.push({
                        menu: menu,
                        quantity: quantity,
                        totalPrice: price * quantity
                    });
                }
            });

            if (orders.length > 0) {
                fetch('/orders', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ orders: orders })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message === 'Pesanan Berhasil!') {
                        // Close the order modal
                        const orderModal = bootstrap.Modal.getInstance(document.getElementById('orderModal'));
                        orderModal.hide();

                        // Show the success modal
                        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                    } else {
                        alert('Terjadi kesalahan. Coba lagi.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan. Coba lagi.');
                });
            } else {
                alert('Tidak ada pesanan untuk dikonfirmasi.');
            }
        }

        // Update order summary when the modal is shown
        document.getElementById('orderModal').addEventListener('shown.bs.modal', updateOrderSummary);


        function showPopup() {
            document.getElementById('popup').style.display = 'block';
        }

        function hidePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>

</body>

</html>