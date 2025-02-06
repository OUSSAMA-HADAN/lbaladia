<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable A4 Template</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        .container {
            width: 210mm;
            height: 297mm;
            padding: 20mm;
            border: 1px solid #000;
            box-sizing: border-box;
        }

        .header,
        .footer {
            text-align: center;
        }

        .content {
            margin-top: 20mm;
        }

        @media print {

            .btn,
            .mt-3 {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">

            <p class="d-flex justify-content-start">المملكة المغربية <br>
                وزارة الداخلية <br>
                ولاية جهة الشرق <br>
                عمالة وجدة أنكاد<br>
                جماعة وجدة<br>
                المديرية العامة للمحصالح</p>
            <h1>أمر بمهمة</h1>
        </div>
        <div class="content">
            <form action="" method="POST" class="text-right">
                @csrf
                @method('PUT')
                <table class="">
                    <thead>
                        <tr>
                            <td>
                                <label for="name">يتعين على السيد:</label>
                            </td>
                            <td>
                                <input type="text" value="{{ old('prenom' , $order->utilisateur->prenom) }}" class="form-control col-4" id="prenom" name="prenom" required>
                                <input type="text" value="{{ old('nom' , $order->utilisateur->nom) }}" class="form-control col-4" id="nom" name="nom" required>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
                            <td>
                                <label for="grade">الدرجة:</label>
                            </td>
                            <td>
                                <input type="text" class="form-control col-4" id="grade" name="grade" required>
                            </td>
                            
                        
                        </tr> --}}
                        <tr>
                            <td>
                                <label for="id_number">رقم بطاقة التعريف الوطنية:</label>
                            </td>
                            <td>
                                <input type="text" value="{{ old('cin' , $order->utilisateur->cin) }}" class="form-control col-4" id="cin" name="cin" required>
                            </td>
                
                        </tr>
                        <tr>
                            <td>
                                <label for="city">مدينة:</label>
                            </td>
                            <td>
                                <input type="text" value="{{ old('city' , $order->utilisateur->cin) }}" class="form-control col-4" id="city" name="city" required>
                            </td>
                
                        </tr>
                        {{-- <tr>
                            <td>
                    <label for="transport">وسيلة النقل:</label>
                            </td>
                            <td></td>
                
                        </tr> --}}
                        <tr>
                            <td></td>
                            <td></td>
                
                        </tr>
                    </tbody>
                </table>



                <div class="form-group d-flex">

                </div>


                <div class="form-group d-flex">
                </div>
                <div class="form-group d-flex">
                </div>
                <div class="form-group d-flex">
                </div>

                <div class="form-group d-flex">
                    <input type="text" class="form-control col-6" id="transport" name="transport" required>
                </div>
                <div class="form-group d-flex">
                    <label for="purpose">من أجل:</label>
                    <textarea class="form-control" id="purpose" name="purpose" rows="10" required></textarea>

                </div>
                
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button class="btn btn-secondary mt-3" onclick="printPage()">Print</button>
                

            </form>
        </div>

    </div>

    <script>
        function printPage() {
            window.print();
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
