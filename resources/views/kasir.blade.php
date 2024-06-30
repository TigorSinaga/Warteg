<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warteg</title>

    <link rel="stylesheet" href="css/kasir.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    @include('partial.navbar')

    <div class="container">
        <div class="wrapper-kasir">
            <!-- Header Section -->
            <div class="row mb-1 mt-1">
                <div class="col">
                    <h1>Belum Bayar</h1>
                </div>
            </div>

            <!-- Table Headers -->
            <div class="row row-cols-4 mb-2">
                <div class="col label-col">
                    <p>No Pesanan</p>
                </div>
                <div class="col label-col">
                    <p>Waktu Pesanan</p>
                </div>
                <div class="col label-col">
                    <p>Harga</p>
                </div>
                <div class="col label-col">
                    <p>Total</p>
                </div>
            </div>

            <!-- Data Rows (Example) -->
            <div class="row row-cols-4 mb-2">
                <div class="col">1234</div>
                <div class="col">10:30</div>
                <div class="col">Rp50.000</div>
                <div class="col">Rp50.000</div>
            </div>
            <div class="row row-cols-4 mb-2">
                <div class="col">5678</div>
                <div class="col">11:00</div>
                <div class="col">Rp30.000</div>
                <div class="col">Rp30.000</div>
            </div>

            <!-- Total Price Row -->
            <div class="row row-cols-4 mb-2">
                <div class="col fw-bold">Total Harga</div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col fw-bold" id="totalPrice">Rp3.000</div>
            </div>

            <!-- Payment Section -->
            <div class="row row-cols-4 mb-2">
                <div class="col">
                    <p>Membayar</p>
                </div>
                <div class="col">
                    <input type="number" class="form-control input-group" id="paymentAmount" placeholder="Nominal" oninput="calculateChange()">
                </div>
            </div>
            <div class="row row-cols-4 mb-2">
                <div class="col">
                    <p>Kembalian</p>
                </div>
                <div class="col">
                    <p id="changeAmount">Rp0</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="row btn-group">
                <div class="col">
                    <button type="button" class="btn btn-danger">Batal</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success">Selesai</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom Script -->
    <script>
        function calculateChange() {
            // Get the total price and payment amount
            const totalPriceText = document.getElementById('totalPrice').textContent;
            const totalPrice = parseInt(totalPriceText.replace('Rp', '').replace('.', ''));
            const paymentAmount = parseInt(document.getElementById('paymentAmount').value) || 0;

            // Calculate change
            const change = paymentAmount - totalPrice;
            document.getElementById('changeAmount').textContent = `Rp${Math.max(change, 0).toLocaleString()}`;
        }
    </script>
</body>

</html>
