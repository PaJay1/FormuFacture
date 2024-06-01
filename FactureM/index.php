<!DOCTYPE html>
<html>

<head>
    <title>Facture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Facture</h1>
        <form action="http://localhost:3000/calculate" method="post">
            <label for="product">Nom du produit:</label>
            <input type="text" id="product" name="product" required><br>
            <label for="price">Prix:</label>
            <input type="number" id="price" name="price" required><br>
            <label for="quantity">Quantité:</label>
            <input type="number" id="quantity" name="quantity" required><br>
            <input type="submit" value="Calculer">
        </form>
    </div>
</body>

</html>